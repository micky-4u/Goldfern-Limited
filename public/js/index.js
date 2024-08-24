// sidebar function 

function showSide(){

    console.log("clicked");
    let btn = document.getElementById("menu");
    let btn2 = document.getElementById("close");
    let side = document.querySelector(".menu-items");

    
    side.style.transform = "translateX(0)"
    side.style.transition = "1s"
    btn.style.display="none"
    btn2.style.display="block"

}

function closeSide(){
    console.log("cli")
    let btn = document.getElementById("menu");
    let btn2 = document.getElementById("close");
    let side = document.querySelector(".menu-items");

    
    side.style.transform = "translateX(240px)"
    btn.style.display="block"
    btn2.style.display="none"




}