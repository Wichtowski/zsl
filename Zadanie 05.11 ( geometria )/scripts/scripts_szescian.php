<?php
//Sześcian
function pole_szescianu($a)
{
  $wynik=6*pow($a, 2);
  return "$wynik";
}
function obj_szescianu($a)
{
  $wynik=pow($a, 3);
  return "$wynik";
}

function przek_szescianu($a)
{
  $wynik=$a*sqrt(3);
  return "$wynik";
}
function wpis_szescianu($a)
{
  $wynik=(1/2)*$a;
  return "$wynik";
}
function opis_szescianu($a)
{
  $przekatna=przek_szescianu($a);
  $wynik=(1/2)*$przekatna;
  return "$wynik";
}
//Sześcian
?>
