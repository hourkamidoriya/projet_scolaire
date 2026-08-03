<?php

include("connexion.php") ;

    if(isset($_GET["nom"])){
        $nom = $_GET["nom"] ;    }
    if(isset($_GET["email"])){
        $email = $_GET["email"] ;    }
    if(isset($_GET["pass"])){
        $pass = $_GET["pass"] ;    }
    if(isset($_GET["verif_pass"])){
        $vpass = $_GET["verif_pass"] ;    }
    if(isset($_GET["num_tel"])){
        $num_tel = $_GET["num_tel"] ;    }
    echo "$nom" ;
    echo "$email" ;
    echo "$pass" ;
    echo "$vpass" ;
    echo "$num_tel" ;
    if($pass == $vpass){      
        $requette_add_user = "INSERT INTO `utilisateur` (`id`, `nom`, `email`, `mot_de_pass`, `tel`) VALUES (NULL, '$nom', '$email', '$pass', '$num_tel')" ;
        $execute = $con->query($requette_add_user) ;
    }
    header("location: connexion_user.php") ;
?>



<script src="js/script_inscription.js"></script>