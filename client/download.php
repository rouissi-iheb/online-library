<?php
include("../fonctions.php");
$id = $_GET["id"];
if(!isset($_GET["old"])){
    document_download($conn,$id,$_SESSION["id"]);
}
header("location:../documents/".cheminDocument($conn,$id));
?>