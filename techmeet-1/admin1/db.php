<?php
  // Connect to the database
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "techmeet";
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  } 
  
  // Fetch the data from the database
  $sql = "SELECT events.event_name, COUNT(DISTINCT user.tname) as count
FROM manage_events 
INNER JOIN events ON manage_events.event_id=events.event_id 
INNER JOIN user ON manage_events.std_id=user.std_id 
WHERE events.STATUS='IN' AND YEAR(user.created_at) = YEAR(CURDATE())
GROUP BY events.event_name;

";
  $result = $conn->query($sql);
  
  $data1 = array();
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data1[] = $row;
    }
  } 
  else {
    // no data found
    $data1[] = array("error" => "No data found.");
  }
  
  // Close the connection
  $conn->close();
  
  // Return the data as JSON
  header('Content-Type: application/json');
  echo json_encode($data1);
?>