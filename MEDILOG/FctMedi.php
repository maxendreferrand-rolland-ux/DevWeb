<?php 

	function connecte(){
		$host='localhost';	
		$db='medicaments';		
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
	
	function typesMedicaments($pdo){
		$requete=" SELECT DISTINCT TYPE FROM medicaments ORDER BY TYPE;"  ;	
		$resultats=$pdo->query($requete);  														
		return $resultats;
	}
?>