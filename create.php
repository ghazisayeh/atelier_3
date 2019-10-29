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
        <form action="store.php" method="post">
    
            <div class="form-group">
                <label for="firstname"> Firstname </label>
                <input type="text" placeholder="Firstname goes here" name="firstname" class="form-control">
            </div>
            <div class="form-group">
                <label for="lastname"> Lastname </label>
                <input type="text" placeholder="Lastname goes here" name="lastname" class="form-control">
            </div>
            <div class="form-group">
                <label for="Email"> Email </label>
                <input type="text" placeholder="name@exemple.com" name="email"class="form-control">
            </div>
            <div class="form-group">
                <label for="phone"> phone </label>
                <input type="text" placeholder="25684423" name="phone" class="form-control">
            </div>

            <div>
                <button type="submit"class="btn btn-primary">Enregistrer</button>
                <button type="reset"class="btn btn-primary">Annuler</button>

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