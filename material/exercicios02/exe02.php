<?php
/* 
2. Considerando a vari�vel superglobal $_SERVER, fa�a um script que:
a) Demonstre todas as informa��es do servidor;
b) Demonstre somente o IP;
c) Demonstre o nome do arquivo atual;
d) Demonstre IP do servidor e o nome do arquivo concatenados formando a URL.
*/
var_dump($_SERVER);
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo ($_SERVER['SERVER_ADDR']);
echo '<br>';
echo ($_SERVER['PHP_SELF']);
echo '<br>';
echo ($_SERVER['SERVER_ADDR']).($_SERVER['PHP_SELF']);
?>

<br>
<a href="index.html">Voltar</a>