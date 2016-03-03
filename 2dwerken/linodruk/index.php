<!DOCTYPE html>
<html>
<head>
<title>Linodruk</title>
<?php print file_get_contents('http://www.humancreature.nl/scripts.php')?>
</head>
<body>
<?php print file_get_contents("http://www.humancreature.nl/analyticstracking.php")?>
<center>
<div id="container">
	<div id="header">
		<h1>
			<font>
				Human Creature:<br><li>Linodruk</li>
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
				<a href="#lino1" id="galerij2">
					<img src="1b.jpg">
				</a>
				<a href="#_" class="lightbox" id="lino1">
					<img src="lin1.JPG">
				</a>
		
				<a href="#lino4" id="galerij2">
					<img src="4b.jpg">
				</a>
				<a href="#_" class="lightbox" id="lino4">
					<img src="lin4.JPG">
				</a>

				<a href="#lino2" id="galerij">
					<img src="2b.jpg">
				</a>
				<a href="#_" class="lightbox" id="lino2">
					<img src="lin2.JPG">
				</a>

				<a href="#lino3" id="galerij">
					<img src="3b.jpg">
				</a>
				<a href="#_" class="lightbox" id="lino3">
					<img src="lin3.JPG">
				</a>
			</div>
		</center>
	</div>
</div>
</center>
</body>
</html>
