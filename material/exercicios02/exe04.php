<?php
/* 
4. Considerando a frase abaixo escreva um script PHP para:
Frase: Seja Bem Vindo ao nosso site senhor João, conheça todos os nossos serviços.
a) Transformar todas as letras para maiúsculas (função strtoupper);
b) Transformar todas as letras para minúsculas (função strtolower);
c) Somente a primeira letra maiúscula (função ucfirst).
*/
$sFrase = 'Seja Bem Vindo ao nosso site senhor João, conheça todos os nossos serviços.';
echo mb_strtoupper($sFrase, 'windows-1252');
echo '<br>';
echo strtolower($sFrase);
echo '<br>';
echo ucfirst($sFrase);
?>

<br>
<a href="index.html">Voltar</a>