<?php
/* 
3. Crie uma fun��o PHP que receba um n�mero e imprima os n�meros em sequ�ncia 
 * seguidos por um tra�o (o �ltimo n�mero n�o deve conter tra�o). 
Exemplo: 1-2-3-4-5-6-7-8-9-10, sendo passado 10 como par�metro neste caso.
*/
const TRACO = '-';

function seque($iN){
    $sTeste = '';
    for($i = 1; $i < $iN; $i++){
        $sTeste .= $i.TRACO;
    }
    echo $sTeste.$iN;
}


seque(10);
