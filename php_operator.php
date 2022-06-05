<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>
<body>
    <h4>this is me</h4>
    <?php
    $variable1 = 5;
    $variable2 = 2;
    echo "var1 + var2 sum is ";
    echo $variable1 + $variable2;
    echo "<br>";

    // arithmetic operator
    echo "the value of var1 + var2 is ";
    echo $variable1 + $variable2;
    echo "<br>";
    echo "the value of var1 - var2 is ";
    echo $variable1 - $variable2;
    echo "<br>";
    echo "the value of var1 * var2 is ";
    echo $variable1 * $variable2;
    echo "<br>";
    echo "the value of var1 / var2 is ";
    echo $variable1 / $variable2;
    echo "<br>";
    
    // assigment operators
    $newVar = $variable1;
    // $newVar += 1;
    // echo $newVar;
    echo "<br>";
    // $newVar -= 1;
    // echo $newVar;
    // $newVar *= 2;
    // echo $newVar;
    // $newVar /= 2;
    // echo $newVar;

    // comparison operator

    echo "the value of 1==4 is ";
    echo var_dump(1==4);
    echo "<br>";
    echo "the value of 1!=4 is ";
    echo var_dump(1!=4);
    echo "<br>";
    echo "the value of 1>=4 is ";
    echo var_dump(1>=4);
    echo "<br>";
    echo "the value of 1<=4 is ";
    echo var_dump(1<=4);
    echo "<br>";

    // Increment / decrement operator
    // echo $variable1++;
    // echo "<br>";
    // echo $variable1;
    // echo "<br>";
    // echo $variable1--;
    // echo "<br>";
    // echo $variable1;

    // echo "<br>";
    // echo ++$variable1;
    // echo "<br>";
    // echo $variable1;
    echo "<br>";
    echo --$variable1;
    echo "<br>";
    echo $variable1;


    
    ?>
</body>
</html>