<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="ssc.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Walec:</h1>
<table>

    <tr>
      <td>
      <img src="walec.jpg"><br>
    </td>
    </tr>
    <tr>
      <td >
        <form method="get" align="middle">
          <input type="number" name="r" value="<?php if(isset($_GET['r']))echo htmlspecialchars($_GET['r']); ?>" placeholder="r" required><br>
          <input type="number" name="h" value="<?php if(isset($_GET['h']))echo htmlspecialchars($_GET['h']); ?>" placeholder="h" required><br>
          <input type="submit" value="Oblicz"><br>
        </form>
      </td>
    </tr>
</table>
<?php
if(!isset($_GET['r']))
    {
        $r = 0;
    }
    else
    {
      $r = $_GET['r'];
    }
  if(!isset($_GET['h']))
    {
        $h= 0;
    }
    else
    {
      $h=$_GET['h'];
    }
require_once './scripts/scripts_walec.php';

if(($r > 0 && isset($_GET['r'])) && ($h > 0 && isset($_GET['h'])))
  {
    $PolePodstawy=pp_walec($r,$h);
    $PoleBoczne=pb_walec($r, $h);
    $pole=pole_walec($r, $h);
    $obj=obj_walec($r, $h);
    echo "1. Pole podstawy: ",number_format($PolePodstawy,2,'.',''), "cm","&sup2<br>";
    echo "2. Pole boczne: ",number_format($PoleBoczne,2,'.',''), "cm","&sup2<br>";
    echo "3. Pole powierzchni całkowitej: ",number_format($pole,2,'.',''), "cm","&sup2<br>";
    echo "4. Objętość: ",number_format($obj,2,'.',''), "cm","&sup3<br>";
}

else if(($r <= 0 && isset($_GET['r'])) || ($h <= 0 && isset($_GET['h'])))
{
    echo<<<EXEERAL
     <h2 id="hehe">Dane podane w formularzu muszą być liczbami dodatnimi!<br> Podaj poprawne wartości.<br></h2>
EXEERAL;
}
 ?>
 <a href="3_zadanie_formularze_geometria.php"><h3 align="middle">Powrót na stronę główną</h3></a>

  </body>
</html>
