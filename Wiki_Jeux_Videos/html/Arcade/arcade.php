<!DOCTYPE html>
<html lang="fr">
  <head>
	  <!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéo - Jeux d'Arcade</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
  </head>
  <body>
	<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
	<?php  include ('../../php/header.php'); ?>
	<header>
			<input type="checkbox" id="videoToggle">
				<label for="videoToggle">Easter Egg</label>
				<div id="videoContainer">
				<video autoplay loop muted>
					<source src="../../photo/Arcade/EasterEgg/Easter_Egg_Pac_Man.mp4" type="video/mp4">
				</video>
				</div>
	</header>
	<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Arcade/arcade_EN.php" class="photo_language">
						<div class="photo_language">
							<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					</a>
				</div>
			<?php
				}
			?>

	<main>
		 <!-- Le contenu principal de la page est divisé en sections de grille permettant d'avoir une page bien structuré -->
		  <section class="grid-container">
		  <!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux d'arcade, ainsi qu'une image illustrative. -->
			<div class="grid-item eltA">
			  <h2>Rencontre et Divertissement</h2>
			  <p>Ces jeux d'arcade plongent les joueurs dans une aventure palpitante, les transportant dans des mondes fantastiques où l'action et l'amusement sont au rendez-vous.</p>
			  
			  <ul>
				<li><strong>Action frénétique :</strong> Les joueurs vivent des moments d'adrénaline avec une action rapide, des combats dynamiques et des défis constants.</li>
				<li><strong>Compétences de jeu :</strong> Maîtrisez des mouvements spéciaux, réflexes rapides et stratégies pour dominer les niveaux.</li>
				<li><strong>Progression de l'arcade :</strong> Les joueurs avancent à travers des niveaux de plus en plus difficiles, testant leur habileté et leur persévérance.</li>
				<li><strong>Collecte de bonus :</strong> Amassez des bonus et des power-ups pour améliorer vos capacités et atteindre des scores élevés.</li>
				<li><strong>Esthétique visuelle immersive :</strong> Des graphismes vibrants et colorés transportent les joueurs dans des mondes fantastiques et stimulants.</li>
			  </ul>
			  
			  <p>Ces jeux d'arcade offrent une expérience de jeu divertissante, mettant l'accent sur l'amusement immédiat et la compétition palpitante entre les joueurs.</p>
			</div>
			<div class="grid-item image1">
			  <img src="../../photo/Arcade/Présentation/photo-arcade-1.png" alt="Image 1">
			</div>
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu PACMAN, ainsi qu'un carrousel contenant des images illustratives. -->
			<div class="grid-item eltB">
			  <h2>PAC MAN</h2>
			  <h3>Explorez un labyrinthe rempli de points dans ce classique du jeu vidéo!</h3>
			  
			  <p>PAC MAN est un jeu vidéo emblématique développé par Namco. Vous incarnez PAC MAN, une boule jaune affamée, et votre mission est de manger tous les points dans le labyrinthe tout en évitant les fantômes. Dévorez des pac-gommes spéciales pour rendre les fantômes vulnérables et marquer des points bonus!</p>
			  
			  <h4>Caractéristiques du jeu :</h4>
			  <ul>
				<li><strong>Exploration du labyrinthe :</strong> Parcourez le labyrinthe et mangez tous les points pour passer au niveau suivant.</li>
				<li><strong>Fantômes redoutables :</strong> Évitez les fantômes colorés qui vous poursuivent sans relâche.</li>
				<li><strong>Pac-gommes spéciales :</strong> Transformez les tables en mangeant des pac-gommes spéciales et attaquez les fantômes vulnérables.</li>
				<li><strong>Points bonus :</strong> Marquez des points bonus en dévorant les fantômes vulnérables et en terminant les niveaux.</li>
			  </ul>
			  
			  <p>Plongez dans l'univers captivant de PAC MAN et relevez le défi du labyrinthe! Pour en savoir plus sur ce jeu classique, visitez le site officiel : <a class="website_link" href="https://pacman.com">PAC MAN</a></p>
			</div>
			
			<div class="grid-item image2">
			<!-- Cette partie du code crée un carrousel d'images -->
			  <div class="carousel">
				<div class="carousel-inner">
				<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
				  <input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
					<div class="carousel-item">
					  <img src="../../photo/Arcade/Pac-man/pacman-1.png" alt="carrousel 1">
					</div>
				  <input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
					<div class="carousel-item">
					  <img src="../../photo/Arcade/Pac-man/pacman-2.png" alt="carrousel 2">
					</div>
				  <input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
					<div class="carousel-item">
					  <img src="../../photo/Arcade/Pac-man/pacman-3.png" alt="carrousel 3">
					</div>
				  <!-- Les balises label sont utilisées comme contrôles précédent/suivant pour chaque image -->
				  <label for="carousel-3" class="carousel-control prev control-1">‹</label>
				  <label for="carousel-2" class="carousel-control next control-1">›</label>
				  <label for="carousel-1" class="carousel-control prev control-2">‹</label>
				  <label for="carousel-3" class="carousel-control next control-2">›</label>
				  <label for="carousel-2" class="carousel-control prev control-3">‹</label>
				  <label for="carousel-1" class="carousel-control next control-3">›</label>
				   <!-- La liste ordonnée (ol) permet d'accéder au choix à chaque image du caroussel -->
				  <ol class="carousel-indicators">
					<li>
					  <label for="carousel-1" class="carousel-bullet">•</label>
					</li>
					<li>
					  <label for="carousel-2" class="carousel-bullet">•</label>
					</li>
					<li>
					  <label for="carousel-3" class="carousel-bullet">•</label>
					</li>
				  </ol>
				</div>
			  </div>
			</div>
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Street Fighter, ainsi qu'un carrousel contenant des images illustratives. -->
			<div class="grid-item eltC">
			  <h2>Street Fighter</h2>
			  <h3>Participez à des combats épiques dans ce jeu de combat légendaire!</h3>
			  
			  <p>Street Fighter est un jeu de combat emblématique développé par Capcom. Choisissez parmi une variété de combattants, chacun avec ses propres styles de combat uniques, et engagez-vous dans des duels épiques. Maîtrisez des mouvements spéciaux, enchaînez des combos et devenez le champion du tournoi mondial!</p>
			  
			  <h4>Caractéristiques du jeu :</h4>
			  <ul>
				<li><strong>Choix de combattants :</strong> Sélectionnez votre combattant préféré parmi une liste diversifiée de personnages.</li>
				<li><strong>Combats épiques :</strong> Affrontez d'autres joueurs ou l'ordinateur dans des combats intenses et stratégiques.</li>
				<li><strong>Mouvements spéciaux :</strong> Maîtrisez les mouvements spéciaux de chaque personnage pour gagner l'avantage.</li>
				<li><strong>Championnat mondial :</strong> Participez à des tournois pour devenir le champion incontesté de Street Fighter.</li>
			  </ul>
			  
			  <p>Immergez-vous dans l'excitation des combats de rue et prouvez votre supériorité sur le ring! Pour en savoir plus sur ce jeu légendaire, visitez le site officiel : <a class="website_link" href="https://www.streetfighter.com">Street Fighter</a></p>
			</div>
			<div class="grid-item image3">
			<!-- Cette partie du code crée un carrousel d'images -->
			  <div class="carousel">
				<div class="carousel-inner">
				<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
				  <input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
					<div class="carousel-item">
					  <img src="../../photo/Arcade/StreetFighter/streetfighter-1.png" alt="carrousel 4">
					</div>
				  <input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
					<div class="carousel-item">
					  <img src="../../photo/Arcade/StreetFighter/streetfighter-2.png" alt="carrousel 5">
					</div>
				  <input class="carousel-open" type="radio" id="carousel-6" name="carousel2" aria-hidden="true" hidden="">
					<div class="carousel-item">
					  <img src="../../photo/Arcade/StreetFighter/streetfighter-3.png" alt="carrousel 6">
					</div>
				  <!-- Les balises label sont utilisées comme contrôles précédent/suivant pour chaque image -->
				  <label for="carousel-6" class="carousel-control prev control-4">‹</label>
				  <label for="carousel-5" class="carousel-control next control-4">›</label>
				  <label for="carousel-4" class="carousel-control prev control-5">‹</label>
				  <label for="carousel-6" class="carousel-control next control-5">›</label>
				  <label for="carousel-5" class="carousel-control prev control-6">‹</label>
				  <label for="carousel-4" class="carousel-control next control-6">›</label>
				  <!-- La liste ordonnée (ol) permet d'accéder au choix à chaque image du caroussel -->
				  <ol class="carousel-indicators">
					<li>
					  <label for="carousel-4" class="carousel-bullet">•</label>
					</li>
					<li>
					  <label for="carousel-5" class="carousel-bullet">•</label>
					</li>
					<li>
					  <label for="carousel-6" class="carousel-bullet">•</label>
					</li>
				  </ol>
				</div>
			  </div>
			</div>
		  </section>
		</main>
		<?php  include ('../../php/footer.php'); ?>
  </body>
</html>
