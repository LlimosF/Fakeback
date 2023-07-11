<?php

  require_once("database.php");

  $sql = "SELECT * FROM publication";
  $query = $db->prepare($sql);
  $query->execute();
  $publications = $query->fetchAll();

?>

<div class="container-publication">

  <?php

    foreach($publications as $publication):

  ?>

  <div class="publication">

  </div>

  <?php

    endforeach;

  ?>

</div>