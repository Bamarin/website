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
      <div class="left">
        <h2>Models</h2>
      </div>
      <div class="row">
        <?php
          $file_json = file_get_contents("./json/modelsdb.json");
          $parsed_json = json_decode($file_json, TRUE);
          $count = 0;
          foreach($parsed_json as $elem) {
            $img = $elem['src'];
            $desc = $elem['desc'];
            $title = $elem['title'];
            if($count % 4  == 0) {
              echo '</div>';
              echo '<div class="row">';
            }
            ?>
              <div class="col s12 m3">
                <div class="card">
                  <div class="card-image">
                    <img src="<?php echo $img?>">
                    <span class="card-title"><?php echo "$title" ?></span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">shopping_cart</i></a>
                  </div>
                  <div class="card-content">
                    <p><?php echo $desc ?></p>
                  </div>
                </div>
              </div>
        <?php
            $count++;
          }
        ?>
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

<!-- vim: set filetype=eruby.html : -->
