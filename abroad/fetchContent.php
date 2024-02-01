<?php
// Define database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "college";

// Initialize database connection
$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['pagesId'])) {
    $pagesId = $_POST['pagesId'];

    // Fetch content based on pages_id
    $selectQuery = "SELECT `content` FROM `fast_facts` WHERE `pages_id` = ?";

    if ($stmt = $conn->prepare($selectQuery)) {
        $stmt->bind_param("i", $pagesId);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if ($row) {
            // Preserve formatting and line breaks using nl2br
            echo nl2br($row['content']);
        } else {
            echo "Content not found for the specified Page ID.";
        }
    }
}
?>
