<?php
session_start();
$_bdd= new PDO('mysql:host=localhost;dbaname=espace_admin;', 'root', 'root');
if($_SESSION['mdp']){
header('Location: connexion.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>afficher les membres</title>
</head>
<body>
    <!-- afficher tous les membres-->
    <?php
    $recupUsers=$bdd->query('SELECT*FROM mebres');
    while( $user=$recupUsers->fetch()){
        ?>
        <p><?= $user['Nom']; ?></p> 
        <a href="bannir.php?id=<?= $user['id']; ?>
    </p>" style="color:red;text-decoration:none">Bannir le membre</a></p>
        <?php
    }
    ?>
    <!-- fin d afficher tous les membres --> 
</body>
</html>