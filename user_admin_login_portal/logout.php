<?php 
require_once 'config.php';
if(isset($_COOKIE['zansys_session_id'])){
    $session_id=$_COOKIE['zansys_session_id'];
    setcookie('zansys_session_id', $session_id, time()-1);
    $result=mysqli_query($con,"delete from session where session_id=$session_id");
}
header('Location:index.php');
?>