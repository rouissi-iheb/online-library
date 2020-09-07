<?php
include("../fonctions.php");
if(!verif_session_admin()){
header("location:../admin.php");
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
          <li><a href="confirm.php">Documents a confirmer</a></li>
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
                        <h2>Documents a confirmer </h2>
                    </center>
                    <br><br>
                    <div class="col-sm-12" >
                        <table class="table" style="color:white">
                            <tr>
                                <td>Titre</td>
                                <td>Genre</td>
                                <td>Nombre de pages</td>
                                <td>etat</td>
                                <td>telechargement</td>
                                <td>reponse</td>
                            </tr>

                            <?php
                                foreach(listDocumentsNonConfirmer($conn) as $doc){
                                    echo '
                                    <tr>
                                        <td>'.$doc["titre"].'</td>
                                        <td>'.$doc["genre"].'</td>
                                        <td>'.$doc["nbpages"].'</td>
                                        <td>'.$doc["etat"].'</td>
                                        <td><a class="btn btn-primary" href="download.php?id='.$doc["iddocument"].'">telechargement</a></td>
                                        <td>
                                            <form action="conf.php" method="POST">
                                            <input type="text" name="id" value="'.$doc["iddocument"].'" hidden>
                                                <input type="radio" name="rep" value="valid"> Valid <br>
                                                <input type="radio" name="rep" value="averifier"> a verifier <br>
                                                <input type="radio" name="rep" value="refuser"> refuser <br>
                                                <input type="text" name="reponse" class="form-control" placeholder="reponse"><br>
                                                <input type="submit" class="btn btn-primary" value="Confirmer"><br>

                                            </form>
                                        </td>
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