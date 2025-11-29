<?php
$db_username = "root";
$db_password = "";
$db_servername = "localhost";
$db_name = "cs356";
$db_port =" 3306";

$db_conn =  mysqli_connect($db_servername, $db_username, $db_password, $db_name, port: $db_port);

// if connection fails, display error message
if(!$db_conn){
    echo "Connection failed.";
 }

    echo "db connection included<BR>";
?>