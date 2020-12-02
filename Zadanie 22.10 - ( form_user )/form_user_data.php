<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h4>Dane użytkownika :</h4>
    <?php
    $personal=$_POST['personal'];
    $name=$_POST['name'];
    $lastname=$_POST['lastname'];
    $kraj=$_POST['kraj'];
    $street1=$_POST['street1'];
    $street2=$_POST['street2'];
    $city=$_POST['city'];
    $woj=$_POST['woje'];
    $postal=$_POST['postal'];
    $tel=$_POST['tel'];

$postal1=substr($postal,0,2);
  $postal2=substr($postal,2);


if($personal=="p")
{$personal="Personal Account";
}
else($personal=="b");
{
$personal="Business Account";
}
      echo <<< DANE
      Konto: $personal <br>
      Imię i nazwisko: $name $lastname <br>
      Kraj: $kraj <br>
      Adres 1: $street1 <br>
      Adres 2: $street2 <br>
      Kod pocztowy i miasto: $postal1-$postal2 $city <br>
      Województwo: $woj <br>
      Numer telefonu:  $tel <br>

DANE;
     ?>
  </body>
</html>
