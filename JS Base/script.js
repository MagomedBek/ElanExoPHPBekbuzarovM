import { quotes} from "./data/quotes7.js"
const block = document.querySelector(".block");




function generer(){
//    localStorage.clear()
    //let favorits =[]
    quotes.forEach(element => {
        let icon = localStorage.getItem("fav");
        if(icon == null){
            icon = "fa-regular";
        }else{
            icon = localStorage.getItem("fav").includes(+element.id) ? "fa-solid":"fa-regular";
        }
        
        block.innerHTML += "<div class='citation' id='"+element.id+"'><p><i>\""+element.content+"\"</i></p><p><i  class='"+icon+" fa-heart fav '></i>"+element.author+"</p></div>"
       
    });
     listing ()
    
}


function listing (){
   
    let favorits = document.querySelectorAll("p .fav");
    let favoris = JSON.parse(localStorage.getItem("fav")) || []; // Initialiser avec les données existantes ou un tableau vide.
   console.log(favoris);
    local();
    favorits.forEach((fav,index) => {
        fav.addEventListener("click", ()=>{
            const contenu = quotes[index];
            const isFavoris = favoris.some(item => item.id === contenu.id);

            if (!isFavoris) {
                fav.classList.replace("fa-regular", "fa-solid");
                favoris.push(contenu);
            } else {
                fav.classList.replace("fa-solid", "fa-regular");
                favoris = favoris.filter(item => item.id !== contenu.id);
            }

            localStorage.setItem("fav", JSON.stringify(favoris)); // Stocker les favoris mis à jour.
            local();
            
        })
        
    })
}
// function listing() {
//     let favorits = document.querySelectorAll("p .fav");
//     let favoris = JSON.parse(localStorage.getItem("fav")) || []; // Initialiser avec les données existantes ou un tableau vide.
//     local()
//     // Met à jour l'état visuel des favoris au chargement de la page.
//     favorits.forEach((fav, index) => {
//         const quoteId = quotes[index].id; // Suppose que chaque quote a un ID unique.
//         if (favoris.some(item => item.id === quoteId)) {
//             fav.classList.replace("fa-regular", "fa-solid");
//         }
//     });

//     favorits.forEach((fav, index) => {
//         fav.addEventListener("click", () => {
            // const contenu = quotes[index];
            // const isFavoris = favoris.some(item => item.id === contenu.id);

            // if (!isFavoris) {
            //     fav.classList.replace("fa-regular", "fa-solid");
            //     favoris.push(contenu);
            // } else {
            //     fav.classList.replace("fa-solid", "fa-regular");
            //     favoris = favoris.filter(item => item.id !== contenu.id);
            // }

            // localStorage.setItem("fav", JSON.stringify(favoris)); // Stocker les favoris mis à jour.
            // local();
//         });
//     });
// }
function local(){
   
    for(let i=0; i<localStorage.length; i++) {
        let key = localStorage.key(i);
        console.log(`${key}: ${localStorage.getItem(key)} \n`);
        
      }

}

function control(favoris){
    let citations = document.querySelectorAll(".citation");
    citations.forEach(citation =>{
        if(favoris.includes(citation.id)){

        }
    })

    
}


 generer();