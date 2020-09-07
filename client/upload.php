<?php
include("../fonctions.php");
$titre = $_POST["titre"];
$genre = $_POST["genre"];
$nbpages = $_POST["nbpages"];
$autre = $_POST["autre"];

print_r($_FILES);
$upfile = $_FILES["file"]["tmp_name"];
$savelocation = "../documents/".md5(time()).".".pathinfo($_FILES["file"]["name"])['extension'];
move_uploaded_file($upfile,$savelocation);
var_dump(ajout_document($conn,$_SESSION["id"],$titre,$genre,$nbpages,$autre,$savelocation));
header("location:mydocuments.php");


?>