<?php
session_start();
if(isset($_SESSION["username"]))
{
    echo "welcome........<br>";
}

?>
<a href="logout_process.php">logout</a>