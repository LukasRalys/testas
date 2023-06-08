<?php
include 'class.php';
include 'duktclass.php';
    //0,1,1,2,3,5,..
$fn=10**7;
$obj=new duktseq($fn);

$obj-> fibionaci ();
#Versija 3
//print ($obj-> ans1. '<br>');
print ($obj-> get_answer() . '<br>');
//print ("<br>");
$obj-> setdata (500);
$obj-> fibionaci ();
print ($obj-> get_answer() . '<br>');
//print ($obj-> get_n());
$obj-> setdata (500);
$obj-> arit (2, 3);
print ($obj-> get_answer() . '<br>');


?>