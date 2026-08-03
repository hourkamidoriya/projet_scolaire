<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/output.css">
</head>
<body>
        <nav class="bg-white items-center flex gap-3.5 mb-4 mt-4 justify-between">
      <div class="flex items-center">
        <img src="asset/logo.png" alt="mon LOGO" class="w-10 ml-10" />
        <h1 class="font-bold text-3xl">Funiro</h1>
      </div>

      <div>
        <ol class="flex gap-10">
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="index.php">Home </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="page2.php">Shop </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="">About </a>
          </li>
          <li class="duration-500 hover:text-xl hover:text-blue-400">
            <a href="page9.php" class="disable font-bold">Contact</a>
          </li>
        </ol>
      </div>
      <div class="flex gap-10 w">
        <img src="asset/Vector (4).png" alt="" class="w-5" />
        <img src="asset/Vector (3).png" alt="" class="w-5" />
        <img src="asset/Vector (2).png" alt="" class="w-5" />
        <img src="asset/Vector (5).png" alt="" class="w-5 mr-10" />
      </div>
    </nav>

    <div
      class="relative flex mx-auto justify-center text-center min-h-auto items-center"
    >
      <div class="w-full h-80">
        <img src="asset/baniere.png" alt="" />
      </div>

      <div class="absolute justify-center text-center">
        <img src="asset/logo.png" alt="" class="w-14 mx-auto" />
        <ol>
          <div>
            <li>
              <h1 class="text-5xl text-black font-bold">Checkout <br /></h1>
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

<div>
  <div class="w-40 rounded-2xl bg-red-700 connexion_echouer hidden "><p>la creation de votre a echouer verifier le mot de passe </p></div>
  <div class="w-40 rounded-2xl bg-green-700 connexion_reussi  hidden" ><p>la creation de votre a echouer verifier le mot de passe </p></div>
</div>
<div  class="flex  justify-center text-center items-center">
    <div class="">
        <form action="register.php" name="inciption" class=" border border-pink-300 rounded-4xl p-5 mb-8">
            <div class="mt-2">
                <label for="" class="">Votre Nom</label>
                <input type="text" name="nom" id="" placeholder="abc"  required class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>
            <div class="mt-2">
                <label for="" class="">adresse emal</label>
                <input type="email" name="email" id="" placeholder="abc@gamil.cm" class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>
            <div class="mt-2" > 
                <label for="" class="">Password</label>
                <input type="password" name="pass" id="pass" placeholder="entrer votre mot de passe " required class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>
        
            <div class="mt-2" > 
                <label for="" class="">Password</label>
                <input type="password" name="verif_pass" id="vpass" placeholder="Verifier votre mot de passe " required class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>

            <div class="mt-2" > 
                <label for="" class="">N° de telephone</label>
                <input type="tel" name="num_tel" id="" placeholder="entrer votre numero de tel " required class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>

            <div class="mt-2 justify-center text-center">
                <input type="submit" value="Submit" nema="mhassa" id="sub_registe" class="w-1/2 justify-center text-center rounded-3xl text-white font-bold text-xl h-14 p-3 border bg-amber-500  ">
            </div>


        </form>
    </div>
</div>
<script src="scrip.js"></script>
</body>
</html>













































<?php

include("pied_de_page.php") ;

?>







</body>
</html>