<?php
$usuario = 'root';
$senha = '';
$servidor = 'localhost';
$banco = 'teste';
try{
  $db = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
}
catch(PDOException $e) {
  echo $e->getMessage();
}
?>