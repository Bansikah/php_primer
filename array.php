<?php
     $title = "Arrays";
    include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Arrays </title>
</head>
<body>
    <h1>Arrays in PHP</h1>
    <?php
        //This is a variable
          $num = 3;
        //This is an array declaration
        //only one type
         $numbers = array(1,2,3,4,5,6,7,14,8,8,9,12,34,23,45,56,67);

        echo $numbers[5];

        $size = count($numbers);

        echo"<p>Array number is size: $size</p>";

        for($count = 0; $count < $size; $count++){
            echo"<p>$numbers[$count]</p>";
        }
        

    ?>
    <!-- Footer section -->
<?php 
  require'includes/footer.php';
  ?>
</body>
</html>