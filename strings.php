<?php
//transform a string into all capital letters//
$mystring ="hello my name is james scott" . "<br>";
$mystring = strtoupper($mystring);
echo $mystring;
//transforming string into all lowercase letters//
$mystring1 =" AND I AM 21 YEARS OLD" . "<br>";
$mystring1 = strtolower($mystring1);
echo $mystring1;

//make a strings first character uppercase//

$mystring2 = "my hobbies include video games and martial arts" . "<br>";
$mystring2 = ucfirst($mystring2);
echo $mystring2;

//Make a strings first character of all words uppercase//
$mystring3 = "my favourite food is pizza and chicken";
$mystring3 = ucwords($mystring3);
echo $mystring3;

?>