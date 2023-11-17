<?php

    /* Variable naming rules in PHP :-
     *
     * 1. A variable starts with $ sign, followed by name of variable.
     * 2. Variable names should start with letter or underscore character.
     * 3. Varaible names can only contain alpha-numeric character and underscores. (A-z, 0-9 and _)
     * 4. Variable names are case sensitive.
     * 5. There is no declaration of variable in PHP, variable is created the moment we assign value to it.
     * 6. PHP is loosely typed i.e. we don't have to tell PHP expicitly the data type of variable.
     * 
    */

    /* PHP Variable Scope :-
     *
     * 1. In PHP, variables can be declared anywhere in script.
     * 2. Scope - Part of script where variable can be referenced.
     * 3. It has 3 different scopes :- local, global and static.
     *
    */
    
    /* global keyword
     *
     * 1. The global keyword is used to access a global variable from within function.
     * 2. To do this, use global keyword before variables (inside function).
     * 
    */

    /* static keyword
     *
     * 1. When a function is completed all of its variables are deleted. However, sometimes
     *    we want a local variable not to be deleted. We need it for a further job. To do this we 
     *    use static keyword when we first declare variable.
    */

    $x = 1;
    $y = 2;
    $txt = "This is text";
    $z = $x + $y;
    echo $z;
    echo $txt; // output :- 3This is text
?>