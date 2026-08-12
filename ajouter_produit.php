<?php
session_start();
include("connexion.php") ;
if(isset($_POST["ajout_produit"])){
    // recherche du produit pour le mettre dans le cart  pouridentifier le produit j'ai besion de son identi
    // et de slidentifiant de l'utilisateur puis je vais recuperer la quatiter 
    $id_produit = $_POST["ajout_produit"] ;
    $id_de_l_utilisateur =$_SESSION["utilisateur"] ;


    $requette_afficher_produit_cart ="SELECT * FROM `panier_produits` WHERE `utilisateur_panier`= $id_de_l_utilisateur AND `produit_id`= $id_produit" ;
    $requette_afficher_produit_cart_exe =$con->query($requette_afficher_produit_cart) ;
    $le_poduit_en_question = $requette_afficher_produit_cart_exe->fetchAll() ;
    // si le produit existe deja 
    if (!empty($le_poduit_en_question)){
        echo "<pre>" ;
        var_dump($le_poduit_en_question) ;
        echo "<pre>" ;
        echo "il y'a  de des produit" ;
        // la on fais une requette pour modifier le produit
        $requette_insert_dans_le_cart = "UPDATE `panier_produits` SET `quantiteter`=  WHERE `utilisateur_panier` = $id_de_l_utilisateur AND `produit_id` = $id_produit"  ;
        $requette_insert_dans_le_cart_exe =$con->query($requette_insert_dans_le_cart) ;
        





// le produi n'existe pas encore 
    }else{
        echo "<pre>" ;
        var_dump($le_poduit_en_question) ;
        echo "<pre>" ;    
         echo "il y'a pas de des produit" ;  
         // la on fais une requette pour modifier le produit
         $requette_insert_dans_le_cart = " INSERT INTO `panier_produits` (`utilisateur_panier`, `produit_id`, `quantiter`) VALUES ('$id_de_l_utilisateur', '$id_produit', '1') " ;
         $requette_insert_dans_le_cart_exe =$con->query($requette_insert_dans_le_cart) ;
         header("location:index.php") ;
    }


}else{
    echo " un truc n'a pa marcher " ;
}

?>