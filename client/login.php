<?php
include("../fonctions.php");
if(verif_session_client()){
    header("location:index.php");
}
$login = $_POST['login'];
$pass  = $_POST["mdp"];
if(login_client($conn,$login,$pass)){
    ajout_session("client",idClient($conn,$login,$pass));
    header("location:index.php");
}else{
    header("location:../login.php?error");
}



?>