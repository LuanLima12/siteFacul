<?php

            $num1 = $_POST['um'];
            $valorf = $num1 + ($num1 * (16/100));
            $valorp = $valorf / 10;

            if ($valorf != 0){
                for ($i=0; $i < 10; $i++){
                    echo "<br><br><hr/><hr/>Valor total: ".number_format($valorf, 2)."
                    <br>Valor da parcela: ".number_format($valorp, 2)."
                    <br>Número da parcela: ".($i+1)."<hr/><hr/>";
                }
            }
?>