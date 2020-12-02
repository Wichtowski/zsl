<?php
//Walec
function pp_walec($r, $h)
{
  $PolePodstawy=M_PI*pow($r, 2);
  return "$PolePodstawy";
}
function pb_walec($r, $h)
{
  $PoleBoczne=2*M_PI*$r*$h;
  return "$PoleBoczne";
}
function pole_walec($r, $h)
{
  $pp=pp_walec($r,$h);
  $pb=pb_walec($r,$h);
  $pole=2*$pp+$pb;
  return "$pole";
}
function obj_walec($r, $h)
{
  $pp=pp_walec($r,$h);
  $obj1=$pp*$h;
  return "$obj1";
}
//Walec
 ?>
