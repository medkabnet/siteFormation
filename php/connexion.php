<?php 
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name="gestionformation";

    $conn = new mysqli($servername, $username, $password ,$db_name );    
    if ($conn->connect_error){
        die("Erreur de connexion: ". $conn->connect_error);
    }