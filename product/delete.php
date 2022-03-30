<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE pro_id = $id";
    $query = mysqli_query($connect,$sql);
    header('location: index.php?page_layout=list');
?>