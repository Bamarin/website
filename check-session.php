<?php
/**
 * Short description for check-session.php
 *
 * @package check-session
 * @author nicolasfara <nicolas.farabegoli@gmail.com>
 * @version 0.1
 * @copyright (C) 2018 nicolasfara <nicolas.farabegoli@gmail.com>
 * @license MIT
 */

function login_check() {
  $file_json = file_get_contents("./json/users.json");
  $parsed_json = json_decode($file_json, TRUE);
  if(isset($_SESSION['username'], $_SESSION['password'])) {
    foreach($parsed_json as $elem) {
      if(hash("sha256", $_SESSION['username']) == $elem["username"] &&
          hash("sha256", $_SESSION['password']) == $elem["password"]) {
        return true;
      }
    }
  }
  return false;
}
?>
