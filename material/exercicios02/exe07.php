<?php
/* 
7. Crie uma fun��o que receba como par�metro o peso e altura de uma pessoa e retorne seu IMC e 
uma mensagem sobre ele considerando a tabela e f�rmula abaixo:
IMC = Peso / (Altura * Altura)
Condi��o	Situa��o
IMC abaixo de 20	Abaixo do peso
IMC de 20 at� 25 	Peso Normal
IMC de 25 at� 30 	Sobre Peso
IMC de 30 at� 40	Obeso
IMC de 40 e acima 	Obeso M�rbido

* Utilize switch
*/
function imc($fAltura, $fPeso){
    $fImc = $fPeso/($fAltura * $fAltura);
    switch ($fImc){
        case $fImc < 20 : 
            return 'IMC '.$fImc.' Abaixo do peso! '; // Quando utilizado o return n�o se faz necess�rio 
        case ($fImc >= 20) && ($fImc < 25) :         //utlizar um break, pois a execu��o j� ser� terminada
            return 'IMC '.$fImc.' Peso normal! ';
        case ($fImc >= 25) && ($fImc < 30) : 
            return 'IMC '.$fImc.' Sobre peso! ';
        case ($fImc >= 30) && ($fImc < 40)  : 
            return 'IMC '.$fImc.' OBESO! ';
        case $fImc >= 40 : 
            return 'IMC '.$fImc.' OBESO M�RBIDO! ';
    }
}
echo imc(1.81, 85);
?>

<br>
<a href="index.html">Voltar</a>