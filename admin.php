<?php
  session_start();
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

    <br/>

    <div class="valign-wrapper row">
      <div class="col card hoverable s10 pull-s1 m6 pull-m3 l4 pull-l4">
        <h3 class="center">Admin panel</h3>
        <form id="form-admin" role="form" class="login-form" method="post" action="login.php">
          <div class="card-content">
            <span class="card-title">Login</span>
            <div class="row">
              <div class="input-field col s12">
                <input type="text" class="validate" name="username" id="username"/>
                <label for="username" required="required" aria-required="true">Username</label>
              </div>
              <div class="input-field col s12">
                <input type="password" class="validate" name="password" id="password" />
                <label for="password" required="required" aria-required="true">Password</label>
              </div>
            </div>
          </div>
          <div class="card-action right-align">
            <input type="reset" id="reset" class="btn-flat grey-text waves-effect">
            <button type="submit" class="btn blue waves-effect waves-light" value="Login">
              Login
            </button>
          </div>
        </form>
      </div>
    </div>

    <br>

    <?php
      include 'footer.php';
    ?>

    <!--JavaScript at end of body for optimized loading-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/admin.js"></script>
    <script type="text/javascript" src="js/jquery-validate.min.js"></script>
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>
    <script>
      $( document ).ready( function () {
        $("#form-admin").validate( {
          errorClass: 'invalid',
          errorPlacement: function(error, element) {
            $(element).closest("form").find("label[for='" + element.attr("id") + "']").attr('data-error', error.text());
          },
            rules: {
              modelstitle: {
                required: true
              },
              description: {
                required: true,
                minlength: 6
              }
            },
            messages: {
              modelstitle:{
                  required: "Enter a username",
              },
              description:{
                  required: "Enter a password",
              }
            }
        } );
      } );
    </script>
  </body>
</html>
