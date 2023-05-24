<?php
     $title = " Do-While";
    include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - While dowhile Loops</title>
</head>
<body>
    <h1>While  Loops</h1>
    <?php
     $grade = 0;
     //infinite loop
    //  while($grade < 10){
    //     echo"<p>I am less than 10</p>";
    //  }
    //Pre-condition Loop
     while($grade < 10){
        echo"<p>I am less than 10</p>";
        $grade++;
     }

     echo'Exit Loop';
    ?>

    <h1>DoWhile  Loops</h1>
    <?php
    //Post-condition loop
    $grade = 0;
    do{
        echo"<p>I am do while loop</p>";
        $grade++;
    }while($grade < 10);
        echo'exit loop';
    
    ?>

    <!-- Footer section -->
<?php 
  require'includes/footer.php';
  ?>
</body>
</html>