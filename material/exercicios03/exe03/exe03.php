<?php
/* 
Atividade 03
Efetue um algoritmo PHP que receba um valor digitado pelo usuário e verifique se esse valor é
positivo, negativo ou igual a zero. Imprima na tela: "Valor Positivo", "Valor Negativo", "Igual a
Zero"
*/
$iNumero = $_GET['numero'];
function verificaNumero($iNumero){
    if ($iNumero > 0){
        return 'O valor é Positivo <br>';
    }
    else if($iNumero < 0 ){
        return 'O valor é negativo <br>';
    }
    return 'valor igual a zero <br>';
}
echo verificaNumero($iNumero);
?>

<br>
<a href="index.html">Voltar</a>