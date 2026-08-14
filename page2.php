<?php
session_start();
include("connexion.php");

// fause requette pour conmpter
$nb = 0;
$categorie ="all_product";

// la fausse requtte pour compter le nombre de produit par categori

if(isset($_POST['categorie'])){
    $categorie = $_POST["categorie"];

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


// je verifi si la il y'a un POST page
if (isset($_GET["page"]) && !empty($_GET["page"])) {
    $page_actuelle = (int)$_GET["page"];
    echo $page_actuelle ;

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
if(isset($_POST['categorie'])){
    $categorie = $_POST["categorie"];
    if ($categorie == "jeux"){
$requette = "SELECT * FROM `produit` WHERE Id_categori = 2 LIMIT " . $premier . "," . $nb_by_page ;  
 }
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














<?php
$banner="yes" ;
$title="Shop"?>
<?php if(isset($_SESSION["utilisateur"])=="bb"){ ?>
    <?php include("entete.php")?>
    <!-- <input type="file" value="cliquer et choisiser une image"> -->

    <div class="w-full h-18 bg-pink-200 grid grid-cols-2 items-center rounded-xl ">
        <div class="flex my-auto  h-14 justify-center">
            <div class="flex items-center gap-3">
                <div class=" p-2  flex ">
                    <form action="" method="POST" class="flex ">
                        <select name="categorie" id="" class="flex border bg-white py-2 px-4 ml-2 border-gray-500 rounded-xl">
                            <option value="all_product" class="ml-1 bg-pink-200"> tous nos produit </option>
                            <option value="electronic">electronic</option>
                            <option value="meuble">Meuble</option>
                            <option value="jeux">jeux</option>
                            <option value="alimentation">nourriture</option>
                        </select>
                        <button class="cursor-pointer bg-white  hover:bg-gray-200 duration-500 rounded-xl ml-2"> <img src="asset/system-uicons_filtering.png" alt="" class="w-8 mx-2 "> </button>
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
                            
                            <div class="shadow-2xl shadow-black/30 duration-500 hover:-translate-y-3.5 rounded-xl bg-gray-200 relative produits h-auto ">
                                <div class="w-full aspect-square overflow-hidden rounded-xl bg-white">

                                    <img
                                        src="<?php echo $produit['Image']; ?>"
                                        alt="<?php echo $produit['Titre']; ?>"
                                        class="w-full h-full object-contain"
                                    >

                                </div>
                                <div class="px-4 pb-10  h-40">
                                    <p class="font-bold text-center">
                                        <?php echo $produit['Titre']; ?>
                                    </p>

                                    <p class="">
                                        <?php echo $produit['Description']; ?>
                                    </p>

                                    <p class="text-center">
                                        <?php echo $produit['Prix']; ?> FCFA
                                    </p>
                                </div>
                                    
                                    
                                    <div class="hidden  contenaire_product text-center   absolute w-full h-full top-0 mx-auto right-0">
                                        <form action="page_de_clique_sur_un_produit.php" method="POST" class="flex justify-center absolute w-full h-full -mt-6 text-center items-center mb-3.5">
                                            <button class="py-3 p-5 absolute  font-bold  z-10 my-auto w-11/12 bg-white text-amber-600 rounded-xl hover:bg-amber-600  hover:text-white" id="add_cart">Add to cart</button>
                                            <input type="text" value="<?php echo $produit['Id']; ?>" class="hidden" name="affiche_produit">                             
                                        </form>    
                                    
                                       
                                        <form action="" class="absolute w-full h-full pt-6 flex justify-center text-center items-center px-6">
                                            <div class="items-center  flex w-full  justify-between  pt-6"> 
                                                <button  class="flex text-white z-10 pt-6 hover:cursor-pointer"><img src="asset/fond-noir (2).png" alt="ss" class="object-contain w-4 mr-3"> <span class="underline">Share</span> </button> 
                                                <button class="flex  text-white z-10 pt-6 hover:cursor-pointer"><img src="asset/fond-noir (1).png" alt="ss" class="object-contain  w-4 mr-3">  <span class="underline">Share</span> </button> 
                                            </div>
                                        </form>
                                        <div class="h-full w-full bg-black opacity-50 absolute rounded-xl  z-0"></div>
                                    </div>
                                    
                                
                               
                            </div>
                            
                        <?php } ?>

                    </div>


                <div class="flex justify-center gap-3.5 my-6 "> <?php for ($i=1 ;$i<=$nb_page ;$i++) {?>
                    <?php if($i == $page_actuelle){ ?>
                        <p class="py-3  px-7 rounded-xl shadow-2xl bg-gray-400 " > <?php echo $i?></p>
                    <?php } else { ?>
                        <a href="page2.php?page=<?php echo $i ; ?>"><p class="py-3  px-7 rounded-xl shadow-2xl bg-amber-400 " > <?php echo $i?></p></a>
                    <?php } ?>
                  <?php }?>
                </div>





    </div>































<?php include("pied_de_page.php")?>
<script src="scrip.js"></script>

<?php }else{ ?> 
    
 <?php   header("location:connexion_user.php")  ;?>
     
<?php } ;?>

</body>
</html>