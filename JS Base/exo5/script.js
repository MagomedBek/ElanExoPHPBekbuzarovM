import { quotes} from "./data/quotes7.js"
const block = document.querySelector(".block");




function generer(){
    quotes.forEach(element => {
        block.innerHTML += "<div class='citation'><p>'"+element.content+"'</p><p>"+element.author+"</p></div>"
        console.log(element.author);
    });
    
}



 generer();