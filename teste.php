<?php
 $valor=$_POST['valor'];
 echo "Digite um valor inteiro: $valor <br>";
 $quadrado=$valor*$valor;
 echo "O quadradro deste valor é: ($quadrado)<br>";

 if ($valor >50){
     echo "O numero digitado foi: $valor <br>";
     $sub=$valor-50;
     echo"O numero apurado é: ($sub)";
 }else{
     
     echo"O numero foi menor do que 50: $valor";
 }
?>