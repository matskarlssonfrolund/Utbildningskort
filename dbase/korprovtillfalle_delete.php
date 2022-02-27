<?php

require('config.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM korprov WHERE id=$id"; 
$result = mysqli_query($link,$query) or die ( mysqli_error());
header("Location: korprovtillfalle_view.php"); 
?>