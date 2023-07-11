<?php

  require_once("database.php");

  $sql = "SELECT * FROM publications";
  $query = $db->prepare($sql);
  $query->execute();
  $publications = $query->fetchAll();

?>

<div class="container-publication">

  <?php

    foreach($publications as $publication):

  ?>

  <div>

  </div>

  <?php

    endforeach;

  ?>

</div>