const block = document.querySelector(".block");
const icons =["fa-brands fa-facebook","fa-brands fa-twitter","fa-brands fa-instagram"];
const colors =["rgb(1, 101, 225)","rgb(29 161 242)","rgb(225, 48, 108)"];
let carres;


function generer(){
    block.innerHTML = "<p><b>Follow Us</b></p>";
    for (let i=0;i<3;i++){
        let nom = icons[i].substring(13);
        nom = nom.charAt(0).toUpperCase() + nom.slice(1);
        block.innerHTML += "<div class='carre'><p><i class='"+icons[i]+"'></i></p><p>"+nom+"</p></div>";
    }
    carres = document.querySelectorAll(".carre");
    carres.forEach((carre,index) => {
        let couleur =carre.style.backgroundColor = colors[index];
        carre.addEventListener("click",()=>{  
            carre.classList.toggle("clicked");
            if( carre.classList.contains("clicked") ){
                 clear()
                 block.classList.toggle("changed");
                 carre.classList.toggle("clicked");
                 block.style.backgroundColor = couleur;
                 
            }else{
                block.style.backgroundColor = " rgb(226, 213, 213)";
    
            }
        })
    });
}


  function clear(){
    carres.forEach((carre) => {
    carre.classList.remove("clicked");
    block.classList.remove("changed");
    })
 }

 generer()