<?php
include 'sidebar.php';

// Define database connection details
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

    // Fetch the record for editing
    $selectQuery = "SELECT `ID`, `Country_name`, `Country_Img`, `Course_Name` FROM `pages` WHERE `ID` = ?";

    if ($stmt = $conn->prepare($selectQuery)) {
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        if (!$row) {
            echo "Record not found.";
            exit;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Record</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Edit Record</h2>
        <form action="update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $row['ID'] ?>">
            <div class="form-group">
                <label for="countryName">Country Name:</label>
                <input type="text" class="form-control" id="countryName" name="countryName" value="<?= $row['Country_name'] ?>">
            </div>
            <div class="form-group">
                <label for="imageUpload">Current Image:</label>
                <img src="data:image/jpeg;base64,<?= base64_encode($row['Country_Img']) ?>" width="100">
                <br>
                <label for="newImageUpload">New Image (if needed):</label>
                <input type="file" class="form-control-file" id="newImageUpload" name="newImageUpload">
            </div>
            <div class="form-group">
                <label for="courseName">Course Name:</label>
                <input type="text" class="form-control" id="courseName" name="courseName" value="<?= $row['Course_Name'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</body>
</html>
