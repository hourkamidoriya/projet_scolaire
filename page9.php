<?php
session_start();
$title="Contact"?>
<?php if(isset($_SESSION["utilisateur"])=="bb"){ ?> 
<?php include("entete.php")?>

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
<?php }else{ ?> 
    
 <?php   header("location:connexion_user.php")  ;?>
     
<?php } ;?>











































<?php

include("pied_de_page.php") ;

?>







</body>
</html>