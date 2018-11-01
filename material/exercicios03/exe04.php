<?php
/* 
Atividade 04
Efetue um algoritmo PHP que receba os valores A, B, C e D. Efetue a soma entre A e C, a
multiplicação entre B e D e verifique se o resultado da soma é maior, menor ou igual ao da
multiplicação. Imprima: "A+C é maior que B+D", "A+C é menor que B+D", "A+C é igual a B+D".
*/
global $iA;
global $iB;
global $iC;
global $iD;
function verifica(){
    $iA = 1;
    $iB = 2;
    $iC = 3;
    $iD = 4;
    $iSoma = $iA + $iC;
    $iMultiplicacao = $iB * $iD;
    if($iSoma > $iMultiplicacao){
        return '"'.$iA.'+'.$iC.' é maior que ' .$iB.'*'.$iD.'"';
    }
    else if($iSoma < $iMultiplicacao){
        return '"'.$iA.'+'.$iC.' é menor que ' .$iB.'*'.$iD.'"';
    }
    return '"'.$iA.'+'.$iC.' é igual a ' .$iB.'*'.$iD.'"';
}
echo verifica();
?>
