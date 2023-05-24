<?php
     $title = "For Loops";
    include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - For Loops </title>
</head>
<body>
    <h2>For loops in PHP</h2>
    <?php
     //For loops
     for($count = 0; $count < 10; $count++){
        echo'<p>Hello world</p>';
     }

     for($count = 0; $count < 10; $count++){
        echo'<p>The Count is:' . $count .' </p>';
     }

    ?>
<!-- Footer section -->
<?php 
  require'includes/footer.php';
  ?>
</body>
</html>