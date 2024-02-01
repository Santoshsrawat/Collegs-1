<?php
// Add database connection details
$host = "localhost";
$username = "root";
$password = "";
$database = "college";

// Initialize database connection
$conn = new mysqli($host, $username, $password, $database);

// Check for database connection errors
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the record based on the provided ID
    $deleteQuery = "DELETE FROM `pages` WHERE `ID` = ?";

    if ($stmt = $conn->prepare($deleteQuery)) {
        $stmt->bind_param("i", $id);

        if ($stmt->execute()) {
            // Redirect back to the main page after deletion
            header("Location: addAbroadCountry.php"); // Replace "index.php" with the actual file name of your main page
            exit;
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}
