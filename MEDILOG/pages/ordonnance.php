<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>MEDILOG - Ordonnance</title>

		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@400;700&display=swap" rel="stylesheet">
		<link href="../css/style.css" rel="stylesheet">
	</head>

	<body>
		<div class="container">

			<!-- entete -->
			<header class="cadre">
				<div class="row">
					<div class="col-12 col-lg-5 d-none d-sm-block text-center text-lg-start">
						<img src="../images/medicaments2.jpg" alt="Médicaments" class="logo">
					</div>
					<div class="col-12 col-lg-7">
						<h1><i class="fa-solid fa-user-md"></i><br>APPLICATION<br>MEDILOG</h1>
					</div>
				</div>
				<h2><i class="fa-solid fa-id-card"></i> Création d'une ordonnance <i class="fa-solid fa-id-card"></i></h2>
			</header>

			<!-- contenu -->
			<main class="cadre">

				<div class="row">
					<div class="col-12 col-lg-6 d-flex">
						<section class="cadre flex-grow-1">
							<h2>Recherche</h2>
							<form action="#" method="get" class="formulaire">
								<div class="mb-3">
									<label for="designation" class="form-label">Désignation à rechercher :</label>
									<input type="text" id="designation" name="designation" class="form-control" placeholder="Tapez un mot à rechercher">
								</div>
								<div class="mb-3">
									<label for="type" class="form-label">Type de médicament :</label>
									<select id="type" name="type" class="form-select">
										<option value="Collyre">Collyre</option>
										<option value="Comprimé">Comprimé</option>
										<option value="Effervescent">Effervescent</option>
										<option value="Gellule">Gellule</option>
										<option value="Pommade">Pommade</option>
									</select>
								</div>
								<div class="mb-3">
									<label for="laboratoire" class="form-label">Laboratoire :</label>
									<select id="laboratoire" name="laboratoire" class="form-select">
										<option value="MERK">MERK</option>
										<option value="SANDOZ">SANDOZ</option>
										<option value="UPSA">UPSA</option>
									</select>
								</div>
								<button type="submit" class="btn btn-light w-100">Envoyer</button>
							</form>
						</section>
					</div>

					<div class="col-12 col-lg-6 d-flex">
						<section class="cadre flex-grow-1">
							<h2>Ordonnance</h2>
							<div class="table-responsive">
								<table class="table tableau">
									<thead>
										<tr>
											<th>Désignation</th>
											<th>Présentation</th>
											<th>Laboratoire</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>Aspirine 500mg</td>
											<td>Effervescent</td>
											<td>UPSA</td>
										</tr>
										<tr>
											<td>Doliprane 1000mg</td>
											<td>Comprimé</td>
											<td>SANDOZ</td>
										</tr>
									</tbody>
								</table>
							</div>
						</section>
					</div>
				</div>

				<section class="cadre">
					<h2>Résultat de la recherche</h2>
					<div class="table-responsive">
						<table class="table tableau">
							<thead>
								<tr>
									<th>Désignation</th>
									<th>Présentation</th>
									<th>Laboratoire</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Aspirine 500mg</td>
									<td>Effervescent</td>
									<td>UPSA</td>
								</tr>
								<tr>
									<td>Aspirine 1000mg</td>
									<td>Comprimé</td>
									<td>MERK</td>
								</tr>
								<tr>
									<td>Doliprane 1000mg</td>
									<td>Comprimé</td>
									<td>SANDOZ</td>
								</tr>
							</tbody>
						</table>
					</div>
				</section>

			</main>

			<!-- pied de page -->
			<footer class="cadre pied">
				<div class="row">
					<div class="col-12 col-lg-9 align-self-center">
						<p><i class="fa-solid fa-sitemap"></i> Menu :</p>
						<nav class="row">
							<div class="col-12 col-lg-4"><a href="../index.php"><i class="fa-solid fa-home"></i> Accueil</a></div>
							<div class="col-12 col-lg-4"><a href="recherche.php"><i class="fa-solid fa-search"></i> Recherche d'un médicament</a></div>
							<div class="col-12 col-lg-4"><a href="ordonnance.php"><i class="fa-solid fa-id-card"></i> Création ordonnance</a></div>
						</nav>
					</div>
					<div class="col-12 col-lg-3 d-flex">
						<div class="cadre flex-grow-1 d-flex flex-column justify-content-center">
							<p><i class="fa-solid fa-spinner fa-spin"></i> Réalisé par</p>
							<div><img src="../images/LogoIut.png" alt="Logo IUT Rodez" class="logo-iut"></div>
						</div>
					</div>
				</div>
			</footer>

		</div>
	</body>
</html>
