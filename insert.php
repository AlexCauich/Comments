<?php

    include('db.php');

    $comment = $_POST['comment'];
    $sql = "INSERT INTO comment(comment) VALUE('$comment')";
    $db->query($sql);
    header('Location: index.php');
    die();
    
?>