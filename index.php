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

    //Indexed Arrays
    $allFName = array('Asheel', 'Shylin', 'Jone', 'Holland');
    $allLName =array('Prasad', 'Chand', 'Usamate', 'Tom');
    $allAges = array(25, 23, 43, 29);
    # echo $allFName[3];
    # echo $allLName[2];
    # echo $allAges[1];
    //print_r is used to echo arrays in readable format
    # print_r($allFName);   
    # print_r($allLName);
    # print_r($allAges);

    //to edit data in an array
    $allLName[3] = 'Loos';
    # print_r($allLName);

    //to add more data in an array
    $allFName[] = 'Nathan';
    $allLName[] = 'Maguire';
    $allAges[] = 16;
    # print_r($allFName);   
    # print_r($allLName);
    # print_r($allAges);

    # echo count($allAges);

    //merging two arrays
    $allPeople = array_merge($allFName, $allLName);
    print_r($allPeople);
    echo count($allPeople);

    //Associative Arrays (key & value pairs)
    $attuzOne =array('Asheel' => 'Black', 'Shylin' => 'Pink', 'Jone' => 'Yellow', 'Holland' => 'Blue');
    # echo $attuzOne['Shylin'];
    # echo $attuzOne['Holland'];
    //to add more data in an array
    $attuzOne['Asheel'] = 'Purple';
    # print_r($attuzOne);
    # echo count($attuzOne);
    $attuzTwo = array_merge($attuzOne, $allPeople);
    # print_r($attuzTwo);

    //multi-dimensional arrays
    $Vehicle = [
        ['Make' => 'Nissan', 'Model' => 'GTR', 'Engine' => '6L'],
        ['Make' => 'Hyundai', 'Model' => 'Tucson', 'Engine' => '2L'],
        ['Make' => 'Toyota', 'Model' => 'Supra', 'Engine' => '5.4L']
    ];
    # echo $Vehicle[2]['Model'];
    $Vehicle[] = ['Make' => 'Ford', 'Model' => 'Raptor', 'Engine' => '4L'];
    # print_r($Vehicle);

    //to delete the last value of any array
    $Deleted = array_pop($Vehicle);
    # print_r($Deleted);

    //loops 
    $Cars = ['Mitsubishi', 'Toyota', 'Hyundai', 'Volvo', 'Honda'];
    #    for($i = 0; $i < count($Cars); $i++){
    #       echo $Cars[$i] . '<br />';
    #   }

    # foreach($Cars as $Car){
    #     echo $Car . '<br />';
    # }

   $products = [
       ['name' => 'Rice', 'price' => 10],
       ['name' => 'Flour', 'price' => 41],
       ['name' => 'Meat', 'price' => 45],
       ['name' => 'Milk', 'price' => 75],
       ['name' => 'Sugar', 'price' => 44],
       ['name' => 'Handwash', 'price' => 21]
   ];

   # foreach($products as $product){
   #  echo $product['name'] . ' - ' . $product['price'];
   #  echo '<br />';
   # }

   # $i = 0;

   # while($i < count($products)){
    #   echo $products[$i]['name'];
    #   echo '<br />';
    #   $i++;
   # }
      
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
    
    <h1>Products</h1>
    <ul>
        <?php foreach($products as $product){?>
            <h4><?php echo $product['name'];?></h4>
            <p><?php echo $product['price'];?></p>
        <?php } ?>
    </ul>
       
</body>
</html>
