<?php
/* 7. Declare e imprima um array, onde o índice deve ser o estado e os valores devem ser as cidades conforme tabela abaixo:
SC	Rio do Sul, Blumenau, Joinville
RS	Porto Alegre, Santa Rosa, Caxias do Sul
PR	Curitiba, Pato Branco, Londrina
*/
$oEnde = ["SC" => ["Rio do Sul", "Blumenau", "Joinville"],
          "RS" => ["Porto Alegre", "Santa Rosa", "Caxias do Sul"],
          "PR" => ["Curitiba", "Pato Branco", " Londrina"]];
?>

<style>
    table, tr,td{
        border: 1px solid black;
    }
</style>
<table>
    <tr>
        <td>SC</td>
        <td><?= $oEnde["SC"][0] . ', ' . $oEnde["SC"][1] . ', ' . $oEnde["SC"][2] ?></td>
    </tr>
    <tr>
        <td>RS</td>
        <td><?= $oEnde["RS"][0] . ', ' . $oEnde["SC"][1] . ', ' . $oEnde["SC"][2] ?></td>
    </tr>
    <tr>
        <td>PR</td>
        <td><?= $oEnde["PR"][0] . ', ' . $oEnde["SC"][1] . ', ' . $oEnde["SC"][2] ?></td>
    </tr>
</table>