<?php
$conn=mysqli_connect("localhost","root","","monika");
if(!$conn)
{
    echo "connection problem";
}
else
{
    
    if($conn)
    {   $name=$_POST["username"];
        $pass=$_POST["password"];
        $query="select * from account";
        $res=mysqli_query($conn,$query);
        if(mysqli_num_rows($res)>0)
        {
            while($row=mysqli_fetch_assoc($res))
            {
                echo "account number :&nbsp " .$row["accounNo"] ."<br>";
                echo "account name: &nbsp " .$row["accName"]."<br>";
               
            }
        }
    }
}


?>