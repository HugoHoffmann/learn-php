<?php
/* 
2. Crie um formul�rio HTML que contenha um campo para informa��o de um nome. Este nome 
 * dever� ser submetido para o PHP, que dever� imprimir: Boa noite, $nome! Realizar 
 * a submiss�o utilizando GET e depois POST.
*/

?>

<form method="get" name="nome" action="ola.php">
    <label>Nome: </label>
    <input type="text" name="nome">
    <input type="submit">
</form>