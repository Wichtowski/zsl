<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator</title>
</head>
<body>
<?php
require_once './function.php';

if ((empty($_POST['X'])) || (empty($_POST['Y'])))
{
echo <<< FORM
  <h1>Kalkulatr</h1>
  <form method="post">
    <input type="text" name="X" required placeholder="x">
    <select name="opcja">
      <option value="dodawanie" selected>+</option>
      <option value="odejmowanie">-</option>
      <option value="mnozenie">*</option>
      <option value="dzielenie">/</option>
    </select>
    <input type="number" name="Y" required placeholder="y">
    <input type="submit" value="=">
    <input type="number" disabled>
  </form>
FORM;
}

else {
  $X=$_POST['X'];
  $Y=$_POST['Y'];
  $dzialanie=$_POST['opcja'];
  switch($dzialanie)
{
        case 'dodawanie':
    $wynik=suma($X,$Y);
break;
        case 'odejmowanie':
    $wynik=roznica($X,$Y);
break;
        case 'mnozenie':
    $wynik=iloraz($X,$Y);
break;
        case 'dzielenie':
    $wynik=iloczyn($X,$Y);
break;
}
echo <<< FORM
  <h1>Kalkulator</h1>
  <form method="post">
    <input type="text" name="X" value=$X>
    <select name="opcja">
      <option value="dodawanie">+</option>
      <option value="odejmowanie">-</option>
      <option value="mnozenie">*</option>
      <option value="dzielenie">/</option>
    </select>
    <input type="number" name="Y" value=$Y>
    <input type="submit" name="=">
    <input type="number" name="" value=$wynik disabled>
  </form>
FORM;
}
?>
  </form>
   </body>
 </html>
