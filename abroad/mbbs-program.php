<?php
if (isset($_GET['country'])) {
    // Get the country name from the URL
    $countryName = $_GET['country'];

    // Database connection
    $mysqli = new mysqli("localhost", "root", "", "college");

    // Check connection
    if ($mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
    }

    // Query to fetch content for the specified country
    $query = "SELECT content FROM fast_facts WHERE pages_id = (SELECT ID FROM pages WHERE Country_name = ? AND Course_Name LIKE '%MBBS%')";

    if ($stmt = $mysqli->prepare($query)) {
        $stmt->bind_param("s", $countryName);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($content);
            $stmt->fetch();
            // Use nl2br to convert newlines to <br> tags
            $content = nl2br($content);

            // Check if the content contains a table
            $tableStartTag = "<table>";
            $tableEndTag = "</table>";
            if (strpos($content, $tableStartTag) !== false) {
                // Table data is present, extract and display it
                $tableStart = strpos($content, $tableStartTag);
                $tableEnd = strpos($content, $tableEndTag, $tableStart) + strlen($tableEndTag);
                $tableData = substr($content, $tableStart, $tableEnd - $tableStart);
                echo "<h3>Table Data:</h3>";
                echo $tableData;
            }
        } else {
            // Handle cases where content is not found
            $content = "No content available for MBBS in " . $countryName;
        }

        $stmt->close();
    } else {
        // Handle SQL query preparation error
        $content = "Error preparing SQL query.";
    }

    // Additional code to fetch and display data from fast_facts_table
    $tableQuery = "SELECT content FROM fast_facts_table WHERE 	Page_ID = (SELECT ID FROM pages WHERE Country_name = ? AND Course_Name LIKE '%MBBS%')";
    if ($stmt = $mysqli->prepare($tableQuery)) {
        $stmt->bind_param("s", $countryName);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            $stmt->bind_result($tableContent);
            $stmt->fetch();
            // Display the table content
            echo "<h3>Here is the detail of seat distribution of medical seats for SAARC countries - :</h3>";
            echo $tableContent;
        } else {
            // Handle cases where table data is not found
            echo "No table data available for MBBS in " . $countryName;
        }

        $stmt->close();
    } else {
        // Handle SQL query preparation error
        echo "Error preparing SQL query for table data.";
    }

    $mysqli->close();
} else {
    // Handle cases where the 'country' parameter is not set
    echo "Country not specified.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>MBBS in <?php echo $countryName; ?></title>
    <!-- Add Bootstrap CSS or any other CSS as needed -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2>MBBS in <?php echo $countryName; ?></h2>
        <div class="content-section">
            <?php echo $content; ?>
        </div>
    </div>
</body>
</html>
