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
    <?php
    if (isset($_SESSION['users'])){
      foreach ($_SESSION['users'] as $user_id => $user){
      ?>
      <h5>Name: <?= $user['name'] ?> </h5>
      <form action = "show.php" method = "post">
        <input type="hidden" name="user_id" value= "<?= $user_id ?>">
        <input type="submit" value="Show User">
      </form>
      <form action = "edit.php" method = "post">
        <input type="hidden" name="user_id" value= "<?= $user_id ?>">
        <input type="submit" value="Edit User">
      </form>
      <?php
      }
    }
    ?>
    <a href = 'new.php'>
      <button>Create a new user</button>
    </a>
    <a href = 'reset.php'>
      <button>Reset Session</button>
    </a>
  </body>
</html>
