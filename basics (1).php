<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics</title>
</head>
<body>
    <header>
        <h1><?php echo "This is PHP code!"; ?></h1>
    </header>
    <?php
        // this is a PHP comment
        // echo allows you to print stuff that will appear on the webpage
        /* multi line comment */
        

        // 4 core concepts in programming:
        // variables
        // types - string, integer (whole numbers), float (numbers with decimal points), boolean (true/false), array, object

        // create a variable to hold number of hours worked this week
        // php variables start with the $ - use descriptive variable names whenever possible
        $numHoursWorked = 40;

        /* variable scope
            - local : example, if you create a variable in a loop, that variable only exists in the loop
            - global : example, create a variable outside of a function, then use the variable in a function
            - static : example, have a counter in a login function that tracks how many attempts the user has made to login
            - function parameters : example, passing in 2 variables to a function that adds numbers together
        */
        
        // functions
        /*
            4 types of functions:
             - no parameter(s), no return value
             - parameter(s), no return value
             - no parameter(s), return value
             - parameter(s), return value
        */
        // this function will calculate pay : no parameter(s), no return value
        function calPay(){
            // setting a reference to our $numHoursWorked variable that we created outside of this function
            global $numHoursWorked;

            // multiply the hours worked by our payrate
            // $totalPay is a local variable - it only exists in this function
            $totalPay = $numHoursWorked * 20;

            // use the . to concatenate value together, for example, when printing out a string
            echo "<p>Total pay: $" . $totalPay . "</p>";
        }

        // call the calculate pay function
        calPay();

        // function to calculate pay: parameter(s), no return value
        function calculatePay($hourlyPay){
            global $numHoursWorked;
            // multiply the hours worked by our payrate
            // $totalPay is a local variable - it only exists in this function
            $totalPay = $numHoursWorked * $hourlyPay;

            echo "<p>Total pay: $" . $totalPay . "</p>";
        }

        // call the function, pass in the hourly rate
        calculatePay(30);

        // function to calculate pay and return a value: no parameter(s), return value
        function calcTotalPay(){
            // setting a reference to our $numHoursWorked variable that we created outside of this function
            global $numHoursWorked;

            // multiply the hours worked by our payrate
            // $totalPay is a local variable - it only exists in this function
            $totalPay = $numHoursWorked * 20;

            // use the . to concatenate value together, for example, when printing out a string
            return "<p>Total pay: $" . $totalPay . "</p>";
        }

        // call the function 
        echo calcTotalPay();

        // function to calculate pay: parameter(s), return value
        function calculateTotalPay($hourlyPay){
            global $numHoursWorked;
            // multiply the hours worked by our payrate
            // $totalPay is a local variable - it only exists in this function
            $totalPay = $numHoursWorked * $hourlyPay;

            return "<p>Total pay: $" . $totalPay . "</p>";
        }

        // call the function
        echo calculateTotalPay(40);

        // example of using a static variable
        function loginAttempts(){
            static $loginAttempts = 0;

            $loginAttempts = $loginAttempts + 1;

            echo "<p>loginAttempts=" . $loginAttempts . "<p>";

        }

        // call loginAttempts function multiple times
        loginAttempts();
        loginAttempts();
        loginAttempts();

        // include files
        /* 4 ways to include other PHP files in your webpage
            - include - add the file; if it can't be found - PHP moves along with displaying the rest of the content
            - require - add the file; it it can't be found - PHP stops rendering the page
            - include_once - add the file only 1 time - PHP moves along with displaying the rest of the content
            - require_once - add the file only 1 time -  it it can't be found - PHP stops rendering the page
        */

        include "external.php";

        require "menu.php";

        include_once "external.php";

        require_once "menu.php";

        // decision logic
        echo "<BR>";
        $age = 25;

        // if condition - less than 1, this is an infant
        if ($age < 1){
            echo "This person is an infant";
        }
        // between 1 and 17 is a child
        elseif($age < 18){
            echo "Participant is a minor";
        }

         // above 63 is an elder 
        elseif($age > 63){
            echo "Participant is a elder";
        }
        // catchall, default condition would be for an adult
        else{
            echo "Participant is an adult";
        }
        
        // loops
        // for loop - if the code knows how many times the loop should run
        // counter ; condition that while true the loop will run ; increase the counter by 1
        for ($i = 0; $i < 5; $i++){
            echo "<br>i = " . $i;
        }

        // while loop - if the loop may run an undetermined number of times
        $counter = 1;

        // this while loop will run as long as counter is less than 4
        // watch out for those infinite loops - they are bad
        while($counter < 4){
            echo "<br>counter = " . $counter;

            // increase the value of counter so we got out of this loop
            $counter++;
        }
    ?>
</body>
</html>