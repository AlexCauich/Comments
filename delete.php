<?php 
    include('db.php');
        
    $id = $_GET['id'];
    $sql = "DELETE FROM comment WHERE id = $id";
    $db->query($sql);
    header('location: index.php');
    die();
?>

