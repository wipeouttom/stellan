<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StelLAN</title>
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
          <a href="index.php" class="navbar-brand" style="color:white;">Stel<strong style="color:red;">LAN<strong></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="index.php">Home <span class="sr-only"></span></a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Info <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="sub/">Wat is een LANparty?</a></li>
              <li><a href="sub/">Reglement</a></li>
              <li><a href="sub/">FAQ</a></li>
              <li><a href="sub/">Checklist</a></li>
              <li><a href="sub/">Routebeschrijving</a></li>
              <!-- seperator for seperated links: -->
              <!-- <li role="separator" class="divider"></li> -->
            </ul>
          </li>
          <li><a href="#">Compo's</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Games <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="sub/cod4.php">Call of Duty 4</a></li>
              <li><a href="sub/cod2.php">Call of Duty 2</a></li>
              <li><a href="sub/ut.php">Unreal Tournament</a></li>
              <!-- seperator for seperated links: -->
              <!-- <li role="separator" class="divider"></li> -->
            </ul>
          </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
          <li><a href="sub/registration.php">Inloggen</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Overview</a></li>
              <li><a href="#">Clan</a></li>
              <li><a href="#">Sign out</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Account Settings</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>


    <!-- js & css -->
    <script src="js/jquery-3.1.1.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
  </body>
</html>
