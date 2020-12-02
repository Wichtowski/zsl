<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css.css">
        <title>Date and time</title>
</head>
<body>

<h3>Date and time</h3>
<form action="POST">
    <input type="date" name="data" id="data" value="<?php echo date('Y-m-d');?>"><br><br>
    <input type="time" name="time" id="time" value="<?php echo date('G:i');?>"><br><br>
    <input type="text" name="dzien" id="dzien" style="width: 100px;"  value="<?php setlocale(LC_TIME, 'PL'); echo strftime('%A');?>"><br><br>
    <input type="text" name="dmyh" id="dmyh" style="width: 240px;" value="<?php setlocale(LC_ALL, 'PL'); echo strftime('%d %B %Y'); echo ", "; echo date('H:i:s'); echo " | "; echo strftime('%A');?>" ><br><br>
</form>



<?php
require_once './days_in_year_function.php';
require_once './days_to_end_year_function.php';

$date=leapyear();
$daystoENDyear=daystoENDyear();
$datez=date('z');
$datew=date('W');


echo <<<LABEL
    <ul>
        <li>Number of days in current year: $date</li>
        <li>Day of the year: $datez</li>
        <li>Number of the week in year: $datew</li>
        <li>Number of days until end of the year: $daystoENDyear</li>
    </ul>
LABEL;
?>
</body>



</html>