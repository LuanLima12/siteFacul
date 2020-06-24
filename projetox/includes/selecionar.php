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

//include "conexao.php";
$conn = conexao();

try {
  //$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id, jogador, personagem, raca, classe FROM personagens");
  $stmt->execute();

  // set the resulting array to associative
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(($stmt->fetchAll()) as $k=>$v) {
    //echo $v;

        if ($v["classe"] == "cacador"){
          $v["classe"] = "caçador";
        }
    echo "<tr>";
    echo "<td>".$v["id"]."</td>";
    echo "<td>".$v["jogador"]."</td>";
    echo "<td>".$v["personagem"]."</td>";
    echo "<td>".$v["raca"]."</td>";
    echo "<td>".$v["classe"]."</td>";
    echo '<td><a class="luan"><button type="button" class="btn btn-dark btn-sm"><i class="fa fa-folder-open"></i></button></a>
              <a class="luan" href="edite.php?id='.$v['id'].'"><button type="button" class="btn btn-light btn-sm"><i class="fa fa-edit"></i></button></a>
              <a class="luan" href="includes/delete.php?id='.$v['id'].'"><button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button></a>
          </td>';
    echo "</tr>";
  }
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
//echo "</table>";
?>