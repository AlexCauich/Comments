<?php

    include('db.php');

    if(isset($_POST['comment'])) {
        $comment = $_POST['comment'];
        $sql = "INSERT INTO comment(comment) VALUE('$comment')";
        $db->query($sql);
        header('Location: index.php');
        die();    
    }

    /*if(isset($_POST['comment'])) {
        $comment = $_POST['comment'];
        $query = "INSERT INTO comment(comment) VALUE('$comment')";
        $result = mysqli_query($db, $query);
        if(!$result){
            die('jQuery Failed. ');
        }
        echo 'Comment Added Successfully';
    }*/


    /*$comment = $_POST['comment'];
    $sql = "INSERT INTO comment(comment) VALUE('$comment')";
    $db->query($sql);
    header('Location: index.php');
    die();*/

?>