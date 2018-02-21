<?php
  session_start();
  require 'controls/check-session.php';

  if(login_check()) {
?>
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
          <h2>Add new model</h2>
        </div>
          <div class="row">
            <form class="col s12">
              <div class="row">
                <!-- Model's title -->
                <div class="input-field col s6">
                  <input placeholder="Title" id="modelstitle" type="text" class="validate">
                  <label for="modelstitle">Model's title</label>
                </div>
                <!-- Text area -->
                <div class="row">
                  <div class="input-field col s12">
                    <textarea id="description" class="materialize-textarea"></textarea>
                    <label for="description">Model's description</label>
                  </div>
                </div>
                <!-- File input -->
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Upload model's image">
                  </div>
                </div>
                <!-- File input -->
                <div class="file-field input-field">
                  <div class="btn">
                    <span>File</span>
                    <input type="file">
                  </div>
                  <div class="file-path-wrapper">
                    <input class="file-path validate" type="text" placeholder="Model's STL">
                  </div>
                </div>
                  <div class="input-field col s6">
                    <input id="modeltags" type="text" class="validate">
                    <label for="modeltags">Model's TAGS</label>
                  </div>
                <br>
                <!-- Load anythings -->
              </div>
              <div class="right row">
                <a class="waves-effect waves-light btn">Load module</a>
              </div>
            </form>
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
      <!--SCRIPT TO DINAMICALLY INSTANTIATE THE DETAIL PAGE OF EACH MODEL (yet to be implemented)--!>
      <!--script type="tetx/javascript" src="js/model.js"></script--!>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script>
        $(document).ready(function(){
          $(".card-image").click(function(){
            <?php
  		$_SESSION["model"] = "Model X" ;
  	  ?>
          });
        });
      </script>
    </body>
  </html>

<?php
  }else{
    header("location:admin.php");
  }
?>


<!-- vim: set filetype=eruby.html : -->
