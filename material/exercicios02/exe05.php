<?php
/* 
5. Crie uma função que receba um número e imprima se ele é par ou ímpar. 
*/
function verifica($iN){
    if($iN % 2 == 0){
        return $iN.' É par!';
    }
    else{
        return $iN.' Não é par';
    }
}
echo verifica(3);
?>
<br>
<a href="index.html">Voltar</a>