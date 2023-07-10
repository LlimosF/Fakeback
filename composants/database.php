<?php

$userdb = "root";
$passworddb = "";

try {

  $db = new PDO('mysql:host=localhost;dbname=fakeback', $userdb, $passworddb);

} catch (PDOException $e) {

  print "Erreur :" . $e->getMessage() . "<br/>";
  die;
  
}