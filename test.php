<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Ants jeu web</title>
		<link rel="stylesheet" type="text/css" href="styles/style_acceuilJeu.css">
	</head>
	<body>
		<?php
		$bdd = new PDO('mysql:host=sql309.epizy.com;dbname=epiz_27863357_test', 'epiz_27863357', '4wg1goQ2KFP62nd', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$actRessource = $bdd->prepare('INSERT INTO ressource_infos VALUES(id=1, nb_pomme=?, nb_bois=0)');
		$actRessource->execute(array(1));
		?>
	</body>
</html>