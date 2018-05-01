<?php
require_once 'config.php';
if(isset($_COOKIE['zansys_session_id']))
{
    $session_id=$_COOKIE['zansys_session_id'];
$result=mysqli_query($con,"Select * from session where session_id=$session_id");
 while($res=mysqli_fetch_array($result)){
                    $type=$res['type'];
                }
    
                   if($type=="user")
                   header('Location:u_main_dashboard.php');
                   else
                   header('Location:a_main_dashboard.php');
}
else
{
    header('Location:login.php');
}
         
?>