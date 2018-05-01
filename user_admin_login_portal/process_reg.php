<?php
require_once 'config.php';
if(isset($_COOKIE['zansys_session_id']))
{
    header('Location:index.php');
}
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$result = mysqli_query($con,"Select * from users where username='$username'");
$f=0;
while($res=mysqli_fetch_array($result))
{
    $f=1;
}
if($f==1)
{
    if(strtolower($username)=="admin")
            echo "<SCRIPT type='text/javascript'>
        alert('Cannot use username Admin. Plase Try Again!');
        window.location.replace(\"adduser.php\");
    </SCRIPT>";
            else
            echo "<SCRIPT type='text/javascript'>
        alert('Username already taken. Plase Try Again!');
        window.location.replace(\"adduser.php\");
    </SCRIPT>"; 
}
else
{
$result = mysqli_query($con,"Insert into users (name, username, password) values('$name','$username','$password')");
header("Location:login.php");
}
?>