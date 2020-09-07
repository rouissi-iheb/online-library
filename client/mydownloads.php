<?php
include("../fonctions.php");
if(!verif_session_client()){
header("location:../login.php");
}
?>
<html>
<head>
        <link href="../css/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/bootstrap.min.css">
        <link rel="stylesheet" href="../css/style.css">
        <style>
            body{
                color:white;
            }
        </style>
    </head>
    <body>
    <header id="header" class="header-transparent">
    <div class="container">

    <div id="logo" class="pull-left">
        <a href="index.php">Home</a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="index.php">Documents Disponible</a></li>
          <li><a href="ajoutdoc.php">Ajouter Document</a></li>
          <li><a href="mydownloads.php">Mes Telechargements</a></li>
          <li><a href="mydocuments.php">Mes Documents</a></li>
          <li><a href="logout.php">Deconnexion</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <br><br><br>
        <div class="container" style="background-color: rgba(12, 12, 10, 0.4);">
            <div class="row">
                <div class="col-sm-12">
                    <center>
                        <h2>Mes Telechargements</h2>
                    </center>
                    <br><br>
                    <div class="col-sm-12" >
                        <table class="table" style="color:white">
                            <tr>
                                <td>Titre</td>
                                <td>Genre</td>
                                <td>Nombre de pages</td>
                                <td>autre</td>
                                <td>date telechargement</td>
                                <td>telechargement</td>
                            </tr>

                            <?php
                                
                                
                                foreach(listDocumentsClientTelecharger($conn,$_SESSION["id"]) as $doc){
                                    $det = documentparid($conn,$doc["iddocument"]);
                                    echo '
                                    <tr>
                                        <td>'.$det["titre"].'</td>
                                        <td>'.$det["genre"].'</td>
                                        <td>'.$det["nbpages"].'</td>
                                        <td>'.$det["autre"].'</td>
                                        <td>'.date("Y-m-d h:i:s",$doc["date"]).'</td>
                                        <td><a class="btn btn-primary" href="download.php?id='.$det["iddocument"].'&old">telechargement</a></td>
                                    </tr>
                                    ';
                                }
                            ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <script src="css/jquery-3.5.1.slim.min.js"></script>
        <script src="css/popper.min.js"></script>
        <script src="css/bootstrap.min.js"></script>
    </body>
</html>