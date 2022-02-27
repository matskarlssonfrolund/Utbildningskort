<?php
 
require('config.php');
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Visa elever</title>
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
				<br>
				<div class="menutype"><p><a href="dashboard.php">Adminmeny</a>&nbsp; |&nbsp; <a href="insert.php">Ny elev</a>&nbsp; | &nbsp;<a href="logout.php">Logga ut</a></p></div>				
			</div>
			</div>
		</div>					
	</section>
	</section>
	
<div class="form">
<div class="menyrubrik" align="center">Uppdatera elevdata</div>
<h1>Visa/Uppdatera elever</h1><br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr bgcolor="#e7e7e7"><th align="left">&nbsp;Förnamn&nbsp;</th><th align="left">&nbsp;Efternamn&nbsp;</th><th align="left">&nbsp;&nbsp;Klass&nbsp;</th><!--th align="left">&nbsp;Testad av</th--><th align="left">&nbsp;Ändra&nbsp;</th><th align="left">&nbsp;Ta bort&nbsp;</th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from new_record ORDER BY age, name, fnamn asc;";
$result = mysqli_query($link,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr bgcolor="#e7e7e7">
	<td align="left" class="tdview">&nbsp;<?php echo $row["fnamn"]; ?></td>
	<td align="left" class="tdview">&nbsp;<?php echo $row["name"]; ?></td>
	<td align="left" class="tdview">&nbsp;<?php echo $row["age"]; ?></td>
	<!--td align="left" class="tdview">&nbsp;<?php //echo $row["submittedby"]; ?></td-->
	<td align="left" class="tdview">&nbsp;<a href="edit.php?id=<?php echo $row["id"]; ?>">Ändra</a></td>
	<td align="left" class="tdview">&nbsp; <a href="delete.php?id=<?php echo $row["id"]; ?>">Ta bort</a></td></tr>
<?php $count++; } ?>
</tbody>
</table> 
</div>
	<br>
</body>
</html>
