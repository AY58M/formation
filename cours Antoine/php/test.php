<?php

function portee1(){
global $x;
echo 'La valeur de $x globale est : ' . $x . '<br>';
}

function portee2(){
global $x;
$x = 5;
echo 'La valeur de $x locale est : ' . $x . '<br>';
}

function portee3(){
global $y;
$y = 0;
$y++;
echo '$y contient la valeur : ' . $y . '<br>';
}

function portee4(){
global $z;  
$z = 1;
}

$x = 10;
portee1();
portee2();
portee3();
portee3();
portee4();
echo 'La valeur de $z est : ' . $z . '<br>';

?>