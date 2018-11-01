<?php
/* 
Atividade 06
Efetue um algoritmo PHP que receba quatro notas de um aluno, calcule e imprima a média
aritmética das notas e a mensagem de aprovado para média superior ou igual a 7.0 ou a
mensagem de reprovado para média inferior a 7.0
*/
$fNota1 = 4.5;
$fNota2 = 5.5;
$fNota3 = 9;
$fNota4 = 9;
function notas($fNota1, $fNota2, $fNota3, $fNota4){
    $fMedia = ($fNota1 + $fNota2 + $fNota3 + $fNota4)/4;
    if($fMedia >= 7){
        return 'Aprovado com média: '.$fMedia;
    }
    return 'Reprovado com média: '.$fMedia;
}
echo notas($fNota1, $fNota2, $fNota3, $fNota4);
?>

<br>
<a href="index.html">Voltar</a>