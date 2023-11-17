<?php
    /* PHP constants

    1.  Its an identifier for value that cannot be changed during script.
    2.  A valid constant name starts with letter or underscore. (no $ sign before constant name)
    3.  Unlike variables, constants are automatically global across entire script. 
    4.  To set a constant, use define() function - it takes 3 paramenters :- 1st parameter defines name of constant,
        second parameter defines value of constant, and third optional parameter specifies whether the constant name
        should be case-insensitive. (Default is false)

    */

    // using const keyword
    const myName = "Mehul Sweeti Agrawal";
    echo myName;
    echo "<br>";

    // myName = "Hero"; it will produce error.

    // using define function
    define("AGE", 1); // case - sensitive
    echo AGE;
    echo "<br>";

    define("HEIGHT", 100, true); // case - insensitive (see how it works.)
    echo HEIGHT;
    echo "<br>";

?>