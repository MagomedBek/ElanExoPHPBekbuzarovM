import { quotes} from "./data/quotes7.js"
const block = document.querySelector(".block");




function generer(){
    
    //let favorits =[]
    quotes.forEach(element => {
        block.innerHTML += "<div class='citation' id='"+element.id+"'><p><i>\""+element.content+"\"</i></p><p><i  class=' visible fa-regular fa-heart fav '></i>"+element.author+"</p></div>"
       
    });
    listing ()
    
}


function listing (){
    let favorits = document.querySelectorAll("p .fav");
    let favoris =[];
    //let text = "";
    favorits.forEach((fav,index) => {
        fav.addEventListener("click", ()=>{
           let contenu = JSON.stringify(quotes[index]);
            if (!favoris.includes(contenu)){
                fav.classList.replace("fa-regular", "fa-solid")
                favoris.push(contenu );
                
            }else{
                fav.classList.replace( "fa-solid","fa-regular")
                favoris.splice(favoris.indexOf(contenu),1);
            }
         //text = "id :" quotes[index].id + "\n author : " + quotes[index].author + " \n author :" + quotes[index].title +"\n author :"+ quotes[index].content;
            localStorage.setItem('fav', favoris);
            for(let i=0; i<localStorage.length; i++) {
                let key = localStorage.key(i);
                alert(`${key}: ${localStorage.getItem(key)} \n`);
                
              }

            
        })
        
    })
}
 generer();