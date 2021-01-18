<?php

$username = 'root';
$password = '';
$dsn = 'mysql:host=localhost; dbname=clinic';

try {

  $conn = new PDO($dsn, $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {

  echo "Failed to connect to the database ".$e->getMessage();

}

?>
