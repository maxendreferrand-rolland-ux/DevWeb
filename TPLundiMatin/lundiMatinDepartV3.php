<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Les excuses du lundi matin</title>
	  
		<link href="css/monStyle.css" rel="stylesheet">
		
		<!-- Bootstrap CSS -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

	</head>
	<body>
		<?php require ("tableauPhrases.php")?>
		<div class="container-fluid">
			<div class="row cadre ">	 
				<div class="col-12">
					<?php
						if (isset($_POST['var1'])) {
							echo "<h1>Mon excuse :</h1>";
							foreach($tabExGen as $i => $value){
								echo $value[$_POST['var'.$i]]." ";
							}
						} else {
							echo "<h1>Tous les lundis, une excuse différente ! </h1>";
							echo "Générez votre excuse du lundi matin en selectionnant les différents champs.<br>";
						}
					?>
				</div>
			</div>
		
			<div class="row cadre ">	 
				<div class="col-12">
					<form method="post" action="lundiMatinDepartV3.php">
						<?php
							foreach($tabExGen as $i => $value){
								echo "<select name='var".$i."'>";
								foreach($value as $cle => $tabEx){
									echo "<option value='".$cle."'>".$tabEx."</option>";
								}
								echo "</select><br>";
							}
						?>
						<button type="submit">Générer l'excuse</button>
					</form>
				</div>
			</div>
		</div>
	</body>
</html>