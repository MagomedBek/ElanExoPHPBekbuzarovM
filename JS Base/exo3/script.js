const block = document.querySelector(".block");
let carres;
for (let i=0;i<4;i++){
    block.innerHTML += "<div class='carre'><p>"+(i+1)+"</p></div>"
}
carres = document.querySelectorAll(".carre");
carres.forEach((carre) => {
    carre.addEventListener("click",()=>{
        carre.classList.toggle("clicked");
       
    })
});

 