<?php
/* 
5. Crie uma fun��o que receba um n�mero e imprima se ele � par ou �mpar. 
*/
function verifica($iN){
    if($iN % 2 == 0){
        return $iN.' � par!';
    }
    else{
        return $iN.' N�o � par';
    }
}
echo verifica(3);
?>
<br>
<a href="index.html">Voltar</a>