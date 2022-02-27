<?php
 
require('config.php');
include("auth.php");
$moment_id=$_REQUEST['moment_id'];
$query = "SELECT * from moment where moment_id='".$moment_id."'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Uppdatera Moment</title>
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
	</section>
	
<div class="form">
<p><a href="dashboard.php">Meny</a> | <a href="moment_insert.php">Lägg till moment</a> | <a href="logout.php">Logga ut</a></p>
<h1>Uppdatera kursmoment</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$moment_id=$_REQUEST['moment_id'];
$moment_namn =$_REQUEST['moment_namn'];
$anteckningar =$_REQUEST['anteckningar'];
$update="update moment set moment_namn='".$moment_namn."', anteckningar='".$anteckningar."' where moment_id='".$moment_id."'";
mysqli_query($link, $update) or die(mysqli_error());
$status = "Datan uppdaterades. </br></br><a href='moment_view.php'>Visa uppdaterad data</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="moment_id" type="hidden" value="<?php echo $row['moment_id'];?>" />
<p>Momentnamn:&nbsp;&nbsp;&nbsp;<input type="text" name="moment_namn" placeholder="Momentnamn" required value="<?php echo $row['moment_namn'];?>" /></p>
<p>Anteckningar:&nbsp;&nbsp;<input type="text" name="anteckningar" placeholder="Anteckningar" required value="<?php echo $row['anteckningar'];?>" /></p>
	

	
<p><input name="submit" type="submit" value="Uppdatera" /></p>
</form>
<?php } ?>
</div>
</div>
	<br><br>
</body>
</html>
