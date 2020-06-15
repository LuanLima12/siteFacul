<?php

            $num1 = $_POST['um'];

              function calculo($num1=0){
                return ($num1*3.6);
              }

              echo "<br><br><br>Resultado: ".calculo($num1);
?>