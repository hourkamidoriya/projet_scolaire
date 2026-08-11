<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $title ?></title>
  <link rel="stylesheet" href="css/output.css">
  <link rel="stylesheet" href="css/output.css">
</head>
<body>
<?php if(!isset($_SESSION["utilisateur"])){?> 

<div class=" w-full  absolute z-10 hidden voila duration-700 mt-10 justify-end "  >
  <div class="w-full p-5  justify-end h-72  flex">
      <div class="button bg-pink-200 w-4/12 duration-700  rounded-2xl p-5 justify-center  text-center items-center">
          <form action="connexion_user.php" class="mt-5 w-8/12 mb-3 duration-700 hover:bg-black  hover:text-white h-10  rounded-2xl bg-white text-2xl text-black mx-auto">
          <button class="w-full">   <p href="connexion_user.php" class=" ">Se Connecter</p> </button>
          </form>
          <form action="register.php" class="mt-5 w-8/12  h-10 rounded-2xl bg-white text-2xl text-black  hover:bg-black  hover:text-white  -translate-y-3.5 mx-auto">   
           <button class="w-full"> <p href="register.php" class=" ">s'incrire</p> </button>
          </form>
          <!-- <div class=" p-2.5">
              <h2><a href="" class="text-blue-500 duration-700 underline hover:text-2xl "> mes commandes</a></h2>
          </div>
          <div class=" p-2.5">
              <h3><a href="" class="text-blue-500 duration-700 underline hover:text-2xl ">mes produit</a></h3>
          </div> -->
      </div>    
  </div>
</div>
<?php } else{?>

<div class=" w-full  absolute z-10 hidden voila duration-700 mt-10 justify-end "  >
  <div class="w-full p-5  justify-end h-72  flex">
      <div class="button bg-pink-200 w-4/12 duration-700  rounded-2xl p-5 justify-center  text-center items-center">
        <h2 class="text-2xl fon ">Bien-venue <?php echo $_SESSION['user_name'] ?></h2>

          <!-- <form action="register.php" class="mt-5 w-8/12  h-10 rounded-2xl bg-white text-2xl text-black  hover:bg-black  hover:text-white  -translate-y-3.5 mx-auto">   
           <button class="w-full"> <p href="register.php" class=" ">s'incrire</p> </button>
          </form> -->
          <div class=" p-2.5">
              <h2><a href="" class="text-blue-500 duration-700 underline hover:text-2xl "> mes commandes</a></h2>
          </div>
          <div class=" p-2.5">
              <h3><a href="" class="text-blue-500 duration-700 underline hover:text-2xl "> mes produit</a></h3>
          </div>

          <form action="deconnexion.php" class="mt-5 w-8/12 mb-3 duration-700 hover:bg-black  hover:text-white h-10  rounded-2xl bg-white text-2xl text-black mx-auto">
          <button class="w-full">   <p href="connexion_user.php" class=" ">Se Deconnecter</p> </button>
          </form>
      </div>    
  </div>
</div>






<!-- je vais code le panier  -->


<div class=" w-full  absolute z-10 h-full hidden voila2   duration-700 justify-end "  >
  <div class="w-3/12 p-5  justify-end bg-black  h-full  flex" id="visuel_panier">
    <p>hello</p>
  </div>
</div>

















<?php }?>
























<nav class="bg-white items-center flex gap-3.5 mb-4 pt-2 justify-between">
      <div class="flex items-center">
        <img src="asset/logo.png" alt="mon LOGO" class="w-10 ml-10" />
        <h1 class="font-bold text-3xl">Funiro</h1>
      </div>

      <div>
        <ol class="flex gap-10">
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="index.php">Home </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400 ">
            <a href="./page2.php" class="<?php if($title== "Shop") {echo 'font-bold' ;}?>" >Shop </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="page7.php" class="<?php if($title== "Checkout") {echo 'font-bold' ;}?>" >checkout </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="page9.php" class="<?php if($title== "Contact") {echo 'font-bold' ;}?>">Contact</a>
          </li>
        </ol>
      </div>

      <div class="flex gap-10 items-center ">
        <img src="asset/Vector (4).png" alt="" class="w-6 cursor-pointer" id="moi" />

        <div class="flex gap-1.5 relative w-45 items-center justify-end">
            <form action="page_de_recherche.php" method="POST" class=" text-center  flex justify-end">
                <input type="text" class="bg-gray-300 required w-full h-10 p-1 rounded-xl  pr-10" name="search" >
                <div class="absolute mt-3">
                    <button type="submit" class=" hover: cursor-pointer"><img src="asset/Vector (3).png" alt="" class="w-5 z-10   mr-3 " /> </button>
                </div>
                
            </form>
        </div>
        
        <img src="asset/Vector (2).png" alt="" class="w-5" />
        <img src="asset/Vector (5).png" id="hh" alt="" class="w-5 mr-10 cursor-pointer "/>
      </div>
  </nav>
<?php if($banner=="yes"){ ?>  
    <div
      class="relative flex mx-auto justify-center text-center min-h-auto items-center"
    >
      <div class="w-full h-72 m-2">
        <img src="asset/baniere.png" alt="" />
      </div>

      <div class="absolute justify-center text-center">
        <img src="asset/logo.png" alt="" class="w-14 mx-auto" />
        <ol>
          <div>
            <li>
              <h1 class="text-5xl text-black font-bold"><?php echo $title ?> <br /></h1>
            </li>
          </div>

          <div class="flex mt-3 justify-center items-center">
            <li class="flex" >
              <a
                href=""
                class="text-1xl duration-500  hover:text-blue-400 hover:text-2xl"
                >Hom </a
              >
             <img src="asset/dashicons_arrow-down-alt2.png" alt="" class="w-4 mt-1" > 
            </li>
            <li>
              <a
                href=""
                class="text-1xl duration-500 hover:text-blue-400 hover:text-2xl"
                >Contact</a
              >
            </li>
          </div>
        </ol>
      </div>
    </div>
<?php }?>  
<script src="js/script.js"></script>