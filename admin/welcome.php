<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Elevinloggning</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hej, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
		<p>Här kan du: logga ut, byta lösenord och ladda upp filer till servern och titta på ditt webbprojekt live.</p>
    </div>
    <p>
        <a href="../members/reset.php" class="btn btn-warning">Återställ eller Byt ditt lösenord</a><br><br>
        
		<a href="../<?php echo htmlspecialchars($_SESSION["username"]); ?>/Upload/index.php" class="btn btn-success">Ladda upp bilder till Min webb</a>
		
		
		<a href="../<?php echo htmlspecialchars($_SESSION["username"]); ?>/Upload/read_pics.php" class="btn btn-danger">Deleta bilder från min webb</a><br><br>
	
		
		<a href="../<?php echo htmlspecialchars($_SESSION["username"]); ?>/Upload/index_files.php" class="btn btn-success">&nbsp;&nbsp;Ladda upp filer till Min webb&nbsp;</a>
		
		<a href="../<?php echo htmlspecialchars($_SESSION["username"]); ?>/Upload/read.php" class="btn btn-danger">&nbsp;&nbsp;Deleta filer från min webb&nbsp;</a><br><br>
		
		<a href="../<?php echo htmlspecialchars($_SESSION["username"]); ?>/Upload/visa.php" target="_blank"> <input type="button" class="btn btn-default" name="visa" value="Visa bilder i min bildsmapp" /></a>
	  
		
		<a href="../<?php echo htmlspecialchars($_SESSION["username"]); ?>/Upload/visa_files.php" target="_blank"> <input type="button" class="btn btn-default" name="visa" value="Visa filer i min webbmapp" /></a>
	  <br><br>
		
		<a href="../<?php echo htmlspecialchars($_SESSION["username"]); ?>/index.html" class="btn btn-primary">Till min sida Live på servern</a><br><br>
		
		<a href="../index.html" class="btn btn-primary" target="_blank">Till sammanställningnen.</a><br><br>
		
		<a href="../<?php echo htmlspecialchars($_SESSION["username"]); ?>/Upload/charts1.php" class="btn btn-primary">Till min statistik från servern.</a><br><br>
		
    </p><br>
	<p align="center">
		<a href="logout.php" class="btn btn-danger">Logga ut</a>
	</p>
</body>
</html>