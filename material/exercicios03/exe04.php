<?php
/* 
Atividade 04
Efetue um algoritmo PHP que receba os valores A, B, C e D. Efetue a soma entre A e C, a
multiplica��o entre B e D e verifique se o resultado da soma � maior, menor ou igual ao da
multiplica��o. Imprima: "A+C � maior que B+D", "A+C � menor que B+D", "A+C � igual a B+D".
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
        return '"'.$iA.'+'.$iC.' � maior que ' .$iB.'*'.$iD.'"';
    }
    else if($iSoma < $iMultiplicacao){
        return '"'.$iA.'+'.$iC.' � menor que ' .$iB.'*'.$iD.'"';
    }
    return '"'.$iA.'+'.$iC.' � igual a ' .$iB.'*'.$iD.'"';
}
echo verifica();
?>
