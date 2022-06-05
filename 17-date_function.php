<?php
$d = date("d F l Y");
echo "Today is $d<br>";

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A <br>');

// Prints: July 1, 2000 is on a Saturday
echo "July 1, 2000 is on a <br>" . date("l <br>", mktime(0, 0, 0, 7, 1, 2000));

// March 10, 2001, 5:16 pm
$today = date("F j, Y, g:i a <br>"); 
echo "Today is $today<br>";


 // 03.10.01
$today = date("m.d.y <br>"); 
echo "Today is $today<br>";


// 10, 3, 2001
$today = date("j, n, Y <br>");  

// 20010310
$today = date("Ymd <br>"); 

// 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('h-i-s, j-m-y, it is w Day <br>'); 

// it is the 10th day.
$today = date('\i\t \i\s \t\h\e jS \d\a\y. <br>');   
$today = date("D M j G:i:s T Y <br>");              

 // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h <br>');    

 // 17:03:18 m is month
$today = date("H:i:s <br>");    

// 17:16:18 // 2001-03-10 17:16:18 (the MySQL DATETIME format)
$today = date("Y-m-d H:i:s <br>");                   

?>