<?php

/* 
 2. Crie um formulсrio HTML que contenha um campo para informaчуo de um nome. Este nome 
 * deverс ser submetido para o PHP, que deverс imprimir: Boa noite, $nome! Realizar 
 * a submissуo utilizando GET e depois POST.
 */
if(isset($_POST['nome'])){
    $sNome2 = $_POST['nome'];
    echo 'Boa noite, '.$sNome2.'!';
}
if(isset($_GET['nome'])){
    $sNome1 = $_GET['nome'];
    echo 'Boa noite, '.$sNome1.'!';
}


