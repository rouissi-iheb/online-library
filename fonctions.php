<?php
session_start();
include("base.php");

//fonctions sur la session 

function ajout_session($role,$id){
    $_SESSION["role"] = $role;
    $_SESSION["id"] = $id;
}

function verif_session_admin(){
    if(isset($_SESSION["role"])){
        if($_SESSION["role"] == "admin"){
            return true;
        }
    }
    return false;
}
function verif_session_client(){
    if(isset($_SESSION["role"])){
        if($_SESSION["role"] == "client"){
            return true;
        }
    }
    return false;
}
//fonctions sur le client
function login_client($con,$login,$pass){
    $query = "select * from client where login = '".$login."' and mdp = '".$pass."'";
    $result = mysqli_query($con,$query);
    $rows = mysqli_num_rows($result);
    if($rows>0){
        return true;
    }else{
        return false;
    }
}
function idClient($con,$login,$pass){
    $query = "select idclient from client where login = '".$login."' and mdp = '".$pass."'";
    $result = mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($result);
    return $result["idclient"];
}
function ajout_client($con,$nom,$login,$mdp){
    $query = "insert into client (nom,login,mdp) values ('".$nom."','".$login."','".$mdp."')";
    $result = mysqli_query($con,$query);
}
//logout commun
function logout(){
    unset($_SESSION["role"]);
    unset($_SESSION["id"]);
 }
//fonctions sur l'admin
function login_admin($con,$login,$pass){
    $query = "select * from admin where login = '".$login."' and mdp = '".$pass."'";
    $result = mysqli_query($con,$query);
    $rows = mysqli_num_rows($result);
    if($rows>0){
        return true;
    }else{
        return false;
    }
}

//fonctions sur les documents
function listDocuments($con){
    $query = "select * from document where etat='valid'";
    $result = mysqli_query($con,$query);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}
function listDocumentsEncours($con){
    $query = "select * from document where etat='encours'";
    $result = mysqli_query($con,$query);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}
function listDocumentsClientTelecharger($con,$idclient){
    $query = "select * from telechargement where idclient='".$idclient."'";
    $result = mysqli_query($con,$query);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}
function documentparid($con,$id){
    $query = "select * from document where iddocument='".$id."'";
    $result = mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($result);
    return $result;
}
function listDocumentsClientAjouter($con,$idclient){
    $query = "select * from document where idclient='".$idclient."'";
    $result = mysqli_query($con,$query);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}
function listDocumentsNonConfirmer($con){
    $query = "select * from document where etat<>'valid'";
    $result = mysqli_query($con,$query);
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
}
function ajout_document($con,$idclient,$titre,$genre,$nbpages,$autre,$chemin){
    $query = "insert into document(idclient,titre,genre,nbpages,autre,chemin,etat) values(".$idclient.",'".$titre."','".$genre."','".$nbpages."','".$autre."','".$chemin."','encours')";
    $result = mysqli_query($con,$query);
}
function admin_confirm_document($con,$iddoc,$etat,$repadmin){
    $query = "update document set etat = '".$etat."' , repadmin = '".$repadmin."' where iddocument = '".$iddoc."'";
    $result = mysqli_query($con,$query);
}
function document_download($con,$iddoc,$idclient){
    $query = "insert into telechargement(idclient,iddocument,date) values('".$idclient."','".$iddoc."','".time()."')";
    $result = mysqli_query($con,$query);
}
function cheminDocument($con,$id){
    $query = "select chemin from document where iddocument = '".$id."'";
    $result = mysqli_query($con,$query);
    $result = mysqli_fetch_assoc($result);
    return $result["chemin"];
}


?>