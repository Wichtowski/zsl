<?php
$text = <<< T
    zsl - Zespół
    Szkół
    Łączności<br>
T;
   echo $text;
   echo nl2br($text);


//zamiana na małe litery
$name = 'jAnUSz';
$name = strtolower($name); // janusz
echo "$name<br>";

//zamiana na duże litery
$name = 'Krystyna'; //KRYSTYNA
$name = strtoupper($name);
echo "$name<br>";

//zmiana pierwszej litery na dużą
$name = 'aNNa noWak <br>';
echo ucfirst($name); // ANNa noWak

//zamiana wszystkich pierwszych liter w wyrtazach
echo ucwords($name); // ANNa noWak

//zad1 zamien zmienna $name aby wygladała = Anna Nowak
echo ucwords(strtolower($name));

//lorem ipsum
$text = <<< LOREM
dolore magna aliqua. Ut enim ad minim veniam,
quis nostrudexercitation ullamco laboris nisi
ut aliquip ex ea commodo consequat. Duis aute irure
dolor in reprehenderit in voluptate velit esse cillum
dolore eu fugiat nulla pariatur. Excepteur sint
occaecat cupidatat non proident, sunt in culpa qui
officia deserunt mollit anim id est laborum.ipsum
dolor sit amet, consectetur adipisicing elit, sed do
eiusmod tempor incididunt ut labore et
LOREM;

echo "<br>$text<br>";
echo wordwrap($text,40,"<hr>");


//czyszczenie zawartości bufora
ob_clean();

//usuwanie białych znaków
$name = 'Anna';
$name1 = '  Anna ';
echo 'Długość $name: ',strlen($name), "<br>"; //4
echo 'Długość $name1: ',strlen($name1), "<br>"; //7

echo strlen(ltrim($name1)); //5
echo strlen(rtrim($name1)); //6
echo strlen(trim($name1)); //4

echo strlen($name1); //7
$name1 = trim($name1);
echo strlen($name1),  "<br>"; //4



// przeszukiwanie ciągów znaków
$address = "Poznań, ul. Polna 2, tel. (61) 123-45-67)";
$search = strstr($address,'tel');
echo "<br>$search<br>"; // Wypisze na wszystko co po tel razem z tel

$addres = "Poznań, ul. Polna 2, tel. (61) 123-45-67)";
$search = stristr($address, 'Tel', true);
echo "<br>$search<br>" ; // Wypisze na  wszystko co znalazło przed Tel

echo strstr('zsl@gmail.com', '@'); //@gmail
echo strstr('zsl@gmail.com', 64); //@gmail
$domain = substr(strstr('zsl@gmail.com', '@'), 1);
echo "<br>$domain";


 ?>
