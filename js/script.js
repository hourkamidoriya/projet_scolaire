// alert ("bonjour le monde") ;

// const div_proc = document.querySelectorAll("#produit1") ;
// console.log(div_proc) ;

// function change_couleur(){
//     for( i=0 ;i < div_proc.length ; i++){
//     div_proc[i].style.background="yellow" ;
//     }
// }


// for( i=0 ;i < div_proc.length ; i++){
//     div_proc[i].addEventListener("click",change_couleur) ;
//     }



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