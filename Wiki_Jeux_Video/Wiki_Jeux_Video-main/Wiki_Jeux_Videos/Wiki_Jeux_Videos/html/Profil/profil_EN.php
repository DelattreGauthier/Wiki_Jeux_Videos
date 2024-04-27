<?php
	session_start();
	if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true){
		$courriel = $_SESSION["nom"];
		try{
			// Connexion à la base de données
			require("../Connexion/connexion.php");  
			// Requête SQL préparée pour éviter les injections SQL
			$reqPrep = "SELECT Nom, Prenom, Courriel, Telephone, Pseudonyme FROM account WHERE Courriel = :courriel";
			// Exécution de la requête avec un paramètre lié
			$req = $conn->prepare($reqPrep);
			$reqTab = array(":courriel" => $courriel);
			$req->execute($reqTab);
			$resultats = $req->fetchAll(PDO::FETCH_ASSOC);//récupérer le résultat
			$conn = null; // On ferme la connexion        
		

		} catch(Exception $e){
			die("Erreur : " . $e->getMessage());
		}
	}
	else{
		header("Location:../Accueil/accueil_EN.php"); 
	}
	?>
<!DOCTYPE html>
<html lang="fr">
  <head>
		<!-- Métadonnées de la page et liens CSS et icône du site -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéos - Profil</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
  </head>
  
  <body>
		<!-- En-tête de la page -->
		<?php  include ('../../php/header_EN.php'); ?>
		<!-- Sélecteur de langue -->
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Profil/profil.php" class="photo_language">
						<div class="photo_language">
							<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					</a>
				</div>
			<?php
				}
			?>

		<!-- Contenu principal -->
		<main>
			<div class="grid-item eltA">

			<?php
			// Affichage des informations de l'utilisateur avec échappement des sorties
				echo "<h1>".$resultats[0]["Pseudonyme"]."'s Profil</h1>";
				echo "<h3>Name : ".$resultats[0]["Nom"]."</h3>";
				echo "<h3>First name : ".$resultats[0]["Prenom"]."</h3>";
				echo "<h3>E-mail : ".$resultats[0]["Courriel"]."</h3>";
				echo "<h3>Phone number : ".$resultats[0]["Telephone"]."</h3>";

				echo"</div>";
				if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true){ // si un utilisateur est authentifié
						if(isset($_SESSION["admin"])&& $_SESSION["admin"]==true){
							echo"<a class='connexion-button' href='../Admin/admin_EN.php'>Base de donnée</a><br>";
						}
						echo"<div class='connexion'>";
							echo"<a class='connexion-button' href='../Connexion/log_out.php'>Log out</a>";
						echo"</div>";

				}
			?>				
		</main>
 
		<!-- Pied de page -->
		<?php  include ('../../php/footer.php'); ?>
  </body>
</html>