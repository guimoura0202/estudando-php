<?php 
$peso = 83.00;
$altura = 1.87;
$imc = $peso/($altura ** 2);
if($imc <18.5){
    echo "Seu IMC de $imc está abaixo da média.".PHP_EOL;
} else if($imc<25){
    echo"Seu IMC de $imc está na média normal. ".PHP_EOL;
} else{
    echo "Seu IMC de $imc está acima da média".PHP_EOL;
}