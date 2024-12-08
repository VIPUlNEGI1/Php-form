<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    *{
        margin: 0;
        padding: 0;
    }
    .container{
        max-width: 80%;
        background:pink;
        padding: 23px;
margin: auto;
top: 5px;
    }
</style>

<body>
<div class="container">
    <h1>lets learn about php</h1>
   <p>hi iam a  vipul negi and this is my age</p>
    <?php
    $age = 18;
    if($age > 18) {
         echo("you can go baby");
    }
 elseif($age == 18){
    echo("hi buddy");
 }
    else{
        echo ("fuck offf");
    }

    echo"<br/>";
    $language = array("python" , "react", "Php", "js");
    echo count($language);
    echo $language[1];

    //loop in php
$a=0;
    while ($a <= 10) {
        # code...
        echo" THe valu is the vipul   <br/>";
        echo$a;
        $a++;
    }

    //iterating  arrays in php using while loop
    $a= 0;
    while ($a < count(($language))) {
      echo "<br/> The value of language is : ";
      echo $language[$a];
      $a++;
    }
$a=0;
    while ($a > count(($language))) {
        echo "<br/> The value of language is : ";
        echo $language[$a];
        $a++;
      }

      //do while loop
      $a= 10;
      do {
        echo "<br> THe value of a :";
        echo $a;
      } while ($a > 10);
    echo "<br>"
    
    ?>
 
    <!-- for loop -->
<?php
$a=10;
for ($a=0; $a < 10 ; $a++) { 
echo" hi vipul <br>";
}


echo "<br>";
// for each loop
foreach ($language as $key => $value) {
 echo"the value is";
echo $key;

}


// how to make the function in php
echo"<br>";
function print5(){
    echo "VIPUL";
}
print5();
print5();
?>
</div>
</body>
</html>