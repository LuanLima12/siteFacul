<?php

            $num1 = $_POST['um'];
            $num2 = $_POST['dois'];

              function calculo($num1=0, $num2=0){
                return ($num1 + $num2) * $num1;
              }

              echo "<br><br><br>Resultado:".calculo($num1, $num2);
?>