<?php
session_start();

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="update.php" method="post">
      <input type="text" name="name" value="<?= $_SESSION['users'][$_POST['user_id']]['name'] ?>" >
      <select name="language">
        <option value="<?= $_SESSION['users'][$_POST['user_id']]['language'] ?>">No Change</option>
        <option value="javascript">JavaScript</option>
        <option value="PHP">PHP</option>
        <option value="Ruby">Ruby</option>
        <option value="iOS">iOS</option>
      </select>
      <select name="location">
        <option value="<?= $_SESSION['users'][$_POST['user_id']]['location'] ?>">No Change</option>
        <option value="bellevue">Bellevue</option>
        <option value="dallas">Dallas</option>
        <option value="sanjose">San Jose</option>
        <option value="burbank">Burbank</option>
      </select>
      <textarea name="comment" rows="8" cols="40"><?= $_SESSION['users'][$_POST['user_id']]['comment'] ?></textarea>
      <input type="hidden" name="user_id" value="<?= $_POST['user_id']?>">
      <input type="submit" value="Submit">
    </form>
  </body>
</html>
