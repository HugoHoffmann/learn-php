<?php
/* 
3. Crie um script PHP onde exista 
uma função para cada operação aritmética 
(soma, subtração, multiplicação, divisão). 
Cada função deve retornar o resultado da operação
*/
function soma($iN1, $iN2){
    return $iN1 + $iN2;
}

function divisao($iN1, $iN2){
    if($iN2!=0){
        return $iN1/$iN2; 
    }else{
        return 0;
    }
}

function sub($iN1, $iN2){
    return $iN1-$iN2;
}
function multi($iN1, $iN2){
    return $iN1 * $iN2;
}
echo 'Soma: '.soma(10,5);
echo '<br>';
echo 'Divisão: '.divisao(10,5);
echo '<br>';
echo 'Subtração: '.sub(10,5);
echo '<br>';
echo 'Multiplicação: '.multi(10,5);
?>

<br>
<a href="index.html">Voltar</a>