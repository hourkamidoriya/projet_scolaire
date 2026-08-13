<?php
session_start();
$title="Checkout"?>

<?php
$banner="yes" ;
if(isset($_SESSION["utilisateur"])=="bb"){ ?> 
<?php include("entete.php")?>


<section class="max-w-7xl mx-auto py-16 px-6">
      <div class="grid grid-cols-2 gap-20">
        <div>
          <h2 class="text-3xl font-bold mb-10">Billing details</h2>

          <form class="space-y-6">
            <div class="grid grid-cols-2 gap-5">
              <div>
                <label class="font-medium">First Name</label>
                <input
                  type="text"
                  class="w-full mt-2 border rounded-lg h-12 px-4"
                />
              </div>

              <div>
                <label class="font-medium">Last Name</label>
                <input
                  type="text"
                  class="w-full mt-2 border rounded-lg h-12 px-4"
                />
              </div>
            </div>

            <div>
              <label class="font-medium"> Company name optional </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class=""> Country / Region </label>

              <select class="w-full mt-3 border rounded-lg h-12 px-4 b">
                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
              </select>
            </div>

            <div>
              <label class="font-medium"> Street address </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class="font-medium"> Town/City </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class="font-medium"> Province </label>

              <select class="w-full mt-2 border rounded-lg h-12 px-4">
                <option>1</option>

                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
                <option>1</option>
              </select>
            </div>

            <div>
              <label class=""> ZIP code </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class=""> Phone </label>

              <input
                type="text"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <label class=""> Email address </label>

              <input
                type="email"
                class="w-full mt-2 border rounded-lg h-12 px-4"
              />
            </div>

            <div>
              <input
                type="text"
                placeholder="Additional information"
                class="w-full border rounded-lg h-12 px-4"
              />
            </div>
          </form>
        </div>

        <div>
          <div class="flex justify-between border-b pb-5">
            <div>
              <h3 class="font-semibold text-xl">Product</h3>
<!-- la partie des prix  -->

              <div class="mt-5 space-y-4">

<?php    foreach ($produits_panier as $produit_panier){
  // echo $produit_panier["produit_id"] ;
  // echo "<br>" ;
   
 
  $requette_produits = "SELECT * FROM `produit` WHERE `Id` = ".$produit_panier['produit_id'] ;
  $requette_produits_exe = $con->query($requette_produits) ;
  $tous_les_produit = $requette_produits_exe->fetchAll() ;
  foreach ($tous_les_produit as $un_produit){   ?>
                <p class="text-gray-500 font-bold "> <?php echo $un_produit["Titre"] . "    X ".$produit_panier['quantiter'] ?></p>
<?php }?>

<?php }?>
                

                <p class="font-semibold text-black">Total</p>
              </div>
            </div>
<!-- la partie des prix  -->


            <div class="text-right">
              <h3 class="font-semibold text-xl">Subtotal</h3>

              <div class="mt-5 space-y-4">
<?php    foreach ($produits_panier as $produit_panier){
  // echo $produit_panier["produit_id"] ;
  // echo "<br>" ;
   
 
  $requette_produits = "SELECT * FROM `produit` WHERE `Id` = ".$produit_panier['produit_id'] ;
  $requette_produits_exe = $con->query($requette_produits) ;
  $tous_les_produit = $requette_produits_exe->fetchAll() ;
  foreach ($tous_les_produit as $un_produit){   ?>
    <p> <?php echo ($un_produit["Prix"] * $produit_panier['quantiter']) ?> Fcfa</p>
<?php }?>

<?php }?>


                

              <p class="text-2xl font-bold text-yellow-700"><?php echo  $prix ?> Fcfa</p>
              </div>
            </div>








          </div>

          <div class="mt-8 space-y-5">
            <div>
              <label class="flex items-center gap-3">
                <input type="radio" name="type" />

                <span class="font-medium"> Direct Bank Transfer </span>
              </label>

              <p class="text-gray-500 text-sm mt-3 leading-7">
                Make your payment directly into our bank account. Please use
                your Order ID as the payment reference.
              </p>
            </div>

            <div>
              <label class="flex items-center gap-3">
                <input type="radio" name="type" />

                Cash On Delivery
              </label>
            </div>

            <p class="text-sm leading-7 text-gray-600">
              Your personal data will be used to support your experience
              throughout this website.
            </p>

            <button
              class="mt-8 border border-black rounded-xl px-16 py-4"
            >
              Place order
            </button>
          </div>
        </div>
      </div>
</section>


<div>
  <?php 
    include("pied_de_page.php")
  ?>
</div>
</body>

<?php }else{ ?> 
    
 <?php   header("location:connexion_user.php")  ;?>
     
<?php } ;?>
</html>
