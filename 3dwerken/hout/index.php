<!DOCTYPE html>
<html>
<head>
<title>Hout</title>
<?php print file_get_contents("http://www.humancreature.nl/scripts.php")?>
</head>
<body>
<?php print file_get_contents("http://www.humancreature.nl/analyticstracking.php")?>
<center>
<div id="container">
	<div id="header">
		<h1>
			<font>
				Human Creature:<br><li>Hout</li>
			</font>
		</h1>
	</div>
	<div id="center">
		<div id="slideshow">
			<div>
				<img src="http://www.humancreature.nl/encoustique.jpg"  width="100%">
			</div>
		</div>
	</div>

	<div id="content">
		<center>
			<?php print file_get_contents("http://www.humancreature.nl/menu.php")?>
			<div id="galerij">
				<a href="#hout1" id="galerij2">
					<img src="hout1.jpg">
				</a>
				<a href="#_" class="lightbox" id="hout1">
					<img src="hout1.jpg">
				</a>

				<a href="#hout2" id="galerij2">
					<img src="hout2.jpg">
				</a>
				<a href="#_" class="lightbox" id="hout2">
					<img src="hout2.jpg">
				</a>

				<a href="#hout3" id="galerij2">
					<img src="hout3.jpg">
				</a>
				<a href="#_" class="lightbox" id="hout3">
					<img src="hout3.jpg">
				</a>

				<a href="#hout4" id="galerij">
					<img src="hout4.jpg">
				</a>
				<a href="#_" class="lightbox" id="hout4">
					<img src="hout4.jpg">
				</a>
			</div>
		</center>
	</div>
</div>
</center>
</body>
</html>