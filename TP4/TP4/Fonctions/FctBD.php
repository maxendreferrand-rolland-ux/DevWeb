<!DOCTYPE html>
<html lang="fr">
  <head>
		<meta charset="utf-8">
		<title>DEMO PDO 1</title>
		
		<!-- Lien vers mon CSS -->
		<link href="css/monStyle.css" rel="stylesheet">
		
							
   </head>

  <body>
  
	<?php 
		
		$host='localhost';	// Serveur de BD
		$db='mezabi3';		// Nom de la BD
		$user='root';		// User 
		$pass='root';		// Mot de passe
		$charset='utf8mb4';	// charset utilisé
		
		// Constitution variable DSN
		$dsn="mysql:host=$host;dbname=$db;charset=$charset";
		
		// Réglage des options
		$options=[
			PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES=>false];
		
		try{	// Bloc try bd injoignable ou si erreur SQL
			$pdo=new PDO($dsn,$user,$pass,$options);										// Connexion PDO
		

			// Exemple 1 query 
			$requete="SELECT ID_CLIENT,CODE_CLIENT, NOM_MAGASIN, ADRESSE_1, ADRESSE_2, CODE_POSTAL, VILLE, TELEPHONE, EMAIL FROM clients ORDER BY CODE_CLIENT"  ;	// Définition de la requête
			$resultats=$pdo->query($requete);  												// Execution de la requête
			
			echo "<table>" ;																// Début table
				echo "<tr><td>ID</td><td>CODE_CLIENT</td><td>Nom du magazin</td><td>Adresse 1</td><td>Adresse 2</td><td>Code postal/Ville</td><td>Telephone</td><td>Adresse email</td><tr>";			// Première ligne titre
				$i=0;																		// Compteur de ligne
				while( $ligne = $resultats->fetch() ) { 									// Parcours des lignes
					$i++;																	// Incrémentation compteur de lignes
					echo "<tr>";															// Début d'une ligne d'un tableau
						echo "<td>".$i."</td>";												// Cellule compteur
						echo "<td>".$ligne['ID']."</td>";									// Cellule ID
						echo "<td>".$ligne['CODE_CLIENT']."</td>";									// Cellule Nom
						echo "<td>".$ligne['Nom du magazin']."</td>";
						echo "<td>".$ligne['ADRESSE_1']."</td>";									// Cellule ID
						echo "<td>".$ligne['ADRESSE_2']."</td>";									// Cellule Nom
						echo "<td>".$ligne['CODE_POSTAL'].$ligne['VILLE']."</td>";				
						echo "<td>".$ligne['TELEPHONE']."</td>";									// Cellule Nom
						echo "<td>".$ligne['EMAIL']."</td>";						// Cellule Prénom
					echo "<tr>";															// Fin ligne
				}
			echo "</table>" ;																// Fin table
			echo "<hr>";
			echo "\n"; // Saut de ligne dans le HTML
			
		}catch(PDOException $e){
			//Il y a eu une erreur 
			echo "<h1>Erreur BD ".$e->getMessage();
		}
	?>
	
  </body>
</html>