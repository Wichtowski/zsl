<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>F0rmularze</title>
  </head>
  <body>
    <form method="get">
      <input type="text" name="name" autofocus><br><br>
      <input type="text" name="surname"><br><br>
      <input type="submit" value="Wyślij"><hr>
    </form>
    <?php
    if(!empty($_GET['name'])&& !empty($_GET['surname']))
    {
      $imie = ucfirst(strtolower(ltrim($_GET['name'])));
      $nazwisko = ucfirst(strtolower(ltrim($_GET['surname'])));
      echo "Imię: $imie<br>";
      echo "Nazwisko: $nazwisko";

    }








/* %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
 ############ALTERNATYWNA WERSJA Z ISSET###################
<?php
  if(isset($_GET['surname']))
  {
    $surname = $_GET['surname'];
    echo "Nazwisko: $surname";
  }
  else
  {
    echo "Wyślij formularz";
  }
?>

####################ALTERNATYWA Z EMPTY#####################
<?php
  if(empty($_GET['surname']))
  {
    echo "Nie wpisano nazwiska";

  }
  else
  {
    $surname = $_GET['surname'];
    echo "Nazwisko: $surname";
  }
?>
############################################################
if(empty($_GET['surname']))
{// Zanegowanie empty poprzez (!) daje nam taki sam wynik jak isset //wczytuje wartosc z formularza surname
echo "Uzupełnij formularz";
}
else{
ob_clean();
echo "Nazwisko: ";
echo $_GET['surname'];
echo '<hr><br><a href="5_Formularze.php">Powrót do formularza</a>';
}
 %%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%%
*/
?>
  </body>
</html>
