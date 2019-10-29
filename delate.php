<?php
    $id=$_GET['id'];

            include 'dbconnexion.php';

$nb_modifs = $cnx->exec("DELETE FROM students WHERE id='$id' "); 
header('Location: http://localhost/dwcs/tp3/index.php');
?>