const carre = document.querySelector(".carre");
const carreStyle = window.getComputedStyle(carre);
carre.addEventListener("click", () =>{
    alert("Classe : "+ carre.className +
            "\n- Background color : "+ carreStyle.getPropertyValue("background-color")+
            // Background color : "+ carreStyle.backgroundColor +
            "\n- Color : "+ carreStyle.getPropertyValue("color")+
            "\n- Height : "+ carreStyle.getPropertyValue("height")+
            "\n- Width : "+ carreStyle.getPropertyValue("width")+
            "\n- Display : "+ carreStyle.getPropertyValue("display")+
            "\n- Display : "+ carreStyle.getPropertyValue("font-family") +"("+carreStyle.getPropertyValue("font-size") +")"
    )
})