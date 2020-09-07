<?php
include("../fonctions.php");
$rep = $_POST["rep"];
$id = $_POST["id"];
$reponse = $_POST["reponse"];
admin_confirm_document($conn,$id,$rep,$reponse);
header("location:confirm.php");
?>