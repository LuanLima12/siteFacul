<?php
    function conexao(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $bd = "pw-avf2";
        
        try {
        $conn = new PDO("mysql:host=$servername;dbname=$bd; charset=utf8", $username, $password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Conexão realizada com sucesso!";
        return $conn;
        
        } catch(PDOException $e) {
        echo "Conexão falhou! Erro: " . $e->getMessage();
        }
    }
?>