<?php
// Associtive arrays
$favCol = array('oliul'=> 'red',
 'shapla'=>'blue',
  'chumki'=>'green',
   8=>'gray');

   echo $favCol ['oliul'];
   echo "<br>";

$favCol = array('oliul'=> 'red',
 'shapla'=>'blue',
  'chumki'=>'green',
   8=>'gray');
   
//    print array using foreach
   foreach ($favCol as $key =>$value){
       echo "<br> Favorite color of $key is $value";
   }

?>