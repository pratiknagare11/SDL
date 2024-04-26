<?php

$cookie_name = "Pratik";
$cookie_value = "HII";

setcookie($cookie_name, $cookie_value, time() + 86400, '/');
?>

<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie is not set!!";
        }
        else{
            echo "Cookie is: ". $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>