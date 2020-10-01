<!<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Dokumento</title>
</head>
<body>
  <?php
  echo "<u>Dane kontaktowe: </u><br>";
  include './test1/test1.php';
  include './test/test.php';

  echo 'Imię: ', $imie;
  echo '<br>Nazwisko: ', $nazwisko;
  ?>
</body>
</html>
