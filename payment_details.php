<?php session_start();
require('includes/config.php');
?>

<!DOCTYPE html>

<html>
<head>
		<?php
			include("includes/head.inc.php");
		?>
</head>

<body>
			<!-- start header -->
				<div id="header">
					<div id="menu">
						<?php
							include("includes/menu.inc.php");
						?>
					</div>
				</div>
				<div id="logo-wrap">
				<div id="logo">
						<?php
							include("includes/logo.inc.php");
						?>
						<img src="images/logo.png" height="200px" width="820px">
				</div>
				</div>
				
			<!-- end header -->
			<font style="font-size:30px;margin-left:260px">Payment options</font>
<div class="container">			
			<div style="border-radius:5px 5px 5px 5px; background:url(images/paper.jpg);margin-left:160px;margin-right:160px;font-size:20px;">Cash On Delivery</div></br>