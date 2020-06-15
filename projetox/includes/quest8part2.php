<?php

            $num1 = $_POST['um'];
            $operacao = $_POST["opera"];
            $num2 = $_POST['dois'];
            $resultado;

              function soma($num1, $num2){
                $resultado = $num1 + $num2;
                return $resultado;
              }

              function subt($num1, $num2){
                $resultado = $num1 - $num2;
                return $resultado;
              }

              function mult($num1, $num2){
                $resultado = $num1 * $num2;
                return $resultado;
              }

              function divi($num1, $num2){
                $resultado = $num1 / $num2;
                return $resultado;
              }

              if ($operacao == "som"){
                echo "<br><br><br>Resultado:".soma($num1, $num2);
              }
              else if ($operacao == "sub"){
                echo "<br><br><br>Resultado:".subt($num1, $num2);
              }
              else if ($operacao == "mul"){
                echo "<br><br><br>Resultado:".mult($num1, $num2);
              }
              else if ($operacao == "div"){
                echo "<br><br><br>Resultado:".divi($num1, $num2);
              }
              else {
                  echo "<br><br><br> Erro. Recarregue a página e tente novamente.";
              }


?>