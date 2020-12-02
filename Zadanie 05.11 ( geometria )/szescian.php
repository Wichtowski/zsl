<!DOCTYPE html>
<html lang="en" dir="ltr">
<link rel="stylesheet" href="ssc.css">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Sześcian:</h1>
<table>
    <tr>
      <td>
      <img src="szescian.jpg"><br>
    </td>
    </tr>
    <tr>
      <td>
        <form method="get" align="middle">
          <input type="number" name="a" value="<?php if(isset($_GET['a']))echo htmlspecialchars($_GET['a']); ?>" placeholder="a" required><br>
          <input type="submit" value="Oblicz"><br>
        </form>
      </td>
    </tr>
</table>

<?php

if(!isset($_GET['a']))
    $a = 0;
else
    $a = $_GET['a'];

require_once './scripts/scripts_szescian.php';



if($a > 0 && isset($_GET['a']))
  {
    $pole=pole_szescianu($a);
    $obj=obj_szescianu($a);
    $przekatna=przek_szescianu($a);
    $wpis=wpis_szescianu($a);
    $opis=opis_szescianu($a);

echo "1. Pole: ",number_format($pole,2,'.',''), "cm","&sup2<br>";
echo "2. Objętość: ",number_format($obj,2,'.',''), "cm","&sup3<br>";
echo "3. Długość przekątnej: ",number_format($przekatna,2,'.',''),"cm","<br>";
echo "4. Promień kuli wpisanej w sześcian: ",number_format($wpis,2,'.',''), "cm","<br>";
echo "5. Promień kuli opisanej na sześcianie: ",number_format($opis,2,'.',''), "cm","<br>";

}
else if ($a<=0 && isset($_GET['a'])) {
    echo<<<EXEERAL
     <h2 id="hehe">Dane podane w formularzu muszą być liczbami dodatnimi!<br> Podaj poprawne wartości.<br></h2>
  EXEERAL;
}

 ?>
 <a href="3_zadanie_formularze_geometria.php"><h3 align="middle"><br>Powrót na stronę główną</h3></a>

  </body>
</html>
