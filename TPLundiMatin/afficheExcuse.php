<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Mon excuse</title>
 
		<link href="css/monStyle.css" rel="stylesheet">
 
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
 
	</head>
	<body>
		<?php require ("tableauPhrases.php")?>
		<div class="container-fluid">
			<div class="row cadre ">
				<div class="col-12">
					<h1>Mon excuse :</h1>
					<?php
                        foreach($tabExGen as $i => $value){
                            echo $value[$_POST['var'.$i]]." ";
                        }
					?>
					<br><br>
					<a href="lundiMatinDepartV2.php">Retour au formulaire</a>
				</div>
			</div>
		</div>
	</body>
</html>