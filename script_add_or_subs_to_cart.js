const moins = document.querySelector("#moins");
const plus = document.querySelector("#plus");
const valeur = document.querySelector("#valeur").innerText  ;
const quantiter = document.querySelector("#quantiter") ;
console.log(moins)
console.log(valeur)
console.log(plus)

let id_product = document.querySelector("#id").innerText ;
console.log(id_product);



id_product_int = parseInt(id_product) ;
console.log(id_product_int) ;
plus.addEventListener("click",function(){
    
    const valeur = document.querySelector("#valeur").innerText  ;
    let valeurpars = parseInt(valeur) ;
    let quantiter_pars =parseInt(quantiter) ;
    if (valeurpars < id_product_int ){
        valeurpars += 1 ;
        console.log(valeurpars) ;
        quantiter_pars += 1;
        document.querySelector("#quantiter").innerText =quantiter_pars ;
        document.querySelector("#valeur").innerText = valeurpars ;
    }

    
})

moins.addEventListener("click",function(){
    const valeur = document.querySelector("#valeur").innerText  ;
    
    let valeurpars = parseInt(valeur) ;
    if (valeurpars >= 1){
        valeurpars -= 1 ;
        console.log(valeurpars) ;
        document.querySelector("#valeur").innerText = valeurpars
    }

    
})