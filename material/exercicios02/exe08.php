<?php
/* 
 8. Crie uma fun��o que receba como par�metro dois n�meros.
 A fun��o deve verificar se o primeiro n�mero � divis�vel pelo segundo. 
 Observa��o: O primeiro par�metro � obrigat�rio, j� o segundo � opcional e 
 quando n�o for passado dever� verificar por padr�o se � divis�vel por 2.
 */
function verifica($iN1, $iN2 = 2){
    if($iN1 % $iN2 == 0){
        return 'Os dois n�meros s�o divisiveis ';
    }
    else{
        return 'Os dois n�meros n�o s�o divisiveis ';
    }
}
echo verifica(2);
?>

<br>
<a href="index.html">Voltar</a>