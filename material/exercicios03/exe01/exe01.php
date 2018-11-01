<?php
/* 
Atividade 01
Efetue um algoritmo PHP que receba um valor digitado pelo usuário e imprima o texto "o valor é
maior que 10" caso isso seja verdade, senão imprima "o valor é menor que 10".
*/
$iNumero = $_GET['numero'];
function verificaNumero($iNumero){
    if ($iNumero > 10){
        return 'O valor é maior que 10';
    }
    return 'O valor é menor que 10';
}
echo verificaNumero($iNumero);

?>


<br>
<a href="exe01.html">Voltar</a>