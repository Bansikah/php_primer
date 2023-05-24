<?php
     $title = "Functions";
    include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Functions</title>
</head>
<body>
    <h1>Understanding Functions</h1>
    <?php
    // Defining a function
      function writeMessage(){
        echo'You are a nice person, Have a nice time!<br/>';
      }
    //Calling a function
      writeMessage();

    //Functions with parameters Pass by value function
    function addFunction($num1,$num2){
        $sum = $num1 + $num2;
        echo"The value of $num1 and $num2 is: $sum <br/>";
    }
    //passing value into a function by reference using the & sound
    function changeNum(&$num){
        $num = $num + 10;
        //$num+=10;
    }
    
    //VAlue repeating functions with return values
    function returnProduct($num1,$num2){
        $prod = $num1 * $num2;
        return $prod;
    }

    $num = 500;
    addFunction(10,30);
    addFunction(10,$num);
    addFunction('10','50');

    changeNum($num);
    echo"$num <br/>";

    $return_value = returnProduct(10,60);
    echo $return_value .'<br/>';

    ?>
<!-- Footer section -->
<?php 
  require'includes/footer.php';
  ?>
</body>
</html>