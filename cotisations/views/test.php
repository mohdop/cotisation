<?php

//include"../cotisations/models/User.php";

require_once("../cotisations/models/User.php");

$user= new User();
$nom=$user->setNomUser("diop");
$prenom=$user->setPrenomUser("mohamed");
$login=$user->setEmail("diop@gmail.com");
$num=$user->setNum(263444272);
$pasword=$user->setPasssword(44272);
$user->inscription($nom,$prenom,$login,$num,$pasword);
