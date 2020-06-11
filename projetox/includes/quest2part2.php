<?php
    $num1 = $_POST['um'];
    $num2 = $_POST['dois'];
    $num3 = $_POST['tres'];

    function media($num1=0,$num2=0,$num3=0){
        $media = ($num1+$num2+$num3)/3;
        return $media;
    }
        echo "<br><br><br>Média:".media($num1, $num2, $num3);

?>
