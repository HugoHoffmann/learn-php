<?php
/* 
7. Desenvolva uma função que receba como parâmetros dois argumentos:
 *  um array e um inteiro. Para o parâmetro inteiro, será passado os 
 * valores 1 ou 2. A função deve percorrer o array e se foi passado 1 
 * para o segundo parâmetro deverá colocar todos os elementos em 
 * maiúsculos, se foi passado 2 em minúsculos.
* Utilize constantes para as possibilidades do segundo parâmetro.
*/
$aVetor = ['A', 'B', 'c', 'd', 'E', 'r', 'Q'];
const iN1 = 1;
const iN2 = 2;
function verifica($aVetor, $iNu){
    if($iNu==1){
        foreach($aVetor AS $letra){
            $aVet[] = strtoupper($letra);
        }
        return $aVet;
    }
    foreach($aVetor AS $letra){
        $aVet[] = strtolower($letra);
    }
    return $aVet;
}
$aResult =  verifica($aVetor, iN2);
foreach ($aResult AS $item){
    echo $item;
}
?>

<br>
<a href="index.html">Voltar</a>