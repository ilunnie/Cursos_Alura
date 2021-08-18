<?php

require_once 'src/Conta.php';

$conta01 = new Conta('123.456.789-10','Vinicius Dias');
$conta01->depositar(500);
$conta01->sacar(300);
/*
$conta01->saldo -= 1000;
//isso não pode
*/
$conta01->printConta(); //print dos dados de uma conta
echo PHP_EOL . "Número de contas: " . Conta::returnContas();