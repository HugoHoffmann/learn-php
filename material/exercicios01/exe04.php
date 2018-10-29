<?php
/*4. Declare as duas variáveis com seu respectivo valor:
$a = ‘Amanhã’;
$b = ‘PHP’;
Crie uma nova variável que deverá receber o texto abaixo (as palavras amanhã e php deverão ser impressas com o uso das variáveis:
Na aula de amanhã aprenderemos sobre noções básicas de PHP.
*/
$$sA = 'Amanhã';
$sB = 'php';
$sC = $$sA.' '.$sB;

echo $sC;