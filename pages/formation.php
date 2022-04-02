<?php
    require_once '../php/connexion.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>Nos Formations</title>
</head>
<body>
    <?php
        // ajout du menu header
        include '../section/header.php';
    ?>
    <!--
        section filtre
    -->

    <!-- Debut Grid fromation -->
    <?php
        /* 
        "SELECT * FROM formation" cette requet SQL permet d'afficher tout les formation 
            dans la table formation
        
        "SELECT nomFormation , Description FROM formation " cette requet permet d'afficher le nom
            et la description de tout les formations dans la table formation 
        
        "SELECT nomFormation , Description FROM formation WHERE prix = 100 " cette requet permet 
            d'afficher le nom et la description  des formations qui on un prix égal à 100

        "SELECT nomFormation , Description FROM formation WHERE prix > 100 ORDER BY prix DESC" 
            cette requet permet d'afficher le nom et la descirption des formation qui on un prix
            supperieur de 100 tier par prix du plus cher au moin cher
            Order il y a DESC du plus gand au plus petie 
                et ASC du plus peti au plu grand 
        "SELECT nomFormation , Description FROM formation WHERE prix > 100 ORDER BY prix DESC LIMIT 9"
        "SELECT nomFormation , Description FROM formation LIMIT 9"
            Cette requet affiche just les neuf premier résulta
        */  
        $sql = "SELECT IdFormation,nomFormation,prix,dateModif FROM formation LIMIT 9"
        /* 
        on envoi la requet a notre serveur mySql et nous récupérons une liste 
            des formations dans la variable $resulta  à l'aide de la fonction query()
        */
        $resulat  = $conn->query($sql);
        if($resulat->num_rows > 0){
            // Verifier si notre résulta contient des donnés 
        }else{
            // ou non 
            echo "Désoler il y a pas de formations ";
        }
    ?>
    <!-- Fin Grid fromation -->
</body>
</html>