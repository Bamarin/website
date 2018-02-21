<!DOCTYPE html>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/logo.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/cards-container.css"  media="screen,projection"/>

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

        <p>
          Here are some of the models I have done that you can download. They don't have a fixed price, so feel free to donate the amount you think I deserve.
        </p>

    <div class="col s12 cards-container">
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
               I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
             I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
             I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
          <p>I am a very simple card. I am good at containing small bits of information.
             I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
            <p>I am a very simple card. I am good at containing small bits of information.
               I am convenient because I require little markup to use effectively.</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
            <p>I am a very simple card. I am good at containing small bits of information</p>
        </div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
            <p>I am a very simple card. I am good at containing small bits of information.
               I am convenient because I require little markup to use effectively.</p>
            <p>This card has some extra info, which will make it taller. This is OK because we're using CSS columns!!!</p>
	</div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
      <div class="card blue-grey darken-1">
        <div class="card-content white-text">
          <span class="card-title">Card Title</span>
	  <p>I am a very simple card. I am good at containing small bits of information.</p>
	</div>
        <div class="card-action">
          <a href="#">This is a link</a>
          <a href="#">This is a link</a>
        </div>
      </div>
    </div>
																																																																					          

        <!--Grid with all the models loaded from json--!>
        <!--
        <div class="col s12 m4 cards-container">
          <?php
            $file_json = file_get_contents("./json/modelsdb.json");
            $parsed_json = json_decode($file_json, TRUE);
            foreach($parsed_json as $elem) {
              $img = $elem['src'];
              $tags = $elem['tags'];
              $title = $elem['title'];
              ?>
              <div class="card hoverable">
                <div class="card-image">
                  <?php
                    echo "<a href='model-detail.php?model=" . $title . "'>"
                  ?>
                  <img src="<?php echo $img?>">
                  <span class="card-title"><?php echo "$title" ?></span>
                  <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">file_download</i></a>
                </div>
                <div class="card-content truncate">
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
	-->


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
