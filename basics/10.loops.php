<?php
    /* loops :-

        1. while loops.
        2. do...while loops.
        3. for loops.
        4. foreach loops.
    
    */

    // for loop
    echo "First 3 natural numbers are :- <br>";
    for($i=0; $i<3; $i++){
        echo $i+1;
        echo "<br>";
    }

    $arr = array("Jan", "Feb", "Mar");
    echo "First 3 months of year :- <br>";

    for($i=0; $i<3; $i++){
        echo "$arr[$i] <br>";
    }

    // foreach loop
    $arr = array("Apr", "May", "June");
    echo "Next 3 months are :- <br>";

    foreach($arr as $val)
        echo "$val <br>";  // no braces required as there's only single statement inside loop.


    // while loop
    echo "Two's table is :- <br>";
    $i = 2; $j = 1;
    while($j <= 10){
        echo "$i * $j = ";
        echo $i * $j;
        echo "<br>";
        $j++;
    }

    // do while loop
    echo "Three's table is :- <br>";
    $i = 3; $j = 1;
    do{
        echo "$i * $j = ";
        echo $i * $j;
        echo "<br>";
        $j++;
    } while($j <= 10);

?>