<?php
/* 
4. Considerando a frase abaixo escreva um script PHP para:
Frase: Seja Bem Vindo ao nosso site senhor Jo�o, conhe�a todos os nossos servi�os.
a) Transformar todas as letras para mai�sculas (fun��o strtoupper);
b) Transformar todas as letras para min�sculas (fun��o strtolower);
c) Somente a primeira letra mai�scula (fun��o ucfirst).
*/
$sFrase = 'Seja Bem Vindo ao nosso site senhor Jo�o, conhe�a todos os nossos servi�os.';
echo mb_strtoupper($sFrase, 'windows-1252');
echo '<br>';
echo strtolower($sFrase);
echo '<br>';
echo ucfirst($sFrase);
?>

<br>
<a href="index.html">Voltar</a>