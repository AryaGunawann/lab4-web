<?php
$allowed_mods = array("home", "tambah");
$mod = isset($_REQUEST['mod']) ? $_REQUEST['mod'] : 'home';
if (!in_array($mod, $allowed_mods)) {
  $mod = 'home';
}

switch ($mod) {
  case "home":
    require("home.php");
    break;
  case "tambah":
    require("tambah.php");
    break;
  default:
    require("home.php");
    break;
}
?>
