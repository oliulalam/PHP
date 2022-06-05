<?php
$multDim = array(array(3,5,6,7),
           array(6,4,3,2),
           array(4,2,5,6));

        //    printing 2 dimensional array
        for ($i=0; $i<count($multDim); $i++) { 
            echo var_dump($multDim[$i]);
            echo "<br>";
        }
        echo "<br>";

        for ($i=0; $i<count($multDim); $i++) { 
            for ($j=0; $j<count($multDim[$i]); $j++) { 
                echo $multDim[$i][$j];
                echo " ";
            }
            
            echo "<br>";
        }


?>