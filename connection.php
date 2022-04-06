<?php

$hostname = 'localhost';
$username   = 'root';
$password   = '';

try {
  $bd = new PDO("mysql:host=$hostname;dbname=aulasphp", $username, $password);
  $bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

catch (PDOException $e) {
  echo "Conexão falhou: " . $e->getMessage();
}

?>