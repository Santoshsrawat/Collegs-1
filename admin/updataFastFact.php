<?php

$conn = mysqli_connect("localhost", "root", "", "college");


$id = $_POST['id'];
$content = $_POST['content'];
$pageId = $_POST['page_id'];

$query = "UPDATE `fast_facts` SET `content`='$content' ,`pages_id`='$pageId' WHERE `id`='$id'";

$result = mysqli_query($conn, $query);
if ($result) {
    header('Location: http://localhost/college/admin/manage_fast_facts.php');
} else {
    echo '<script>data not update....</script>';
}


?>