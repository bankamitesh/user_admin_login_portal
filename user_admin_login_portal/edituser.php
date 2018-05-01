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
    $result=mysqli_query($con,"Select * from users where id=$id");
    while($res=mysqli_fetch_array($result))
    {
        $name=$res['name'];
        $usernmae=$res['username'];
        $password=$res['password'];
    }
    if(isset($_POST['submit']))
    {
        $name=$_POST['name'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $id=$_POST['id'];
        $result = mysqli_query($con,"Select * from users where username='$username'");
        $f=0;
        while($res=mysqli_fetch_array($result))
        {
            if($res['id']!=$id)
            $f=1;
        }
        if($f==1)
        {
            if(strtolower($username)=="admin")
            echo "<SCRIPT type='text/javascript'>
        alert('Cannot use username Admin. Plase Try Again!');
        window.location.replace(\"edituser.php?id=$id\");
    </SCRIPT>";
            else
            echo "<SCRIPT type='text/javascript'>
        alert('Username already taken. Plase Try Again!');
        window.location.replace(\"edituser.php?id=$id\");
    </SCRIPT>"; 
        }
        else
        {
        $result = mysqli_query($con,"update users set name='$name', username='$username', password='$password' where id=$id");
        header("Location:index.php");
        }
    }
}
else
{
    header("Location:index.php");
}
?>
<html>
    <head>
        <title>EDIT USER</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    </head>
    <body><BR/><BR/>
       <CENTER><a style="text-decoration:none"href="http://ideetulot.com/zansys/"><h1 style="
    font-family:  ubuntu;
">Zansys</h1> </a></CENTER><BR/><BR/>
       
       <CENTER> <form action="edituser.php" method="post">
            <label>Name</label> 
            <input name="name" value="<?php echo $name ?>"required><br>
            <br> <br>
            <label>Username</label> 
            <input name="username" value="<?php echo $username ?>" required><br>
            <br> <br>
            <label>Password</label>
            <input type="password" name="password" value="<?php echo $password ?>" required> <br>
            <br> <br>
            <input type="hidden" name="id" value="<?php echo $id ?>" required> <br>
            <input type="submit" name="submit">
        </form></CENTER> 
    </body>
</html>