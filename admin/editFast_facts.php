<?php
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

// Initialize $row with default values
$row = ['id' => 0, 'pages_id' => 0, 'content' => ''];

// Check if the ID parameter is set in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the record for editing
    $selectQuery = "SELECT `id`, `content`, `pages_id` FROM `fast_facts` WHERE `ID` = ?";

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
    <title>Edit Fast Fact Recorde</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <?php include 'sidebar.php'; ?>

    <div class="container mt-5">
        <h2>Edit Fast Fact Recorde</h2>
        <form action="updataFastFact.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="form-group">
                <label for="countryName">Page Id:</label>
                <input type="number" class="form-control" id="countryName" name="page_id"
                    value="<?= $row['pages_id'] ?>">
            </div>
           
            <div class="form-group">
                <label for="courseName">Content :</label>
                <input type="text" class="form-control" id="courseName" name="content"
                    value="<?= $row['content'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Save Changes</button>
        </form>
    </div>
</body>

</html>