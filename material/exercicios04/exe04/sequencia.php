<?php
/* 
3. Crie uma função PHP que receba um número e imprima os números em sequência 
 * seguidos por um traço (o último número não deve conter traço). 
Exemplo: 1-2-3-4-5-6-7-8-9-10, sendo passado 10 como parâmetro neste caso.
*/
const TRACO = '-';

$iN = $_GET['nu'];
$sTeste = '';
for($i = 1; $i < $iN; $i++){
    $sTeste .= $i.TRACO;
}
echo $sTeste.$iN;
?>
<br>
<a href="form.html">Voltar</a>




