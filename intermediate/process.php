<?php

    	/* FORM Handling in PHP 

        1. The PHP superglobals $_GET and $_POST are used to collect form data.

        2. Simple HTML form :-

            <html>
                <body>
                    <form action = "welcome.php" method = "post">
                        Name: <input type="text" name="name"><br>
                        E-mail: <input type="text" name="email"><br>
                        <input type="submit">
                    </form>
                </body>
            </html>
    	*/

        // POST method
     	pre_r($_GET); // to catch global variable $_POST
        
        //isset() function determines whether a variable is set or not.
        //A variable is set if it has value other than NULL.

        if (isset($_GET['submit'])){ //the POST form has been submitted
            echo "First name: ".$_GET['name']."<br />";
            echo "E-mail: ".$_GET['email']."<br />";
        }

        pre_r($_REQUEST); // Request Global var.

        // GET method
        /* It can be done using GET method also, the difference between GET and
           POST request is that the data in case of GET request is shown in URL while its not
           the case with POST URL. */


        // $_REQUEST global variable
        /* It contains value of both $_POST and $_GET*/

        function pre_r($array){
            echo '<pre>';
            print_r($array); // prints information about variable in a more human-readable way.
            echo '</pre>';
        }
?>