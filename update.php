<?php 

include('db.php');

$id = $_POST['id'];
$comment = $_POST['comment'];
$sql = "UPDATE comment SET comment= '$comment' WHERE id = $id";
$db->query($sql);
header('Location: index.php');
die();

?>