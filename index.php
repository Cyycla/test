<!DOCTYPE html>
<html>
	<head>
		<title>Ants War</title>
	</head>
	<body>
		<a href=" https://cyycla.github.io/test/test.php">ouvrir Test</a>
		<?php
		$bdd = new PDO('mysql:host=sql309.epizy.com;dbname=epiz_27863357_test', 'epiz_27863357', '4wg1goQ2KFP62nd', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$actRessource = $bdd->prepare('INSERT INTO ressource_infos VALUES(id=1, nb_pomme=?, nb_bois=0)');
		$actRessource->execute(array(1));
		?>
	</body>
</html>