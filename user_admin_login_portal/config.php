<?php
 
/**
 * Database config variables
 */
define("HOST", "localhost");
define("USER", "ideetulo_zansys");
define("PASS", "ideetulo_zansys");
define("DB", "ideetulo_zansys");

 
 //Connecting to database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');

?>