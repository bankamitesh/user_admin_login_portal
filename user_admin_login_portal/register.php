<?php
if(isset($_COOKIE['zansys_session_id']))
{
    header('Location:index.php');
}
?>
<html>
    <head>
        <title>ZANSYS - REGISTER</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    </head>
    <body><BR/><BR/>
       <CENTER><a style="text-decoration:none"href="http://ideetulot.com/zansys/"><h1 style="
    font-family:  ubuntu;
">Zansys</h1> </a></CENTER><BR/><BR/>
       
       <CENTER> <form action="process_reg.php" method="post">
            <label>Name</label> 
            <input name="name" required><br>
            <br> <br>
            <label>Username</label> 
            <input name="username" required><br>
            <br> <br>
            <label>Password</label>
            <input type="password" name="password" required> <br>
            <br> <br>
            <input type="submit" name="submit">
        </form></CENTER> 
        
        
        
        
      <CENTER>  <h4><button><a style="text-decoration:none" href="login.php">Already Registered? Login Here</a></button></h4><br></CENTER>
    </body>
</html>