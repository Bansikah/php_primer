<?php
    include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - Switch Statements</title>
</head>

<body>
    <h2>Switch Statements in PHP</h2>
    <?php
        $grade = 'A';

        switch($grade)
        {
            case 'A':
                echo'<h3 style="color:green;">You passed</h3>';
                break;
            case 'B':
                echo'<h3 style="color:blue;">You did well</h3>';
                break;
            default:
                echo'<h3 style="color:red;">You have failed</h3>';
                break;
        }
   
    ?>
    <!-- Footer section -->
<?php 
 include'includes/footer.php';
 ?>
</body>

</html>