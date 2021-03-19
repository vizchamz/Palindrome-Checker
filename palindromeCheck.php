<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    </head>
    <body>
    <?php
    $word = $_POST['word'];
        
    $reverse = strrev($word);
        
        if ($word == $reverse) {
            echo ($word." is a Palindrome");
        }
        else {
            echo ($word." is not a Palindrome");
        }
        
    ?>
    </body>
</html>

