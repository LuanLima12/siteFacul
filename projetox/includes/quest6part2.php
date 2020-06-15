<?php

            $num1 = $_POST['um'];
            $num2 = $_POST['dois'];

              function desconto($num1=0, $num2=0){
                return ($num1-($num1*($num2/100)));
              }

              echo "<br><br><br>Valor padrão:".$num1;
              echo "<br>Valor do desconto:".$num2;
              echo "<br>Valor final:".desconto($num1,$num2);

?>