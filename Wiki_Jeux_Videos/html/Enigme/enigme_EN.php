<!DOCTYPE html>
<html lang="en">

	<head>
	<!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
		<meta charset="UTF-8">
		<title>Video Game Wiki - Puzzle Games</title>
		<link rel="stylesheet" href="../../css/WIKIJEUXVIDEO.css">
		<link rel="icon" type="image/x-icon" href="../../photo/FonctionnementduSite/logo.png">
	</head>

	<body>
	<!-- La balise body contient l'en-tête, le contenu principal et le pied de page de la page web. -->
	<?php  include ('../../php/header_EN.php'); ?>
    <?php
			// Vérifie si le cookie de préférence linguistique est défini
				if(!isset($_COOKIE['language_preference'])) {
			?>
				<div class="language">
					<a href="../Enigme/enigme.php" class="photo_language">
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
			<!-- Cette partie de la grille contient un titre et un paragraphe décrivant les jeux d'enigme, ainsi qu'une image illustrative. -->
				<div class="grid-item eltA">
					<h2>Investigation and Discovery</h2>
					<p>These games depict players immersed in captivating mysteries, urging them to solve complex puzzles to progress in the story.</p>

					<ul>
						<li><strong>Strategic Thinking:</strong> Players must think strategically to advance, analyzing clues and solving puzzles.</li>
						<li><strong>Narrative Progression:</strong> The plot unfolds gradually, prompting players to continue to discover new twists.</li>
						<li><strong>Clue Collection:</strong> Gather crucial information to unravel the mysteries scattered throughout the game.</li>
						<li><strong>Fascinating Characters:</strong> Meet intriguing characters and uncover their secrets throughout the adventure.</li>
						<li><strong>Visual Aesthetics:</strong> Graphically rich environments, ranging from mysterious landscapes to enigmatic urban scenes.</li>
					</ul>

					<p>These games encourage in-depth exploration and the gradual discovery of the plot, providing players with an immersive experience.</p>
				</div>
				<div class="grid-item image1">
					<img src="../../photo/Enigme/Présentation/photo-enigme-1.png" alt="Image 1">
				</div>
				<div class="grid-item eltB">
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Return of the Obra Dinn, ainsi qu'un carrousel contenant des images illustratives. -->
					<h2>Return of the Obra Dinn</h2>
					<h3>Explore a maritime mystery in this unique investigative game!</h3>

					<p>Return of the Obra Dinn is an investigative game developed by Lucas Pope. You play as an insurance adjuster sent to unravel the mystery of the Obra Dinn, a ship lost at sea with its crew. Use a special timepiece to discover the truth behind these enigmatic events.</p>

					<h4>Game Features:</h4>
					<ul>
						<li><strong>Investigation Puzzles:</strong> Identify crew members and reconstruct their fates from frozen scenes in time.</li>
						<li><strong>Timepiece:</strong> Explore memories of the deceased to solve the mystery of the ship.</li>
						<li><strong>Unique Aesthetics:</strong> Retro monochrome visual style inspired by 1-bit graphics.</li>
						<li><strong>Immersive Narration:</strong> Discover the complex story of the Obra Dinn through visual and auditory clues.</li>
					</ul>

					<p>Immerse yourself in a captivating maritime narrative and take on the challenge of the mystery aboard the Obra Dinn! To learn more about this game, visit the official website: <a class="website_link" href="https://obradinn.com">Return of the Obra Dinn</a></p>
					<iframe src="https://store.steampowered.com/widget/653530/?t=Perdu%20en%20mer%2C%201803%20LE%20FIER%20VAISSEAU%20%C2%AB%20OBRA%20DINN%20%C2%BB" width="646" height="190"></iframe>
				</div>
				 <div class="grid-item image2">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-1" name="carousel" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/Enigme/ReturnOfTheObraDinn/obradinn-1.png" alt="carrousel 1">
							</div>
							<input class="carousel-open" type="radio" id="carousel-2" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Enigme/ReturnOfTheObraDinn/obradinn-2.png" alt="carrousel 2">
							</div>
							<input class="carousel-open" type="radio" id="carousel-3" name="carousel" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Enigme/ReturnOfTheObraDinn/obradinn-3.png" alt="carrousel 3">
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
				<div class="grid-item eltC">
				<!-- Cette partie de la grille contient un titre et un paragraphe décrivant le jeu Outer Wilds, ainsi qu'un carrousel contenant des images illustratives. -->
					<h2>Outer Wilds</h2>
					<h3>Explore a mysterious solar system in a unique temporal adventure!</h3>

					<p>Outer Wilds is an independent adventure and space exploration game developed by Mobius Digital. Explore a constantly evolving solar system, solve cosmic mysteries, and discover the secrets of the universe.</p>

					<h4>Game Features:</h4>
					<ul>
						<li><strong>Space Exploration:</strong> Freely travel through a solar system caught in time loops.</li>
						<li><strong>Mystery Solving:</strong> Discover clues scattered in space to understand the galaxy's story.</li>
						<li><strong>Temporal Dynamics:</strong> A 22-minute cycle reveals new information with each iteration.</li>
						<li><strong>Immersive Narrative:</strong> Captivating story without combat or conventional objectives.</li>
					</ul>

					<p>Prepare for a unique space exploration and a fascinating narrative experience in Outer Wilds! To learn more about this game, visit the official website: <a class="website_link" href="https://www.mobiusdigitalgames.com/outer-wilds" target="_blank">Outer Wilds</a></p>
					<iframe src="https://store.steampowered.com/widget/753640/" width="646" height="190"></iframe>
				</div>
				<div class="grid-item image3">
				<!-- Cette partie du code crée un carrousel d'images -->
					<div class="carousel">
						<div class="carousel-inner">
						<!-- Chaque image est associée à un bouton radio pour passer d'une image à l'autre -->
							<input class="carousel-open" type="radio" id="carousel-4" name="carousel2" aria-hidden="true" hidden="" checked="checked">
							<div class="carousel-item">
								<img src="../../photo/Enigme/OuterWild/outerwild-1.png" alt="carrousel 4">
							</div>
							<input class="carousel-open" type="radio" id="carousel-5" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Enigme/OuterWild/outerwild-2.png" alt="carrousel 5">
							</div>
							<input class="carousel-open" type="radio" id="carousel-6" name="carousel2" aria-hidden="true" hidden="">
							<div class="carousel-item">
								<img src="../../photo/Enigme/OuterWild/outerwild-3.png" alt="carrousel 6">
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
		<?php  include ('../../php/footer_EN.php'); ?>
	</body>
</html>
