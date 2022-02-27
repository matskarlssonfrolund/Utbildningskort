<?php
require('config.php');
include("auth.php");
$status = "";
if(isset($_POST['new']) && $_POST['new']==1){
    $fnamn = $_REQUEST['fnamn'];
    $enamn =$_REQUEST['enamn'];
    $klass = $_REQUEST['klass'];
	$moment = $_REQUEST['moment'];
    //$submittedby = $_SESSION["username"];
    $ins_query="insert into new_record
    (`fnamn`,`enamn`,`klass`)values
    ('$fnamn','$enamn','$klass', '$moment')";
    mysqli_query($link,$ins_query)
    or die(mysql_error());
    $status = "New Record Inserted Successfully.
    </br></br><a href='view.php'>View Inserted Record</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lägg till elev</title>
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
<link rel="stylesheet" href="../assets/css/style.css"    
</head>
<body>
<div class="form">
<p><a href="dashboard.php">Dashboard</a> 
| <a href="view.php">View Records</a> 
| <a href="logout.php">Logout</a></p>
<div>
<h1>Lägg till elev.</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="fnamn" placeholder="Förnamn" required /></p>
<p><input type="text" name="enamn" placeholder="Efternamn" required /></p>
<p><input type="text" name="klass" placeholder="Klass" required /></p>
	<p><input type="text" name="moment" placeholder="Moment" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>
</div>
</div>
</body>
</html>