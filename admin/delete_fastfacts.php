<?php
require_once('./includes/db.php');

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Perform the content deletion
    $deleteQuery = "DELETE FROM fast_facts WHERE id = $id";
    $result = $conn->query($deleteQuery);

    if ($result === TRUE) {
        // Deletion successful
        header("Location: manage_fast_facts.php"); 
        exit;
    } else {
    
        echo "Error deleting content: " . $conn->error;
    }
} else {
   
    echo "Invalid ID provided for deletion.";
}
?>
