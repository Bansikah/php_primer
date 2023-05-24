
<?php
     $title = "String Manipulations";
    include 'includes/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Primer - String Manupulations</title>
</head>
<body>
    <h1>String Manupalations in PHP</h1>
    <?php
     //Concatination of Strings
     $phrase1 = "Students who came late";
     $phrase2 = " in class, stand with Rock";
     $name = 'noel draxler';
     echo $phrase1. ", named Tiffany," . $phrase2;
     echo'<br/>';
     echo'<hr/>';
     //String Transformation
     echo'Uppercase first letter:'.ucfirst($name).'<br/>';
     echo'Uppercase the first letters of name:' . ucwords($name) . '<br/>';
     echo'Uppercase all words:'.strtoupper($name).'<br/>';
     echo'Lowercase all words:'.strtoupper("I AM A SOFTWARE ENGINEER").'<br/>';
     echo'<hr/>';
     echo'Repeat String:' .str_repeat('a',5). '<br/>';
     echo'Repeat String uppercase:' . strtoupper(str_repeat('a',5)). '<br/>';
     echo'Get a subString:' .substr($name,3,5). '<br/>';

     echo'Get a sub position of a String:' .strpos($name,'d'). '<br/>';
     //Return NULL'
     //echo 'Get position of string:' .strpos($combine,'z').'<br/>';
     echo 'Find Charater "N": ' . strchr($name,'N').'<br/>';
     echo 'Find Charater "r": ' . strchr($name,'r').'<br/>';
     echo 'Find Charater "e": ' . strchr($name,'e').'<br/>';
     echo 'Find Charater "a": ' . strchr($name,'a').'<br/>';
     echo'<hr/>';
     echo 'Find the lenght of a String: ' .strlen($name) .'<br/>';

     echo 'Without Trim: '. "A". " B C D " . "E" . '<br/>';
     echo 'Trim Spaces on both sides: '. "A" .trim(" B C D ") . "E" . '<br/>';
     echo 'Trim Spaces on the left side: '. "A" .ltrim(" B C D ") . "E" . '<br/>';
     echo 'Trim Spaces on the left side: '. "A" .rtrim(" B C D ") . "E" . '<br/>';

     echo 'Replace string with another: '. str_replace("stand","sit",$phrase1) . '<br/';

    ?>

    <!-- Footer section -->
<?php 
  require'includes/footer.php';
  ?>
</body>
</html>