    <!-- Debut Menu -->
    <style>
        #header {
            background-color: aquamarine;
        }

        .headerLink,
        .headerLink:visited {
            /* Enlever le sous-ligne */
            text-decoration: none;
            /* Ajouter un marge a gauche */
            margin-left: 10px;
            /* Changer le police  */
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
            /* Changer le couleur du texte */
            color: blueviolet;
        }

        .headerLink:hover {
            /* Changer le couleur du texte quand le curseur survol le lien */
            color: brown;
            /* Ajouter un sous-ligne quand le curseur survol le lien */
            text-decoration: solid underline;
        }

        .headerLink:active {
            /* Agrandire le texte quand le curseur  le lien */
            font-size: 1.1em;
            font-weight: 700;
        }
    </style>
    <div class="container-fluid pt-2" id="header">
        <div class="row">
            <div class="col-12 col-sm-3 col-md-4 col-lg-2">
                Logo
            </div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-8">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-7 col-sm-6 col-12">
                            <nav class="text-center">
                                <a class="headerLink" href="#">Nos Formations</a>
                                <a class="headerLink" href="#">A propos de Nous</a>
                                <a class="headerLink" href="#">Nous contacter</a>
                            </nav>
                        </div>
                        <div class="col-md-5 col-sm-6 col-12">
                            <form action="" method="get">
                                <input type="text" class="fw-50" name="recherche" id="recherche"
                                    placeholder="Nom de formation">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-3 col-md-4 col-lg-2">
                <?php 
                    /*
                        Il existe plusieur type de requet client ver serveur mais les plus utiliser 
                        c'est le requet POST et GET 
                            => GET : on envoi les données par le lien 
                                On l'utilise plus pour l'envoie des données non sensible 
                                Ex : Nom du cour, Durée de formation 
                            => POST : On envoi les données mais pas par le lien
                                On l'utilise plus pour l'envoie des données sensible 
                                Ex : Mot de pass, Email
                    */
                    /*
                        Dans le langage PHP il exite plusieurs variable golobal nous allons utiliser:
                            => $_POST : une liste qui contient tout les données envoyer par le client dans
                                        une requet post
                            => $_GET : une liste qui contient tout les données envoyer par le client dans
                                        une requet get
                            => $_COOKIE : une list qui contient tout les cookies avec leur information ( durée ...)
                            => $_SESSION : une list avec les veleur session 
                    */
                    if(isset($_COOKIE["loginCookie"])){
                        //Verifier si le cookie loginCookie existe 
                        // on affiche le lien mon compte 
                        ?>
                <a href="#">Mon compte</a>
                <?php

                    }else {
                        // Ou pas
                        // on affiche le lien login 
                        echo '<a href="http://localhost/siteFormation/pages/identification.php">Identification</a>';
                    }   
                ?>
            </div>
        </div>
    </div>
    <!-- Fin Menu -->