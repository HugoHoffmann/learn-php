<?php
/* 
1. Crie um arquivo chamado funcao.php. Neste arquivo implemente uma 
 * fun��o que calcule uma potencia��o. Ser�o passados como par�metros: a base e o
 *  expoente. Feito isso, crie o arquivo potenciacao.php, inclua o arquivo fun��o.php 
 * e realize chamadas para a sua fun��o.
*/
function expo($iN1, $iN2){
    $iExpo = 0;
    for ($i = 1; $i < $iN2; $i++){
        $iExpo += $iN1 * $iN1 ; 
    }
    return $iExpo;
}