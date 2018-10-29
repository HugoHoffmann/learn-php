<?php
/* 2. Declare três variáveis:
$carroA =15.000;
$carroB = 20.000;
$carroC = 25.000;
Imprima em uma tabela HTML nas colunas abaixo o valor das variáveis

Carro	Valor
Gol – 2010	R$ 15000
Palio – 2013	R$ 20.000
Fiesta – 2014	R$ 25.000
 */
$iCarroA = 15000;
$iCarroB = 20000;
$iCarroC = 25000;

?>

<style>
    table, tr, th, td{
        border: 1px solid black;
    }
</style>
<table>
    <tr>
        <th>Carro</th>
        <th>Valor</th>
    </tr>
    <tr>
        <td>Gol - 2010</td>
        <td><?= $iCarroA ?></td>
    </tr>
    <tr>
        <td>Palio - 2013</td>
        <td><?php echo $iCarroB ?></td>
    </tr>
    <tr>
        <td>Fiesta - 2014</td>
        <td><?= $iCarroC ?></td>
    </tr>
</table>