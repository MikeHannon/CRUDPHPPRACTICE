<?php
session_start();
// You goal is to fix this!

var_dump($_POST['user_id']);
var_dump($_SESSION['users'][$_POST['user_id']]);
// die("This update function needs work - fix it!");

// header("Location:users_index.php");
?>
