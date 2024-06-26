<!DOCTYPE html>
<html lang="fr">

	<head>
	<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Wiki Jeux Vidéo - First Personal Shooter</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
	</head>

	<body>
		<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
		<?php  include ('../../php/header.php'); ?>
		<?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../FPS/fps_EN.php" class="photo_language">
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
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux FPS, ainsi qu'une image illustrative. -->
				<div class="grid-item eltA">
					<h2>Jeux de Tir à la Première Personne (FPS)</h2>
					<p>Les jeux FPS plongent les joueurs dans une perspective immersive à la première personne, les mettant au cœur de l'action et de l'adrénaline.</p>

					<ul>
						<li><strong>Mécanique de tir :</strong> Le tir est la mécanique principale, exigeant précision et stratégie pour éliminer les ennemis.</li>
						<li><strong>Environnements variés :</strong> Exploration de divers lieux, des zones urbaines aux mondes futuristes, offrant des expériences de jeu uniques.</li>
						<li><strong>Armes et équipement :</strong> Collection d'armes, de gadgets et d'outils stratégiques pour surmonter les défis et les ennemis.</li>
						<li><strong>Ennemis et affrontements :</strong> Combats intenses contre des adversaires contrôlés par l'IA ou d'autres joueurs dans des modes multijoueurs.</li>
						<li><strong>Objectifs et missions :</strong> Accomplissement de missions variées, telles que la défense de zones, la récupération d'objets ou l'élimination de cibles spécifiques.</li>
						<li><strong>Graphismes et ambiance sonore :</strong> Atmosphères immersives grâce à des graphismes réalistes ou stylisés et des effets sonores captivants.</li>
					</ul>

					<p>Ces jeux encouragent souvent la réactivité, la coordination et la prise de décision rapide pour survivre et réussir.</p>
				</div>
				<div class="grid-item image1">
					<img src="../../photo/FPS/Présentation/photo-fps-1.png" alt="Image 1">
				</div>
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Doom, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltB">
					<h2>Doom (1993)</h2>
					<h3>Plongez dans un univers infernal et affrontez des hordes de démons!</h3>

					<p>Doom est un classique du jeu de tir à la première personne développé par id Software. Traversez des niveaux remplis de monstres terrifiants, trouvez des armes puissantes et affrontez l'enfer lui-même.</p>

					<h4>Caractéristiques du jeu :</h4>
					<ul>
						<li><strong>Des niveaux emblématiques :</strong> Exploration de bases martiennes infestées de créatures cauchemardesques.</li>
						<li><strong>Un gameplay frénétique :</strong> Action rapide, tir effréné et combats intenses.</li>
						<li><strong>Armes emblématiques :</strong> Shotgun, BFG 9000, et autres outils de destruction massive.</li>
						<li><strong>Bande-son légendaire :</strong> Musique immersive par Bobby Prince.</li>
					</ul>
					<p>Préparez-vous à plonger dans un univers sombre et à affronter des forces maléfiques dans Doom (1993)! Pour découvrir ce classique, consultez la page officielle sur <a class="website_link" href="https://bethesda.net/game/doom" target="_blank">Bethesda.net</a>.</p>
					<iframe src="https://store.steampowered.com/widget/379720/" width="646" height="190"></iframe>
				</div>
				<div class="grid-item image2">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/FPS/Doom/doom-1.png" alt="carrousel 1">
							</div>
							<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/FPS/Doom/doom-2.png" alt="carrousel 2">
							</div>
							<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/FPS/Doom/doom-3.png" alt="carrousel 3">
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
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Valorant, ainsi qu'un carrousel contenant des images illustratives. -->
				<div class="grid-item eltC">
					<h2>Valorant</h2>
					<h3>Façonnez votre destinée dans l'univers captivant de Valorant !</h3>

					<p>Plongez-vous dans l'univers compétitif de Valorant, un jeu de tir tactique où la précision et la stratégie sont les clés de la victoire.</p>

					<h4>Caractéristiques du jeu :</h4>
					<ul>
						<li><strong>Gameplay tactique :</strong> Maîtrisez l'art du tir précis et planifiez des stratégies avec votre équipe.</li>
						<li><strong>Agents uniques :</strong> Choisissez parmi une variété d'agents, chacun ayant ses propres compétences spéciales.</li>
						<li><strong>Cartes stratégiques :</strong> Affrontez vos adversaires sur des cartes conçues pour des affrontements tactiques.</li>
						<li><strong>Compétition intense :</strong> Participez à des matchs compétitifs et grimpez dans le classement.</li>
					</ul>
					<p>Préparez-vous à vivre des moments palpitants, à coordonner des attaques stratégiques et à montrer vos compétences de tireur d'élite dans Valorant! Visitez le site officiel : <a class="website_link" href="https://playvalorant.com" target="_blank">Valorant</a></p>
				</div>
				<div class="grid-item image3">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/FPS/Valorant/valorant-1.png" alt="carrousel 4">
							</div>
							<input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/FPS/Valorant/valorant-2.png" alt="carrousel 5">
							</div>
							<input class="carousel-open" type="radio" id="carousel-6" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/FPS/Valorant/valorant-3.png" alt="carrousel 6">
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
