<?php
/* 
6. Crie uma função que receba como parâmetros dois números. A função deve verificar se o primeiro número é maior,
menor ou igual ao segundo e imprimir:
Se maior: O primeiro valor (10) é maior que o segundo valor (5);
Se menor: O primeiro valor (5) é menor que o segundo valor (10);
Se igual: O primeiro valor (5) é igual ao segundo valor (5).
*/
function verifica($iN1, $iN2){
    if($iN1>$iN2){
        return 'O primeiro valor ('.$iN1.') é maior que o segundo valor ('.$iN2.');';
    }
    else if($iN1<$iN2){
        return 'O primeiro valor ('.$iN1.') é menor que o segundo valor ('.$iN2.');';
    }
    else{
        return 'O primeiro valor ('.$iN1.') é igual ao segundo valor ('.$iN2.');';
    }
}
echo verifica(10, 5);
echo '<br>';
echo verifica(5, 10);
echo '<br>';
echo verifica(5, 5);
?>

<br>
<a href="index.html">Voltar</a>