<?php 
require 'dbconnexion.php';
$id = $_GET['id'];
$update = $bd->prepare("DELETE FROM students WHERE id=".$id);
$update->execute();
header('Location: index.php');  //redirection

 ?>