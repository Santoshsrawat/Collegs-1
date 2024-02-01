<?php
require_once './admin/includes/db.php';
require_once './connection/config.php';

$errors = [];
$page_id = $content = $numRows = $numCols = '';
$table_content = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $page_id = $_POST['page_id'];
    $content = $_POST['content'];
    $numRows = $_POST['numRows'];
    $numCols = $_POST['numCols'];

    if (empty($page_id)) {
        $errors['page_id'] = 'Please select a page ID.';
    }
    if (empty($content)) {
        $errors['content'] = 'Please enter content.';
    }
    if (empty($numRows)) {
        $errors['numRows'] = 'Please enter the number of rows.';
    }
    if (empty($numCols)) {
        $errors['numCols'] = 'Please enter the number of columns.';
    }

    if (empty($errors)) {
        // Extract and format table content
        $table_content = [];

        for ($i = 1; $i <= $numRows; $i++) {
            $row = [];

            for ($j = 0; $j < $numCols; $j++) {
                $cellId = 'cell' . $i . '_' . $j;
                $cellValue = $_POST[$cellId];
                $row[] = $cellValue;
            }

            $table_content[] = $row;
        }

        // Convert the table content to JSON
        $table_content_json = json_encode($table_content);

        // Save the data to the database
        $sql = 'INSERT INTO fast_facts_table (Page_ID, Content, Table_Content) VALUES (?, ?, ?)';
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('iss', $page_id, $content, $table_content_json);

        if ($stmt->execute()) {
            header('Location: index.php');
            exit();
        } else {
            $errors['database'] = 'An error occurred while saving the data to the database.';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content here -->
</head>
<body>
    <div class="container mt-5">
        <h1>Add Fast Facts</h1>
        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger" role="alert">
                <?php echo implode(' ', $errors); ?>
            </div>
        <?php endif; ?>
        <form id="fastFactsForm" method="POST">
            <div class="form-group">
                <label for="page_id">Select Page:</label>
                <select class="form-control" id="page_id" name="page_id" required>
                    <!-- Add options for selecting a page ID -->
                    <option value="1">Page 1</option>
                    <option value="2">Page 2</option>
                    <!-- Add more options as needed -->
                </select>
                <?php if (isset($errors['page_id'])): ?>
                    <div class="invalid-feedback">
                        <?= $errors['page_id'] ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="content">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="4" required><?php echo $content; ?></textarea>
            </div>
            <div>
                <label for="numRows">Number of Rows:</label>
                <input type="number" id="numRows" name="numRows" required>
            </div>
            <div>
                <label for="numCols">Number of Columns:</label>
                <input type="number" id="numCols" name="numCols" required>
            </div>
            <div id="table-container">
                <!-- Table will be generated here -->
            </div>
            <div>
                <button type="button" onclick="createDynamicTable()">Create Table</button>
                <button type="button" onclick="submitForm()">Submit</button>
            </div>
        </form>
    </div>
    <script>
        function createDynamicTable() {
            var numRows = parseInt(document.getElementById("numRows").value);
            var numCols = parseInt(document.getElementById("numCols").value);

            // Create a table element
            var table = document.createElement("table");

            // Create table headers (table row and table headers)
            var headerRow = table.insertRow(0);
            for (var j = 0; j < numCols; j++) {
                var header = headerRow.insertCell(j);
                header.innerHTML = "Column " + (j + 1);
            }

            // Create table data (rows and cells with input fields)
            for (var i = 1; i <= numRows; i++) {
                var row = table.insertRow(i);
                for (var j = 0; j < numCols; j++) {
                    var cell = row.insertCell(j);
                    var input = document.createElement("input");
                    input.type = "text";
                    input.name = "cell" + i + "_" + j;
                    cell.appendChild(input);
                }
            }

            // Add the table to the table-container div
            var tableContainer = document.getElementById("table-container");
            tableContainer.innerHTML = "";
            tableContainer.appendChild(table);
        }

        function submitForm() {
            document.getElementById("fastFactsForm").submit();
        }
    </script>
</body>
</html>
