<?php
/* 
7. Desenvolva uma fun��o que receba como par�metros dois argumentos:
 *  um array e um inteiro. Para o par�metro inteiro, ser� passado os 
 * valores 1 ou 2. A fun��o deve percorrer o array e se foi passado 1 
 * para o segundo par�metro dever� colocar todos os elementos em 
 * mai�sculos, se foi passado 2 em min�sculos.
* Utilize constantes para as possibilidades do segundo par�metro.
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