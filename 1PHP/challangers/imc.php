<?php


echo "Calculo de IMC" . PHP_EOL;

$peso = readline("Digite seu peso:" . PHP_EOL);
$altura = readline("Sua altura utilizando o formato 0.00:" . PHP_EOL);
$imc = $peso / $altura ** 2;


echo "----ANALISANDO----" . PHP_EOL;

if($imc<18) {
    echo "Você está abaixo do peso ideal" . PHP_EOL;

}   elseif ($imc < 25)  {
    echo "Você está dentro do parâmetro ideal de peso" . PHP_EOL;
}  
    else {
        echo "Você está acima do peso" . PHP_EOL;
    }


?>