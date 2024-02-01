<?php
require_once('./admin/includes/db.php');

// Fetch unique Page_ID values from the database
$sql = 'SELECT DISTINCT Page_ID FROM `fast_facts_table`';
$result = $conn->query($sql);

$pageIds = [];
while ($row = $result->fetch_assoc()) {
    $pageIds[] = $row['Page_ID'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Your head content here -->
    <style>
        table {
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <h1>Table Content for Different Page IDs</h1>

        <?php if (empty($pageIds)): ?>
            <p>No Page IDs found in the database.</p>
        <?php else: ?>
            <?php foreach ($pageIds as $pageId): ?>
                <h2>Table Content for Page ID: <?php echo $pageId; ?></h2>

                <?php
                // Retrieve the table data from the database for the selected Page ID
                $sql = "SELECT Table_Content FROM `fast_facts_table` WHERE Page_ID = $pageId";
                $result = $conn->query($sql);

                // Check if there are any rows
                $tableData = [];
                while ($row = $result->fetch_assoc()) {
                    $tableContent = json_decode($row['Table_Content'], true);
                    $tableData[] = is_array($tableContent) ? $tableContent : [];
                }

                // Display the table content for this Page ID
                if (!empty($tableData)) {
                    echo '<table class="table">';
                    foreach ($tableData as $table) {
                        echo '<tbody>';
                        foreach ($table as $innerRow) {
                            echo '<tr>';
                            foreach ($innerRow as $cellValue) {
                                echo '<td style="border: 2px solid;">' . $cellValue . '</td>';
                            }
                            echo '</tr>';
                        }
                        echo '</tbody>';
                    }
                    echo '</table>';
                }
                ?>
            <?php endforeach;
            // Close the result object after using it
            $result->close();
            ?>
        <?php endif; ?>
    </div>
</body>
</html>
