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
    foreach ($_SESSION['users'][$_POST['user_id']] as $user_info => $user_value){
    ?>
      <p><?= $user_info ?> : <?= $user_value ?> </p>
    <?php
    } 
    ?>
    <a href = 'users_index.php'>
      <button>Return to Index</button>
     </a>

  </body>
</html>
