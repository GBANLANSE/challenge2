<?php
session_start();
$_bdd= new PDO('mysql:host=localhost;dbaname=espace_admin;', 'root', 'root'); 
if(isset($_GET['id']) AND !empty($_GET['id'])) {
    $getid=$_GET['id']
    $recupUsers=$bdd->prepare('SELECT*FROM mebres WERE id=?');
    $recupUser->execute(array($getid))
    if($recupeUser->rowcount() > 0){
        $bannirUser = $bdd->prepare('DELETE FROM membres WERE id=?');
        $bannirUser->execute(array($getid));

        header('Location: membres.php');
    }else{
        echo"Aucun membre n'a été trouver";
    }
    }else{
        echo"l'identifiant n'a été trouver";
    }
    
?>
