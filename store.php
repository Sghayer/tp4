<?php
include 'dbconnexion.php';
if (!empty($_POST)) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

}
$bd->exec("INSERT INTO students(firstname,lastname,email,phone) 
		   VALUES ('$firstname','$lastname','$email',$phone)");
header('Location: index.php');  //redirection
?>