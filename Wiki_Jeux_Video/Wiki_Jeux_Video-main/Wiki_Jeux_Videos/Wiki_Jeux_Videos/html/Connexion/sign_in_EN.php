<!DOCTYPE html>
<html lang="fr">
  <head>
    <!-- Les éléments meta et link dans la balise head sont utilisés pour définir les métadonnées de la page et lier le CSS et l'icône du site. -->
    <meta charset="UTF-8">
    <title>Video Game Wiki - Sign In</title>
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
					<a href="../Connexion/sign_in.php" class="photo_language">
						<div class="photo_language">
							<img src="../../photo/FonctionnementduSite/photo-language.png" alt="Language">
						</div>
					</a>
				</div>
			<?php
				}
			?>


    <main id="contact">
      <form class="formLetter" method="post" action="ajouter.php">
            <fieldset>  <!-- la balise fieldset peut être utilisé pour regrouper un ensemble de champs -->
                <legend>Sign in :</legend>
                <label for="nom">Last Name<span style="color: red; font-weight: bold;">*</span> :</label >
                <input type="text" name="nom" id="nom" maxlength="20" minlength="2" pattern="^[\p{L}\-' ]{1,40}$" placeholder="Your last name" required>
                <br><br>

                <label for="prenom">First Name<span style="color: red; font-weight: bold;">*</span> :</label >
                <input type="text" name="prenom" id="prenom" maxlength="20" minlength="2" pattern="^[\p{L}\-' ]{1,40}$" placeholder="Your first name" required>
                <br><br>
                
                <label for="email">Mail<span style="color: red; font-weight: bold;">*</span> : </label >
                <input type="email" name="courriel" id="email" maxlength="50" pattern="^[a-zA-Z0-9.\-]+@[a-zA-Z.]*(\.[a-z]{2,3})$" placeholder="Your mail" required>
                <br><br>

                <label for="telephone">Phone Number<span style="color: red; font-weight: bold;">*</span> : </label>
                <input type="tel" name="telephone" id="telephone" maxlength="10" pattern="^0[0-9]{9}$" placeholder="Your phone number" required>
                <br><br>

                <label for="pseudonyme">Pseudo<span style="color: red; font-weight: bold;">*</span> :</label>
                <input type="text" name="pseudonyme" id="pseudonyme" maxlength="20" minlength="2" pattern="^[\p{L}\-' ]{1,40}$" placeholder="Your pseudo" required>
                <br><br>

                <label for="motdepasse">Password (More than 8 characters with at least 1 number)<span style="color: red; font-weight: bold;">*</span> :</label>
                <input type="text" name="motdepasse" id="motdepasse" maxlength="20" placeholder="Your password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{8,}" required>
                <br><br>

                <label for="language_preference">Choose your preferred language<span style="color: red; font-weight: bold;">*</span> :</label>
                <select name="language_preference" id="language_preference" required>
                    <option value="Fr">Français</option>
                    <option value="En">Anglais</option>
                </select>
            </fieldset>
            
            <fieldset> 
                <br><br>
                <div class="contact_button">
                    <input type="submit" name="sign_in" id="soumission" value="Sign in">
                    <input type="reset" value="Reset">
                </div>
            </fieldset>
        <p>
          <b style = "color: red">*</b> : required
        </p>

        </form>
    </main>
    <?php  include ('../../php/footer_EN.php'); ?>
  </body>

  </html>