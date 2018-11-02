<?php
/* 
1. Crie um arquivo chamado funcao.php. Neste arquivo implemente uma 
 * funчуo que calcule uma potenciaчуo. Serуo passados como parтmetros: a base e o
 *  expoente. Feito isso, crie o arquivo potenciacao.php, inclua o arquivo funчуo.php 
 * e realize chamadas para a sua funчуo.
*/
function expo($iN1, $iN2){
    $iExpo = 0;
    for ($i = 1; $i < $iN2; $i++){
        $iExpo += $iN1 * $iN1 ; 
    }
    return $iExpo;
}