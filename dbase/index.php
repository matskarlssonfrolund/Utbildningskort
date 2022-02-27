<?php

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
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
			<div class="menutype"><p>Utbildningskort&nbsp;|&nbsp; Administration&nbsp;|&nbsp;Startsida&nbsp;</p></div>
			</div>
			</div>
		</div>					
	</section>
	
<div class="form">
<p>Välkommen <?php echo $_SESSION['username']; ?>!&nbsp;&nbsp;| &nbsp;&nbsp;<span class="liten">(Detta är en säker sida.)</span></p>
<p>|&nbsp;<a href="dashboard.php">Adminmeny</a>&nbsp;|&nbsp;<a href="logout.php">Logga ut</a>&nbsp;|&nbsp;<a href="../index.html">Till första startsidan</a>&nbsp;|</p>

</div><br><br>
	
</body>
</html>
