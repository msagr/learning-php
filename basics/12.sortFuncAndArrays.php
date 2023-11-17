<?php
    /* Sort functions in PHP :-

        1. sort()       -       sorts arrays in ascending order.
        2. rsort()      -       sorts arrays in descending order.
        3. asort()      -       sorts associative arrays in ascending order, according to value.
        4. ksort()      -       sorts associative arrays in ascending order, according to key.
        5. arsort()     -       sorts associative arrays in descending order, according to the value.
        6. krsort()     -       sorts associative arrays in descending order, according to the key.

        Arrays :-

        1. An array stores multiple values in one single variable.
        2. An array is special variable, which can hold more than one value at a time.
        3. We can access values in array by referring index number.

        In Arrays, there are 3 types of arrays :-
        
        1. Indexed arrays           -   Arrays with numeric index.
        2. Associative arrays       -   Arrays with named keys.
        3. Multidimensional arrays  -   Arrays containing one or more arrays.
    */

    // Indexed Arrays :-

    $fruits = array("Apple", "Mango", "Banana");
    echo "$fruits[0] $fruits[1] $fruits[2] <br>";

    // Associative Arrays :-

    // 1st way of creating an associative array

    $age = array("Peter" => 35, "Ben" => 37, "Joe" => 43);
    echo $age['Peter']." ".$age['Ben']." ".$age['Joe']."<br>";

    // 2nd way of creating an associative array

    $item['AC']         =       20000;
    $item['Fridge']     =       36000;
    $item['Desk']       =       13000;

    echo $item['AC']." ".$item['Fridge']." ".$item['Desk']."<br>";
    echo count($item)."<br>"; // counts number of elements in array.

    // multidimensional arrays

    // 2-D array 
    $cars = array(
        array("Volvo", 100, 96),
        array("BMW", 60, 59),
        array("Toyota", 110, 100)
    );

    echo "Cars: ".$cars[0][0]." ".$cars[1][0]." ".$cars[2][0]."<br>";
    echo count($cars);
    

?>