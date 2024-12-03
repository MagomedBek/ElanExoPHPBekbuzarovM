const block = document.querySelector(".block");
const icons =["fa-brands fa-facebook","fa-brands fa-twitter","fa-brands fa-instagram"];
const colors =["rgb(1, 101, 225)","rgb(29 161 242)","rgb(225, 48, 108)"];
let carres;


function generer(){
    block.innerHTML = "<p><b>Follow Us</b></p>";
    for (let i=0;i<3;i++){
        block.innerHTML += "<div class='carre'><p><i class='"+icons[i]+"'></i></p><p>"+icons[i].substring(13)+"</p></div>"
    }
    carres = document.querySelectorAll(".carre");
    carres.forEach((carre,index) => {
        let couleur =carre.style.backgroundColor = colors[index];
        carre.addEventListener("click",()=>{
            
            block.classList.toggle("changed");
            carre.classList.toggle("clicked");
            if( carre.classList.contains("clicked") ){
                clear()
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