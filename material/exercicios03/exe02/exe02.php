<?php
/* 
Atividade 02
Efetue um algoritmo PHP que receba um valor digitado pelo usu�rio e imprima o texto "o valor �
maior ou igual a 10" caso isso seja verdade, sen�o imprima "o valor n�o � maior ou igual a 10".
*/
$iNumero = $_GET['numero'];
function verificaTamanho($iNumero){
    if ($iNumero >= 10){
        return 'O valor � maior ou igual a 10 <br>';
    }
    return 'O valor n�o � maior ou igual a 10 <br>';
}
echo verificaTamanho($iNumero);
?>

<br>
<a href="exe02.html">Voltar</a>