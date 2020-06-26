<?php
    function conexao(){
        $servername = "sql203.epizy.com";
        $username = "epiz_25750691";
        $password = "IKcbRWNZyC3qk1G";
        $bd = "epiz_25750691_pw_avf2";
        
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