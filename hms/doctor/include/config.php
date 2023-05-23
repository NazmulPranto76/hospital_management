<?php
define('DB_SERVER','192.168.20.228');
define('DB_USER','root');
define('DB_PASS' ,'hms1234');
define('DB_NAME', 'hms');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
