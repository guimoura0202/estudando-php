<?php
/* comentário 
de
várias
linhas */
$doisaocubo = 2 ** 3;

$concatenar = "Olá, " . "Mundo! $doisaocubo" . PHP_EOL;
echo $concatenar;
$idade = 17;
if ($idade>=18){
    echo "Maior de idade. Você tem $idade".PHP_EOL;
}else{
    echo "Menor de idade. Você tem $idade".PHP_EOL;
}

//Com apenas uma linha não preciso de chaves {}
//else if e elseif são a mesma coisa

for ($i=1; $i<=15; $i++){
    if($i==2){
        //Pula execução do código
        continue;
    }
    if($i==11){
        //Interrompe a execução do código
        break;
    }
    echo "$i".PHP_EOL;

}