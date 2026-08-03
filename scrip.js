const produits = document.querySelectorAll(".produits");

produits.forEach((element) => {

    element.addEventListener("mouseover", function () {
        this.querySelector(".contenaire_product").style.display = "block";
    });

    element.addEventListener("mouseout", function () {
        this.querySelector(".contenaire_product").style.display = "none";
        this.querySelector("#add-cart").style.opacity= "0"
    });

});


// produits.forEach((div) => {

//     div.addEventListener("click", function () {
//         this.querySelector("#affiche_product").submit;
//     });

// });
const password = document.querySelectorAll("v.pass");
const password_verif = document.querySelectorAll("#pass");
const button = document.querySelectorAll("#sub_registe");
button.addEventListener("click",function(){
    if(password != password_verif){
        const verif = document.querySelectorAll(".connexion_echouer");
        verif.style.display = "block" ;

    }

})