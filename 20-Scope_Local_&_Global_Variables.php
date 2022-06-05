<?php
$a = 98; //Global variable 
$b =100;

function printValue(){
    $a =97; //Local Variable
    global $a , $b;//give me the access to this global variable
    echo "<br> The value of your variable a is $a and $b";
}


echo $a;
printValue();
echo "<br> The value of your variable a is $a and $b";


?>