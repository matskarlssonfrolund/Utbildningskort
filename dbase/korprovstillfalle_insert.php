<?php
 
require('config.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$provtyp_id =$_REQUEST['id'];
$prov_datum = date("Y-m-d H:i:s");
$submittedby = $_SESSION["upplagt_av"];	
$ins_query="insert into korprov (`provtyp_id`,`prov_datum`,`submittedby`) values ('$provtyp_id','$prov_datum','$submittedby')";
mysqli_query($link,$ins_query) or die(mysql_error());
$status = "Nytt körprovstillfälle inlagd i databasen.</br></br><a href='view.php'>Visa elev</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lägg in nytt körprovstillfälle</title>
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
			<div class="menutype"><p><a href="dashboard.php">Adminmeny</a> | <a href="korprovtillfalle_view.php">Visa Körprovstillfällen</a> | <a href="logout.php">Logga ut</a></p></div>
			</div>
			</div>
		</div>
		
							
	</section>
	
<div class="form">
<div>
<h1>Lägg in nytt Körprovstillfälle</h1>
	<br>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
	
	<!--p><input type="text" name="momenttyp" placeholder="&nbsp;&nbsp;Undermoment-Namn&nbsp;&nbsp;" required /></p-->
	
	<p><?php 
	$sql="select * from provtyp ";  // Query to collect records
	echo "<input id='provtyp_id' list='city2' placeholder='&nbsp;&nbsp;Välj Körprovstyp'><datalist id='city2' >"; 
	
	foreach ($link->query($sql) as $row) {
	echo  "<option value='$row[id]&nbsp;$row[typnamn]'/>"; // Format for adding options 
	}	
	?></p>
	
	
	<p><input name="submit" type="submit" value="Lägg till" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>
</div>
	<br><br>
</body>
</html>
