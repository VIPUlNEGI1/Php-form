<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vipul first page</title>
</head>
<body>
    <div class="container">
        hi this is me first page


       <?php 
       echo "hi this is very hard to write in php because it is the new language";
      
      
    //   how to diclare the variable in php
    $variable1 = 34;
    $variable2 = 31;




    // how to print($variable1,$variable2)
      echo $variable1;
      echo $variable2;


    //   how to make the new line character
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


  echo "the  value of var 1 and var 2"; 
  echo "<br>";
      echo $variable1 + $variable2;
      ?>
<?php 
//   how to make the new line character
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


  echo "the  value of var 1 and var 2";
  echo "<br>";

  // asingment operator
      echo $variable1 - $variable2;
echo "<br>";



      $newVar = $variable1;
      $newVar+=1;

      echo $newVar;



      //comparasien operator
      echo "<h1> COmparision Operator </h1>";

      echo "THe value of 1 == 4 is";
      echo var_dump(1==4);

      echo "<br>";
      echo "THe value of 1 == 4 is";
      echo var_dump(1!=4);

      
      echo "<br>";
      echo "THe value of 1 == 4 is";
      echo var_dump(1==4);

      
      echo "<br>";
      echo "THe value of 1 == 4 is";
      echo var_dump(1<=4);

      
      echo "<br>";
      echo "THe value of 1 == 4 is";
      echo var_dump(1>=4);



      //increment operator
      echo $variable1++;
      echo $variable1--;
      echo"<br>";
      echo $variable1;

      echo --$variable1;
      echo ++$variable1;
      echo"<br>";
      echo $variable1;

      //logical operator
      // and(&&) , or(||) ,xor, not (!)

      echo "<br>";
 $myVar = (true and true);
 echo "<br>";
    echo var_dump($myVar);



    // and
    $myVar = (true or true);
    echo "<br>";
       echo var_dump($myVar);
       
      //  <!-- xor -->

      $myVar = (true xor true);
 echo "<br>";
    echo var_dump($myVar)



      ?>
       
       <?php
      //  Data types in php
      //  string
      //const
      //   Integer
      //   float

      //  boolean
      //   array
      //  Object;
       echo "<br> data types  <br>";

      $var = "this is the string";
      echo var_dump($var);
       ?>
    </div>
</body>
</html>