<?php
function processMarks($marksArr){
    $sum = 0;
    foreach($marksArr as $value){
        $sum += $value;
    }
    return $sum;
}

function avgMarks($marksArr){
    $sum = 0;
    $i = 1;
    foreach($marksArr as $value){
        $sum += $value;
        $i++;
    }
    return $sum/$i;
}



$oliul = [23,45,66,77,88];
$oliul1 = [20,55,30,47,58];
$sumMarks = avgMarks($oliul);
$sumMarks1 = processMarks($oliul1);
echo "total marks scrored by oliul out of 500 is $sumMarks<br>";
echo "total marks scrored by oliul1 out of 500 is $sumMarks1";

?>