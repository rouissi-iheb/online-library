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
                        <h2>Ajout Document</h2>
                    </center>
                    <br><br>
                    <div class="col-sm-2" ></div>
                    <div class="col-sm-10" >
                        <form action="upload.php" method="POST" enctype="multipart/form-data">
                            <input type="text" class="form-control" name="titre" placeholder="titre de document"><br>
                            <input type="text" class="form-control" name="genre" placeholder="genre de document"><br>
                            <input type="text" class="form-control" name="nbpages" placeholder="nombre des pages"><br>
                            <input type="text" class="form-control" name="autre" placeholder="autre detailles"><br>
                            <input type="file" class="form-control" name="file"><br>
                            <input type="submit" class="btn btn-primary" value="ajout document"><br>
                        </form>
                    </div>
                    <div class="col-sm-2" ></div>
                </div>
            </div>
        </div>
        <script src="css/jquery-3.5.1.slim.min.js"></script>
        <script src="css/popper.min.js"></script>
        <script src="css/bootstrap.min.js"></script>
    </body>
</html>