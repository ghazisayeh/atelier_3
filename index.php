<?php
echo '<link rel="stylesheet" href="../bootstrap4/css/bootstrap.min.css">';
            include 'dbconnexion.php';
            echo'<h1 style="text-align:center"><strong>Students list</strong></h1><br><br><br>';
            echo '<div class="container">';
echo '<a href="create.php" class="btn btn-primary">Nouvel étudiant</a><br><br>';
$rep= $cnx ->query('SELECT * FROM students');
echo '<table class="table">';
echo '<thead class="thead-dark">';
echo '<tr>';
echo '<th scope="col">ID</th>';
echo '<th scope="col">Firstname</th>';
echo '<th scope="col">Lastname</th>';
echo '<th scope="col">Email</th>';
echo '<th scope="col">Phone</th>';
echo '<th scope="col">Opérations</th>';
echo '</tr>';
echo '</thead>';



while($data = $rep->fetch())
{   
    echo '<tr>';
    echo '<td scope="row">'.$data['id'].'</td>';
    echo '<td>'.$data['firstname'].'</td>';
    echo '<td>'.$data['lastname'].'</td>';
    echo '<td>'.$data['email'].'</td>';
    echo '<td>'.$data['phone'].'</td>';
    echo '<td><a href="edit.php?id='.$data['id'].'" class="btn btn-primary">Editer</a>
    <a href="delate.php?id='.$data['id'].'" class="btn btn-primary">Supprimer</a>
    </td>'; 
        echo '</tr>';
}
echo '</table>';
echo '</div>';
echo '<!-- Latest compiled JavaScript -->
<script src="../bootstrap4/js/bootstrap.min.js"></script>';
?>