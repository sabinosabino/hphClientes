<?php
//Conector ao banco de dados, só precisa alterar os dados de conexão para usar outro banco
//----------------------------------------------------------------------------------------
$drive='mysql';
$host='localhost:3305';
$bd='frete';
$user='root';
$pwd='';
//----------------------------------------------------------------------------------------

try {
  $pdo = new PDO($drive .':host=' .$host .';dbname=' .$bd, $user, $pwd);

  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e) {

  echo 'Error: ' . $e->getMessage();
}
?>