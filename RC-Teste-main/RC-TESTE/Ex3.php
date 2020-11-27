<?php
$num=array();
for ($i=0; $i <15 ; $i++) { 
	$num[]=rand(1,100);
}

foreach ($num as $chave => $numero) {
	if ($num%2==0) {
		echo "A posição é " .$numero. " é par e está na posição " .$chave. " " ;
	}
	else{
		echo "O numero " .$numero. " é ímpar e está na posição " .$chave. " ";
	}
	echo "<br>";
}
?>