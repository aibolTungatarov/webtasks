<?php
$year = (int)($_POST['years']);
$additional1 = $_POST['additional1'];
$additional2 = $_POST['additional2'];
$additional3 = $_POST['additional3'];
if(empty($additional1)){
    $additional1 = 'no';
} 
if(empty($additional2)){
    $additional2 = 'no';
} 
if(empty($additional3)){
    $additional3 = 'no';
} 
echo 'You added new item <strong>' . $_POST['makers'] . ' </strong></br>';
echo 'produced in ' . $year . ' ('.(2018 - $year).' years old) with ' . $_POST['engine'] . ' engine </br>' ;
echo 'Tax payed : ' . $additional1 . '</br>';
echo 'Technical check passed : ' . $additional2 . '</br>';
echo 'Doesnt require investment : ' . $additional3 . '</br>';
echo '$ '.$_POST['price'];



?>

