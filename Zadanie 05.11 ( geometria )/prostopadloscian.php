<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="ssc.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Prostopadłościan:</h1>
<table>

    <tr>
      <td>
      <img src="prostopadloscian.jpg"><br>
    </td>
    </tr>
    <tr>
      <td>
        <form method="get" align="middle">
          <input type="number" name="a" value="<?php if(isset($_GET['a']))echo htmlspecialchars($_GET['a']); ?>" placeholder="a" required><br>
          <input type="number" name="b" value="<?php if(isset($_GET['b']))echo htmlspecialchars($_GET['b']); ?>" placeholder="b" required><br>
          <input type="number" name="c" value="<?php if(isset($_GET['c']))echo htmlspecialchars($_GET['c']); ?>" placeholder="c" required><br>
          <input type="submit" value="Oblicz"><br>
        </form>
      </td>
    </tr>
</table>

<?php
if(!isset($_GET['a']))
    {
        $a = 0;
    }
    else
    {
      $a = $_GET['a'];
    }
  if(!isset($_GET['b']))
    {
        $b= 0;
    }
    else
    {
      $b=$_GET['b'];
    }
    if(!isset($_GET['c']))
    {
        $c=0;
    }
    else
    {
      $c=$_GET['c'];
    }
  require_once './scripts/scripts_prostopadloscian.php';




if(($a > 0 && isset($_GET['a'])) && ($b > 0 && isset($_GET['b'])) && ( $c > 0 && isset($_GET['c'])))
{
  $pole=pole_prostopadloscian($a, $b, $c);
  $obj=obj_prostopadloscian($a, $b, $c);
  $prze=przek_prostopadloscian($a, $b, $c);

  echo "1. Pole: ",number_format($pole,2,'.',''), "cm","&sup2<br>";
  echo "2. Objętość: ",number_format($obj,2,'.',''), "cm","&sup3<br>";
  echo "3. Długość przekątnej: ",number_format($prze,2,'.',''),"cm","<br>";

}
else if (($a <= 0 && isset($_GET['a'])) || ($b <= 0 && isset($_GET['b'])) || ($c <= 0 && isset($_GET['c']))) {
    echo<<<EXEERAL
     <h2 id="hehe">Dane podane w formularzu muszą być liczbami dodatnie!<br> Podaj poprawne wartości.<br></h2>
EXEERAL;
}
 ?>
 <a href="3_zadanie_formularze_geometria.php"><h3 align="middle">Powrót na stronę główną</h3></a>

  </body>
</html>
