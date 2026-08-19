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



</div>
<?php if(!isset($_COOKIE["name_user"])){?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
    <link rel="stylesheet" href="css/output.css">
    <link rel="icon" href="asset/logo.png">
</head>
<body>
    
<div class="w-full h-full bg-blue-400 flex justify-center text-center items-center ">
    <div class="w-11/12 h-10/12 bg-amber-400 shadow-2xs rounded-2xl flex">
        <div class="w-6/12 h-full bg-red-500 rounded-l-2xl">£56</div>
        <div class="w-6/12 h-full ">C</div>
    </div>
</div>
</body>
</html>




<?php }?>

<?php if(isset($_COOKIE["name_user"])){
    header("location:index.php") ;
}?>



</body>
</html>

























        <!-- <form action="connexion_user.php" name="inciption" method="POST" class=" border border-pink-300 rounded-4xl p-5 mb-8">

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
 

        </form> -->




