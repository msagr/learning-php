<html>
<head>
    <title>Simple Form</title>
</head>
<body>
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

        /* GET vs POST method

            1.  Both GET and POST method creates an associative array. The keys in these arrays
                are names of form controls and values are input data from user.

            2.  Both GET and POST are treated as $_GET and $_POST. These are super globals, which means
                they are always accessible regardless of scope.

            3.  $_GET is an array of variables passed to the current script via the URL parameters.

            4.  $_POST is an array of variables passed to the current script via the HTTP POST method.

        */

        // POST method
     	pre_r($_POST); // to catch global variable $_POST
        
        //isset() function determines whether a variable is set or not.
        //A variable is set if it has value other than NULL.

        if (isset($_POST['submit'])){ //the POST form has been submitted
            echo "First name: ".$_POST['name']."<br />";
            echo "E-mail: ".$_POST['email']."<br />";
        }


        // GET method
        /* It can be done using GET method also, the difference between GET and
           POST request is that the data in case of GET request is shown in URL while its not
           the case with POST URL. */


        // $_REQUEST global variable
        /* It contains value of both $_POST and $_GET*/
    ?>
    <form action = "" method = "POST">
        <input type="hidden" name="hidden" value="secret hidden variable">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php

    function pre_r($array){
        echo '<pre>';
        print_r($array); // prints information about variable in a more human-readable way.
        echo '</pre>';
    }

?>