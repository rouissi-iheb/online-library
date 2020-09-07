<?php
include("../fonctions.php");
$nom   = $_POST["nom"];
$login = $_POST["login"];
$mdp   = $_POST["mdp"];
ajout_client($conn,$nom,$login,$mdp);
header("location:../login.php");
?>