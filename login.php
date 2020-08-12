<?php
session_start();
if(isset($_SESSION["username"]))
{
header('location:./secure.php');
}

?>
<center>
<form action="./login_process.php" method="post" style=" width:20%; height:50%;background-color:lightgray;">
<br>username:<br>
<input type="text" name="txt_username" required><br>
<br>password:<br>
<input type="password" name="txt_password" required><br>
<br><input type="submit" name="btn_submit">

</form>
</center>