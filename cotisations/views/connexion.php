<?php
  
  include("../cotisations/database/db.php");

  //on ouvre la session 
  session_start();

  //Si le bouton Se connecter est appuyé
  if(isset($_POST['connecter'])){
    //on definit l'encodage et on sécurise les données
    $num = htmlentities($_POST['num'],ENT_QUOTES,"UTF-8");
    $password = htmlentities($_POST['password'],ENT_QUOTES,"UTF-8");

  

    //on etablit la connexion
    $db = mysqli_connect($db_host,$db_username,$db_password,$db_name);

   //On verifie la connexion
    if(!$db){
    echo"Erreur de connexion a la base de donnée";
    } 
    else{
      // On pose la requete pour voir si les données existent
      $requete = mysqli_query($db,"SELECT * from User WHERE numTel='".$num."' and password='".$password."'");
      //si il y a un résultat, mysqli_num_rows() nous donnera alors 1
      //si mysqli_num_rows() retourne 0 c'est qu'il a trouvé aucun résultat
      if(mysqli_num_rows($requete)==0){
        echo"numero ou mot de passe incorrect";
      }
      else{
        $_SESSION['num'] = $num;
        echo"vous etes connecté";
        header("Location: passwordchange.php");
        exit();

      }  
    }
  }

 





?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/connexion.css">
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> 
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="img/usericon.png" id="icon" alt="User Icon" width="50"  />
    </div>

    <!-- Login Form -->
    <form method="post" action="">
      <input type="text" id="login" class="fadeIn second" name="num" placeholder="Veuillez inserer votre numero de telephone" required>
      <input type="password" id="password" class="fadeIn third " name="password" placeholder="Veuillez inserer votre mot de passe" required>
      <input type="submit" class="fadeIn fourth" name="connecter" value="Se connecter">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="recuperation.php">Mot de Passe Oublié?</a>
    </div>

  </div>
</div>
    
</body>
</html>