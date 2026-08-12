<?php 
session_start() ;
include ("connexion.php") ;
if(isset($_POST["product_del"])&& !empty($_POST["product_del"])){
    $id=$_SESSION["utilisateur"];

    $del_product =(int)$_POST["product_del"] ;
    $requette_del ="DELETE FROM `panier_produits` WHERE `panier_produits`.`produit_id` =$del_product AND `utilisateur_panier` = $id " ;
    $requette_del_exe =$con->query($requette_del);
    echo $del_product ;
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}

?>