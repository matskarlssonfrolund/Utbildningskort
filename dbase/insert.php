<?php
 
require('config.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age = $_REQUEST['age'];
$submittedby = $_SESSION["username"];
$fnamn = $_REQUEST['fnamn'];	
$ins_query="insert into new_record (`trn_date`,`name`,`age`,`submittedby`, `fnamn`) values ('$trn_date','$name','$age','$submittedby', '$fnamn')";
mysqli_query($link,$ins_query) or die(mysql_error());
$status = "Ny elev inlagd i databasen.</br></br><a href='view.php'>Visa elev</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lägg in ny elev</title>
<link rel="stylesheet" href="../assets/css/main.css"/>
<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon" />
<!--link rel="stylesheet" href="css/style.css" /-->
</head>
<body>
	
	<section id="banner">
		<div class="container">
						<div class="row">
							<div class="col-12">
		<header>
			<br>
				
		<!-- Logo -->
			<div class="col-6 col-12-medium imp-medium">
			<!-- Banner Image -->
			<a href="#" class="bordered-feature-image"><img src="../images/banner2.jpg" alt="" /></a>
			</div></header><br>
			<div class="menutype"><p><a href="dashboard.php">Adminmeny</a> | <a href="view.php">Visa elev</a> | <a href="logout.php">Logga ut</a></p></div>
			
			</div>
			</div>
		</div>
		
							
	</section>
	
<div class="form">
<div>
<h1>Lägg in ny elev</h1>
	<br>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="fnamn" placeholder="&nbsp;&nbsp;Förnamn på elev" required /></p>
	<p><input type="text" name="name" placeholder="&nbsp;&nbsp;Efternamn på elev" required /></p>
<!--p><input type="text" name="age" placeholder="Klass" required /></p-->

<!--Lägg in alla klasser från databasen-->
  <input class="list" list="browsers" name="age" id="browser" placeholder="&nbsp;&nbsp;Välj Klass" required>
  <datalist id="browsers">
    <option value="FT19TRA">
    <option value="FT20TRA">
    <option value="FT21TRA">
  </datalist><br><br>
<!--Slut på if-satsen -->	
	
	<p><input name="submit" type="submit" value="Skicka" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>
</div>
	<br><br>
</body>
</html>
