
const menu = document.getElementById("nav");
const icon = document.getElementById("menu");

console.log(menu)
console.log(icon)

icon.addEventListener("click",()=>{
if(menu.className==""){
    menu.classList.add("open")
    icon.style.display="none";

}else{
    menu.classList.remove("open");
    icon.style.display="block";
}

})
        
