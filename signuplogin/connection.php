<?php
$servername = "10.4.200.43";
$username = "admin";
$password = "demo@P@ssword124";
$db_name = "demodb";
$conn = new mysqli($servername, $username, $password, $db_name, 3306);
if($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
else
    echo "";

?>