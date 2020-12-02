<?php
//Ostrosłup
function pp_ost($a, $h, $H)
{
  $pp=pow($a, 2);
  $pb1=($a*$h)/2;
  $pb=$pb1*4;
  $pc=$pb+$pp;
  return "$pc";
}
function obj_ost($a, $h, $H)
{
  $obj1=(1/3)*pow($a, 2)*$H;
  return "$obj1";
}
//Ostrosłup
 ?>
