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
      <div class="row">
        <h2>Models</h2>
      </div>

      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean tempus velit vitae vehicula hendrerit. Sed accumsan dui vel rhoncus porttitor. Sed ac magna non ex porta auctor. Sed quis nisl commodo neque posuere tempus eu in augue. Suspendisse fermentum nisi sed felis luctus, vitae consectetur nunc sollicitudin. Curabitur vestibulum nunc risus, id lobortis massa congue eu. Maecenas euismod posuere sapien at mattis. Sed augue mi, mollis vitae turpis id, consequat ornare est. Curabitur placerat justo a urna pellentesque dictum. Nunc imperdiet molestie condimentum.
      </p>
      

      <div class="row">
        <?php
          $file_json = file_get_contents("./json/modelsdb.json");
          $parsed_json = json_decode($file_json, TRUE);
          foreach($parsed_json as $elem) {
            $img = $elem['src'];
            $desc = $elem['desc'];
            $title = $elem['title'];
            ?>
              <div class="col s12 m4">
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
