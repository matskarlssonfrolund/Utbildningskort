<?php
 
require('config.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Huvudmeny - Säker sida</title>
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
<p class="menyrubrik" align="center">Välkommen till Adminmenyn.</p>

<p>	<a href="index.php">1. Startsida på webben</a><br>
	<a href="view.php">2. Visa elever</a><br>
	<a href="view_kurs.php">3. Visa kurser</a><br>
	<a href="moment_view.php">4. Visa moment</a><br>
	<a href="undermoment_view.php">5. Visa undermoment</a><br>
	<a href="provtyp_view.php">6. Visa provtyp</a><br>
	<a href="korprovtillfalle_view.php">7. Visa körprovstillfällen</a><br>
	<br>
	<a href="insert.php">8. Lägg in ny elev</a><br>
	<a href="provtyp_insert.php">9. Lägg in ny kurs/provtyp</a><br>
	<a href="moment_insert.php">10. Lägg in nytt moment i kurs/provtyp</a><br>
	<a href="undermoment_insert.php">11. Lägg in nytt undermoment i kurs/provtyp</a><br>
	<a href="korprovstillfalle_insert.php">12. Lägg in nytt Körprovstillfälle</a><br>
	<a href="korprovtillfalle_view.php">13. Lägg upp ett utbildningskort/Uppkörning</a></a>
	<br><br>
	<a href="logout.php">14. Logga ut</a></a>
</p>

</div><br><br>
</body>
</html>
