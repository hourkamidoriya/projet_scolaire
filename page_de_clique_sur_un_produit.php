<?php


include("connexion.php") ; 



if(isset($_GET["affiche_produit"])){
    $produit_cliked=$_GET["affiche_produit"] ;

    $requette="SELECT * FROM `produit` WHERE `Id`=".$produit_cliked ;
}
else{
    header("location: page2.php") ;
}
$exe=$con->query($requette);
$mon_produit=$exe->fetchAll();

foreach($mon_produit as $produit_select){
    echo $produit_select["Titre"] ;
}

?>



















<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/output.css">
</head>
<body>
    <?php include("entete.php") ; ?>

    <div class="grid grid-cols-3 gap-2 w-11/12 mx-auto bg-blue-300  h-96  text-center ">
        <div class="bg-amber-500 rounded-2xl text-center flex p-3 justify-center"><img src="<?php echo $produit_select["Image"] ; ?>" alt=""></div>
        <div>
            <h2> voulez vous Achete  un / une <?php echo $produit_select["Titre"] ; ?></h2>
           <p> <?php echo $produit_select["Description"] ; ?> </p>
            <p> cette Article coute <span><?php echo $produit_select["Prix"] ; ?> </span> </p>
            <p>  les stok disponible pour se produit est de <?php echo $produit_select["quantiter"] ; ?> bien vouloir entrer une somme inferieur ou egal l'aord de l'ajous au panier </p>

        </div>
        <div>
            <p>commbien de <?php echo $produit_select["Titre"]  ; ?> voulez vous Mr </p>
            <form action="">
                <input type="number">
                <input type="submit" value="ajouter au panier">
            </form>
        </div>
    </div>




    <?php include("pied_de_page.php") ; ?>
</body>
</html>