<?php
$firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];

            include 'dbconnexion.php';

            $nb = $cnx->exec("INSERT INTO students(firstname,lastname,email,phone) VALUES ('$firstname','$lastname','$email','$phone')");

            
            header('Location: http://localhost/dwcs/tp3/index.php');
            ?>