<?php
    /*  String Functions :-

    1.  strlen()            -->     returns length of string, in characters.
    2.  strpos()            -->     returns position of character in string.
    3.  str_word_count()    -->     returns word count of the string.
    4.  strrev()            -->     reverses the string.
    5.  str_replace()       -->     replaces a part of string with another string.
    6.  str_repeat()        -->     repeats the string, given number of times.
    7.  rtrim()             -->     trims white spaces from right.
    8.  ltrim()             -->     trims white spaces from left.

    */

    // All the functions used below does not alter original string.

    $name = "Mehul";
    echo $name;
    echo "<br>";

    // length of string.
    echo strlen($name);
    echo "<br>";

    // concatenation
    echo "The length of string is   " . strlen($name);

    // Note :- There's white space collapsing.

    // word count of string.
    echo "<br>";
    echo "Word count : " . str_word_count($name); // counts word 
    echo "<br>";

    // reverse a string.
    echo strrev($name);
    echo "<br>";

    // position of a character in string.
    echo strpos($name, "hu"); // returns start index i.e. first occurence of index of h encountered in "Mehul".
    echo "<br>";

    // replace a part of string with some other text.
    echo str_replace("hu","uh",$name);
    echo "<br>";

    // repetition of string.
    echo str_repeat($name, 20);
    echo "<br>";
    
    // <pre> tag in HTML displays the content as it is (it will consider the blank spaces).
    echo "<pre>       Displays    the content as     it    is. </pre>";

    // rtrim
    echo "<pre>";
    echo rtrim("           this is good     ");
    echo "<br>";
    echo ltrim("          this is awesome      ");
    echo "</pre>";
?>