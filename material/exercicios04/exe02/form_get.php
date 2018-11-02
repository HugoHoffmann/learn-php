<?php
/* 
2. Crie um formulário HTML que contenha um campo para informação de um nome. Este nome 
 * deverá ser submetido para o PHP, que deverá imprimir: Boa noite, $nome! Realizar 
 * a submissão utilizando GET e depois POST.
*/

?>

<form method="get" name="nome" action="ola.php">
    <label>Nome: </label>
    <input type="text" name="nome">
    <input type="submit">
</form>