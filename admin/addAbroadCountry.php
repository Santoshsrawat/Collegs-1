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

// Check if the form was submitted for inserting records
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission and database insertion
    $countryName = $_POST['countryName'];
    $courseName = $_POST['courseName'];
    $image = file_get_contents($_FILES['imageUpload']['tmp_name']);

    // SQL query to insert data into the 'pages' table
    $insertQuery = "INSERT INTO `pages` (`Country_name`, `Country_Img`, `Course_Name`) VALUES (?, ?, ?)";

    if ($stmt = $conn->prepare($insertQuery)) {
        $stmt->bind_param("sss", $countryName, $image, $courseName);

        if ($stmt->execute()) {
            echo "Data inserted successfully.";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error: " . $conn->error;
    }
}

// Display the records with options to edit and delete
$selectQuery = "SELECT `ID`, `Country_name`, `Course_Name` FROM `pages`";
$result = $conn->query($selectQuery);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload and Display Image</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>Upload and Display Image</h2>

        <!-- Display the upload form -->
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="countryName">Country Name:</label>
                <input type="text" class="form-control" id="countryName" name="countryName">
            </div>
            <div class="form-group">
                <label for="imageUpload">Upload Image:</label>
                <input type="file" class="form-control-file" id="imageUpload" name="imageUpload">
            </div>
            <div class="form-group">
                <label for="courseName">Course Name:</label>
                <input type="text" class="form-control" id="courseName" name="courseName">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

        <!-- Display the records in a table with edit and delete options -->
        <?php if ($result->num_rows > 0) { ?>
            <table class="table">
                <thead>
                    <tr>
                        <th>Country Name</th>
                        <th>Course Name</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = $result->fetch_assoc()) { ?>
                        <tr>
                            <td><?= $row["Country_name"] ?></td>
                            <td><?= $row["Course_Name"] ?></td>
                            <td>
                                <a href="editAbroad.php?id=<?= $row["ID"] ?>" class="btn btn-primary">Edit</a>
                                <a href="deleteAbroad.php?id=<?= $row["ID"] ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        <?php } else {
            echo "No records found.";
        } ?>
    </div>
</body>
</html>

<?php
// Close the database connection
$conn->close();
?>
