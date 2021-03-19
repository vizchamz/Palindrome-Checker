<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <style>
            body {
                background-color:greenyellow;
                text-align: center;
                color:white;
                text-shadow: 2px 2px black;
                font-size: 50px
            }
            .container {
                padding:5%;
                display: block;
                background-color:cornflowerblue;
                border-radius: 20px;
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5), 0 6px 10px 0 rgba(0, 0, 0, 0.3);
                padding-bottom: 10%;
                padding-top: 10%;
                padding-left: 5%;
                width: 30%;
                margin-top: 10%
            }
            #textField {
                border-bottom-color: black;
                width: 60%
            }
        </style>
    </head>
    <body>
        <div class="container">
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
        </div>
    </body>
</html>

