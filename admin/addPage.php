<?php
include 'sidebar.php';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dynamic Web Page Creator</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Link to Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Your custom CSS styles -->
    <style>
        .draggable {
            cursor: move;
        }
        .element-container {
            margin-top: 20px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .editable-cell {
            border: 1px solid #ccc;
            padding: 5px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <div class="container mt-3">
        <h1>Create and Edit Page Elements</h1>
        <div class="row mt-3">
            <div class="col-md-2">
                <button class="btn btn-success mb-3" onclick="addTitle()"><i class="fas fa-heading"></i> Add Title</button>
                <button class="btn btn-success mb-3" onclick="addTextArea()"><i class="fas fa-font"></i> Add Text Area</button>
                <button class="btn btn-success mb-3" onclick="addImage()"><i class="fas fa-image"></i> Add Image</button>
                <button class="btn btn-success mb-3" onclick="addTable()"><i class="fas fa-table"></i> Add Table</button>
                <button class="btn btn-success mb-3" onclick="addList()"><i class="fas fa-list"></i> Add List</button>
            </div>
            <div class="col-md-10">
                <div class="form-group draggable" draggable="true" ondragstart="drag(event)">
                    <label for="pageTitle">Title:</label>
                    <input type="text" id="pageTitle" class="form-control">
                </div>
                <div class="form-group draggable" draggable="true" ondragstart="drag(event)">
                    <label for="textArea">Text Area:</label>
                    <textarea id="textArea" class="form-control" rows="4"></textarea>
                </div>
                <div id="pageElements" class="draggable" draggable="true" ondragstart="drag(event)"></div>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-md-12">
                <button class="btn btn-primary" onclick="createView()"><i class="fas fa-eye"></i> View Page</button>
                <button class="btn btn-success" onclick="savePage()"><i class="fas fa-save"></i> Save Page</button>
            </div>
        </div>
        <div id="output" class="element-container mt-4"></div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
        function addTitle() {
            var titleContainer = document.getElementById('pageElements');
            var title = document.createElement('h1');
            title.innerHTML = document.getElementById('pageTitle').value;
            titleContainer.appendChild(title);
        }

        function addTextArea() {
            var textContainer = document.getElementById('pageElements');
            var text = document.createElement('p');
            text.innerHTML = document.getElementById('textArea').value;
            textContainer.appendChild(text);
        }

        function addImage() {
            var imageContainer = document.getElementById('pageElements');
            var imageUrl = prompt('Enter the image URL:');
            if (imageUrl) {
                var img = document.createElement('img');
                img.src = imageUrl;
                img.className = 'img-fluid';
                imageContainer.appendChild(img);
            }
        }

        function addTable() {
            var tableContainer = document.getElementById('pageElements');
            var table = document.createElement('table');
            table.className = 'table table-bordered';

            var rows = parseInt(prompt('Enter the number of rows:'));
            var cols = parseInt(prompt('Enter the number of columns:'));

            for (var i = 0; i < rows; i++) {
                var row = table.insertRow(i);
                for (var j = 0; j < cols; j++) {
                    var cell = row.insertCell(j);
                    var cellContent = document.createElement('div');
                    cellContent.className = 'editable-cell';
                    cellContent.contentEditable = 'true';
                    cellContent.addEventListener('blur', function () {
                        // Update the cell content when it loses focus (blur event)
                        cell.textContent = cellContent.textContent;
                    });
                    cell.appendChild(cellContent);
                }
            }

            tableContainer.appendChild(table);
        }

        function addList() {
            var listContainer = document.getElementById('pageElements');
            var list = document.createElement('ul');

            var numItems = parseInt(prompt('Enter the number of list items:'));

            for (var i = 0; i < numItems; i++) {
                var listItem = document.createElement('li');
                listItem.innerHTML = `List Item ${i + 1}`;
                list.appendChild(listItem);
            }

            listContainer.appendChild(list);
        }

        function createView() {
            var outputContainer = document.getElementById('output');
            outputContainer.innerHTML = document.getElementById('pageElements').innerHTML;
        }

        function drag(event) {
            event.dataTransfer.setData("text", event.target.id);
        }

        function savePage() {
            var htmlContent = document.getElementById('output').innerHTML;
            // Send the HTML content to the server for saving (you need to implement server-side logic here)
            $.post('save_page.php', { htmlContent: htmlContent }, function(response) {
                alert(response);
            });
        }
    </script>
</body>
</html>

