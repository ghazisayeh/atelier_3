<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">
    <title></title>
</head>
<body>
<div class="container">
<fieldset>
        <legend>
    Nouvel étudiant
        </legend>
        <?php include 'dbconnexion.php';
           $id =$_GET['id'];
        
            $rep= $cnx ->query("SELECT * FROM students WHERE id='$id'");
            $data = $rep->fetch();
        ?>
        <form action="update.php?id=<?= $data['id']?>" method="post">
    
            <div class="form-group">
                <label for="firstname"> Firstname </label>
                <input type="text" value="<?= $data['firstname']?>" name="firstname" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname"> Lastname </label>
                <input type="text" value="<?= $data['lastname']?>" name="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label for="Email"> Email </label>
                <input type="text" value="<?= $data['email']?>" name="email"class="form-control">
            </div>
            <div class="form-group">
                <label for="phone"> phone </label>
                <input type="text"  value="<?= $data['phone']?>" name="phone" class="form-control">
            </div>

            <div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
                <button type="reset" class="btn btn-secondary">Annuler</button>

            </div>

        </form>
    </fieldset>
</div>

<?php
    
?>

<!-- Latest compiled JavaScript -->
<script src="../bootstrap4/js/bootstrap.min.js"></script>
</body>
</html>