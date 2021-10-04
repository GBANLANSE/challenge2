<?php
session_start();
$_bdd= new PDO('mysql:host=localhost;dbaname=espace_admin;', 'root', 'root');
if($_SESSION['mdp']){
header('Location: connexion.php');
}




if(isset($_POST['valider'])){
    if(!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['Email']) AND !empty($_POST['Date'])){
        if(!$_SESSION['mdp']){
        header('Location: index.php');
     }
        $Nom= htmlspecialchars($_POST['Nom']);
        $Prenom= htmlspecialchars($_POST['Prenom']);
        $Email= htmlspecialchars($_POST['Email']);
        $Date= htmlspecialchars($_POST['Date']);

        $insereMembres=$bdd->perpare('INSERT INTO membres(Nom, Prenom,Email, Date)VALUE(?, ?)');
        $insereMembres->execute(array($Nom, $Prenom, $Email, $Date));
        }else{
            echo"Membre a bien été enregistrer";
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
    <title>formulaire d'inscription</title>
</head>
<body>
    <form method="POST" action="">
    <form>
      <div class="form-group">
               <label for="nom">Nom</label> 
               <input id="nom" type="text" class="form-control" name="" placeholder="Entrer votre nom">
      </div>
      <div class="form-group">
               <label for="nom">Prenom</label> 
               <input id="prenom" type="text" class="form-control" name="" placeholder="Entrer votre prénom">
      </div>
      <div class="form-group">
               <label for="mail">Email</label> 
               <input id="mail" type="text" class="form-control" name="" placeholder="Entrer votre mail">
      </div>
      <div class="form-group">
               <label for="nom">Date </label> 
               <input id="date" type="text" class="form-control" name="" placeholder="Entrer votre la date d'aujourd'hui">
      </div>
 </form>
    </form>
</body>
</html>