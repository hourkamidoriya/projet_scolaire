<?php 
$title="admin gestion" ;
$banner="non" ;
include("connexion.php") ;
include("entete.php");





if(isset($_GET["categorie"])){
    $la_categorie=$_GET["categorie"] ;
    if($la_categorie == "Meuble"){
        $requette_affiche_admin = "SELECT * FROM `produit` WHERE `Id_categori`= 1" ;
    }elseif($la_categorie == "Jeux"){
        $requette_affiche_admin = "SELECT * FROM `produit` WHERE `Id_categori`= 2" ;
    }elseif($la_categorie == "Console"){
        $requette_affiche_admin = "SELECT * FROM `produit` WHERE `Id_categori`= 3" ;
    }elseif($la_categorie == "Aliment"){
        $requette_affiche_admin = "SELECT * FROM `produit` WHERE `Id_categori`= 4" ;
    }elseif($la_categorie == "Electronic"){
        $requette_affiche_admin = "SELECT * FROM `produit` WHERE `Id_categori`= 5" ;
    }elseif($la_categorie == "Beaute"){
        $requette_affiche_admin = "SELECT * FROM `produit` WHERE `Id_categori`= 6" ;
    }elseif($la_categorie == "Automobile"){
        $requette_affiche_admin = "SELECT * FROM `produit` WHERE `Id_categori`= 7" ;
    }else{
        $requette_affiche_admin = "SELECT * FROM `produit`" ;
   }
}
else{
    $requette_affiche_admin = "SELECT * FROM `produit`" ;
    $la_categorie="tous" ; 
}

$exe_requette_affiche_admin = $con->query($requette_affiche_admin) ;
$liste_produits_admin = $exe_requette_affiche_admin->fetchAll() ;
foreach($liste_produits_admin as $produit_admin){
    $produit_admin["Titre"]."<br>" ;

}

?>


<?php
if(isset($_POST["sup"])){
    $sup=$_POST["sup"] ;
    $requette_sup_admin=" DELETE FROM produit WHERE `produit`.`Id` = $sup" ;
    $requette_sup_admin_exe = $con->query($requette_sup_admin);
    
}

?>




<div class="w-full h-10 text-center items-center p-4 mb-5 bg-pink-400 flex justify-between">

    <div>
        <form action="" method="get">
            <input type="hidden" name="categorie" value="tous">
            <button class="cursor-pointer <?php if($la_categorie=="tous"){echo'font-bold border-b-blue-500 ' ;}?>">Tous nos produit</button>  
        </form>
    </div>
    <div>
        <form action="" method="get">
            <input type="hidden" name="categorie" value="Meuble">
            <button class="cursor-pointer <?php if($la_categorie=="Meuble"){echo'font-bold border-b-blue-500' ;}?>">Meube</button>  
        </form>
    </div>
    <div>
        <form action="" method="get">
            <input type="hidden" name="categorie" value="Jeux">
            <button class="cursor-pointer <?php if($la_categorie=="Jeux"){echo'font-bold border-b-blue-500' ;}?>">Jeux</button>  
        </form>
    </div>
    <div>
        <form action="" method="get">
            <input type="hidden" name="categorie" value="Console">
            <button class="cursor-pointer <?php if($la_categorie=="Console"){echo'font-bold border-b-blue-500' ;}?>">console</button>  
        </form>
    </div>
    <div>
        <form action="" method="get">
            <input type="hidden" name="categorie" value="Aliment">
            <button class="cursor-pointer <?php if($la_categorie=="Aliment"){echo'font-bold border-b-blue-500' ;}?>">Aliment</button>  
        </form>
    </div>
    <div>
        <form action="" method="get">
            <input type="hidden" name="categorie" value="Electronic">
            <button class="cursor-pointer <?php if($la_categorie=="Electronic"){echo'font-bold border-b-blue-500' ;}?>">electonic</button>  
        </form>
    </div>
    <div>
        <form action="" method="get">
            <input type="hidden" name="categorie" value="Beaute">
            <button class="cursor-pointer <?php if($la_categorie=="Beaute"){echo'font-bold border-b-blue-500' ;}?>">Beaute</button>  
        </form>
    </div>
     <div>
        <form action="" method="get">
            <input type="hidden" name="categorie" value="Automobile">
            <button class="cursor-pointer <?php if($la_categorie=="Automobile"){echo'font-bold border-b-blue-500' ;}?>">Automobile</button>  
        </form>
    </div>   

</div>

<div class="w-full justify-center text-center flex items-center">

<table class="w-11/12 bg-amber-500 border-2 mb-6">
    <tr class="w-full bg-amber-300 border-2 h-10">
        <th>Image</th>
        <th>Titre</th>
        <th>Description</th>
        <th>Prix</th>
        <th colspan="2">Action</th>
    </tr>
<?php
foreach($liste_produits_admin as $produit_admin){?>
    <tr class="w-full bg-white border-2 h-20">
        <td class="h-20 border w-20 "><img src="<?php echo $produit_admin["Image"] ;?>" alt="" class="h-20 w-full object-contain"></td>
        <td class="h-20 border w-40"><?php echo $produit_admin["Titre"] ;?></td>
        <td class="h-20 border w-6/12"><?php echo $produit_admin["Description"] ;?></td>
        <td class="h-20 border"><?php echo $produit_admin["Prix"] ;?> Fcfa</td>

        <form action="edit_admin.php" method="post">
            <td> <button  class=" py-2 px-6 rounded border-white cursor-pointer bg-red-500 my-3">edit</button></th>
            <input type="hidden" name="edit" value="<?php echo $produit_admin["Id"] ;?>">
        </form>

        <form action="" method="post">
            <td> <button  class=" py-2 px-6 rounded border-white cursor-pointer bg-amber-400 my-2">sup</button></th>
            <input type="hidden" name="sup" value="<?php echo $produit_admin["Id"] ;?>">
        </form>
    </tr>
<?php }?>
</table>
</div>




<?php
include("pied_de_page.php")
?>
