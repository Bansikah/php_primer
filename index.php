<?php
  $title = "Index";
    include 'includes/header.php';
?>
<br>
<?php 
    //Printing HTML using echo
       echo"Hello PHP";
       echo '<br/>';
       echo'Second Line';
    ?>

<br>
<!-- PHP Variables -->
<?php
    //Declaring variable using using $ which is $name
       $name = "Noel Bansikah";
       $age = 20;
       //echo variable
       //echo $name;
       //Concatination in php by using the period (.)
       echo'<h1>My name is:' . $name .'</h1>';
       echo'<h1>My age is:'. $age .'</h1>';

    //the difference of the the double cautation mark
    echo"<h1>My name is : $name </h1>";
    ?>

<button class="btn btn-dark">Click Me</button>
<!-- Footer section -->
<?php 
  require'includes/footer.php';
  ?>