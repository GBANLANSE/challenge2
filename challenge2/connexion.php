<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut="admin";
        $mdp_par_defaut="admin1234";
        $pseudo_saisi= htmlspecialchars($_POST['pseudo']);
        $mdp_saisi= htmlspecialchars($_POST['mdp']);
        
        if($pseudo_saisi==$pseudo_par_defaut AND $mdp_saisi==$mdp_par_defaut){
            $_SESSION['mdp']=$mdp_saisi;
            header('Location: index.php');
        }else{
            echo"votre speudo ou votre mot de passe est incorrect";
        }
    }else{
        echo"veuiller compléter tous champs..."; 
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="" align="center">
    <input type="text" name="pseudo" autocomplete="off">
    <br>
    <input type="password" name="mdp">
    <br><br>
    <input type="submit" name="valider">
    </form>
</body>
</html>