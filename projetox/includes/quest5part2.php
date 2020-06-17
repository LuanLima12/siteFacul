<?php

            $num1 = $_POST['um'];
            $num2 = $_POST['dois'];
            $num3 = $_POST['tres'];
            $salarioi = $num1;

             /* function calculo($num1, $num2, $num3){
                $salariof = $num1 + ($num1*($num2/100));

                for ($i = 0; $i < ($num3-1); $i++){
                    $num3 = $num3*2;
                    $salariof = $salariof + ($salariof*($num3/100));
                }

                return $salariof;

              }*/

            function calcular($num1, $num2, $num3){
                $num1 = $num1 + ($num1 * ($num2/100));

                for ($i=0; $i<($num3-1); $i++){
                    $num2 = $num2*2;
                    $num1 = $num1 + ($num1 * ($num2/100));
                }

                return $num1;
            }

              /*if ($salarioi != 0){*/
                echo "<br><br><br>O salario final é: ".number_format(calcular($num1, $num2, $num3),2)."R$";
              

/*2017 - 1045, 45 - 3
2018 - 1108, 18 - 6
2019 - 1241, 16 - 12
2020 - 1539, 04 - 24*/
        

?>