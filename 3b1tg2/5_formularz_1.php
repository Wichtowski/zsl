<!DOCTYPE html>
<html lang="PL" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formularze</title>
  </head>
  <body>

    <?php
    if (!empty($_GET['surname']))     //empty sprawdza czy jest puste a isset
    {
      //ob_clean();                     //czy jest wypelnione, ! powoduje
      $surname=$_GET['surname'];      //przeciwienstwo danej komendy
      echo "Nazwisko: $surname<hr>";
      echo "<a href=./5_formularz_1.php?>Powrót do formularzu</a>";
    }
    else
    {
      echo <<<FORM
      <form method="get">
        <input type="text" name="surname" autofocus><br><br>
        <input type="submit" value="Wyślij"><hr>
      </form>
    FORM;
    }

     ?>

  </body>
</html>