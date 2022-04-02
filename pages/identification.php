<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>
<body>
    <?php
        // ajout du menu header
        include '../section/header.php';
    ?>
    <form action="../php/login.php" method="POST" class="container-md container-sm border border-dark border-3 rounded">
        <div class="form-group">
            <label for="">Nom</label>
            <input type="text" class="form-control" name="nom" id="nom" required>
        </div>
        <div class="form-group">
            <label for="">Prénom</label>
            <input type="text" class="form-control" name="prenom" id="prenom" required>
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="">Mot de pass</label>
            <input type="password" class="form-control" name="pwd" id="pwd" required>
        </div>
        <div class="form-group">
            <label for="">Nom d'utilisateur</label>
            <input type="text" class="form-control" name="username" id="username" >
        </div>
        <div class="form-group">
            <label for="">Niveaux d'étude</label>
            <input type="text" class="form-control" name="niveau" id="niveau" >
        </div>
        <div class="form-group">
            <label for="">Genre</label>
            <select name="genre" id="genre" class="form-control">
                <option value="" selected disabled>Votre genre</option>
                <option value="Ho">Homme</option>
                <option value="Fe">Femme</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Age</label>
            <input type="number" class="form-control" min="13" name="age" id="age" >
        </div>

        <div class="form-group">
            <label for="">Pays</label>
            <input type="text" class="form-control" name="adresse" id="adresse" >
        </div>
        <div class="form-group">
            <label for="">Adresse</label>
            <input type="text" class="form-control" name="adresse" id="adresse" >
        </div>
        <div class="form-group">
            <label for="">Téléphone</label>
            <input type="tel" class="form-control" name="telephone" id="telephone" >
        </div>
        <div class="form-check">
            <input type="checkbox" name="" id="" required>
            <label for=""Class="form-check-label">Accepter les conditions général d'utilisation</label>
        </div>
        <button type="submit" name="inscription" class="btn btn-primary w-75 d-block mx-auto">S'inscrire</button>
    </form>
</body>
</html>