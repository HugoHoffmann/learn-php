<?php

/* 
 2. Crie um formul�rio HTML que contenha um campo para informa��o de um nome. Este nome 
 * dever� ser submetido para o PHP, que dever� imprimir: Boa noite, $nome! Realizar 
 * a submiss�o utilizando GET e depois POST.
 */
if(isset($_POST['nome'])){
    $sNome2 = $_POST['nome'];
    echo 'Boa noite, '.$sNome2.'!';
}
if(isset($_GET['nome'])){
    $sNome1 = $_GET['nome'];
    echo 'Boa noite, '.$sNome1.'!';
}


