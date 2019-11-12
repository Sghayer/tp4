<?php
require 'dbconnexion.php';
$id = $_POST['id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$phone = $_POST['phone'];

$update = $bd->prepare("UPDATE students SET firstname =:param_firstname, lastname =:param_lastname , email = :param, phone = :param_email, WHERE id =param_id");
$update->bindParam(':param_firstname',$firstname);
$update->bindParam(':param_lastname',$lastname);
$update->bindParam(':param_email',$email);
$update->bindParam(':param_phone',$phone);
$update->bindParam(':param_id',$id);
$update->execute();
header('Location: index.php');  //redirection
        ?>
