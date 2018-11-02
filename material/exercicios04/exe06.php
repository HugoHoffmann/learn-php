<?php
/* 
6. Considerando o array declarado abaixo, o qual é referente a medições 
 * de temperatura de um mês faça um algoritmo que percorra este array 
 * e calcule a média de temperaturas.
$aTemperaturas = Array(38, 20, 22, 28, 31, 28, 33, 35, 26, 24, 36, 23, 35, 
 * 36, 33, 28, 22, 33, 32, 25, 34, 22, 22, 25, 24, 28, 33, 35, 39, 33);
* Inicialmente faça utilizando foreach. Depois utilize for ou while e utilize
 *  a função count() para saber a quantidade de elementos do array.
*/
$aTemperaturas = [38, 20, 22, 28, 31, 28, 33, 35, 26, 24, 36, 23, 35, 36, 33, 28, 22, 33, 32, 25, 34, 22, 22, 25, 24, 28, 33, 35, 39, 33];
$iAux = 0;
foreach ($aTemperaturas AS $i){
    $iAux +=$i;
}
$iAux /= count($aTemperaturas);
echo 'Média das temperaturas utilizando foreach '.$iAux.'<br>';

$iAux2 = 0;
$j = 0;
while ($j < count($aTemperaturas)){
    $iAux2 += $aTemperaturas[$j];
    $j++;
}
$iAux2 /= count($aTemperaturas);
echo 'Média das temperaturas utilizando while '.$iAux2.'<br>';
?>

<br>
<a href="index.html">Voltar</a>