<?php
    //constants
    define('NAME', 'Asheel');

    //declaring variables 
    $Lname = 'Prasad';
    $age = 25;
    $stringOne = 'my email is ';
    $stringTwo = 'asheelprsd@hotmail.com.';
    $radius = 25;
    $pi = 3.14;

    //concatenate/ adding strings or variables together
    # echo 'Hey, my name is ' . NAME . ' and ' . $stringOne . $stringTwo;

    //double quotes can contain variable in them
    # echo "Hey my last name is $Lname";

    //this is done in order to keep quotes in a string
    # echo "The boy screamed \"whaaaa\"";
    # echo 'The boy screamed "whaaaa"';

    //to get 1 letter only
    #echo $Lname[5];
    
    //various functions, functions always have ()
    # echo strlen($stringTwo);
    # echo strtoupper($stringTwo);
    # echo strtolower($stringTwo);
    # echo str_replace('e', 'a', $stringTwo);

    //basic math operators: +, -, *, /, **
    //order of operation (B(racket) I(ndices) D(ivision) M(ultiplication) A(ddition) S(ubtraction)) 
    # echo $pi * $radius **2;
    # echo 2 * (4 + 9) / 3;
    
    //increment (++) & decrement operators (--), adds or subtracts 1 value
    # $radius++;
    # echo $radius;

    //shorthand operators
    # $age = 50;
    # $age += 10;
    # echo $age;

    //number functions
    # echo floor($pi); 
    # echo ceil($pi);
      
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Test</title>
</head>
<body>
    
<h1><?php echo 'User Profile Page';?></h1>
    <div><?php echo NAME;?></div>
    <div><?php echo $Lname;?></div>   
    <div><?php echo $age;?></div>   
    <div><?php echo $stringOne . $stringTwo;?></div>
    
    <p>Hello, my name is <?php echo NAME . ' and ' . $stringOne . $stringTwo;?> </p>
       
</body>
</html>