<?php
/* 8. Declare um array, onde o �ndice deve ser o time e este deve conter informa��es 
sobre a situa��o do mesmo no campeonato. Considere as informa��es e dados da tabela abaixo:
Time	Posi��o	Pontos	Saldo de Gols
Joinville	2	5	4
Chapecoense	1	9	6
Figuerense	3	3	0
Ava�	4	1	-2
*/
$aFutebol = ["Joinville"   => [2, 5, 4],
             "Chapecoense" => [1, 9, 6],
             "Figuerense"  => [3, 3, 0],
             "Ava�"        => [4, 1, -2]]
?>

<style>
    table, th, tr,td{
        border: 1px solid black;
    }
</style>	
<table>
    <tr>
        <th>Time</th>
        <th>Posi��o</th>
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
        <td>Ava�</td>
        <td><?= $aFutebol["Ava�"][0] ?></td>
        <td><?= $aFutebol["Ava�"][1] ?></td>
        <td><?= $aFutebol["Ava�"][2] ?></td>
    </tr>
</table>