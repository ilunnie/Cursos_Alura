<?php

$idade = 17;
$acompanhantes = false;

echo "Você só pode entrar se tiver 18 anos ou mais." . PHP_EOL;

if ($idade >= 18){
	echo "Você tem $idade anos." . PHP_EOL;
	echo 'Pode entrar!' . PHP_EOL;
	echo "Bem vindo" . PHP_EOL;
} else if($idade >= 16 && $acompanhantes == false) {
	echo "Você tem apenas $idade." . PHP_EOL;
	echo "Você deve estar acompanhado(a)" . PHP_EOL;
} else if($idade >= 16 && $acompanhantes == true) {
	echo "Você tem apenas $idade." . PHP_EOL;
	echo "Você pode entrar apenas com seu acompanhante" . PHP_EOL;
	echo "Bem vindo" . PHP_EOL;
} else{
	echo "Você só tem $idade!" . PHP_EOL;
	echo 'Você não pode entrar.' . PHP_EOL;
}

echo PHP_EOL;
echo "Adeus!";