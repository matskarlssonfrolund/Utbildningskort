<?php
 
require('config.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from korprov where id='".$id."'"; 
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
		</div></header>
			</div>
			</div>
		</div>				
	</section>
	</section>
	
<div class="form">
<p><a href="dashboard.php">Meny</a> | <a href="korprov_insert.php">Lägg till körprovstillvälle</a> | <a href="logout.php">Logga ut</a></p>
<h1>Uppdatera körprovstillfällen</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$provtyp_id=$_REQUEST['provtyp_id'];	
$trn_date = $_REQUEST['provtyp_datum'];
$upplagt_av = $_REQUEST['upplagt_av'];	
//$name =$_REQUEST['name'];
//$age =$_REQUEST['age'];
//$submittedby = $_SESSION["username"];
//$fnamn = $_REQUEST['fnamn'];	
$update="update korprov set prov_datum='".$trn_date."',  provtyp_id='".$provtyp_id."', upplagt_av='".$upplagt_av."' where id='".$id."'";
mysqli_query($link, $update) or die(mysqli_error());
$status = "Datan uppdaterades. </br></br><a href='korprovtillfalle_view.php'>Visa uppdaterad data</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p>Provtyp-ID:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="provtyp_id" placeholder="Förnamn" required value="<?php echo $row['provtyp_id'];?>" /></p>
<p>Datum för prov:&nbsp;&nbsp;<input type="text" name="date" placeholder="Datum" required value="<?php echo $row['prov_datum'];?>" /></p>
<p>Upplagt av:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="upplagt_av" placeholder="Upplagt av" required value="<?php echo $row['upplagt_av'];?>" /></p>
	
	
<p><input name="submit" type="submit" value="Uppdatera" /></p>
</form>
<?php } ?>
</div>
</div>
	<br><br>
</body>
</html>
