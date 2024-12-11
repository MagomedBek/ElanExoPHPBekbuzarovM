import { quotes} from "./data/quotes7.js"
const block = document.querySelector(".block");




function generer(){
    
    //let favorits =[]
    quotes.forEach(element => {
        let icon = localStorage.getItem("fav");
        if(icon == null){
            icon = "fa-regular";
        }else{
            icon = localStorage.getItem("fav").includes('"id":'+element.id) ? "fa-solid":"fa-regular";
        }
        
        block.innerHTML += "<div class='citation' id='"+element.id+"'><p><i>\""+element.content+"\"</i></p><p><i  class='"+icon+" fa-heart fav '></i>"+element.author+"</p></div>"
       
    });
    listing ()
    
}


function listing (){
   
    let favorits = document.querySelectorAll("p .fav");
    let favoris =[];
    favoris.push(localStorage.getItem("fav"));
    //control()
    //let text = "";
    local();
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
            localStorage.setItem('fav', favoris);
         //text = "id :" quotes[index].id + "\n author : " + quotes[index].author + " \n author :" + quotes[index].title +"\n author :"+ quotes[index].content;
         local();

            
        })
        
    })
}

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