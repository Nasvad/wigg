<?php

// TODO(configurar variáveis)

//Pagina de conexao com o DB
$servername = "localhost";
$username   = "root";
$password   = "";
<<<<<<< HEAD:db/bd.php
$dbname     ="wigg_1";
=======
>>>>>>> 9938e42663c5428cadc9842803160775895734c4:bd.php
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Conectado com Sucesso";
} catch(PDOException $e) {
  echo "Falha na conexão: " . $e->getMessage();
}
?>