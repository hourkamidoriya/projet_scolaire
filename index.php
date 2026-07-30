<?php

include("connexion.php");

// fause requette pour conmpter
$nb = 0;

$requette = "SELECT * FROM produit";
$exe = $con->query($requette);
$list_produit = $exe->fetchAll();

foreach ($list_produit as $produit) {
    $produit["Titre"];
    $nb += 1;
}


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



// la vrais requette maintenant avec les limite
$requette = "SELECT * FROM produit LIMIT " . $premier . "," . $nb_by_page;
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


// ça c'est pour afficher un produit en particulier sur ca page puis afficher quelque produit de sa categorie

if(isset($_GET["affiche_product"])){
    
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire</title>

    <link rel="stylesheet" href="css/output.css">
</head>

<body>

    <div>
        

    </div>

    <main class="h-screen w-full">

    <nav class="bg-white items-center flex gap-3.5 mb-4 mt-4 justify-between">
        <div class="flex items-center">
          <img src="asset/logo.png" alt="mon LOGO" class="w-10 ml-10" />
          <h1 class="font-bold text-3xl">Funiro</h1>
        </div>

        <div>
          <ol class="flex gap-15">
            <li class=" duration-500 hover:text-2xl hover:text-blue-400 "><a href="index.php" class="disable font-bold" >Home </a></li>
            <li class=" duration-500 hover:text-2xl hover:text-blue-400"><a href="page7.php">Shop </a></li>
            <li class=" duration-500 hover:text-2xl hover:text-blue-400"><a href="">About </a></li>
            <li class=" duration-500 hover:text-2xl hover:text-blue-400"><a href="page9.php">Contact </a></li>
          </ol>
        </div>
        <div class="flex gap-10 w">
          <img src="asset/Vector (4).png" alt="" class="w-5" />
          <img src="asset/Vector (3).png" alt="" class="w-5" />
          <img src="asset/Vector (2).png" alt="" class="w-5" />
          <img src="asset/Vector (5).png" alt="" class="w-5 mr-10" />
        </div>
      </nav>
              <img
          src="asset/baner.png"
          alt=""
          class="object-cover absolute -z-10 bg-amber-400"
        />
      <header class="justify-center flex h-screen  ">

        <div class="bg-amber-100 h-96 w-1/2 p-8 my-auto rounded-4xl mr-9 ">
          <p>New arrial</p>
          <h1 class="text-5xl font-bold text-amber-600 my-4 ">
            discover our newcollection
          </h1>
          <p class="text-2xl mb-8">
            lorem ipsum aolor sit amet cons ecteur adipscing elit ust elit lictus
            nec ultlaùcorper mattis
          </p>
          <button class="px-8 py-4 font-bold bg-amber-600 text-white duration-700 hover:cursor-pointer rounded-2xl hover:bg-white hover:text-amber-600 ">BUY NOW</button>
        </div>
      </header>


        <div class="w-full justify-center text-center flex p-14">

            <div class="container h-135 px-20">

                <div class="titre">

                    <h1 class="text-2xl font-bold mb-8">
                        nouveau produits
                    </h1>

                    <p class="text-gray-500 mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    </p>

                </div>

                <div class="grid grid-cols-3 gap-6 mb-16 ">

                    <?php foreach ($list_new_produit as $new_produit) { ?>
                        
                        <div class="p-4 border rounded-xl duration-500 hover:-translate-y-3.5 produit relatif"  style="position: relative;" >
                            
                            <img
                                src="<?php echo $new_produit['Image']; ?>"
                                alt=""
                                class="w-full h-64 object-cover rounded-xl mb-4">

                            <p class="font-bold">
                                <?php echo $produit['Titre']; ?>
                            </p>

                            <p>
                                <?php echo $new_produit['Description']; ?>
                            </p>

                            <p>
                                <?php echo $new_produit['Prix']; ?>
                            </p>
                            <button class="opacity-0">Acheter</button>
                        </div>

                    <?php } ?>

                </div>

                <div class="titre mb-4">

                    <h1 class="text-2xl font-bold">
                        NOS produis
                    </h1>

                </div>

                <div>

                    <div class="grid grid-cols-4 gap-6">

                        <?php foreach ($list_produit as $produit) { ?>

                            <div class="   duration-500 hover:-translate-y-3.5  bg-gray-200 relative produits ">

                                <form action="page_de_clique_sur_un_produit.php" method="get" id="affiche_product">
                                    
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
                                        <button class="py-3 p-5 absolute  font-bold  z-10 mt-34 -ml-24 w-8/12 bg-white text-amber-600 " id="add_cart">Add to cart</button>   
                                        <div class="absolute p4 justify-between flex">
                                            
                                            <button><img src="asset/fond-noir (2).png" alt="ss" class="w-6"> Share</button> 
                                             <button><img src="asset/fond-noir (1).png" alt="ss" class="w-6 z-10"> Share</button> 
                                              <button><img src="asset/fond-noir.png" alt="ss" class="w-6 z-10"> Share</button> 
                                        </div>
                                        
                                        <div class="h-full w-full bg-black opacity-50 absolute  z-0"></div>
                                    </div>
                                    

                                    <input type="text" value="<?php echo $produit['Id']; ?>" class="hidden" name="affiche_produit">                             
                                </form>
                               
                            </div>

                        <?php } ?>

                    </div>

                </div>

                <button class="border border-amber-300 p-3 rounded-2xl hover:bg-amber-200 duration-500 hover:text-black hover:w-32">
                    Show More
                </button>

                <div class="flex justify-center"> <?php for ($i=1 ;$i<=$nb_page ;$i++) {?>
                  <a href="./?page= <?php echo $i ; ?>"><p class="py-3 m-2  px-7 bg-amber-400 border-2" > <?php echo $i?></p></a>
                  <?php }?>
                </div>

            </div> 
            
        </div>
        <a href="page2.php">tous nos produit classer par categorie</a>  
    </main>

    <script src="scrip.js"></script>

</body>

</html>