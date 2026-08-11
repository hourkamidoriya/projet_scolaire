<?php
session_start();

 include("connexion.php") ;

// je cparcoure les utilisateur
 if(isset($_POST["email"]) && isset($_POST["pass"])){
    $email=$_POST["email"] ;
    $pass=$_POST["pass"] ;
    $sql="SELECT * FROM `utilisateur` WHERE email='$email' AND mot_de_pass='$pass'" ;
    $res=$con->query($sql) ;
    if($res->rowCount()>0){
        $sql="SELECT * FROM `utilisateur` WHERE email='$email' AND mot_de_pass='$pass'" ;
        $user=$res->fetchAll() ;
        foreach($user as $key){
            echo $key["id"] ;
            echo $key["mot_de_pass"] ;
            echo $key["tel"] ;
            $id_utilisateur = $key["id"] ;
            $nom_utilisateur = $key["nom"] ;

        };

        echo "vous etes connecter" ;
        $_SESSION["utilisateur"] = $id_utilisateur ;
        $_SESSION["user_name"] = $nom_utilisateur ;
        var_dump($_SESSION) ;
        header("location:index.php?id=".$key["id"]) ;
    }else{
        echo "<script> alert('identifiant incorrect')</script>" ;
        // header("location:connexion_user.php?erreur=connexione_a_echouer") ;
    } 
}


if(isset($_POST["erreur"]) && $_POST["erreur"]=="connexione_a_echouer"){
    echo "<script>alert('la connexion a echouer verifier votre email et mot de passe')</script>" ;
}
?> 





<?php $title="Connexion"?>

    <?php include("entete.php")?>
   
  
  <div class="w-40 rounded-2xl bg-green-700 connexion_reussi  hidden" ><p>la creation de votre a echouer verifier le mot de passe </p></div>
</div>
<?php if(!isset($_COOKIE["name_user"])){?>
<div  class="flex  justify-center text-center items-center">
    <div class="">
        
        <form action="connexion_user.php" name="inciption" method="POST" class=" border border-pink-300 rounded-4xl p-5 mb-8">

            <div class="mt-2">
                <label for="" class="">adresse emal</label>
                <input type="email" name="email" id="ton_email" placeholder="abc@gamil.cm" class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>
            <div class="mt-2" > 
                <label for="" class="">Password</label>
                <input type="password" name="pass" id="ton_pass" placeholder="entrer votre mot de passe " required class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>

            <div class="mt-2" > 
                <label for="" class="">N° de telephone</label>
                <input type="tel" name="num_tel" id="ton_tel" placeholder="entrer votre numero de tel " required class="w-full h-11 border border-gray-400 mt-4 rounded-xl px-5">
            </div>

            <div class="mt-2 justify-center text-center">
              <button  id="register" class="w-1/2 justify-center text-center rounded-3xl text-white font-bold text-xl h-14 p-3 border bg-amber-500  ">Se Connecter</button>
            </div>


        </form>
    </div>
</div>
<?php }?>

<?php if(isset($_COOKIE["name_user"])){
    header("location:index.php") ;
}?>







































    <div class="h-32 flex my-auto bg-pink-200 mx-auto justify-center text-center  gap-20">
        <div class="w1/4 flex   justify-center my-auto">
            <div class="w-16   mr-3  ">
                <img src="asset/Group.png" alt="" class="w-10/12 duration-500 hover:w-11/12">
            </div>
            <div>
                <h3 class="text-xl font-bold">High Quality</h3>
                <p>crafted from top materials</p>
            </div>
        </div>
        <div class="w1/4 flex  justify-center my-auto">
            <div class="w-16 h-16 mr-3">
                <img src="asset/Vector (8).png" alt="" class="w-10/12 duration-500 hover:w-11/12">
            </div>
            <div>
                <h3 class="text-xl font-bold">Warranty Protection</h3>
                <p>Over 2 years</p>
            </div>
        </div>
        <div class="w1/4 flex justify-center my-auto">
            <div class="w-16 h-16 mr-3">
                <img src="asset/Vector (9).png" alt="" class="w-10/12  duration-500 hover:w-11/12">
            </div>
            <div>
                <h3 class="text-xl font-bold">Free Shipping</h3>
                <p>Order over 150 $</p>
            </div>
        </div>
        <div class="w1/4 flex justify-center my-auto">
            <div class="w-16 h-16 mr-3">
                <img src="asset/Vector (10).png" alt="" class="w-10/12 duration-500 hover:w-11/12">
            </div>
            <div>
                <h3 class="text-xl font-bold">24 / 7 Support</h3>
                <p>Dedicated support</p>
            </div>
        </div>
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









<script src="js/script_inscription.js"></script>


</body>
</html>