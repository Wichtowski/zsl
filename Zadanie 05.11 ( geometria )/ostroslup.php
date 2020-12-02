<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="ssc.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Ostrosłup:</h1>
<table >

    <tr>
      <td>
      <img src="ostroslup1.jpg"><br>
    </td>
    </tr>
    <tr>
      <td>
        <form method="get" align="middle">
          <input type="number" name="a" value="<?php if(isset($_GET['a']))echo htmlspecialchars($_GET['a']); ?>" placeholder="a" required><br>
          <input type="number" name="h" value="<?php if(isset($_GET['h']))echo htmlspecialchars($_GET['h']); ?>" placeholder="h" required><br>
          <input type="number" name="H" value="<?php if(isset($_GET['H']))echo htmlspecialchars($_GET['H']); ?>" placeholder="H" required><br>
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
  if(!isset($_GET['h']))
    {
        $h= 0;
    }
    else
    {
      $h=$_GET['h'];
    }
    if(!isset($_GET['H']))
    {
        $H=0;
    }
    else
    {
      $H=$_GET['H'];
    }
require_once './scripts\scripts_ostroslup.php';



if(($a > 0 && isset($_GET['a'])) && ($h > 0 && isset($_GET['h'])) && ( $H > 0 && isset($_GET['H'])))
  {
    $PoleCale=pp_ost($a, $h, $H);
    $obj=obj_ost($a, $h, $H);
    echo "1. Pole: ",number_format($PoleCale,2,'.',''), "cm","&sup2<br>";
    echo "2. Objętość: ",number_format($obj,2,'.',''), "cm","&sup3<br>";

}
else if (($a <= 0 && isset($_GET['a'])) || ($h <= 0 && isset($_GET['h'])) || ($H <= 0 && isset($_GET['H']))) {
    echo<<<EXEERAL
     <h2 id="hehe">Dane podane w formularzu muszą być liczbami dodatnymi!<br> Podaj poprawne wartości.<br></h2>
EXEERAL;
}
 ?>
 <a href="3_zadanie_formularze_geometria.php"><h3 align="middle">Powrót na stronę główną</h3></a>

</body>
</html>
