<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  </head>

  
  <body>
    <?php
      include 'navbar.php';
    ?>
    <div class="container">
  <div class="parallax-container">
    <div class="parallax"><img src="images/parallax1.jpg"></div>
      </div>
      <div class="section light-blue darken-1">
        <div class="row container">
          <h2 class="header">Parallax</h2>
          <p class="grey-text text-darken-3 lighten-3">Parallax is an effect where the background content or image in this case, is moved at a different speed than the foreground content while scrolling.</p>
        </div>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="images/parallax2.jpg"></div>
      </div>
    </div>
    <?php
      include 'footer.php';
    ?>
    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/navbar.js"></script>
    <script type="text/javascript" src="js/parallax.js"></script>
  </body>
</html>
