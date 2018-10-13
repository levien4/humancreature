<!DOCTYPE html>
<html>
<head>
<title>Encoustique</title>
<?php print file_get_contents("http://www.humancreature.nl/scripts.php")?>
</head>
<body>
<?php print file_get_contents("http://www.humancreature.nl/analyticstracking.php") ?>
<center>
<div id="container">
	<div id="header">
		<h1>
			<font>
				Human Creature:<br><li>Encoustique</li>
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
				<a href="#enc1" id="galerij">
					<img src="1a.jpeg">
				</a>
				<a href="#_" class="lightbox" id="enc1">
					<img src="1a.jpeg"><br>verwarm de tekenplaat op aluminium - verwarmings element - en schets met was(krijt)de afbeelding.
				</a>

				<a href="#enc2" id="galerij">
					<img src="21a.jpg">
				</a>
				<a href="#_" class="lightbox" id="enc2">
					<img src="21a.jpg">
					<br>Olieverf op water(spatwerk), encoustique, sjabloondruk, fingerpainting
				</a>
		</center>
	</div>
</div>
</center>
</body>
</html>
