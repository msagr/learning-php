<?php
    /* Conditionals :-

    1.  if statement
    2.  if...else statement
    3.  if...elseif...else statement
    4.  switch statement

    */

    // Switch case :-

    $favcolor = "red";
    switch($favcolor){
        case "red":
            echo "Your favourite color is red!";
            break;
        case "blue":
            echo "Your favourite color is blue!";
            break;
        case "green":
            echo "Your favourite color is green!";
            break;
        default:
            echo "Your favourite color is neither red, blue or green!";
    }

?>