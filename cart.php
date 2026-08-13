<?php 
session_start();

$title="Cart" ;
$banner="yes" ;
include("entete.php") ;
?>
<?php if(isset($_SESSION["utilisateur"])){ ?> 

<div class="w-full flex justify-center text-center mt-6  mb-6" >
<div class=" w-11/12 flex ">
    <div class="w-8/12 h-full">
        <div class="flex mb-5 bg-pink-300">
            <div class="w-3/12 h-10 "> </div>
            <div class="w-3/12 h-10 ">produit</div>
            <div class="w-3/12 h-10 ">price</div>
            <div class="w-3/12 h-10 ">quantiter</div>
            <div class="w-3/12 h-10 ">total</div>
            <div class="w-3/12 h-10 "></div>
        </div>
    <?php    foreach ($produits_panier as $produit_panier){
  // echo $produit_panier["produit_id"] ;
  // echo "<br>" ;
   
 
  $requette_produits = "SELECT * FROM `produit` WHERE `Id` = ".$produit_panier['produit_id'] ;
  $requette_produits_exe = $con->query($requette_produits) ;
  $tous_les_produit = $requette_produits_exe->fetchAll() ;
  foreach ($tous_les_produit as $un_produit){   ?>
        <div class="flex  border-b border-b-gray-400 pb-3 ">
            <div class="w-3/12 h-30   flex justify-center text-center my-auto items-center">
                <div class="rounded-xl w-11/12 h-11/12 ">
                    <img src="<?php echo $un_produit["Image"] ?>" alt="l'image du produit" class="rounded-xl w-full h-full">
                </div>
                
            </div>
            
            <div class="w-3/12 h-20  flex justify-center text-center my-auto items-center font-bold text-gray-400"><?php echo $un_produit["Titre"] ?></div>
            <div class="w-3/12 h-20  flex justify-center text-center my-auto items-center font-bold text-gray-400"><?php echo $un_produit["Prix"] ?></div>
            <div class="w-3/12 h-20 flex justify-center text-center my-auto   items-center font-bold text-gray-400"><p class="border py-1 px-2 rounded-xl"><?php echo $produit_panier['quantiter'] ?> </p></div>
            <div class="w-3/12 h-20  flex justify-center text-center my-auto items-center font-bold text-gray-400"><?php echo ($un_produit["Prix"] * $produit_panier['quantiter']) ?></div>
            <div class="w-3/12 h-20  flex justify-center text-center my-auto items-center font-bold text-gray-400"> 
            <form action="delete.php" class="flex" method="POST" >
                <input type="hidden" name="product_del" value="<?php echo $un_produit['Id']?>">
                <button class="flex w-5 h-5 cursor-pointer">
                    <img src="asset/poubelle.png" alt="" class="w-5 h-5" title="suprimer du panier">  
                </button>  
            </form>    
            
            </div>
        </div>

<?php }?>
<?php }?>
</div>
    <div class=" w-4/12 h-96 flex justify-end text-center ">
        <div class=" w-11/12 h-full bg-pink-300">
            <div class="flex  pt-3  h-15 justify-center text-center">
                <p class="text-2xl font-bold " >Cart total</p>
            </div>  
            <div class="flex mx-10 mt-5 justify-between">
                <p class="text-xl ">subtotal</p>
                <p class="text-2xl text-gray-500"><?php echo $prix?> Fcfa </p>
            </div>
            <div class="flex mx-10 mt-10 mb-8 justify-between">
                <p class="text-xl ">total</p>
                <p class="text-2xl font-bold text-amber-600"><?php echo $prix?> Fcfa</p>
            </div>
            <form action="page7.php" method="POST">
                <button class=" font-bold mt-10  z-10  border border-black px-10 py-3.5 rounded-2xl text-amber-600 " id="add_cart">Add to cart</button>                          
            </form>                  
        </div>
    </div>
</div>

</div>













<?php 
include("pied_de_page.php") ;
?>

<?php }else{
 header("location:connexion_user.php") ;
}?>



