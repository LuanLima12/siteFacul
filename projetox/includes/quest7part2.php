<?php

            $num1 = $_POST['um'];
            $num2 = $_POST['dois'];
            //$num1=1;
            //$num2=100;
              /*function calculo($num1=0, $num2=0){
                for ($i=0; i<100; $i++){
                    $vetor[$i]
                }
              }*/

              function calculo($num1, $num2){
                  $a = 0;
                  $c = 0;
                  $soma = 0;
                while (($a<10) && ($c<100)){
                    $b = rand($num1, $num2);
                    //echo "<br> b= ".$b;
                    if ($b % 2 == 0){
                        $vetor[$a] = $b;
                        //echo "<br> vetor= ".$vetor;
                        //echo "<br> a= ".$a;
                        $a++;
                    }
                    $c++;
                }
                for ($i = 0; $i<10; $i++){
                    $soma = $soma + $vetor[$i];
                    //echo "<br> soma= ".$soma;
                }
                return $soma;
              }

              if ($num1 != $num2){
                echo "<br><br><br>Resultado:".calculo($num1, $num2);
              }
              else{
                  echo "<BR><BR><BR> Por favor, selecione números diferentes um do outro.";
              }
?>