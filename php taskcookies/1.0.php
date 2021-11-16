

<?php
echo $_GET['fname'];

setcookie($cookie_name,$cookie_value,time()+(3600),"/");
echo [$cookie_name];
?>
