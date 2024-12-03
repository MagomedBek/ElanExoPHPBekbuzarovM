const block = document.querySelector(".block");
const colors =["rgb(136, 174, 136)","rgb(204, 10, 10)","rgb(0, 204, 0)","rgb(204, 204, 0)"];
let carres;
for (let i=0;i<4;i++){
    block.innerHTML += "<div class='carre'></div>"
}
block.innerHTML += "<div class='copie'></div>";
 carres = document.querySelectorAll(".carre");
carres.forEach((carre,index) => {
    let couleur =carre.style.backgroundColor = colors[index];
    carre.addEventListener("click",()=>{
        let copie = document.querySelector(".copie")
        copie.style.backgroundColor = couleur;
        copie.innerHTML = couleur; 
    })
});

 