<?php
/* 
Atividade 08
Efetue um algoritmo PHP que calcule e imprima o sal�rio reajustado de um funcion�rio de acordo
com a seguinte regra:
� sal�rios at� 300, reajuste de 50%
� sal�rios maiores que 300, reajuste de 30%
*/
$fSalario = 100;
function calculaSalario($fSalario){
    if($fSalario <= 300){
        $fSalario *= 1.5;
        return 'Reajuste de 50% R$'.$fSalario;
    }
    $fSalario *= 1.3;
    return 'Reajuste de 30% R$'.$fSalario;
}
echo calculaSalario($fSalario);
?>

<br>
<a href="index.html">Voltar</a>