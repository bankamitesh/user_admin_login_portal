<?php
require_once 'config.php';
if(isset($_COOKIE['zansys_session_id']))
{
    header("Location:index.php");
}
else if(isset($_GET['id']) && isset($_GET['type']))
{
$id=$_GET['id'];
$type=$_GET['type'];
$result=mysqli_query($con,"Insert into session (id, type) values ($id,'$type')");
$result=mysqli_query($con,"Select * from session where id='$id' and type='$type' order by session_id");
while($res=mysqli_fetch_array($result))
{
    $session_id=$res['session_id'];
}
setcookie('zansys_session_id', $session_id, time()+60*60*24*365*10);

header('Location:index.php');

    
}
?>