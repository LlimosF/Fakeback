<?php

  require_once("database.php");

  require_once("header.php");

  $sql = "SELECT * FROM users";
  $query = $db->prepare($sql);
  $query->execute();
  $account_users = $query->fetchAll();

?>

<div class="show-account">

  <?php 

    foreach($account_users as $account_user):

  ?>

  <div class="account">
    <img src="media/users" alt="Photo de compte" class="logo-account">
    <p class="name-account"><?= $account_user["lastname"] . '<br />' . $account_user["firstname"] ?></p>
    <a href="details-compte.php?id=' . $account_user['id'] . '" class="link-to-profil">Voir le profil</a>
  </div>

  <?php

    endforeach;

  ?>  

</div>