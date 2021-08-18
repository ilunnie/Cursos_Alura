<?php

$peso = 50;
$altura = 1.71;

$calculo = $peso/$altura**2;

echo "Seu imc é de $calculo kg/m²" . PHP_EOL;

if($calculo < 18.50){
	echo "Você está abaixo do recomendado(18,50kg/m²)" . PHP_EOL;
} else if ($calculo > 24.99){
	echo "Você está acima do recomendado(24,99kg/m²)" . PHP_EOL;
} else {
	echo "Parabéns!" . PHP_EOL;
	echo "Seu imc está dentro do recomendado" . PHP_EOL;
}