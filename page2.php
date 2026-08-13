<?php
session_start();
include("connexion.php");

// fausse requête pour compter
$nb = 0;
$categorie = "all_product";

// la fausse requête pour compter le nombre de produit par catégorie
if (isset($_POST['categorie'])) {

    $categorie = $_POST["categorie"];

    if ($categorie == "meuble") {
        $requette = "SELECT * FROM `produit` WHERE Id_categori = 1";
    } elseif ($categorie == "jeux") {
        $requette = "SELECT * FROM `produit` WHERE Id_categori = 2";
    } elseif ($categorie == "consol") {
        $requette = "SELECT * FROM `produit` WHERE Id_categori = 3";
    } elseif ($categorie == "electronic") {
        $requette = "SELECT * FROM `produit` WHERE Id_categori = 5";
    } elseif ($categorie == "alimentation") {
        $requette = "SELECT * FROM `produit` WHERE Id_categori = 4";
    } else {
        $requette = "SELECT * FROM produit";
    }

} else {
    $requette = "SELECT * FROM produit";
}

$exe = $con->query($requette);
$list_produit = $exe->fetchAll();

foreach ($list_produit as $produit) {
    $produit["Titre"];
    $nb += 1;
}


// je vérifie si il y'a un GET page
if (isset($_GET["page"]) && !empty($_GET["page"])) {

    $page_actuelle = (int)$_GET["page"];

} else {

    $page_actuelle = 1;

}


// je détermine le nombre d'éléments par page
$nb_by_page = 20;


// je calcule le nombre de pages
$nb_page = ceil($nb / $nb_by_page);


// je cherche ce que je vais mettre dans LIMIT
$premier = ($page_actuelle * $nb_by_page) - $nb_by_page;


$categorie = "all_product";

// la vraie requête maintenant avec les limites
if (isset($_POST['categorie'])) {

    $categorie = $_POST["categorie"];

    if ($categorie == "jeux") {

        $requette = "SELECT * FROM `produit` 
                     WHERE Id_categori = 2 
                     LIMIT " . $premier . "," . $nb_by_page;

    } elseif ($categorie == "electronic") {

        $requette = "SELECT * FROM `produit` 
                     WHERE Id_categori = 3 
                     LIMIT " . $premier . "," . $nb_by_page;

    } elseif ($categorie == "all_product") {

        $requette = "SELECT * FROM `produit` 
                     LIMIT " . $premier . "," . $nb_by_page;

    }

} else {

    $requette = "SELECT * FROM `produit` 
                 LIMIT " . $premier . "," . $nb_by_page;
}


$exe = $con->query($requette);
$list_produit = $exe->fetchAll();


// requête pour afficher les éléments de manière décroissante
$requette_des_nouveauter = "SELECT * FROM `produit` 
                            ORDER BY `produit`.`Id` DESC 
                            LIMIT 3";

$exe2 = $con->query($requette_des_nouveauter);
$list_new_produit = $exe2->fetchAll();

?>

<?php
$banner = "yes";
$title = "Shop";
?>

<?php if (isset($_SESSION["utilisateur"]) == "bb") { ?>

    <?php include("entete.php") ?>


    <!-- BARRE DE FILTRE -->
    <div class="w-full bg-pink-200 py-3 px-3 sm:px-5">

        <div class="max-w-7xl mx-auto 
                    flex flex-col lg:flex-row 
                    items-center justify-between 
                    gap-4">

            <!-- GAUCHE -->
            <div class="flex flex-col sm:flex-row 
                        items-center justify-center 
                        gap-3 w-full lg:w-auto">

                <!-- FILTRE -->
                <div class="flex items-center gap-2 w-full sm:w-auto">

                    <form action="" method="POST" 
                          class="flex items-center gap-2 w-full sm:w-auto">

                        <select 
                            name="categorie"
                            class="border border-gray-400 
                                   rounded-lg px-3 py-2 
                                   bg-white outline-none 
                                   w-full sm:w-auto"
                        >

                            <option value="all_product">
                                Tous nos produits
                            </option>

                            <option value="electronic">
                                Électronique
                            </option>

                            <option value="meuble">
                                Meuble
                            </option>

                            <option value="jeux">
                                Jeux
                            </option>

                            <option value="alimentation">
                                Nourriture
                            </option>

                        </select>


                        <button 
                            type="submit"
                            class="cursor-pointer 
                                   bg-white rounded-lg 
                                   p-2 hover:bg-gray-100"
                        >

                            <img 
                                src="asset/system-uicons_filtering.png"
                                alt="Filtrer"
                                class="w-6 h-6 sm:w-7 sm:h-7"
                            >

                        </button>

                    </form>

                </div>


                <p class="hidden sm:block">
                    Filter
                </p>


                <img 
                    src="asset/Vector (6).png"
                    alt=""
                    class="w-5 h-5 hidden sm:block"
                >


                <img 
                    src="asset/Vector (7).png"
                    alt=""
                    class="w-5 h-5 hidden sm:block"
                >


                <!-- NOMBRE DE PRODUITS -->
                <p class="text-sm sm:text-base 
                          text-center whitespace-nowrap">

                    Showing

                    <?php echo $page_actuelle . "/" . $nb_page; ?>

                    -

                    <?php echo $nb_by_page; ?>

                    of

                    <?php echo $nb; ?>

                    résultats

                </p>

            </div>


            <!-- DROITE -->
            <div class="flex flex-col sm:flex-row 
                        items-center justify-center 
                        gap-3 w-full lg:w-auto">

                <form action="" class="flex items-center gap-2">

                    <label>
                        Show
                    </label>

                    <input 
                        type="text"
                        placeholder="16"
                        class="bg-amber-100 
                               border rounded-xl 
                               p-2 w-20 sm:w-24"
                    >

                </form>


                <form action="" class="flex items-center gap-2">

                    <label>
                        Sort
                    </label>

                    <input 
                        type="text"
                        placeholder="Default"
                        class="bg-amber-100 
                               border rounded-xl 
                               p-2 w-24 sm:w-28"
                    >

                </form>

            </div>

        </div>

    </div>



    <!-- CONTENU -->
    <div class="container mx-auto 
                px-3 sm:px-6 lg:px-10 
                py-4">


        <h1 class="text-center 
                   mb-5 
                   font-bold 
                   text-2xl sm:text-3xl">

            Tous nos articles

        </h1>


        <!-- GRILLE PRODUITS -->
        <div class="grid 
                    grid-cols-1 
                    sm:grid-cols-2 
                    md:grid-cols-3 
                    lg:grid-cols-4 
                    gap-5 sm:gap-6">


            <?php foreach ($list_produit as $produit) { ?>


                <!-- PRODUIT -->
                <div class="
                    shadow-2xl
                    shadow-black/30
                    duration-500
                    hover:-translate-y-2
                    bg-gray-200
                    relative
                    produits
                    overflow-hidden
                    rounded-lg
                ">


                    <!-- IMAGE -->
                    <div class="w-full 
                                aspect-square 
                                overflow-hidden 
                                bg-white">

                        <img
                            src="<?php echo $produit['Image']; ?>"
                            alt="<?php echo $produit['Titre']; ?>"
                            class="
                                w-full
                                h-full
                                object-contain
                                transition
                                duration-500
                            "
                        >

                    </div>


                    <!-- INFORMATIONS -->
                    <div class="
                        px-4
                        py-4
                        min-h-[150px]
                    ">


                        <p class="
                            font-bold
                            text-center
                            text-base
                            sm:text-lg
                            line-clamp-2
                        ">

                            <?php echo $produit['Titre']; ?>

                        </p>


                        <p class="
                            text-sm
                            sm:text-base
                            mt-2
                            line-clamp-3
                            text-gray-700
                        ">

                            <?php echo $produit['Description']; ?>

                        </p>


                        <p class="
                            text-center
                            font-bold
                            text-base
                            sm:text-lg
                            mt-3
                        ">

                            <?php echo $produit['Prix']; ?> FCFA

                        </p>

                    </div>



                    <!-- OVERLAY -->
                    <div class="
                        hidden
                        contenaire_product
                        text-center
                        absolute
                        inset-0
                        w-full
                        h-full
                    ">


                        <!-- CONTENU -->
                        <div class="
                            relative
                            z-10
                            h-full
                            w-full
                            flex
                            flex-col
                            items-center
                            justify-center
                            px-4
                        ">


                            <!-- ADD TO CART -->
                            <form 
                                action="page_de_clique_sur_un_produit.php"
                                method="POST"
                                class="w-full flex justify-center"
                            >

                                <input 
                                    type="hidden"
                                    value="<?php echo $produit['Id']; ?>"
                                    name="affiche_produit"
                                >


                                <button 
                                    type="submit"
                                    class="
                                        py-3
                                        px-5
                                        font-bold
                                        bg-white
                                        text-amber-600
                                        rounded-lg
                                        w-full
                                        max-w-xs
                                        hover:bg-amber-600
                                        hover:text-white
                                        transition
                                        cursor-pointer
                                    "
                                >

                                    Add to cart

                                </button>

                            </form>



                            <!-- SHARE -->
                            <div class="
                                flex
                                flex-col
                                sm:flex-row
                                gap-4
                                mt-6
                                w-full
                                max-w-xs
                            ">


                                <button 
                                    type="button"
                                    class="
                                        w-full
                                        flex
                                        justify-center
                                        items-center
                                        text-white
                                        hover:underline
                                        cursor-pointer
                                    "
                                >

                                    <img 
                                        src="asset/fond-noir (2).png"
                                        alt=""
                                        class="w-4 h-4 mr-2"
                                    >

                                    <span>
                                        Share
                                    </span>

                                </button>



                                <button 
                                    type="button"
                                    class="
                                        w-full
                                        flex
                                        justify-center
                                        items-center
                                        text-white
                                        hover:underline
                                        cursor-pointer
                                    "
                                >

                                    <img 
                                        src="asset/fond-noir (1).png"
                                        alt=""
                                        class="w-4 h-4 mr-2"
                                    >

                                    <span>
                                        Share
                                    </span>

                                </button>


                            </div>

                        </div>


                        <!-- FOND NOIR -->
                        <div class="
                            h-full
                            w-full
                            bg-black
                            opacity-50
                            absolute
                            inset-0
                            z-0
                        "></div>


                    </div>


                </div>


            <?php } ?>


        </div>



        <!-- PAGINATION -->
        <div class="
            flex
            justify-start
            sm:justify-center
            gap-2
            my-8
            overflow-x-auto
            px-2
            pb-2
        ">


            <?php for ($i = 1; $i <= $nb_page; $i++) { ?>


                <?php if ($i == $page_actuelle) { ?>


                    <span class="
                        flex-shrink-0
                        py-2
                        px-4
                        sm:px-6
                        rounded-xl
                        shadow-2xl
                        bg-gray-400
                        font-bold
                    ">

                        <?php echo $i ?>

                    </span>


                <?php } else { ?>


                    <a 
                        href="page2.php?page=<?php echo $i; ?>"
                        class="flex-shrink-0"
                    >

                        <p class="
                            py-2
                            px-4
                            sm:px-6
                            rounded-xl
                            shadow-2xl
                            bg-amber-400
                            hover:bg-amber-500
                        ">

                            <?php echo $i ?>

                        </p>

                    </a>


                <?php } ?>


            <?php } ?>


        </div>


    </div>



    <?php include("pied_de_page.php") ?>

    <script src="scrip.js"></script>


<?php } else { ?>

    <?php
    header("location:connexion_user.php");
    exit;
    ?>

<?php } ?>


</body>
</html>