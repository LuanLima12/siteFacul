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


  $stmt = $conn->prepare("SELECT  jogador, personagem, raca, classe, cyborgue,
   forca, mana, destreza, resistencia, carisma
  FROM personagens INNER JOIN atributos ON personagens.id = atributos.id WHERE personagens.id=:id ");
  $stmt->bindParam(':id', $id);

  // insert a row
    $id = $_GET['id'];

    $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(($stmt->fetchAll()) as $k=>$v) {
    //echo $v;
    //$id = $v['id'];
    $jogador = $v['jogador'];
    $personagem = $v['personagem'];
    $raca = $v['raca'];
    $classe = $v['classe'];
    $cyborgue = $v['cyborgue'];
    $forca = $v['forca'];
    $mana = $v['mana'];
    $destreza = $v['destreza'];
    $resistencia = $v['resistencia'];
    $carisma = $v['carisma'];



  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
//echo "</table>";
?>