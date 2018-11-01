<?php
/* 
 8. Crie uma função que receba como parâmetro dois números.
 A função deve verificar se o primeiro número é divisível pelo segundo. 
 Observação: O primeiro parâmetro é obrigatório, já o segundo é opcional e 
 quando não for passado deverá verificar por padrão se é divisível por 2.
 */
function verifica($iN1, $iN2 = 2){
    if($iN1 % $iN2 == 0){
        return 'Os dois números são divisiveis ';
    }
    else{
        return 'Os dois números não são divisiveis ';
    }
}
echo verifica(2);
?>

<br>
<a href="index.html">Voltar</a>