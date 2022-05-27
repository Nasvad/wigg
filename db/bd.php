<?php

// TODO(configurar variáveis)

//Pagina de conexao com o DB
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     ="wigg_1";
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Conectado com Sucesso";
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}
?>