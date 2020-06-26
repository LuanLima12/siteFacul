<?php

include "includes/styleParaLinks.php";


//echo "<table style='border: solid 1px black;'>";
//echo "<tr><th>Id</th><th>Firstname</th><th>Lastname</th></tr>";

/*class TableRows extends RecursiveIteratorIterator {
  function __construct($it) {
    parent::__construct($it, self::LEAVES_ONLY);
  }

  function current() {
    return "<td>" . parent::current(). "</td>";
  }

  function beginChildren() {
    echo "<tr>";
  }

  function endChildren() {
    echo "</tr>" . "\n";
  }
}*/

include "conexao.php";
$conn = conexao();

try {
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $stmt = $conn->prepare("SELECT  personagens.id
  FROM personagens WHERE personagens.jogador=:jogador ");
  $stmt->bindParam(':jogador', $jogador);

  // insert a row
    $jogador = $_GET['jogador'];

    $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(($stmt->fetchAll()) as $k=>$v) {
    //echo $v;
    //$id = $v['id'];
    $jogador = $v['jogador'];


  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
//echo "</table>";
?>