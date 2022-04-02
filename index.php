<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formation</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome.min.css">
    <link rel="stylesheet" href="./css/index.css?v=0.0.2">
    <script src="./js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <?php
        // ajout du menu header
        include './section/header.php';
    ?>
    <!-- Debut presentation -->
    <div class="container-fluid mt-3" style="background-image: url(./asset/img/bg2.jpeg);">
        <div class="row">
            <div class="col-12 px-5">
                <h1 class="text-center">Site de formation En ligne</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, tempora dolorum! Doloremque, vero nulla a natus obcaecati ab enim beatae possimus earum similique architecto eos cupiditate harum facilis. Quis, tempore.</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, tempora dolorum! Doloremque, vero nulla a natus obcaecati ab enim beatae possimus earum similique architecto eos cupiditate harum facilis. Quis, tempore.</p>
            </div>
        </div>
    </div>
    <!-- Fin presentation -->
    <!-- Debut Video -->
    
    <!-- Fin Video -->
    <!--  -->
    <!-- Debut Formation populaire -->
    <div class="container-sm container-md px-4 px-sm-0">
        <div class="row">
            <h2 class="text-center">Les Formations les plus populaires</h2>
        </div>
        <div class="row">
            <!-- 
                col-sm-6 : pour tout les taills d'ecran >=576px 
                col-12 : pour les taills d'écran < 576px
            -->
            <div class="col-sm-6 col-12" >
                <a href="#" target="_blank">
                    <div class="card" style="cursor: pointer !important;">
                        <img src="./asset/img/logoFor.jpeg" class="card-img-left w-25"  alt="Logo formation" srcset="">
                        <div class="card-body">
                            Titre de formtaion
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-12" >
                <a href="#" target="_blank">
                    <div class="card" style="cursor: pointer !important;">
                        <img src="./asset/img/logoFor.jpeg" class="card-img-left w-25"  alt="Logo formation" srcset="">
                        <div class="card-body">
                            Titre de formtaion
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-12" >
                <a href="#" target="_blank">
                    <div class="card" style="cursor: pointer !important;">
                        <img src="./asset/img/logoFor.jpeg" class="card-img-left w-25"  alt="Logo formation" srcset="">
                        <div class="card-body">
                            Titre de formtaion
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-sm-6 col-12" >
                <a href="#" target="_blank">
                    <div class="card" style="cursor: pointer !important;">
                        <img src="./asset/img/logoFor.jpeg" class="card-img-left w-25"  alt="Logo formation" srcset="">
                        <div class="card-body">
                            Titre de formtaion
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- Fin formatio populaire -->
</body>
</html>