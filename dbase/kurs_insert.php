<?php
 
require('config.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
//$id = $_REQUEST[$id];
$typnamn =$_REQUEST[$typnamn];
$anteckning = $_REQUEST[$anteckning];
$ins_query="insert into kurser (`typnamn`,`anteckning`) values ('$typnamn','$anteckning')";
mysqli_query($link,$ins_query) or die(mysql_error());
$status = "Ny provtyp inlagd i databasen.</br></br><a href='view.php'>Visa elev</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Lägg in ny provtyp</title>
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
										<a href="#" class="bordered-feature-image"><img src="../images/banner2.jpg" alt="" /></a>

								</div></header>
			
			</div>
			</div>
		</div>
		
							
	</section>
	
<div class="form">
<p><a href="dashboard.php">Meny</a> | <a href="view.php">Visa elever</a> | <a href="logout.php">Logga ut</a></p>

<div>
<h1>Lägg in ny provtyp</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="typnamn" placeholder="Provtyp" required /></p>
	<p><input type="text" name="anteckning" placeholder="Beskrivning/Anteckning" required /></p>
<!--p><input type="text" name="age" placeholder="Klass" required /></p-->

	<p><input name="submit" type="submit" value="Skicka" /></p>
</form>
<p style="color:#FF0000;"><?php echo $status; ?></p>

</div>
</div>
</body>
</html>
