<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'mysql525.loopia.se');
define('DB_USERNAME', 'larare@k295484');
define('DB_PASSWORD', 'Douglas5708');
define('DB_NAME', 'ktc_webb_eu_db_5');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>