<?php
/**
 * Short description for login.php
 *
 * @package login
 * @author nicolasfara <nicolas.farabegoli@gmail.com>
 * @version 0.1
 * @copyright (C) 2018 nicolasfara <nicolas.farabegoli@gmail.com>
 * @license MIT
 */

session_start();
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
$_SESSION["logged"]=false;

if(isset($_POST["username"], $_POST["password"])) {
  //TODO
}
$user_hash=hash("sha256", $_POST["username"]);
$pswd_hash=hash("sha256", $_POST["password"]);

$file_json = file_get_contents("./json/users.json");
$parsed_json = json_decode($file_json, TRUE);

foreach($parsed_json as $elem) {
  $user = $elem['username'];
  $pswd = $elem['password'];
  print "$user_hash";
  print "$pswd_hash";

  if($user_hash == $user && $pswd_hash == $pswd){
    $_SESSION["logged"] = true;
  }
}

if($_SESSION["logged"] == true) {
  header("location:models-manager.php");
} else {
  header("location:admin.php");
}
?>

