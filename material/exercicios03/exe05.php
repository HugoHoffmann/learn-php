<?php
/* 
Atividade 05
Efetue um algoritmo PHP que receba os valores A, B e imprima-os em ordem crescente em
relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".
*/
$iA = 4;
$iB = 1;
function verificaMenor($iA, $iB){
    if($iA > $iB){
        return $iB.' '.$iA;
    }
    return $iA.' '.$iB;
}
echo verificaMenor($iA, $iB);
?>

<br>
<a href="index.html">Voltar</a>