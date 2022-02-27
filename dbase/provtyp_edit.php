<?php
 
require('config.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from provtyp where id='".$id."'"; 
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
$id=$_REQUEST['id'];
$typnamn =$_REQUEST['typnamn'];
$anteckning =$_REQUEST['anteckning'];
$update="update provtyp set typnamn='".$typnamn."', anteckning='".$anteckning."' where id='".$id."'";
mysqli_query($link, $update) or die(mysqli_error());
$status = "Datan uppdaterades. </br></br><a href='provtyp_view.php'>Visa uppdaterad data</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="moment_id" type="hidden" value="<?php echo $row['id'];?>" />
<p>Typnamn:&nbsp;&nbsp;&nbsp;<input type="text" name="typnamn" placeholder="Typnamn" required value="<?php echo $row['typnamn'];?>" /></p>
<p>Anteckning:&nbsp;&nbsp;<input type="text" name="anteckning" placeholder="Anteckning" required value="<?php echo $row['anteckning'];?>" /></p>
	

	
<p><input name="submit" type="submit" value="Uppdatera" /></p>
</form>
<?php } ?>
</div>
</div>
	<br><br>
</body>
</html>
