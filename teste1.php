<?php
    $v1=$_POST['v1'];
    $v2=$_POST['v2'];
    $v3=$_POST['v3'];
    $v4=$_POST['v4'];
    $v5=$_POST['v5'];
    echo "Valor 1: $v1 | Valor 2: $v2 | Valor 3: $v3 | Valor 4: $v4 | Valor 5: $v5 <br>";
    $soma= $v1+$v2+$v3+$v4+$v5;
    $media=$soma/5;
    echo "A média calculada é: $media <br>";
?>