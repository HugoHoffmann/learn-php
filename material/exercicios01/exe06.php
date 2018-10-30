<?php
/*6. Faça um script PHP que imprima "second" and “Red” a partir do array abaixo:
$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
"numbers" => array ( 1, 2, 3, 4, 5, 6 ),
"holes" => array ( "First", 5 => "Second", "Third")); */
$oColor = ["color"   => ["a" => "Red", "b" => "Green", "c" => "White"],
           "numbers" => ["First", 5 => "Second", "Third"]];

echo $oColor["numbers"][5] . ' <br>' . $oColor["color"]["a"];
	
