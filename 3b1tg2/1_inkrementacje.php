<?php
  // wersja PHP 7.4.9
  echo PHP_VERSION,'<br>';
  // echo phpinfo();

  $potega = 2 ** 10;
  echo $potega;

  echo 'a'.'b'.'c'; // a+b+c wyswietli abc
  echo 'a','b','c<br>'; //wyświetli a wyświetli b wyświetli c

  // operatory bitowe
  // and &, or |, not ~, xor ^, <<, >>

  $x = 0b1010;
  echo "$x<br>"; //10
  $x = $x << 1;
  echo "$x<br>"; //10100(2) => 4+16=20

  $x = $x >> 2;
  echo "$x<br>"; //101(2) => 1+4=5

  // porównanie
  $x = 10;
  $y = 1;
  echo $x <=> $y;
  $result = $x <=> $y;
  echo $result;

  if ($x==$y){
    echo 'zmienne są równe<br>';
  }else{
    echo 'zmienne są nieidentyczne<br>';
  }

  echo gettype($x); //intiger



  echo gettype($y); //DOUBLE
###################################################
/*

  postinkrementacja ++$x
  postdekrementacja --$x
  postinkrementacja $x++
  postdekrementacja $x--
*/







 $x=2;
 echo $x; //2
 echo '<br>';
 $x=$x--;
 echo $x;
 echo '<br>';
 $x=$x+3;
 echo $x; //5
 echo '<br>';
 $x=$x++;
 echo $x;
 echo '<br>';

 echo '<br>';
 $x =2;
 echo $x++;//2
 echo '<br>';
 echo ++$x;//4
 echo '<br>';
 echo $x;//4
 echo '<br>';
 $y=$x++;//4
 echo '<br>';
 echo $y;//4
 echo '<br>';
 $y=++$x;//4
 echo '<br>';
 echo $y;//6
 echo '<br>';
 echo ++$y;//7
 echo '<br>';






//operatory rzutowania
//bool, int (do liczb całkowitych), float (do zmiennych),
//string, array, object, unset
$test='123abc';
$test1=0;
$test2=20;


$x=(int)$test;
echo $x;
echo 'Typ danych $x: ',gettype($test);



$x=(bool)$test1;
echo "<br>$x;<br>"
echo 'Typ danych $x: ',gettype($test1);






 ?>
