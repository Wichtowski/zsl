<?php
//Prostopadłościan
function pole_prostopadloscian($a, $b, $c)
{
$wynik=2*($a*$b)+2*($a*$c)+2*($b*$c);
return "$wynik";
}
function obj_prostopadloscian($a, $b, $c)
{
$wynik=$a*$b*$c;
return "$wynik";
}
function przek_prostopadloscian($a, $b, $c){
$exi=sqrt(pow($a, 2)+pow($b, 2)+pow($c, 2));
return "$exi";
}
//Prostopadłościan
?>
