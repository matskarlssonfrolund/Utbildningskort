<?php
 
require('config.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$momenttyp =$_REQUEST['momenttyp'];
$tillhor_Moment = $_REQUEST['tillhor_Moment'];
$anmarkning = $_REQUEST['anmarkning'];
	
$ins_query="insert into undermoment(`momenttyp`,`tillhor_Moment`,`anmarkning`) values ('$momenttyp','$tillhor_Moment','$anmarkning')";
mysqli_query($link,$ins_query) or die(mysql_error());
$status = "Nytt moment inlagd i databasen.</br></br><a href='moment_view.php'>Visa moment</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lägg upp ett undermoment</title>
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
		<!-- Logo -->
			<div class="col-6 col-12-medium imp-medium">
				<!-- Banner Image -->
				<a href="#" class="bordered-feature-image">
					<img src="../images/banner2.jpg" alt="" /></a>
				</div></header>
				<br>
				<div class="menutype"><p><a href="dashboard.php">Adminmeny</a> | <a href="provtyp_view.php">Visa provtyp</a> | <a href="logout.php">Logga ut</a></p></div>				
			</div>
			</div>
		</div>
							
	</section>
	
<div class="form">
<div>
<h1>Lägg in nytt undermoment</h1>
	<br>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="momenttyp" placeholder="&nbsp;&nbsp;Undermoment-Namn&nbsp;&nbsp;" required /></p>
	
	<p><?php 
	$sql="select moment_namn from moment ";  // Query to collect records
	echo "<input id='city' list='city1' placeholder='&nbsp;&nbsp;Välj huvudmoment'><datalist id='city1' >"; 
	
	foreach ($link->query($sql) as $row) {
	echo  "<option value='$row[moment_namn]'/>"; // Format for adding options 
	}	
	?></p>
	
	<!--p><input type="text" name="tillhor_Moment" placeholder="Tillhör MomentNr" required /></p-->
	<p><input type="text" name="anmarkning" placeholder="&nbsp;&nbsp;Anteckningar&nbsp;&nbsp;"  /></p>

	<p><input name="submit" type="submit" value="&nbsp;&nbsp;Lägg till&nbsp;&nbsp;" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>
</div>
	<br><br>
</body>
</html>
