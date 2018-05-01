<?php
require_once 'config.php';
if(isset($_COOKIE['zansys_session_id']))
{
    header('Location:index.php');
}
$username=$_POST['username'];
$password=$_POST['password'];

$result=mysqli_query($con,"Select * from users where username='$username'");
$f=0;
while($res=mysqli_fetch_array($result))
{
    if($res['password']==$password)
    {
        $f=1;
        $id=$res['id'];
        $type=$res['type'];
        
    }
}
if($f==1)
{
   header("Location:session.php?id=$id&type=$type");
}
else
{
    echo "Invalid details. Please <a href='login.php'>Try Again</a>";
}
?>