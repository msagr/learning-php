<?php
    /* In PHP, there is two basic ways to get output :- echo and print.
     *
     * Differences between echo and print :-
     * echo  - can output one or more strings.
     * print - can output only one string, returns always 1.
     * 
     * Tip :- echo is marginally faster compared to print as echo does not 
     *        return any value.
     * 
     * Echo and Print are language constructs, and can be used with or without
     * parentheses :-
     *              without parentheses - echo " ", print " "
     *              with parentheses    - echo(), print() 
     * 
    */

    echo "<p> This is echo without parentheses </p>";
    echo("<p> This is echo with parentheses </p>");
    print "<p> This is print without parentheses </p>";
    print("<p> This is print with parentheses </p>");

?>