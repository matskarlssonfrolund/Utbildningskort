<?php
 
require('config.php');
include("auth.php");
$id=$_REQUEST['id'];
$query = "SELECT * from new_record where id='".$id."'"; 
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
<p><a href="dashboard.php">Meny</a> | <a href="insert.php">Lägg till elev</a> | <a href="logout.php">Logga ut</a></p>
<h1>Uppdatera elevdata</h1>
<?php
$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{
$id=$_REQUEST['id'];
$trn_date = date("Y-m-d H:i:s");
$name =$_REQUEST['name'];
$age =$_REQUEST['age'];
$submittedby = $_SESSION["username"];
$fnamn = $_REQUEST['fnamn'];	
$update="update new_record set trn_date='".$trn_date."',  name='".$name."', age='".$age."', submittedby='".$submittedby."', fnamn='".$fnamn."' where id='".$id."'";
mysqli_query($link, $update) or die(mysqli_error());
$status = "Datan uppdaterades. </br></br><a href='view.php'>Visa uppdaterad data</a>";
echo '<p style="color:#FF0000;">'.$status.'</p>';
}else {
?>
<div>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<input name="id" type="hidden" value="<?php echo $row['id'];?>" />
<p>Förnamn:&nbsp;&nbsp;&nbsp;<input type="text" name="fnamn" placeholder="Förnamn" required value="<?php echo $row['fnamn'];?>" /></p>
<p>Efternamn:&nbsp;&nbsp;<input type="text" name="name" placeholder="Efternamn" required value="<?php echo $row['name'];?>" /></p>
	
	<p>Klass:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="list" list="browsers" name="age" id="browser" placeholder="Välj Klass" required value="<?php echo $row['age'];?>"></p>
  <datalist id="browsers">
    <option value="TE18">
    <option value="TE19">
    <option value="TE20">
  </datalist>
	
<p><input name="submit" type="submit" value="Uppdatera" /></p>
</form>
<?php } ?>
</div>
</div>
	<br><br>
</body>
</html>
