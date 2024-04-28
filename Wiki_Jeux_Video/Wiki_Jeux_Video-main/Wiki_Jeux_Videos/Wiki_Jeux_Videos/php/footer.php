<footer>

        <div class="contacter">
            <h3>Nous contacter</h3>
            <h3>Tel: 07 69 09 42 32</h3>
            <?php
            if(isset($_SESSION["authentifie"])&& $_SESSION["authentifie"]==true){
                echo"<h4> <a class='contact' href='../Contact/contact_connected.php'>Nous contacter</a> </h4>";
            }
            else{
                echo" <h4> <a class='contact' href='../Contact/contact.php'>Nous contacter</a></h4>";
            }
            ?>
        
        </div>
        <div class="a_propos">
            <h3>            
                <?php 
                if(!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false){
                    echo 'A propos de nous';
                }else{
                    echo 'Commentaires';
                }
                ?>
            </h3>
            
            <h3>            
                <?php 
                if(!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false){
                    echo 'Site Junia';
                }else{
                    echo 'Formulaire';
                }
                ?>
            </h3>
            <h4>            
                <?php 
                if(!isset($_SESSION["authentifie"]) || $_SESSION["authentifie"] == false){
                    echo '<a class="prop" href="https://www.junia.com/fr/formations-admissions/prepa-classes-preparatoires-ingenieur/prepa-informatique-reseaux/">Présentation</a>';
                }else{
                    echo '<a class="contact" href="../Contact/commentaire.php">Commentaire</a>';
                }
                ?></h4>
    </div>
    <div id="Commentaire_footer" class="center-content">
        <?php
        try {
            require("../Connexion/connexion.php");

            // Requête SQL pour récupérer les commentaires avec les pseudos des utilisateurs
            $query = "SELECT c.Comment, a.Pseudonyme FROM comment c INNER JOIN account a ON c.Courriel = a.Courriel";
            $statement = $conn->prepare($query);
            $statement->execute();
            $resultats = $statement->fetchAll(PDO::FETCH_ASSOC);

            // Affichage des commentaires
            echo "<h2>Liste de tous les commentaires :</h2>";
            echo "<ul>";
            foreach ($resultats as $comment) {
                echo "<strong>" . $comment['Pseudonyme'] . "</strong> : " . $comment['Comment'] . "</li>";
                echo "<br><br>";
            }
            echo "</ul>";

            $conn = null;
        } catch (Exception $e) {
            echo "Erreur : " . $e->getMessage();
        }

        ?>
    </div>
    <?php
    // Vérifier si le cookie a déjà été accepté
    $cookie_accepted = isset($_COOKIE['cookie_yes']);

    if (!$cookie_accepted && isset($_POST['accept_cookies'])) {
        // Si le cookie n'a pas été accepté et que l'utilisateur a cliqué sur "Accepter", définir le cookie
        if (setcookie('cookie_yes', 'accepted', time() + (3600 * 24 * 365), "/")) {
            echo "<!-- Cookie créé avec succès -->";
            $cookie_accepted = true; // Mettre à jour la variable pour éviter l'affichage du pop-up après avoir accepté les cookies
        } else {
            echo "<!-- Erreur lors de la création du cookie -->";
        }
    }
    
    if (!$cookie_accepted) {
        echo '
        <div id="cookie-popup" class="cookie-popup">
            <div class="cookie-content">
                <form method="post">
                    <p>Ce site utilise des cookies pour améliorer l\'expérience utilisateur. En continuant à utiliser ce site, vous acceptez notre utilisation des cookies. Pour plus d\'informations vous pouvez cliquez <a href="../Cookies/cookies.php">ici</a></p>
                    <br>
                    <button type="submit" name="accept_cookies" value="yes">Accepter</button>
                </form>
            </div>
        </div>
        ';
    }
    ?>
</footer>