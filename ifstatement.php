<?php
     $title = "If Else Statements";
    include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - If Statements</title>
</head>
<body>
    <h2>If or Else Statements
    <?php
//An if statement will carry out an action based on the value of the variable

        echo '<h2> If Statements<h2>';

        $grade = 30;
        //comparators in php(== , => <=, <, >)
        if($grade >= 50)
        {
            echo'<h3 style="color:green;">You passed</h3>';
        }
        else{
            echo'<h3 style="color:red;">You failed please try again</h3>';
        }
        $grade = 'B';
        //If-Else if-Else 
        if($grade == 'A')
        {
            echo'<h2 style="color:green;">You are a super star</h2>';
        }
        elseif ($grade == 'B') {
            echo'<h2 style="color:blue;">You did well</h2>';
        }
        else{
            echo'<h2 style="color:red;">You have failed...</h2>';
        }

    ?>
    <!-- Footer section -->
 <?php 
  require'includes/footer.php';
 ?>
</body>
</html>