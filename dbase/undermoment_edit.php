<?php
 
require('config.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from undermoment where id='".$id."'"; 
$result = mysqli_query($link, $query) or die ( mysqli_error());
$row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Uppdatera data</title>
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
		</div></header><br>
				<div class="menutype"><p><a href="dashboard.php">Startmeny</a>&nbsp; |&nbsp; <a href="undermoment_insert.php">Nytt undermoment</a>&nbsp;| &nbsp;<a href="undermoment_view.php">Tillbaka</a>&nbsp; | &nbsp;<a href="logout.php">Logga ut</a></p></div>				
			</div>
			</div>
		</div>				
	</section>
	
<div class="form">
<!--p><a href="dashboard.php">Meny</a> | <a href="undermoment_insert.php">Lägg till undermoment</a> | <a href="logout.php">Logga ut</a></p-->
<div class="menyrubrik" align="center">Uppdatera elevdata</div>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$momenttyp =$_REQUEST['momenttyp'];
$tillhor_Moment =$_REQUEST['tillhor_Moment'];
$anmarkning = $_REQUEST['anmarkning'];
	
$update="update undermoment set momenttyp='".$momenttyp."', tillhor_moment='".$tillhor_Moment."',  anmarkning='".$anmarkning."' where id='".$id."'";
	
	
mysqli_query($link, $update) or die(mysqli_error());
$status = "Datan uppdaterades. </br></br><a href='undermoment_view.php'>Visa uppdaterad data</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
	
<p>Momenttyp:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="inputtype" type="text" name="momenttyp" placeholder="Momenttyp" required value="<?php echo $row['momenttyp'];?>&nbsp;" /></p>
<p>Tillhör moment:&nbsp;&nbsp;<input class="inputtype" type="text" name="tillhor_Moment" placeholder="Tillhör Moment" required value="<?php echo $row['tillhor_Moment'];?>&nbsp;"/></p>
	
<p>Anmärkning:&nbsp;&nbsp;&nbsp;&nbsp;<input class="inputtype" type="text" name="anmarkning" placeholder="Anmärkning" required value="<?php echo $row['anmarkning'];?>&nbsp;"/></p>
	
	
<p align="center"><input class="knapp" name="submit" type="submit" value="Uppdatera" /></p>
</form>
<?php } ?>
</div>
</div>
	<br><br>
</body>
</html>
