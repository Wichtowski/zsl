<?php
function suma($X,$Y)
{
  $wynik=$X+$Y;
  return $wynik;
}
function roznica($X,$Y)
{
  $wynik=$X-$Y;
  return $wynik;
}
function iloraz($X,$Y)
{
  $wynik=$X*$Y;
  return $wynik;
}
function iloczyn($X,$Y)
{
if ($Y!=0)
{
  $wynik=$X/$Y;
  return $wynik;
}
else
{
  echo <<<alert
<script>alert("Nie można dzielić przez zero");</script>
alert;
}
}

 ?>
