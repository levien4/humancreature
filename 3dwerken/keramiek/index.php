<!DOCTYPE html>
<html>
<head>
<title>Keramiek</title>
<?php print file_get_contents("http://www.humancreature.nl/scripts.php")?>
<script src="https://www.humancreature.nl/loadpic.js"></script>
</head>
<body onload="loadJSON('https://www.humancreature.nl/3dwerken/keramiek/data.json')">
<?php print file_get_contents("http://www.humancreature.nl/analyticstracking.php")?>
<center>
<div id="container">
	<div id="header">
		<h1>
			<font>
				Human Creature:<br><li>Keramiek</li>
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
			<div id="galerij2">
			</div>
		</center>
	</div>
</div>
</center>
</body>
</html>
