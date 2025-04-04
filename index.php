<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- text, password, email, number, date, time, checkbox, radio, file, submit, reset, button, hidden, These are all input types under  -->
    <form action="index.php" method="post"> <!--The action attribute is used to specify where the form data should be sent. The method attribute specifies how to send form-data. The form-data is sent to the page specified in the action attribute. The form-data can be sent as URL variables (with method="get") or as HTTP post transaction (with method="post").-->
    <!-- Get isnt safe
     use post-->
        <label> Username:</label>
        <input type="Username" placeholder="Enter Username" name="username">
        <br>
        <label> Password:</label>
        <input type="Password" placeholder="Enter password" name="password">
        <br>
        <input type="submit" value="Submit here">
    </form>    


</body>
</html>


<?php

    $num = 10;
    $num2 = 20;

    $add = $num + $num2;
    $mul = $num * $num2;
    $sub = $num - $num2;
    $div = $num2/$num;
    // echo"Hello World! <br>"; /*The '<>' is for new line */
    // echo "I'm new to this";

    // $name1 = " Jethro";
    // $name2 = " John";
    // echo "Hello {$name1} {$name2} is now a PHP developer <br>"; Learning to concatenate strings

	// // PHP uses implicit declaration of variables. This means that you don't have to declare a variable before using it. You can just assign a value to a variable and PHP will automatically declare it for you.

    // //For declaring boolean variables
    // $is_gay = true;
    // $is_straight = false;
    // $total = null; //For declaring empty variables
    // //For declaring integer variables
    // $age = 18;
    // $age2 = 25;


    // echo "Is gay: {$is_gay}";
    // $total = $age + $age2;
    // echo "<br> Total: {$total} <br>";
    // //These variables behave like normal math variables except boolean variables

    // for($i = 0; $i < 10; $i++){
    //     echo "Hello World! <br>";
        
    // }

    //Arithmetic Operators
    //+ - * / % ++ --

    //logical operators
    //&&(And) ||(or) !(Not)

    echo "{$_POST["username"]} <br>"//This is to concatenate theresult of the GET with other text
    /*GET
     nor secure
     char limit
     bookmarking specifics is possible
     GET requests can be cached
     Better for search pages

     POST
     secure
     no char limit
     bookmarking specifics is not possible
     POST requests are not cached
     Better for forms and sensitive data
    

    Some math operations, round, floor, ceil, pow, abs
     */ 
    //Usage

  




?>

