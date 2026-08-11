


const div_proc = document.querySelectorAll(".produit");

div_proc.forEach(function(div) {
    div.addEventListener("mouseover", function() {
        this.style.background = "yellow";
    });
});


div_proc.forEach(function(diV) {
    div.addEventListener("mouseout", function() {
        this.style.background = "white";
    });
});

const deiv_cacher = document.querySelector("#moi") ;
console.log("je refuse") ;
console.log(deiv_cacher) ;
const mhassa = document.querySelector(".voila") ;



deiv_cacher.addEventListener("click",function (){
    mhassa.classList.toggle("hidden") ;
}) ;


// pour le bouton du panier 


const deiv_cacher2 = document.querySelector("#hh") ;
console.log() ;
const mhassa2 = document.querySelector(".voila2") ;
console.log(mhassa2) ;


deiv_cacher2.addEventListener("click",function (){
    mhassa2.classList.toggle("hidden") ;
    mhassa2.classList.toggle("flex") 
}) ;
