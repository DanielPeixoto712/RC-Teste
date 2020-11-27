<?php

$meses = array(
    0 => 'Janeiro',
    1 =>'Fevereiro',
    2 =>'Março',
    3 => 'Abril',
    4 => 'Maio',
    5 => 'Junho',
    6 =>  'Julho',
    7 =>   'Agosto',
    8 =>  'Setembro',
    9 =>  'Outubro',
    10 =>  'Novembro',
    11 =>  'Dezembro'
);
$diass = array(
     1 => 'Domingo',
     2 => 'Segunda-Feira',
     3 => 'Terça-Feira',
     4 => 'Quarta-Feira',
     5 => 'Quinta-Feira',
     6 => 'Sexta-Feira',
     7 => 'Sábado'
);



echo "<li>O dia selecionado foi: </li><br> <u>".$diass[$_POST['dias']]."</u>";
echo "<br><br>";
echo "<li>O mês seleciondado foi: </li><br> <u> ".$meses[$_POST['meses']]."</u>";

?>