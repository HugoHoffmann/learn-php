<?php

/* 
 10. Fa�a o mesmo do exerc�cio anterior, por�m, utilizando a data do seu anivers�rio.
 */
$timestamp = mktime(0, 0, 0, 06, 04, 1999);

echo date('Y/m/d',$timestamp); //A
echo '<br>';
echo date('y/m/d', $timestamp); //B
echo '<br>';
echo date('d/m/y', $timestamp); //C

