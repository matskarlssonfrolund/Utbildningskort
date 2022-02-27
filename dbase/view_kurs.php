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
				<div class="menutype"><p><a href="dashboard.php">Adminmeny</a>&nbsp; |&nbsp; <a href="kurs_insert.php">Ny kurs</a>&nbsp; | &nbsp;<a href="logout.php">Logga ut</a></p></div>				
			</div>
			</div>
		</div>					
	</section>
	</section>
	
<div class="form">
<div class="menyrubrik" align="center">Uppdatera kurser</div>
<h1>Visa/Uppdatera kurser</h1><br>
<table width="100%" border="1" style="border-collapse:collapse;">
<thead>
<tr bgcolor="#e7e7e7"><th align="left">&nbsp;Kursnamn&nbsp;</th><th align="left">&nbsp;Kurskod&nbsp;</th><th align="left">&nbsp;&nbsp;ID&nbsp;</th><!--th align="left">&nbsp;Testad av</th--><th align="left">&nbsp;Ändra&nbsp;</th><th align="left">&nbsp;Ta bort&nbsp;</th></tr>
</thead>
<tbody>
<?php
$count=1;
$sel_query="Select * from kurser ORDER BY id asc;";
$result = mysqli_query($link,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<tr bgcolor="#e7e7e7">
	<td align="left" class="tdview">&nbsp;<?php echo $row["kurs_namn"]; ?></td>
	<td align="left" class="tdview">&nbsp;<?php echo $row["kurskod"]; ?></td>
	<td align="left" class="tdview">&nbsp;<?php echo $row["id"]; ?></td>
	<!--td align="left" class="tdview">&nbsp;<?php //echo $row["submittedby"]; ?></td-->
	<td align="left" class="tdview">&nbsp;<a href="kurs_edit.php?id=<?php echo $row["id"]; ?>">Ändra</a></td>
	<td align="left" class="tdview">&nbsp; <a href="kurs_delete.php?id=<?php echo $row["id"]; ?>">Ta bort</a></td></tr>
<?php $count++; } ?>
</tbody>
</table> 
</div>
	<br>
</body>
</html>
