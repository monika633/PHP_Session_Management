<?php
$conn=mysqli_connect("localhost","root","","monika");
if(!$conn)
{
    echo "connction error";
}
else 
    { 
    echo "connction successfully";
    
        $name=$_POST["first_name"];
        $email=$_POST["email"];
        $uname=$_POST["txt_username"];
       $pass=$_POST["txt_password"];
    $btn=$_POST["btn_submit"];
    if(isset($btn))
    {
    
        
    $query="insert into register    values('$name','$email','$uname','$pass')"; 
    $res=mysqli_query($conn,$query);
    if($res)
    {
       echo "inserted"; 
    }
     
  
 }
}
mysqli_close($conn);
?>