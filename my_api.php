<?php
  // Database Connection
  $servername = "localhost";
  $username = "nirajtamang";
  $password = "2065713";
  $database_name= "db_2065713";

  $conn = new mysqli($servername, $username, $password, $database_name);

// Error Handeling
if ($conn -> connect_error) {
    echo "Failed to connect to MySQL: " . $conn -> connect_error;
    exit();
}

// calling server
include('myServer.php');

// Executing SQL query
$sql = "SELECT *
FROM weather
ORDER BY weather_when DESC limit 1";

$result = $conn -> query($sql);

// Get data, convert to JSON and print
$row = $result -> fetch_assoc();
print(json_encode($row));

// Free result set and close connection
$result -> free_result();
$conn -> close();
?>