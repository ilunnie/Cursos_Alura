<?php
	
	include 'funcoes.php';

	$contas = [
		//Conta Vinicius
		'240.577.100-43' => [
			'titular' => 'Vinicius',
			'saldo' => 1000
		],
		//Conta Maria
		'749.402.390-98' => [
			'titular' => 'Maria',
			'saldo' => 10000
		],
		//Conta Alberto
		'541.885.030-09' => [
			'titular' => 'Alberto',
			'saldo' => 300
		]
	];
	/*
	echo '<br>';
	separador("=", 1);
	printconta($contas);

	$contas['749.402.390-98'] = sacar($contas['749.402.390-98'], 1500);

	$contas['240.577.100-43'] = depositar($contas['240.577.100-43'], 900);
	$contas['541.885.030-09'] = depositar($contas['541.885.030-09'], 600);

	unset($contas['541.885.030-09']);

	separador("=", 1);
	printconta($contas);
	*/
?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
    	<?php foreach($contas as $cpf => $conta) { ?>
    		<dt>
    			<h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
    		</dt>
    		<dd>
    			Saldo: <?= $conta['saldo']; ?>
    		</dd>
    	<?php } ?>
    </dl>
</body>
</html>