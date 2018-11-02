<?php
/* 
5. Crie um script PHP que imprima as tabuadas de 1 a 10 em uma tabela.
*/
$iN = $_GET['numero'];

for($i = 1; $i <= 10; $i++){
   echo '<table>
            <tr>
                <td>'.$iN.'</td>
                <td>X</td>
                <td>'.$i.'</td>
                <td>=</td>
                <td>'.$i * $iN.'</td>
            </tr>
         </table>
         <style>
            table{
                border: 1px solid black;
            }
        </style>';
}
?>


<br>
<a href="form.html">Voltar</a>