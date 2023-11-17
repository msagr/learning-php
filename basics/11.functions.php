<?php
    /*  Functions :-

        1. A function is a block of statements that can be used repeatedly in a program.

        2. A function will not execute immediately when a page loads.

        3. A function will be executed by a call to function.

        Syntax :- 
        
                    function function_name(arg1, arg2, ...){

                        // code to be executed;

                    }


        Function Arguments :-

        1. Information can be passed to functions through arguments. An argument is just
           like a variable.

        2. Arguments are specified after the function name, inside the parentheses. You can 
           add as many arguments as you want, just separate them with comma.
        

        PHP Default Argument Value :-

            If we call the function setHeight() without arguments it takes the default value as
            argument.
        
        Returning Values :-

            To let a function return a value, use return statement.

    */
    
    // user-defined function.
    function writeMsg(){        // function without arguments.
        echo "Hello, World! <br>";
    }

    writeMsg(); // call to function


    // function with arguments.
    function yourName($firstname, $middlename, $lastname){
        echo "$firstname $middlename $lastname <br>";
    }

    echo "My name is :- ";
    yourName("Mehul", "Sweeti", "Agrawal");

?>