<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<title>Liste</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="tp4.css">
	</head>
	<body>
		<h1>Etape 2</h1>
		<?php require ("fonctions/FctBD.php");?>
		<table>
			<?php
			$resultats = resultat(connecte());
			$i=0;
			echo "<div class='container'>";
				echo "<div class='row'>";
					while( $ligne = $resultats->fetch() ) {
						$i++;
						echo "<div class='col-md-4 col-sm-6 col-12 cadre'>";
							echo "ID : ".$ligne['ID_CLIENT']."<br>";
							echo "Code client : ".$ligne['CODE_CLIENT']."<br>";
							echo "Nom magasin : ".$ligne['NOM_MAGASIN']."<br>";
							echo "Adresse 1 : ".$ligne['ADRESSE_1']."<br>";
							echo "Adresse 2 : ".$ligne['ADRESSE_2']."<br>";
							echo "Code postal / Ville : ".$ligne['CODE_POSTAL']."<br>";
							echo "Telephone : ".$ligne['TELEPHONE']."<br>";
							echo "Email : ".$ligne['EMAIL']."<br><br>";
						echo "</div>";
					}
				echo "</div>";
			echo "</div>";
			?>
		</table>
	</body>
</html>