<?php
 
require('config.php');
include("auth.php");

$status = "";
if(isset($_POST['new']) && $_POST['new']==1)
{

$elev_id =$_REQUEST['elev_id'];
$provtyp_id = $_REQUEST['provtyp_id'];
$prov_datum = $_REQUEST['prov_datum'];
	
$ins_query="insert into utbildningskort(`elev_id`,`provtyp_id`,'provdatum') values ('$elev_id','$provtyp_id','$prov_datum')";
mysqli_query($link,$ins_query) or die(mysql_error());
$status = "Nytt elevprov inlagd i databasen.</br></br><a href='moment_view.php'>Visa moment</a>";
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Körprov</title>
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
				<div class="menutype"><p><a href="dashboard.php">Adminmeny</a>&nbsp; |&nbsp; <a href="korprov_insert.php">Nytt Körprovstillfälle</a>&nbsp; | &nbsp;<a href="logout.php">Logga ut</a></p></div>				
			</div>
			</div>
		</div>					
	</section>
	</section>
	
<div class="form">
<div class="menyrubrik" align="center">Lägg upp ett nytt utbildningskort.</div>
<h1>Följ anvisningarna: </h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<table width="100%" border="1" style="border-collapse:collapse;">
<!--thead>
<tr bgcolor="#e7e7e7"><th align="left">&nbsp;Elev &nbsp;</th><th align="left">&nbsp;Typ av prov &nbsp;</th><th align="left">&nbsp;Välj Provdatum&nbsp;</th><!--th align="left">&nbsp;Testad av</th><th align="left">&nbsp;Ändra&nbsp;</th><th align="left">&nbsp;Ta bort&nbsp;</th></tr>
</thead-->
<tbody>
	
	<p><tr><td><?php 
	$count=1;	
	$sql="Select id,fnamn, name, age, pnummer from new_record order by age,fnamn";  // Query to collect records
	echo "<input id='elev' list='elev1' style='width:400px; margin-bottom:5px;' placeholder='&nbsp;&nbsp;Välj elev'><datalist id='elev1' >"; 
	
	foreach ($link->query($sql) as $row) {
	echo  "<option value='&nbsp;Klass:&nbsp;$row[age]&nbsp;Namn:&nbsp; $row[fnamn]&nbsp;$row[name]&nbsp;&nbsp;P-nummer:&nbsp; $row[pnummer] '/>";
	}	
	?></td></tr></p>
	
	<p><tr></tr><td><?php 
	$count=1;	
	$sql="Select id, typnamn, anteckning from provtyp order by id ";  // Query to collect records
	echo "<input id='prov' list='elev2' style='width:400px; margin-bottom:5px;' placeholder='&nbsp;&nbsp;Välj körprov'><datalist id='elev2' >"; 
	
	foreach ($link->query($sql) as $row) {
	echo  "<option value='&nbsp;Prov-id:&nbsp;$row[id]&nbsp;&nbsp;&nbsp;Provtyp: $row[typnamn]'/>";
	}	
	?></td></tr></p>
	<p><tr><td><?php
		$count =1;
		$sql="SELECT * FROM korprov INNER JOIN provtyp ON korprov.provtyp_id = provtyp.id";
		
		echo "<input id='provtyp' list='elev3' style='width:400px; margin-bottom:5px;' placeholder='&nbsp;&nbsp;Välj provdatum'><datalist id='elev3' >";
		
		foreach ($link->query($sql) as $row){
		echo "<option value='&nbsp;Provdatum:&nbsp;&nbsp;$row[prov_datum] Provtyp:&nbsp;$row[typnamn]&nbsp;TypID:&nbsp;$row[provtyp_id]'/>";
		}
		?></td></tr></p>
		

		
	
	</td></tr></p>

</tbody>
</table> <p><input name="submit" type="submit" value="Skicka" /></p></form>
</div>
	<br>
</body>
</html>
