<?php

$userdb = "fakeback_db";
$passworddb = "Titine19!";

try {

  $db = new PDO('mysql:host=mysql-fakeback.alwaysdata.net;dbname=fakeback_database', $userdb, $passworddb);

} catch (PDOException $e) {

  print "Erreur :" . $e->getMessage() . "<br/>";
  die;
  
}