<?php
    /* PHP Datatypes :-
     * 
     * Strings :- 
     * 
     * 1. String is a sequence of characters enclosed in single or double quotes.
     * 
     * Integers :-
     * 
     * 1. An integer is number without decimals.
     * 2. An integer must have at least one digit (0-9).
     * 3. An integer cannot contain comma or blanks.
     * 4. It can be specified in 3 formats :- decimal, hexadecimal or octal.
     * 
     * Floating point numbers :-
     * 
     * 1. Its a number with decimal point or a number in exponential form. 
     *
     * Booleans :-
     * 
     * 1. It can either be true or false. 
     * 
     * Arrays :-
     * 
     * 1. It stores multiple values in one single variable. We can use var_dump() function
     *    to return data type and value of array.
     * 
     * Objects :-
     * 
     * 1. An object is a data type which stores data and information on how to process that data.
     * 2. An object is explicitly declared. First we declare a class of object using class keyword.
     *    A class is a structure that can contain properties and methods.
     * 
     * Null values :-
     * 
     * 1. Its the special NULL value that represents that a variable has no value.
     *    NULL is the only possible value of data type NULL.
     * 
     * 2. NULL value identifies whether a variable is empty or not. Also useful to 
     *    differentiate between empty string and null values of dbs.
     * 
     * 3. Variables can be emptied by setting the value to NULL.
     * 
     * 
     * Note :- var_dump() function in PHP returns data type of variables.
     * 
    */

    // Integers

    //base 10 representation.
    $x = 123;
    echo "<p> $x </p>";
    var_dump($x); // tells the datatype of variable.

    //octal representation
    $x = 07;
    echo "<p> $x </p>"; // output will be in decimal form.
    var_dump($x);

    //hexadecimal representation
    $x = 0x45;
    echo "<p> $x </p>"; // output will be in decimal form.
    var_dump($x);

    //int can store values in range -2,147,483,648 to 2,147,483,647.
    $x = 10000000000000000000000000000000000000000; // its treated as float in scientific notation like 1e40.
    echo "<p> $x </p>";
    var_dump($x);

    //here 10^35 is a very large value to be converted to int, so it will be converted to int with some precision errors and will give absurd answers.
    $x = (int)1e35; //here (int) is used for type conversions.
    echo "<p> $x </p>";
    var_dump($x);

    // Floating point numbers

    //decimal point representation
    $x = 1.234;
    echo "<p> $x </p>";
    var_dump($x);

    //exponential representation
    $x = 1.2e4;
    $y = 1.2E4;
    $z = 1.2e-4;
    echo "<p> $x $y $z </p>";
    var_dump($x);
    var_dump($y);
    var_dump($z);

    // Booleans

    $x = true;
    $y = false;
    $z = TRUE;
    $a = FALSE;
    $i = 10;
    $j = 0;
    $str = "Mehul";
    $b = (bool)$i;
    $c = (bool)$j;
    $d = (bool)$str;
    echo "<p> $x $y $z $a $i $j $str $b $c $d </p>"; // output :- 1 1 10 0 Mehul 1 1; here falsy values are not displayed on screen.
    var_dump($x);
    var_dump($y);
    var_dump($z);
    var_dump($a);
    var_dump($i);
    var_dump($j);
    var_dump($str);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    
    //to explicitly check for a falsy value
    $falseValue = false;
    if(!$falseValue){
        echo "<p> This is a falsy value </p>";
    }
    
    // Arrays

    $cars = array("Volvo", "BMW", "Toyota");
    echo "I like" . $cars[0] . "," . $cars[1] . " and " . $cars[2] . "."; // here, . is used for string concatenation.
    echo "<br>";
    echo "I like $cars[0], $cars[1] and $cars[2].";
    echo "<br>";
    var_dump($car); // giving NULL. IDK?
    
?>