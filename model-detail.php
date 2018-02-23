<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/logo.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  <body>
    <?php
      include 'navbar.php';
    ?>
    <div class="container">
      <div class="row" id="main">
	<!--TODO catch exception when the page is loaded without passing any argument-->
        <?php	
	   echo "<h2>" . $_GET["model"] . " </h2>"
	?>
      </div>

      <p id="desc">
        Here are some of the models I have done that you can download. They don't have a fixed prize, so fell free to donate the amount you think I deserve.
      </p>
      
    </div>
    

    <?php
      include 'footer.php';
    ?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
    <script type="text/javascript" src="js/three.min.js"></script>
    <script type="text/javascript" src="js/Detector.js"></script>
    <script type="text/javascript" src="js/OrbitControls.js"></script>
    <script type="text/javascript" src="js/OBJLoader.js"></script>
    <script type="text/javascript" src="js/MTLLoader.js"></script>
    <script type="text/javascript" src="js/3d-viewer.js"></script>
  </body>
</html>

<!-- vim: set filetype=eruby.html : -->
