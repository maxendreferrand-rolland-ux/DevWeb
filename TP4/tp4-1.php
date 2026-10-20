<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>tp4-1</title>
		
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet"> 
		
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
		
		<link rel="stylesheet" href="tp4.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<h1>Etape 1</h1>
				</div>
				<div class="col-12">
					<?php
					require("Fonctions/FctBD.php");
					$pdo = connecte();
					$resultats = resultat($pdo);

					echo '<table class="table table-striped">';
					echo '<tr>
							<th>ID</th>
							<th>Code Client</th>
							<th>Nom du magasin</th>
							<th>Adresse 1</th>
							<th>Adresse 2</th>
							<th>Code postal / Ville</th>
							<th>Téléphone</th>
							<th>Adresse email</th>
						  </tr>';

					if ($resultats != null) {
						while ($client = $resultats->fetch()) {
							echo '<tr>';
							echo '<td>'.$client['ID_CLIENT'].'</td>';
							echo '<td>'.$client['CODE_CLIENT'].'</td>';
							echo '<td>'.$client['NOM_MAGASIN'].'</td>';
							echo '<td>'.$client['ADRESSE_1'].'</td>';
							echo '<td>'.$client['ADRESSE_2'].'</td>';
							echo '<td>'.$client['CODE_POSTAL'].' '.$client['VILLE'].'</td>';
							echo '<td>'.$client['TELEPHONE'].'</td>';
							echo '<td>'.$client['EMAIL'].'</td>';
							echo '</tr>';
						}
					}

					echo '</table>';
					?>
				</div>
			</div>
		</div>
	</body>
</html> 