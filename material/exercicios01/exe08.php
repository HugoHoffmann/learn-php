<?php
/* 8. Declare um array, onde o índice deve ser o time e este deve conter informações 
sobre a situação do mesmo no campeonato. Considere as informações e dados da tabela abaixo:
Time	Posição	Pontos	Saldo de Gols
Joinville	2	5	4
Chapecoense	1	9	6
Figuerense	3	3	0
Avaí	4	1	-2
*/
$aFutebol = ["Joinville"   => [2, 5, 4],
             "Chapecoense" => [1, 9, 6],
             "Figuerense"  => [3, 3, 0],
             "Avaí"        => [4, 1, -2]]
?>

<style>
    table, th, tr,td{
        border: 1px solid black;
    }
</style>	
<table>
    <tr>
        <th>Time</th>
        <th>Posição</th>
        <th>Pontos</th>
        <th>Saldo de Gols</th>
    </tr>
    <tr>
        <td>Joinville</td>
        <td><?= $aFutebol["Joinville"][0] ?></td>
        <td><?= $aFutebol["Joinville"][1] ?></td>
        <td><?= $aFutebol["Joinville"][2] ?></td>
    </tr>
    <tr>
        <td>Chapecoense</td>
        <td><?= $aFutebol["Chapecoense"][0] ?></td>
        <td><?= $aFutebol["Chapecoense"][1] ?></td>
        <td><?= $aFutebol["Chapecoense"][2] ?></td>
    </tr>
    <tr>
        <td>Figuerense</td>
        <td><?= $aFutebol["Figuerense"][0] ?></td>
        <td><?= $aFutebol["Figuerense"][1] ?></td>
        <td><?= $aFutebol["Figuerense"][2] ?></td>
    </tr>
    <tr>
        <td>Avaí</td>
        <td><?= $aFutebol["Avaí"][0] ?></td>
        <td><?= $aFutebol["Avaí"][1] ?></td>
        <td><?= $aFutebol["Avaí"][2] ?></td>
    </tr>
</table>