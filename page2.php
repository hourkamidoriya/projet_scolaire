


<?php

include("connexion.php");

// fause requette pour conmpter
$nb = 0;



$categorie ="all_product";

// la fausse requtte pour compter le nombre de produit par categori

if(isset($_GET['categorie'])){
    $categorie = $_GET["categorie"];

    if($categorie=="meuble"){
        $requette="SELECT * FROM `produit` WHERE Id_categori = 1" ;
    }elseif($categorie=="jeux"){
        $requette="SELECT * FROM `produit` WHERE Id_categori = 2" ;
    }elseif($categorie=="consol"){
        $requette="SELECT * FROM `produit` WHERE Id_categori = 3" ;
    }elseif($categorie=="electronic"){
        $requette="SELECT * FROM `produit` WHERE Id_categori = 5" ;
    }elseif($categorie=="alimentation"){
        $requette="SELECT * FROM `produit` WHERE Id_categori = 4" ;
    }else{
        $requette = "SELECT * FROM produit";
    }
}else{
        $requette = "SELECT * FROM produit";
    }






$exe = $con->query($requette);
$list_produit = $exe->fetchAll();




foreach ($list_produit as $produit) {
    $produit["Titre"];
    $nb += 1;
}

echo "$nb" ;

// je verifi si la il y'a un get page
if (isset($_GET["page"]) && !empty($_GET["page"])) {

    $page_actuelle = $_GET["page"];

} else {

    $page_actuelle = 1;

}


// je determinie le nombre d'lement par page
$nb_by_page = 20;


// je calcule le nombre de page
$nb_page = ceil($nb / $nb_by_page);



// je cherche se que je vais mettre dans la limite de ma requettte
$premier = ($page_actuelle * $nb_by_page) - $nb_by_page;


$categorie ="all_product";

// la vrais requette maintenant avec les limite
if(isset($_GET['categorie'])){
    $categorie = $_GET["categorie"];
    if ($categorie == "jeux"){
$requette = "SELECT * FROM `produit` WHERE Id_categori = 2 LIMIT " . $premier . "," . $nb_by_page ;  
echo $categorie ; }
// else {
//     $requette = "SELECT * FROM produit LIMIT " . $premier . "," . $nb_by_page;
// }
 elseif($categorie =="electronic") {
    $requette = "SELECT * FROM `produit` WHERE Id_categori = 3 LIMIT " . $premier . "," . $nb_by_page;  
}
 elseif($categorie =="all_product") {
    $requette = "SELECT * FROM `produit` LIMIT " . $premier . "," . $nb_by_page;  
}

}else{
    $requette = "SELECT * FROM `produit` LIMIT " . $premier . "," . $nb_by_page;
}









$exe = $con->query($requette);
$list_produit = $exe->fetchAll();

foreach ($list_produit as $produit) {

    $produit["Titre"];
    $produit["Id_categori"];
    $produit["Description"];
    $produit["Prix"];
    $produit["Image"];
}


// la requette pour afficher les element de manier decroissant
$requette_des_nouveauter = "SELECT * FROM `produit` ORDER BY `produit`.`Id` DESC LIMIT 3";
$exe2 = $con->query($requette_des_nouveauter);
$list_new_produit = $exe2->fetchAll();

?>














<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/output.css">
    
</head>
<body class="bg-gray-100">
    <?php include("entete.php")?>
    

    <div class="w-full h-14 bg-pink-200 grid grid-cols-2 items-center ">
        <div class="flex my-auto  h-14 justify-center">
            <div class="flex items-center gap-3">
                <div class="border p-2  flex ">
                    <form action="" method="get" class="flex">
                        <select name="categorie" id="">
                            <option value="all_product"> tous nos produit </option>
                            <option value="electronic">electronic</option>
                            <option value="meuble">Meuble</option>
                            <option value="jeux">jeux</option>
                            <option value="alimentation">nourriture</option>
                        </select>
                        <button class="cursor-pointer"> <img src="asset/system-uicons_filtering.png" alt="" class="w-8 h-8  hover:w-9  "> </button>
                    </form>
                    
                </div>
                <p>filter</p>
                <img src="asset/Vector (6).png" alt="" class="w-5 h-5">
                <img src="asset/Vector (7).png " alt=""  class="w-5 h-5 m-5">
            </div>
            <div class=" text-center my-auto  items-center">
                <p>whowing <?php echo "$page_actuelle "."/"."$nb_page "."-"." $nb_by_page"." of ". " $nb "." resultat " ?></p>
            </div>
        </div>
        
        <div class="flex mx-auto items-center h-12">
            <form action="">
                <label for="">Show</label>
                <input type="text" placeholder="16" class="bg-amber-100 border rounded-xl m-5 p-2">
            </form>
            <form action="">
                <label for="">Short</label>
                <input type="text" placeholder="Defaul" class="bg-amber-100 border rounded-xl m-5 p-2">
            </form>
        </div>
     </div>
    <div>

        
        <div class="container mx-auto p-12 py-2">
                <h1 class="text-center mb-3.5 font-bold text-3xl">tous nos articles</h1>
                   <div class="grid grid-cols-4 gap-6">

                        <?php foreach ($list_produit as $produit) { ?>
                            
                            <div class="   duration-500 hover:-translate-y-3.5  bg-gray-200 relative produits ">

                                
                                    
                                    <img
                                        src="<?php echo $produit['Image']; ?>"
                                        alt=""
                                        class="w-full h-62  object-cover mb-4">
                                <div class="px-4 pb-10">
                                    <p class="font-bold">
                                        <?php echo $produit['Titre']; ?>
                                    </p>

                                    <p>
                                        <?php echo $produit['Description']; ?>
                                    </p>

                                    <p>
                                        <?php echo $produit['Prix']; ?>
                                    </p>
                                </div>
                                    
                                    
                                    <div class="hidden  contenaire_product text-center   absolute w-full h-full top-0 mx-auto right-0">
                                        <form action="page_de_clique_sur_un_produit.php" method="get">
                                            <button class="py-3 p-5 absolute  font-bold  z-10 mt-34 -ml-24 w-8/12 bg-white text-amber-600 " id="add_cart">Add to cart</button>
                                            <input type="text" value="<?php echo $produit['Id']; ?>" class="hidden" name="affiche_produit">                             
                                        </form>    
                                    
                                       
                                        <form action="">
                                            <div class="absolute px-4  items-center  flex w-full top-52"> 
                                                <button  class=" w-full flex text-white z-10 hover:cursor-pointer"><img src="asset/fond-noir (2).png" alt="ss" class="w-3  mr-3"> <span class="underline">Share</span> </button> 
                                                <button class=" w-full flex text-white z-10 ml-10 hover:cursor-pointer"><img src="asset/fond-noir (1).png" alt="ss" class="w-3  mr-3 ">  <span class="underline">Share</span> </button> 
                                            </div>
                                        </form>
                                        <div class="h-full w-full bg-black opacity-50 absolute  z-0"></div>
                                    </div>
                                    
                                
                               
                            </div>
                            
                        <?php } ?>

                    </div>


                <div class="flex justify-center gap-3.5 m-5 "> <?php for ($i=1 ;$i<=$nb_page ;$i++) {?>
                  <a href="page2.php?page= <?php echo $i ; ?>"><p class="py-3  px-7 bg-amber-400 border-2" > <?php echo $i?></p></a>
                  <?php }?>
                </div>





    </div>
































<?php include("pied_de_page.php")?>
<script src="scrip.js"></script>

</body>
</html>