<?php
session_start();
$errorName=" ";
$username=$_POST["txt_username"];
$password=$_POST["txt_password"];
$submit=$_POST["btn_submit"];
if(isset($submit))
{
    $conn=mysqli_connect("localhost","root","","monika");
    if($conn)
    {
        $query="select username,password from register where username='$username'and password='$password'";
        $res=mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0)
        {
            $_SESSION["username"]=$username;
        header('location:./secure.php');
     
        }
        else
      {   
        header('location:./login.php');
       
       }
    }
    
}
    
