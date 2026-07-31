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




<div  class="flex">
    <div class="w-1/2 pl-40 pr-30">
        <div class="flex mt-10">
            <div class="w-10 h-16">
                <img src="asset/Vector (12).png" alt="" class="w-7/12">
            </div>
            
            <div>
                <h3 class="font-bold text-2xl mt-5">Address</h3>
                <p>236 5th SE Avenue, New York <br> NY10000, United States</p>
            </div>
        </div>
        <div class="flex">
            <div class="w-10 h-16">
                <img src="asset/bxs_phone.png" alt="" class="w-7/12">
            </div>
            
            <div>
                <h3 class="font-bold text-2xl mt-5">Phone</h3>
                <p>Mobile: +(84) 546-6789 <br>Hotline: +(84) 456-6789</p>
            </div>
        </div>
    
        <div class="flex">
            <div class="w-10 h-16">
                <img src="asset/bi_clock-fill.png" alt="" class="w-7/12">
            </div>
            
            <div>
                <h3 class="font-bold text-2xl mt-5">Address</h3>
                <p>Monday-Friday: 9:00 - 22:00 Saturday-Sunday: 9:00 - 21:00</p>
            </div>
        </div>
    </div>


    <div class="w-1/2 pr-40 pl-10">
        <form action="" class=" border border-pink-300 rounded-4xl p-5 mb-8">
            <div class="mt-10">
                <label for="" class="">Your name</label>
                <input type="text" name="" id="" placeholder="abc" class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>
            <div class="mt-10">
                <label for="" class="">adresse emal</label>
                <input type="email" name="" id="" placeholder="abc@gamil.cm" class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>
            <div class="mt-10" > 
                <label for="" class="">subjet</label>
                <input type="text" name="" id="" placeholder="entrer l'objet de la requette " class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>
        
            <div class="mt-10">
                <label for="" class="">Message</label>
                <textarea name=""  id="" class="w-full h-36 border   border-gray-400"></textarea>
            </div>

            <div class="mt-10 justify-center text-center">
                <input type="submit" value="Submit " class="w-1/2 justify-center text-center rounded-3xl text-white font-bold text-xl h-14 p-3 border bg-amber-500  ">
            </div>
        </form>
    </div>
</div>












































<?php

include("pied_de_page.php") ;

?>







</body>
</html>