<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('partlist'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>
    <script type="text/javascript" src="jspdf.debug.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     <style>
        table.ex1 {
            empty-cells: hide;
        }
     </style>
</head>

    <header>
        <img src="../assets/img/partheader/img.png" style="width: 100%; height: 20%; object-fit: contain" alt="Header Image">
    </header>
<body class="container">
<!--<div id="table"></div>-->

<div class="alert alert-success d-flex align-items-center mt-4" role="alert">
    <svg class="bi flex-shrink-0 me-2" width="10" height="10" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
    <div>
        <h4>Registered Successfully</h4>
    </div>
</div>

<!--<input type="button" id="btnExport" value="Download" onclick="Export()" />-->
<a class="btn btn-outline-info ml-2 mb-3 d-print-none" href="#" onclick="javascript:window.print();" data-abc="true">Print</a>


<!-- <input type="button" id="btnExport" value="Export" /> -->

    <script type="text/javascript">
        $("body").on("click", "#btnExport", function () {
            html2canvas($('#partlist')[0], {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("cutomer-details.pdf");
                }
            });
        });
    </script>
<?php
include 'dbconnect.php';

     $clgname=$_GET['clg_name'];
     $dept=$_GET['dept'];

     $tname=null;
     $query="Select tname from user WHERE UPPER(user.clg_name) = UPPER('$clgname') AND UPPER(user.dept) = UPPER('$dept')";
    $results=mysqli_query($con,$query);
    if($results){
        while ($row=mysqli_fetch_assoc($results)){
            $tname=$row['tname'];
            break;
        }
    }

    $sql="Select count(event_id) as count from events";
    $result=mysqli_query($con,$sql);
    if($result){
        $row=mysqli_fetch_assoc($result);
        $c=$row['count'];
    }
    echo '<h5 class="text-uppercase mb-1 text-muted">College:&nbsp'.$clgname.'&nbsp&nbsp&nbsp Department:&nbsp'.$dept.'&nbsp&nbsp&nbsp Team Name:&nbsp'.$tname.'</h5>';
?>


<table class="table ex1 table-bordered" id="partlist">
    <thead class="thead-light">
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Reg No</th>
        <th scope="col">Events</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include 'dbconnect.php';

    $sql = "SELECT event_name FROM events";
    $result = mysqli_query($con, $sql);

    if ($result) {
        $events = array();

        while ($row = mysqli_fetch_assoc($result)) {
            $events[] = $row['event_name'];
        }

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
                echo '<tr><td>'.$participant['name'].'</td><td>'.$regno.'</td><td>'.implode(", ", $participant['events']).'</td></tr>';
            }
        }
    }
    ?>
    </tbody>
</table>

<!--table2-->
<?php
include 'dbconnect.php';

// start HTML table
echo '<table class="table ex1 table-bordered" id="partlist">';
echo '<thead class="thead-light">';
echo '<tr>';
echo '<th scope="col">Event Name</th>';
echo '<th scope="col">Registration Number</th>';
echo '<th scope="col">Name</th>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';

$sql="select event_name from events";
$result=mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $eid=$row['event_name'];

        $sql1="select user.std_name,user.std_regno,events.event_name from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) WHERE events.event_name='$eid' AND UPPER(user.clg_name)=UPPER('$clgname') AND UPPER(user.dept)=UPPER('$dept');";
        $sql2="select COUNT(user.std_name) as count from user JOIN (manage_events JOIN events USING(event_id)) USING(std_id) WHERE events.event_name='$eid' AND UPPER(user.clg_name)=UPPER('$clgname') AND UPPER(user.dept)=UPPER('$dept');";

        $result2=mysqli_query($con,$sql2);
        if($result2){
            $row2=mysqli_fetch_assoc($result2);
            $crow=$row2['count']+1;
        }

        $result1=mysqli_query($con,$sql1);

        if($result1){
            echo '<tr>';
            echo '<td rowspan="'.$crow.'">'.$eid.'</td>';
            while($row1=mysqli_fetch_assoc($result1)){
                $name=$row1['std_name'];
                $regno=$row1['std_regno'];
                echo '<td>'.$regno.'</td>';
                echo '<td>'.$name.'</td>';
                echo '</tr>';
                echo '<tr>';
            }
        }
    }
}

// end HTML table
echo '</tbody>';
echo '</table>';
?>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
</body>
</html