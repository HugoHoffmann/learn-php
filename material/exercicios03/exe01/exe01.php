<?php
/* 
Atividade 01
Efetue um algoritmo PHP que receba um valor digitado pelo usu�rio e imprima o texto "o valor �
maior que 10" caso isso seja verdade, sen�o imprima "o valor � menor que 10".
*/
$iNumero = $_GET['numero'];
function verificaNumero($iNumero){
    if ($iNumero > 10){
        return 'O valor � maior que 10';
    }
    return 'O valor � menor que 10';
}
echo verificaNumero($iNumero);

?>


<br>
<a href="exe01.html">Voltar</a>