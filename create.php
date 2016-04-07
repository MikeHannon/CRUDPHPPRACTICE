<?php
session_start();
if (isset($_SESSION['users'])){
  $_SESSION['users'][] = $_POST;
}
else {
  $_SESSION['users'] = [$_POST];
}
header("Location:users_index.php");
exit();
?>
