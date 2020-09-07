<?php
include("../fonctions.php");
$id = $_GET["id"];
header("location:../documents/".cheminDocument($conn,$id));
?>