<?php

include "conexao.php";

$conn = conexao();

try {
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("INSERT INTO personagens (jogador, personagem, raca, classe, cyborgue)
  VALUES (:jogador, :personagem, :raca, :classe, :cyborgue)");
  $stmt->bindParam(':jogador', $jogador);
  $stmt->bindParam(':personagem', $personagem);
  $stmt->bindParam(':raca', $raca);
  $stmt->bindParam(':classe', $classe);
  $stmt->bindParam(':cyborgue', $cyborgue);

  // insert a row
    $jogador = $_POST['jogador'];
    $personagem = $_POST['personagem'];
    $raca = $_POST['raca'];
    $classe = $_POST['classe'];
    $cyborgue = $_POST['cyborgue'];
    $stmt->execute();

  echo "Personagem cadastrado!";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

header('location: ../index.php');

?>