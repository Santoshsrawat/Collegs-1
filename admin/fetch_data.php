<?php
// Establish a database connection
$mysqli = new mysqli("localhost", "root", "", "college");

// Check connection
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// Fetch data from the database
$query = "SELECT Country_name FROM pages WHERE Course_name = 'MBBS'";
$result = $mysqli->query($query);

$data = array();

while ($row = $result->fetch_assoc()) {
    $data[] = $row;
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($data);

// Close the database connection
$mysqli->close();
?>
