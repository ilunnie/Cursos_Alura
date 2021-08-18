<?php

function separador($tipo, float $linha){
	for ($i=0; $i < 30; $i++) { 
		echo "$tipo";
	}
	for ($i=1; $i <= $linha ; $i++) { 
		echo PHP_EOL . '<br>';
	}
}
function msg($msg, float $linha){
	echo $msg;
	for ($i=1; $i <= $linha ; $i++) { 
		echo PHP_EOL . '<br>';
	}
}
function printconta($contas){
	foreach ($contas as $cpf => $conta) {
		['titular' => $titular, 'saldo' => $saldo] = $conta;
		msg("cpf: " . $cpf, 1);
		msg("nome: $titular", 1);
		msg("saldo: $saldo", 1);
		separador("=",1);
	}
}
function sacar(array $conta, float $valor){
	if ($valor > $conta ['saldo']){
		echo("Você não pode sacar esse valor" . PHP_EOL);
	} else {
		$conta ['saldo'] -= $valor;
	}
	return $conta;
}
function depositar(array $conta, float $valor){
	if($valor > 0){
		$conta ['saldo'] += $valor;
	} else {
		msg ("não é posivel depositar $valor reais", 1);
	}
	return $conta;
}
function Maiusculo(array &$conta){
	$conta['titular'] = mb_strtoupper($conta['titular']);
	//
}