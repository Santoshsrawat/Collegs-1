<?php
require_once('./includes/db.php');

// Fetch Fast Facts data
$selectQuery = "SELECT id, pages_id, content FROM fast_facts";
$result = $conn->query($selectQuery);

$fastFacts = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $fastFacts[] = $row;
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Manage Fast Facts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="custom.css">
</head>

<body>
    <?php include 'sidebar.php' ?>
    <div class="container mt-5">
        <h1>Manage Fast Facts</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Page ID</th>
                    <th>Content</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($fastFacts as $fact): ?>
                    <tr>
                        <td>
                            <?= $fact['id'] ?>
                        </td>
                        <td>
                            <?= $fact['pages_id'] ?>
                        </td>
                        <td>
                            <?= $fact['content'] ?>
                        </td>
                        <td>
                            <a href="editFast_facts.php?id=<?= $fact['id'] ?>" class="btn btn-primary btn-sm">Edit</a>
                            <a href="delete_fastfacts.php?id=<?= $fact['id'] ?>" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>