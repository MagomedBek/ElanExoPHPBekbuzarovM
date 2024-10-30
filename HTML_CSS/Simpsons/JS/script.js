
const menu = document.getElementById("nav");
const icon = document.getElementById("menu");
const fermer = document.getElementById("close");
console.log(menu)
console.log(icon)
console.log(fermer)
icon.addEventListener("click",()=>{
if(menu.className==""){
    menu.classList.add("open")
    icon.classList.add("hide");
}
})

fermer.addEventListener("click",()=>{
    if(menu.className=="open"){
        menu.classList.remove("open");
        icon.classList.remove("hide");
    
    }
    
    })
        
