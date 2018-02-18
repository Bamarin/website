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
        Here are some of the models I have done that you can download. They don't have a fixed prize, so fell free to donate the amount you think I deserve.
      </p>
      

      <div class="row">
        <?php
          $file_json = file_get_contents("./json/modelsdb.json");
          $parsed_json = json_decode($file_json, TRUE);
          foreach($parsed_json as $elem) {
            $img = $elem['src'];
            $tags = $elem['tags'];
            $title = $elem['title'];
            ?>
              <div class="col s12 m4">
                <div class="card hoverable">
                  <div class="card-image">
                    <img src="<?php echo $img?>">
                    <span class="card-title"><?php echo "$title" ?></span>
                    <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">file_download</i></a>
                  </div>
		  <?php
		    foreach($tags as $tag) {
		    ?>
		  <div class="chip">
		    <?php echo "$tag" ?>
		  </div>
		  <?php
	 	    }
	 	  ?>
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
