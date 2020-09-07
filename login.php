<html>
    <head>
        <link href="css/assets/css/style.css" rel="stylesheet">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <header id="header" class="header-transparent">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="index.php">Home</a>
      </div>
      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li><a href="login.php">Connexon Client</a></li>
          <li><a href="register.php">Registre Client</a></li>
          <li><a href="admin.php">Connexion Admin</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <br><br><br>
        <div class="container">
            <div class="row">
                
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                <br><br>
                <div class="card" style="background-color: rgba(245, 245, 245, 0.4);">
                    <div class="card-header bg-success text-white">connexion client</div>
                    <div class="card-body">
                        <form action="client/login.php" method="POST">
                            <input type="text" class="form-control" name="login" placeholder="login"><br>
                            <input type="text" class="form-control" name="mdp" placeholder="mot de passe"><br>
                            <input type="submit" class="btn btn-primary" value="connexion">
                        </form>
                    </div>
                </div>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <script src="css/jquery-3.5.1.slim.min.js"></script>
        <script src="css/popper.min.js"></script>
        <script src="css/bootstrap.min.js"></script>
    </body>
</html>