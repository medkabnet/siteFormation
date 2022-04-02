<?php
    //connexion a labase de donnée 
    require_once './connexion.php';

    // Debut creation du compte  
     
    $options = [
        'cost' => 11,
    ];
    /*$
        hash le mot de pass d'utilisateur 
        =>$_POST["pwd"] : c'est la valeur d'input avec l'attribu  Name = pwd
        =>PASSWORD_BCRYPT : c'est un olgorithem de Hash et c'est le plus puissan
        =>$options : Difficulté de hash
    */ 
    $hashPWD = password_hash($_POST["pwd"], PASSWORD_BCRYPT, $options);
    /*
        Nous créons une variable $genre pardéfaut avec la valeur Null
        et a prés nous teston si il exsite dans la list POST enoyer par 
        le client un attribu 'genre' dans ce cas nous remplaçon 
        Null par la valeur du $_POST['genre'] 
    */
    $genre = null;
    if(isset($_POST['genre']))
        $genre = $_POST['genre'];

    /*
        La fonction trim() Permet de supprimer tout les espaces 
        au début et à la fin d'un text
    */    
    $sql = "INSERT INTO utilisateur 
        (nom,prenom,email,motDePass,age,telephone,nomUtilisateur,genre)
        VALUES
        ('".$_POST['nom']."','".$_POST['prenom']."',
        '".trim($_POST['email'])."','".$hashPWD."',".$_POST['age'].",
        '".$_POST['telephone']."','".trim($_POST['username'])."',
        '".$genre."')";
    /*
        =>Dans Une condition on utilise == si on veut verifier si les deux 
            valeur sont egaux Ex : 5 == '5' c'est vrai
        =>Dans Une condition on utilise ==== si on veut verifier si les deux 
            valeur et leur variables sont egaux Ex : 5 === '5' c'est Faux
    */
    /*
        Le fonction query() permet de envoyer notre requéte a la base de données
        par notre connexion $conn    
    */
    if($conn->query($sql) === true){
        //insert_id : c'est le dernier Id créer par la base de donnée
        $nouveauId = $conn->insert_id;
        /*
            La fonction setcookie() permet de créer des cookies
                => 1er Para  : le nom du cookie
                => 2éme Para : le contenu du cookie
                => 3éme Para : la duré du cookie en second
                => 4émé Para : Le chemin du dossier pére du projet 
        */
        setcookie("loginCookie",$nouveauId,time()+3600*24,"/siteFormation/");
        /* 
            La fonction Header("Location: ...") Permet la redirection ver un lien ou une page web 
                => Le cas d'un lien : on met le lien de la page voulus 
                => Le cas d'un ficher dans notre serveur : On met le chemin du fichier
        */
        header("Location: ../pages/formation.php");
        echo "bien ajouter";
    }
    else
        echo "erreur";

    // Fin creation du compte 


    //echo ($val == 5)? "Vrai": "Faux";
    