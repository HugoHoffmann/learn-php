<?php
/* 
 * 9. Escreva um script em PHP que contenha uma função que receba por parâmetro o nome, 
 * sobrenome e idade de uma pessoa. Estes valores devem ser adicionados em um array global
 * que no final deve ser impresso com os dados de todas as pessoas adicionadas através da chamada da função.
Obs.: Para imprimir o array utilize: echo “<pre>”.print_r($nomedoarray,true).”<pre>”;
 */
$aDados = []; // declaração da variável que irá ficar com escopo global sendo um array

function dados($sNome, $sSobrenome, $iIdade) {
    global $aDados;//realizar o acesso a variável global
    
    $aDados[] = [$sNome, $sSobrenome, $iIdade]; // e array começa na posição 0 e vai se autoincrementando 
}

dados('Hugo', 'Hoffmann', 19);
dados('Felipe', 'Lopes', 25);

echo '<pre>'.print_r($aDados,true).'<pre>';// mostra o array em sua forma original
?>

<br>
<a href="index.html">Voltar</a>