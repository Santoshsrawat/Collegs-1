<?php
require_once('./includes/db.php');

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $page_id = trim($_POST["page_id"]);
    $content = trim($_POST["content"]);
    $table_content = trim($_POST["table_content"]);

    if (empty($page_id) || !is_numeric($page_id)) {
        $errors["page_id"] = "Please enter a valid Page ID.";
    }

    if (empty($content)) {
        $errors["content"] = "Please enter the Fast Facts content.";
    }

    // You can add more validation as needed

    if (empty($errors)) {
        // Insert data into your database
        $insertQuery = "INSERT INTO fast_facts (pages_id, content) VALUES (?, ?)";
        if ($stmt = $conn->prepare($insertQuery)) {
            $stmt->bind_param("is", $page_id, $content);
            if ($stmt->execute()) {
                $fastFactsId = $stmt->insert_id;

                // Handle the table content (you can insert it into the database or process it as needed)
                // For demonstration purposes, we'll echo the table content
                echo "Fast Facts ID: " . $fastFactsId . "<br>";
                echo "Table Content: " . $table_content;
            } else {
                $errors["database"] = "An error occurred while inserting data. Please try again.";
            }
        }
    }
}
?>
