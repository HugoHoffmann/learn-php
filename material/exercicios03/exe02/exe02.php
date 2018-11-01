<?php
/* 
Atividade 02
Efetue um algoritmo PHP que receba um valor digitado pelo usuário e imprima o texto "o valor é
maior ou igual a 10" caso isso seja verdade, senão imprima "o valor não é maior ou igual a 10".
*/
$iNumero = $_GET['numero'];
function verificaTamanho($iNumero){
    if ($iNumero >= 10){
        return 'O valor é maior ou igual a 10 <br>';
    }
    return 'O valor não é maior ou igual a 10 <br>';
}
echo verificaTamanho($iNumero);
?>

<br>
<a href="exe02.html">Voltar</a>