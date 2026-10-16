<?php 
	
	function connecte(){
		$host='localhost';	
		$db='mezabi3';		
		$user='root';		
		$pass='root';		
		$charset='utf8mb4';	

		$dsn="mysql:host=$host;dbname=$db;charset=$charset";
		
		$options=[
			PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
			PDO::ATTR_EMULATE_PREPARES=>false];
		try{
			$pdo = new PDO($dsn, $user, $pass, $options);
		} catch(PDOException $e){
			echo "<h1>Erreur BD ".$e->getMessage();
		}
		return $pdo; 
	}
	
	function resultat($pdo){
		$requete="SELECT ID_CLIENT,CODE_CLIENT, NOM_MAGASIN, ADRESSE_1, ADRESSE_2, CODE_POSTAL, VILLE, TELEPHONE, EMAIL FROM clients ORDER BY CODE_CLIENT"  ;	
		$resultats=$pdo->query($requete);  														
		return $resultats;
	}
?>