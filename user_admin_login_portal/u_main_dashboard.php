<?php
require_once 'config.php';
if(isset($_COOKIE['zansys_session_id']))
{
    $session_id=$_COOKIE['zansys_session_id'];
$result=mysqli_query($con,"Select * from session where session_id=$session_id");
while($res=mysqli_fetch_array($result))
{
    $id=$res['id'];
    $type=$res['type'];
}
if($type!="user")
{
    header("Location:index.php");
}
$result=mysqli_query($con,"select * from users where id=$id");
while($res=mysqli_fetch_array($result))
{
    $name=$res['name'];
}
}
else
{
    header("Location:index.php");
}
?>
<html>
    <head>
        <title>User Dashboard</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    
    <link href="https://p.w3layouts.com/demos/novus_admin_panel/web/css/font-awesome.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    
    </head>
    <body style="overflow-x:hidden">
       <CENTER><a style="text-decoration:none"href="http://ideetulot.com/zansys/"><h1 style="
    font-family:  ubuntu;
">Zansys</h1> </a></CENTER>
<br>
        <center>
        
        <h4>Hi! <?php echo $name ?>.</h4>&nbsp;<a href="logout.php"><button>Logout</button></a>
        </center>
        <hr>
        <hr>
        <br>
        
    </body>
</html>