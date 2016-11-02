
<?php
    $host = 'localhost';
    $user = 'root';
    $password = 'root';
    $database = 'project_alfa';
    mysql_connect($host, $user, $password) or die("failed to connect server"); 
   
    mysql_select_db($database) or die("failed to connect database");

    session_start();

?>
