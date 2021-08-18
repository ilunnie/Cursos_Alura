<?php

$idades = [21, 23, 19, 25, 30, 41, 18];

$idades[] = 20;
echo count($idades);

for ($i=0; $i < count($idades); $i++) { 
	echo $idades[$i] . PHP_EOL;
}