<?php
include("../fonctions.php");
if(verif_session_admin()){
    header("location:index.php");
}

$login = $_POST['login'];
$pass  = $_POST["mdp"];

if(login_admin($conn,$login,$pass)){
    ajout_session("admin","1");
    header("location:index.php");
}else{
    header("location:../admin.php?error");
}



?>