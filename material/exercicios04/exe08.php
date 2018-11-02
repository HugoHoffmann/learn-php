<?php
/* 
8. Crie um script PHP que receba o c�digo JSON 
 * abaixo, transforme ele em um array, e exiba 
 * suas informa��es na tela (N�o utilizar print_r).
{"Title": "The Cuckoos Calling",
"Author": "Robert Galbraith",
"Detail": {
"Publisher": "Little Brown"
}}
*/
$sJSON = '{"Title": "The Cuckoos Calling",
           "Author": "Robert Galbraith",
           "Detail": {
                "Publisher": "Little Brown"
           }}';
           
           
$aJSON = JSON_DECODE($sJSON, true);

echo imprimeArray($aJSON);
function imprimeArray($aArray){
    $sImprime = '';
    
    foreach($aArray as $iIndice => $xValor){
       if(is_array($xValor)){
           $sImprime .= $iIndice.' = '.imprimeArray($xValor);
       }
       else{
           $sImprime .= $iIndice.' = '.$xValor.' <br>';
       }
   }
   
   return $sImprime;
}
?>

<br>
<a href="index.html">Voltar</a>