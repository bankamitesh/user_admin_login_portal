<?php
    if(isset($_COOKIE['zansys_session_id']))
{
    header("Location:index.php");
}
?>
<html>
    <head>
        <title>ZANSYS - LOGIN</title>
        <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    </head>
    <body><BR/><BR/>
       <CENTER><a style="text-decoration:none"href="http://ideetulot.com/zansys/"><h1 style="
    font-family:  ubuntu;
">Zansys</h1> </a></CENTER><BR/><BR/>
       
       <CENTER> <form action="process_login.php" method="post">
            <label>Username</label>
            <input name="username" required>
            <br><br>
            <label>Password</label>
            <input type="password" name="password" required>
            <br><br>
            <input type="submit" name="submit">
        </form></CENTER>
        
        
      <CENTER>  <h4><button><a style="text-decoration:none" href="register.php">Not Registered? Register Here</a></button></h4><br></CENTER>
    </body>
</html>