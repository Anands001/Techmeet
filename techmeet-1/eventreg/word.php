<?php
include 'dbconnect.php';
require_once 'vendor/PHPWord/bootstrap.php'; // include PHPWord library

// create PHPWord object
$phpWord = new \PhpOffice\PhpWord\PhpWord();

// add a section
$section = $phpWord->addSection();

// add a table
$table = $section->addTable('partlist');

// add table headers
$table->addRow();
$table->addCell(5000)->addText('Name');
$table->addCell(5000)->addText('Reg No');
$table->addCell(5000)->addText('Events');

// fetch data from the database
$sql = "SELECT std_name, std_regno, event_name FROM user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) WHERE UPPER(user.clg_name) = UPPER('$clgname') AND UPPER(user.dept) = UPPER('$dept')";
$result = mysqli_query($con, $sql);

if ($result) {
    $participants = array();

    while ($row = mysqli_fetch_assoc($result)) {
        $regno = $row['std_regno'];
        $participants[$regno]['name'] = $row['std_name'];
        $participants[$regno]['events'][] = $row['event_name'];
    }

    foreach ($participants as $regno => $participant) {
        $row = $table->addRow();
        $row->addCell(5000)->addText($participant['name']);
        $row->addCell(5000)->addText($regno);
        $row->addCell(5000)->addText(implode(", ", $participant['events']));
    }
}

// create a Word file
$objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
$objWriter->save('participant_list.docx');

// output the Word file
header("Content-Disposition: attachment; filename='participant_list.docx'");
readfile('participant_list.docx');
?>
