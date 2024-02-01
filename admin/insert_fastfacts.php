<?php
require_once('./includes/db.php');

// Initialize variables
$page_id = $content = "";
$errors = [];

// Function to create the table if it doesn't exist
function createFastFactsTable($conn) {
    $tableName = 'fast_facts_table';
    $checkQuery = "SHOW TABLES LIKE '" . $tableName . "'";
    $result = $conn->query($checkQuery);

    if ($result) {
        if ($result->num_rows == 0) {
            $createQuery = "CREATE TABLE $tableName (
                id INT AUTO_INCREMENT PRIMARY KEY,
                pages_id INT NOT NULL,
                fast_facts_id INT NOT NULL,
                data JSON NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
                FOREIGN KEY (pages_id) REFERENCES pages(ID),
                FOREIGN KEY (fast_facts_id) REFERENCES fast_facts(ID)
            )";

            if ($conn->query($createQuery)) {
                return true; // Table created successfully
            } else {
                return false; // Handle table creation error
            }
        } else {
            return true; // Table already exists
        }
    } else {
        return false; // Handle query error
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $page_id = trim($_POST["page_id"]);
    if (empty($page_id) || !is_numeric($page_id)) {
        $errors["page_id"] = "Please enter a valid Page ID.";
    }

    $content = trim($_POST["content"]);
    if (empty($content)) {
        $errors["content"] = "Please enter the Fast Facts content.";
    }

    // Handle the table content
    if (isset($_POST["table_content"])) {
        $tableContent = json_decode($_POST["table_content"], true);
        
        // Check if the table data is valid (numeric or alphanumeric)
        $validTableContent = true;
        foreach ($tableContent as $row) {
            foreach ($row as $cell) {
                if (!is_numeric($cell) && !ctype_alpha($cell)) {
                    $validTableContent = false;
                    break;
                }
            }
        }
        
        if (!$validTableContent) {
            $errors["table_content"] = "Table content should be numeric or alphanumeric.";
        }
    } else {
        $errors["table_content"] = "Table content is missing.";
    }

    if (empty($errors)) {
        if (createFastFactsTable($conn)) {
            // Insert data into the fast_facts table
            $insertFastFactsQuery = "INSERT INTO fast_facts (pages_id, content) VALUES (?, ?)";
            $stmt = $conn->prepare($insertFastFactsQuery);
            $stmt->bind_param("is", $page_id, $content);

            if ($stmt->execute()) {
                $fastFactsId = $stmt->insert_id;

                // Insert data into the fast_facts_table
                $insertFastFactsTableQuery = "INSERT INTO fast_facts_table (pages_id, fast_facts_id, data) VALUES (?, ?, ?)";
                $stmt = $conn->prepare($insertFastFactsTableQuery);
                $stmt->bind_param("iis", $page_id, $fastFactsId, json_encode($tableContent));

                if ($stmt->execute()) {
                    header("Location: manage_fast_facts.php");
                    exit();
                } else {
                    $errors["database"] = "An error occurred while inserting data into fast_facts_table. Please try again.";
                }
            } else {
                $errors["database"] = "An error occurred while inserting data into fast_facts. Please try again.";
            }
        } else {
            $errors["database"] = "An error occurred while creating the fast_facts_table. Please try again.";
        }
    }
}
?>

    <!DOCTYPE html>
    <html>
    <head>
        <title>Add Fast Facts</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="custom.css">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <?php include 'sidebar.php'; ?>
        <div class="container mt-5">
            <h1>Add Fast Facts</h1>
            <form id="fastFactsForm" method="POST">
                <div class="form-group">
                    <label for="page_id">Select Page:</label>
                    <select class="form-control <?= isset($errors['page_id']) ? 'is-invalid' : '' ?>" id="page_id" name="page_id" required>
                        <option value="">Select Page ID</option>
                        <?php
                        $pageQuery = "SELECT ID, Country_name FROM pages";
                        $pageResult = $conn->query($pageQuery);

                        while ($row = $pageResult->fetch_assoc()) {
                            $pageID = $row['ID'];
                            $countryName = $row['Country_name'];
                            echo "<option value='$pageID'>$pageID - $countryName</option>";
                        }
                        ?>
                    </select>
                    <?php if (isset($errors['page_id'])) : ?>
                        <div class="invalid-feedback">
                            <?= $errors['page_id'] ?>
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
                <div class="form-group">
                    <label for="numRows">Number of Rows:</label>
                    <input type="number" class="form-control" id="numRows" name="numRows" required>
                </div>
                <div class="form-group">
                    <label for="numCols">Number of Columns:</label>
                    <input type="number" class="form-control" id="numCols" name="numCols" required>
                </div>
                <div id="tableContainer" class="mb-3"></div>
                <?php if (isset($errors['table_content'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $errors['table_content'] ?>
                    </div>
                <?php endif; ?>
                <?php if (isset($errors['database'])) : ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $errors['database'] ?>
                    </div>
                <?php endif; ?>
                <button type="button" class="btn btn-success" onclick="addTableToContent()"><i class="fas fa-table"></i> Add Table</button>
                <button type="submit" class="btn btn-primary">Add Fast Facts</button>
            </form>
        </div>
        <script>
            function addTableToContent() {
                var numRows = $('#numRows').val();
                var numCols = $('#numCols').val();

                var table = '<table class="table table-bordered">';
                var tableContent = [];

                for (var i = 0; i < numRows; i++) {
                    table += '<tr>';
                    var rowContent = [];

                    for (var j = 0; j < numCols; j++) {
                        var cellId = 'cell_' + i + '_' + j;
                        table += '<td contenteditable="true" id="' + cellId + '" name="' + cellId + '"></td>';
                        rowContent.push('');
                    }

                    table += '</tr>';
                    tableContent.push(rowContent);
                }

                table += '</table>';

                // Append the table to the tableContainer
                $('#tableContainer').html(table);

                // Store the table content as JSON for submission
                var tableContentField = $('<input type="hidden" name="table_content" />');
                tableContentField.val(JSON.stringify(tableContent));
                $('#fastFactsForm').append(tableContentField);
            }
        </script>
    </body>
    </html>
