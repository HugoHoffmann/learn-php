<?php
/* 
Atividade 03
Efetue um algoritmo PHP que receba um valor digitado pelo usu�rio e verifique se esse valor �
positivo, negativo ou igual a zero. Imprima na tela: "Valor Positivo", "Valor Negativo", "Igual a
Zero"
*/
$iNumero = $_GET['numero'];
function verificaNumero($iNumero){
    if ($iNumero > 0){
        return 'O valor � Positivo <br>';
    }
    else if($iNumero < 0 ){
        return 'O valor � negativo <br>';
    }
    return 'valor igual a zero <br>';
}
echo verificaNumero($iNumero);
?>

<br>
<a href="index.html">Voltar</a>