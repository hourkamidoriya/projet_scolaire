<?php
session_start();

include("connexion.php") ; 



if(isset($_POST["affiche_produit"])){
    $produit_cliked=$_POST["affiche_produit"] ;

    $requette="SELECT * FROM `produit` WHERE `Id`=".$produit_cliked ;


}
else{
    header("location: page2.php") ;
}
$exe=$con->query($requette);
$mon_produit=$exe->fetchAll();


foreach($mon_produit as $produit_select){
    // echo $produit_select["Id_categori"] ;
    $id_produit = $produit_select["Id_categori"] ;
    $produit_select["Titre"] ;
}
// ici je vais chercher comment afficher les prosuit de la mm categori
$requette2="SELECT * FROM `produit` WHERE `Id_categori`=".$id_produit . " LIMIT "."0".","."4" ;
$exe2= $con->query($requette2) ;
$simil_produit_list=$exe2->fetchAll();

foreach($simil_produit_list as $simil_produit){
    
//    echo $simil_produit["Titre"] ;
}






// ici je vais code sur la formulaire de quand on clique sur un produit c'est juste le copier coller de se q'uil y'a dans la page 2


?>




















<?php 
$title=$produit_select["Titre"] ;
$banner="non" ;
include("entete.php") ?>  
<?php if(isset($_SESSION["utilisateur"])){ ?>  

    <div class="w-full h-15  bg-pink-200 p-4 justify-center items-center text-center flex mb-7">
        <div class=" w-full   flex  h-12 gap-2.5">
            <div class="flex items-center gap-1.5">
                <a href="">Home</a>
                <img src="asset/icon_left.png" alt="xxx" class="w-5 mt-1">
                
            </div>
            <div class="flex items-center gap-1.5">
                <a href="">Shop</a>
                <img src="asset/icon_left.png" alt="xxx" class="w-5 mt-1">
                
            </div>

            <div class="flex items-center gap-2.5">
                <div class="w-0.5 h-9/12 bg-gray-500"></div>
                <a href=""><?php echo $produit_select["Titre"] ; ?></a>   
                
                <p id="id" class="hidden"><?php echo $produit_select['quantiter']; ?></p>
            </div>

        </div>
    </div>



 
<div class=" w-full justify-center items-center  mx-auto flex">
    <div class="grid grid-cols-2 container">
        <div class=" flex">
            <div class="w-4/12  pl-10 grid grid-cols-1 mx-auto">
                <div class=" border border-pink-300 w-20 h-20 flex justify-center text-center items-center rounded-xl ">
                    <form action="page_de_clique_sur_un_produit.php" method="post" class="w-full h-full object-contain"> 
                        <input type="hidden" name="affiche_produit" value="<?php echo $produit_cliked ?>">
                        <button class="w-full h-full object-contain" >
                            <img src="<?php echo $produit_select['Image']?>" alt="" class="w-full h-full object-contain">
                        </button>
                    </form>
                </div>
                <div class=" border border-pink-300 w-20 h-20 flex justify-center text-center items-center rounded-xl ">
                    <form action="page_de_clique_sur_un_produit2.php" method="post" class="w-full h-full object-contain"> 
                        <input type="hidden" name="affiche_produit" value="<?php echo $produit_cliked ?>">
                        <button class="w-full h-full object-contain" >
                            <img src="<?php echo $produit_select['image1']?>" alt="" class="w-full h-full object-contain">
                        </button>
                    </form>
                </div>
                <div class=" border border-pink-300 w-20 h-20 flex justify-center text-center items-center rounded-xl ">
                    <form action="page_de_clique_sur_un_produit4.php" method="post" class="w-full h-full object-contain"> 
                        <input type="hidden" name="affiche_produit" value="<?php echo $produit_cliked ?>">
                        <button class="w-full h-full object-contain" >
                            <img src="<?php echo $produit_select['image3']?>" alt="" class="w-full h-full object-contain">
                        </button>
                    </form>
                </div>
            </div>
            <div class="w-12/12    h-98 flex justify-center rounded-2xl">
                <div class="h-12/12  w-12/12 rounded-t-2xl  " >                   
                    <img src="<?php echo $produit_select["image2"] ; ?>" alt="" class="h-12/12 w-full rounded-t-2xl object-contain">
                </div>
            </div>
        </div>
        <div class=" ml-10">


          <p class="text-5xl">  <?php echo $produit_select["Titre"] ; ?> </p> 
          <p class="text-3xl text-gray-500 p-3"> cette Article Coute  <?php echo $produit_select["Prix"] ; ?> CFA </p> 
          <div class="flex items-center">
            <?php for($i=1 ; $i<=5 ;$i++){?>
                <img src="asset/etoile.png" alt="ss" class="w-6  h-6">
            <?php } ?>
            <div class="w-0.5 h-6 bg-gray-500 mx-5"></div>
            <p class="text-gray-500 text-2xl"> custommer</p>
          </div>
          <div class="w-full h-30 py-2 px-3">
            <p> <?php echo $produit_select["Description"] ; ?></p> 
          </div>
          <div class="flex mb-2.5 justify-between mt-6">
            <form action="ajouter_produit.php" class="flex" method="POST">
                <div class="w-32 h-14 py-2 px-3 ml-4 mr-4 flex justify-between border-gray-500  items-center border rounded-2xl ">
                    <button type="button" class="text-2xl  cursor-pointer" id="moins">-</button>
                    <p id="valeur">1</p>
                    <button type="button" class=" text-2xl  cursor-pointer" id="plus" >+</button>
                </div>
                <div class="w-46 h-14 py-2 px-3  ml-4 mr-4 flex justify-center border-gray-500  items-center border rounded-2xl  hover:bg-gray-700 hover:text-white">
                    <button>Add to cart</button>
                    <input type="hidden" name="quantiter_produit" id="quantiter" value="1">
                    <input type="hidden" name="ajout_produit" value=<?php echo $produit_select["Id"] ; ?>>
                </div>
            </form>
            <div class="w-46 h-14 py-2 px-3 bg-amber-100 ml-4 mr-4 flex justify-center border-gray-500  text-center items-center  border rounded-2xl ">
                <p class="" >+ Commapre</p>
            </div>

          </div>
            <div class="w-12/12 h-0.5 bg-gray-300 mt-8">
            </div>


            <div class="grid grid-cols-2 ml-5 m-6 mb-10">
                <div class="grid grid-cols-2 gap-2 items-center">
                    <div><p>SkU </p></div>
                    <div><p>:  SkU</p></div>
                    <div><p>SkU </p></div>
                    <div><p>:  SkU</p></div>
                    <div><p>SkU </p></div>
                    <div><p>:  SkU</p></div>
                    <div><p>Shar</p></div>
                    <div class="flex  gap-3.5 h-6 ">
                        <img src="asset/icone_face (2).png" alt="" class="w-6 h-6"> 
                        <img src="asset/icone_face (1).png" alt="" class="w-6 h-6"> 
                        <img src="asset/icone_face (3).png" alt="" class="w-6 h-6"></div>
                    </div>
                <div></div>
                
            </div>
        </div>
    </div>
</div>
<div class="w-full h-0.5 bg-gray-500 mt-8"></div>
<div class="w-full mt-8 mb-3">
    <h2 class="font-bold  text-3xl justify-between text-center">description detailler </h2>
</div>
<div class="w-10/12 h-72  container  justify-center mx-auto pt-5  ">
    <p class=" "><?php echo $produit_select["description_detailer"] ; ?></p>

</div>
<div class="container flex gap-44 m-10 h-60  justify-center  mx-auto">
    <div><img src="<?php echo $produit_select["Image"] ; ?>" alt="" class=" h-60"></div>
    <div><img src="<?php echo $produit_select["Image"] ; ?>" alt="" class=" h-60"></div>
</div>


<div class="w-full h-0.5 bg-gray-500 mt-8"></div>
<div  class=" flex justify-center text-center mt-3 mb-3" >
    <h2 class=" font-bold text-3xl" >produit similaire</h2>

</div>

<div  class=" flex justify-center text-center " >
    <div class="grid grid-cols-4 gap-6">
       <?php foreach ($simil_produit_list as $simil_produit) { ?>
                            
                <div class="   duration-500 hover:-translate-y-3.5 m-6  bg-gray-200 relative produits  ">                
                    <img
                    src="<?php echo $simil_produit['Image']; ?>"
                    alt=""
                    class="w-full h-62   mb-4">
                    <div class="px-4 pb-10 overflow-y-auto h-30">
                        <p class="font-bold text-center">
                        <?php echo $simil_produit['Titre']; ?>
                        </p>

                        <p class="">
                        <?php echo $simil_produit['Description']; ?>
                        </p>

                        <p class="text-center">
                            <?php echo $simil_produit['Prix']; ?> FCFA
                        </p>
                    </div>  
    <div class="hidden  contenaire_product text-center   absolute w-full h-full top-0 mx-auto right-0">

        <form action="" method="POST">
            <button class="py-3 p-5 absolute  font-bold  z-10 mt-34 -ml-24 w-8/12 bg-white text-amber-600 " id="add_cart">Add to cart</button>
            <input type="text" value="<?php echo $simil_produit['Id']; ?>" class="hidden" name="affiche_produit">                             
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
</div>
    <div class="w-full flex px-20 py-6 bg-white shadow-2xl">
    <div>
        <div style="width: 360px; text-align: left;">
            <div style="display: flex;">
                <div style="margin-right: 10px;">
                    <img src="Logo.png" alt="">
                </div>
                <p class=" font-bold text-4xl">FUNIRO</p>
            </div>
            <div class="mt-9">
                <p>400 University Drive Suite 200 Coral Gables, <br> FL 33134 USA</p>
            </div>
          
        </div>


        
    </div>

    <div style="display: flex; margin-left: 50px; margin-top: 30px;">
        <div class="ml-9">
            <a href="" style="text-decoration: none;"><h3 style="font-weight: bold; margin-bottom: 20px;">Link</h3></a>
            <a href="" style="text-decoration: none;"><p style=" font-style: 10px;">Hom</p></a>
            <a href="" style="text-decoration: none;"><p style=" font-style: 10px;">About</p></a>
            <a href="" style="text-decoration: none;"><p style=" font-style: 10px;">Contact</p></a>
            <a href="" style="text-decoration: none;"><p style=" font-style: 10px;">Shop</p></a>
        </div>

        <div  class="ml-14">
            <a href="" style="text-decoration: none;"><h3 style=" font-weight: bold; margin-bottom: 20px;">Help</h3></a>
            <a href="" style="text-decoration: none;"><p style=" font-style: 10px;">Payement option</p></a>
            <a href="" style="text-decoration: none;"><p style=" font-style: 10px;">retune</p></a>
            <a href="" style="text-decoration: none;"><p style=" font-style: 10px;">Pricaty policie</p></a>
            
        </div>

        <div class="ml-20 gap-2">
            <a href="" style="text-decoration: none;"><h3 style="font-weight: bold; margin-bottom: 20px;">Newsletter</h3></a>
            <div class="flex gap-4">
                <input type="email" name="" id="" placeholder="entrer vote email" class="border-b  border-b-black outline-none bg-transparent">

                <input type="submit" name="" id="" value="subcrire"  class="border-b  border-b-black outline-none bg-transparent w-32 hover:cursor-pointer hover:bg-pink-400 hover:rounded-2xl rounded-b-2xl">
            </div>
 
        </div>


    </div>
    
</div>



<script src="script_add_or_subs_to_cart.js"></script>
<script src="scrip.js"></script>
    
</body>

<?php }else{ ?> 
    
 <?php   header("location:connexion_user.php")  ;?>
     
<?php } ;?>
</html>