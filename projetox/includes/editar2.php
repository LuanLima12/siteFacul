<?php

include "conexao.php";

$conn = conexao();

try {
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("UPDATE personagens SET jogador=:jogador, personagem=:personagem, 
  raca=:raca, classe=:classe, cyborgue=:cyborgue WHERE id=:id");
  $stmt->bindParam(':id', $id);
  $stmt->bindParam(':jogador', $jogador);
  $stmt->bindParam(':personagem', $personagem);
  $stmt->bindParam(':raca', $raca);
  $stmt->bindParam(':classe', $classe);
  $stmt->bindParam(':cyborgue', $cyborgue);

  // insert a row
    $id = $_GET['id'];
    $jogador = $_POST['jogador'];
    $personagem = $_POST['personagem'];
    $raca = $_POST['raca'];
    $classe = $_POST['classe'];
    $cyborgue = $_POST['cyborgue'];
    $stmt->execute();

  //echo "Personagem editado!";
  //echo $id.$raca.$cyborgue.$classe;

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;


header('location: ../index.php');

?>