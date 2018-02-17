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
    <div>
      <?php
        $file_json = file_get_contents("./json/modelsdb.json");
        $parsed_json = json_decode($file_json, TRUE);
        foreach($parsed_json as $elem) {
          $img = $elem['src'];
          $desc = $elem['desc'];
          $title = $elem['title'];
          ?>
          <div class="row">
            <div class="col s12 m6">
              <div class="card">
                <div class="card-image">
                  <img src="<?php echo $img?>">
                  <span class="card-title"><?php echo $title ?></span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">shopping_cart</i></a>
                </div>
                <div class="card-content">
                  <p><?php echo $desc ?></p>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      ?>
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

<!-- vim: set filetype=eruby.html : -->
