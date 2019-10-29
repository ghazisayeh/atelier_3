<?php
    $id=$_GET['id'];
    $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            include 'dbconnexion.php';

$nb_modifs = $cnx->exec("UPDATE students SET firstname='$firstname',lastname='$lastname',email='$email',phone='$phone'
 WHERE id='$id' "); 
header('Location: http://localhost/dwcs/tp3/index.php');
?>