<?php
require_once('../includes/db.php');

// Initialize variables
$pages_id = $content = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate pages_id
    $pages_id = trim($_POST["pages_id"]);
    if (empty($pages_id) || !is_numeric($pages_id)) {
        $errors["pages_id"] = "Please enter a valid Page ID.";
    }

    // Check if the "content" key exists in the $_POST array
    if (isset($_POST["content"])) {
        // Validate content
        $content = trim($_POST["content"]);
        if (empty($content)) {
            $errors["content"] = "Please enter the Fast Facts content.";
        }
    }

    // If there are no errors, insert the data into the database
    if (empty($errors)) {
        $insertQuery = "INSERT INTO fast_facts (pages_id, content) VALUES (?, ?)";

        if ($stmt = $conn->prepare($insertQuery)) {
            $stmt->bind_param("is", $pages_id, $content);

            if ($stmt->execute()) {
                // Successfully inserted
                header("Location: manage_fast_facts.php"); // Redirect to the management page
                exit();
            } else {
                $errors["database"] = "An error occurred while inserting data. Please try again.";
            }
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Fast Facts</title>
    <!-- Add Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your custom CSS if needed -->
    <link rel="stylesheet" href="custom.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Add Fast Facts</h1>
        <form action="insert_fastfacts.php" method="POST">
            <div class="form-group">
                <label for="pages_id">Page ID:</label>
                <input type="number" class="form-control <?= isset($errors['pages_id']) ? 'is-invalid' : '' ?>" id="pages_id" name="pages_id" value="<?= $pages_id ?>" required>
                <?php if (isset($errors['pages_id'])) : ?>
                    <div class="invalid-feedback">
                        <?= $errors['pages_id'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control <?= isset($errors['content']) ? 'is-invalid' : '' ?>" id="content" name="content" rows="4" required><?= $content ?></textarea>
                <?php if (isset($errors['content'])) : ?>
                    <div class="invalid-feedback">
                        <?= $errors['content'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php if (isset($errors['database'])) : ?>
                <div class="alert alert-danger" role="alert">
                    <?= $errors['database'] ?>
                </div>
            <?php endif; ?>
            <button type="submit" class="btn btn-primary">Add Fast Facts</button>
        </form>
    </div>
</body>
</html>
