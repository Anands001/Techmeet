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
  $sql = "SELECT COUNT(DISTINCT tname) as count, DATE(created_at) as date
  FROM user
  WHERE created_at >= DATE_SUB(NOW(), INTERVAL 7 DAY)
  GROUP BY DATE(created_at);
";
  $result = $conn->query($sql);
  
  $data = array();
  if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
  } 
  else {
    // no data found
    $data[] = array("error" => "No data found.");
  }
  
  // Close the connection
  $conn->close();
  
  // Return the data as JSON
  header('Content-Type: application/json');
  echo json_encode($data);
?>