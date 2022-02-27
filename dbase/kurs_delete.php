<?php

require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM kurser WHERE id=$id"; 
$result = mysqli_query($link,$query) or die ( mysqli_error());
header("Location: view_kurs.php"); 
?>