<?php

include "conexao.php";

$conn = conexao();

try {
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // prepare sql and bind parameters
  $stmt = $conn->prepare("DELETE FROM personagens WHERE id=:id ");
  $stmt->bindParam(':id', $id);

  // insert a row
    $id = $_GET['id'];

    $stmt->execute();

  //echo "Personagem deletado!";
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;

header('location: ../index.php');

?>