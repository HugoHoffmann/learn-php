<?php
/* 
6. Crie uma fun��o que receba como par�metros dois n�meros. A fun��o deve verificar se o primeiro n�mero � maior,
menor ou igual ao segundo e imprimir:
Se maior: O primeiro valor (10) � maior que o segundo valor (5);
Se menor: O primeiro valor (5) � menor que o segundo valor (10);
Se igual: O primeiro valor (5) � igual ao segundo valor (5).
*/
function verifica($iN1, $iN2){
    if($iN1>$iN2){
        return 'O primeiro valor ('.$iN1.') � maior que o segundo valor ('.$iN2.');';
    }
    else if($iN1<$iN2){
        return 'O primeiro valor ('.$iN1.') � menor que o segundo valor ('.$iN2.');';
    }
    else{
        return 'O primeiro valor ('.$iN1.') � igual ao segundo valor ('.$iN2.');';
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