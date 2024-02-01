<?php

$conn = mysqli_connect("localhost", "root", "", "college");

$backgroundColor = $_POST['background-color'];
$textColor = $_POST['text_color'];
$logo = $_FILES['logo'];

$image = $_FILES['logo']['tmp_name'];

$imageData = file_get_contents($image);
$imageData = mysqli_real_escape_string($conn, $imageData);


// You don't need to use a WHERE clause in an INSERT query
$query = "UPDATE `navbar` SET `text_color` = '$textColor', `background-color` = '$backgroundColor',`logo`='$imageData' WHERE `id` = 2";

$result = mysqli_query($conn, $query);

if ($result) {
    header("Location: http://localhost/collegs");
} else {
    echo "Data not updated...";
}

?>