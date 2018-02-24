<?php
/*print isset($a); // $a no esta definida. Imprime ''.
var_dump($a);
$b = 0; // isset($b) = verdadero (1);
var_dump($b);
$c = array(); // isset($c) = verdadero
var_dump($c);
$b = null; // Ahora isset($b) = false;
var_dump($b);
unset($c); // Ahora isset($c) = false;
var_dump($c);*/
var_dump(isset($a));
$a=null;
echo "\nexiste a?\n";
var_dump(isset($a));
$a=1;
var_dump(isset($a));
echo "ahora sí existe\n";
unset($a);
var_dump(isset($a));
echo "ahí ya se fue :V \n";
?>