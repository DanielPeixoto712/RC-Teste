<?php
$menor=99999;
$maior=-99999;
$produto=1;
$soma=0;




$num=array();
for ($i=0; $i <15 ; $i++) { 
	$num[]=rand(1,10000);
}


foreach ($num as $chave => $numero) {
	if ($numero>$maior) {
		$maior=$numero;
	}
	if ($numero<$menor) {
		$menor=$numero;
	}
	$produto=$produto*$numero;
	$soma=$soma+$numero;
}
$media=$soma/15;

echo "O menor numero é" .$menor;
echo "<br>";
echo "O maior numero é" .$maior;
echo "<br>";
echo "O produto é" .$produto;
echo "<br>";
echo "A soma é" .$soma;

?>
