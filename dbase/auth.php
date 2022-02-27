<?php
/*
Author: Mats K-F
*/
?>

<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
