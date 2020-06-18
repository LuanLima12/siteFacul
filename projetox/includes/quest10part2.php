<?php

            $num1 = $_POST['um'];
            $num2 = $_POST['dois'];

              function calculo($num1=1, $num2=1){
                return ($num2/$num1);
              }
            
              echo "<br><br><br>O consumo médio de combustivel é ".number_format(calculo($num1, $num2),2)."
              litros por km";


?>