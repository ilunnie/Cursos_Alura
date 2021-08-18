<?php

$contas = [
	'240.577.100-43' => [
		'titular' => 'Vinicius',
		'saldo' => 1000
	],
	'749.402.390-98' => [
		'titular' => 'Maria',
		'saldo' => 10000
	],
	'541.885.030-09' => [
		'titular' => 'Alberto',
		'saldo' => 300
	]
];
echo "---------------------------" . PHP_EOL;

$contas['204.897.460-04'] = [
	'titular' => 'Claudia',
	'saldo' => 2000
];

foreach ($contas as $cpf => $conta) {
	echo "cpf: " . $cpf . PHP_EOL;
	echo "nome: " . $conta['titular'] . PHP_EOL;
	echo "saldo: " . $conta['saldo'] . PHP_EOL;
	echo "---------------------------" . PHP_EOL;
}