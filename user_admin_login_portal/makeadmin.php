<?php
require_once 'config.php';
if(isset($_COOKIE['zansys_session_id']))
{
    $session_id=$_COOKIE['zansys_session_id'];
    $result=mysqli_query($con,"Select * from session where session_id=$session_id");
    while($res=mysqli_fetch_array($result))
    {
        $type=$res['type'];
    }
    if($type!="admin")
    {
        header("Location:index.php");
    }
    $id=$_GET['id'];
    $result=mysqli_query($con,"update users set type='$type' where id=$id");
    header("Location:index.php");
}
else
{
    header("Location:index.php");
}
?>