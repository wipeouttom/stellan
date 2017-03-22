<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registreren - StelLAN</title>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <!-- toggle navbar for mobile devices -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

        <!-- name of the website on the left side of the navbar -->
        <a href="../index.php" class="navbar-brand" style="color:white;">Stel<strong style="color:red;">LAN<strong></a>
        </div>
      </div><!-- /.container-fluid -->
    </nav>

    <div class="container" style="margin-top:80px;color:black;">
      <form action="../model/register.php">
        <div class="form-group">
          <label for="userName">Username:</label>
          <input type="userName" class="form-control" id="text" name="userName">
        </div>
        <div class="form-group">
          <label for="email">Email adress:</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
          <label for="pwd">Wachtwoord:</label>
          <input type="pwd" class="form-control" id="pwd" name="pwd">
        </div>
        <div class="form-group">
          <label for="gender">Geslacht:</label>
          <select class="form-control" id="gender" name="gender">
            <option>Man</option>
            <option>Vrouw</option>
          </select>
        </div>
        <div class="form-group">
          <label for="dateOfBirth">Geboortedatum:</label>
          <input type="dateOfBirth" class="form-control" id="date" name="dateofbirth">
        </div>
        <button type="submit" class="btn btn-default">Register</button>
      </form>
    </div>

    <!-- js & css -->
    <script src="../js/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="../js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  </body>
</html>
