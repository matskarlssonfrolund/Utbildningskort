<?php

require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM provtyp WHERE id=$id"; 
$result = mysqli_query($link,$query) or die ( mysqli_error());
header("Location: dashboard.php"); 
?>