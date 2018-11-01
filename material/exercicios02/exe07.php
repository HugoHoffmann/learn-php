<?php
/* 
7. Crie uma função que receba como parâmetro o peso e altura de uma pessoa e retorne seu IMC e 
uma mensagem sobre ele considerando a tabela e fórmula abaixo:
IMC = Peso / (Altura * Altura)
Condição	Situação
IMC abaixo de 20	Abaixo do peso
IMC de 20 até 25 	Peso Normal
IMC de 25 até 30 	Sobre Peso
IMC de 30 até 40	Obeso
IMC de 40 e acima 	Obeso Mórbido

* Utilize switch
*/
function imc($fAltura, $fPeso){
    $fImc = $fPeso/($fAltura * $fAltura);
    switch ($fImc){
        case $fImc < 20 : 
            return 'IMC '.$fImc.' Abaixo do peso! '; // Quando utilizado o return não se faz necessário 
        case ($fImc >= 20) && ($fImc < 25) :         //utlizar um break, pois a execução já será terminada
            return 'IMC '.$fImc.' Peso normal! ';
        case ($fImc >= 25) && ($fImc < 30) : 
            return 'IMC '.$fImc.' Sobre peso! ';
        case ($fImc >= 30) && ($fImc < 40)  : 
            return 'IMC '.$fImc.' OBESO! ';
        case $fImc >= 40 : 
            return 'IMC '.$fImc.' OBESO MÓRBIDO! ';
    }
}
echo imc(1.81, 85);
?>

<br>
<a href="index.html">Voltar</a>