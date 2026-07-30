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