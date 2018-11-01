<?php
/* 
 Atividade 07
Efetue um algoritmo PHP que receba a altura e o sexo de uma pessoa, calcule e imprima o seu
peso ideal, utilizando as seguintes fórmulas:
• para homens: (72.7 * H) - 58
• para mulheres: (62.1 * H) – 44.7
 */
$fAltura = 1.80;
$fPeso = 80;
$sSexo = 'homem';
function verificaPesoIdeal($fAltura, $fPeso, $sSexo){
    if($sSexo == 'homem'){
        $fCalculo = ($fPeso * $fAltura) -58;
        $sInfo = 'Peso ideal para homem: '.$fCalculo; 
        return $sInfo;
    }
    $fCalculo = ($fPeso * $fAltura) -58;
    $sInfo = 'Peso ideal para homem: '.$fCalculo; 
    return $sInfo;
}
echo verificaPesoIdeal($fAltura, $fPeso, $sSexo);
?>

<br>
<a href="index.html">Voltar</a>