<?php
/* 
3. Crie um script PHP onde exista 
uma fun��o para cada opera��o aritm�tica 
(soma, subtra��o, multiplica��o, divis�o). 
Cada fun��o deve retornar o resultado da opera��o
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
echo 'Divis�o: '.divisao(10,5);
echo '<br>';
echo 'Subtra��o: '.sub(10,5);
echo '<br>';
echo 'Multiplica��o: '.multi(10,5);
?>

<br>
<a href="index.html">Voltar</a>