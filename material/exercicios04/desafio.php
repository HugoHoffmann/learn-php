<?php
define('ENTER', '
        ');

/* 
Desafio:
Considerando os times e seus dados estatísticos listados abaixo, crie um script PHP que:
Time    	Posição	Pontos	Retrospecto
Corinthians	1	81	E,D,V
Sport           2       69      V,V,E
Santos          3	58	D,D,V 
Cruzeiro	4	52	E,V,E
Internacional	5	50	D,V,E
a) Transcreva os dados da tabela em um array;
b) Percorra este array e para cada time gere um objeto JSON com seus dados;
c) Grave estes dados em um arquivo, de forma que cada time seja uma linha;
d) Leia as informações deste arquivo, transcreva novamente em um array e imprima uma tabela com a classificação do campeonato.
*/
$aTabela = [['corinthians' => ['posicao' => 1, 'pontos' => 81,'retrospecto' => ['E','D','V']]],
            ['sport'       => ['posicao' => 2, 'pontos' => 69, 'retrospecto' => ['V','V','E']]],
            ['santos'      => ['posicao' => 3, 'pontos' => 58, 'retrospecto' => ['D','D','V']]],
            ['cruzeiro'    => ['posicao' => 4, 'pontos' => 52, 'retrospecto' => ['E','V','E']]],
            ['internacional'    => ['posicao' => 5, 'pontos' => 50, 'retrospecto' => ['D','V','E']]] ];

foreach ($aTabela AS $aTime){
    $sJSON = json_encode($aTime);
    file_put_contents('arquivo.txt', $sJSON.ENTER, FILE_APPEND);
}

// pegar as informações novamente
$sConteudo = trim(file_get_contents('arquivo.txt'));

$aLinhas = explode(ENTER,$sConteudo);
echo '<table>
        <tr>
            <th>Time</th>
            <th>Posição</th>
            <th>Pontos</th>
            <th>Retrospecto</th>
        </tr>';

foreach($aLinhas as $sTime){
    $aTime = json_decode($sTime,true);
        foreach($aTime AS $iIndice => $xValor){    
            echo'<tr>
                 <td>'.$iIndice.'</td>
                 <td>'.$xValor['posicao'].'</td>
                 <td>'.$xValor['pontos'].'</td>
                 <td>'.implode(',',$xValor['retrospecto']).'</td> 
                </tr>';
        }
}
echo'</table>';

?>
<!--//decodificar
//dar um implode para quebrar em um array em cada linha -->