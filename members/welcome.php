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
		<p>Här kan du: lägga till elever, moment etc.</p>
    </div>
    <p>
        <a href="reset.php" class="btn btn-warning">Återställ eller Byt ditt lösenord</a><br><br>
        
		<a href="" class="btn btn-success">Lägg/Ta bort/Redigera till elev</a>
		
		<br><br>
	
		
		<a href="" class="btn btn-success">&nbsp;&nbsp;Lägg till/Ta bort/Redigera moment&nbsp;</a>
		
		<br><br>
		
		
		
		<a href="" class="btn btn-primary" target="_blank">Till elevsammanställning</a><br><br>
		
		<a href="" class="btn btn-primary">Till elevstatistik.</a><br><br>
		
    </p><br>
	<p align="center">
		<a href="logout.php" class="btn btn-danger">Logga ut</a>
	</p>
</body>
</html>