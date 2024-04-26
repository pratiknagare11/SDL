
<?php
echo "Cookie Value: ".$_COOKIE['Pratik'];
setcookie('Pratik', "", time() - 86400, "/");
?>