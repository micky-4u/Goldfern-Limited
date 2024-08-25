// sidebar function 
let hideSide = document.querySelector(".hide-side");

const element = document.getElementById(".agents")
element.classList.add("show")
window.onscroll = ()=>{
    element.forEach(sec =>{
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;

        if(top >= offset && top < offset + height){
            sec.classList.add('show')
        }
        else{
            sec.classList.remove('show')
        }

    })
    
}

function showSide(){

    let btn = document.getElementById("menu");
    let btn2 = document.getElementById("close");
    let side = document.querySelector(".menu-items");

    side.style.right = "0"
    side.style.transition = "1s"
    btn.style.display="none"
    btn2.style.display="block"

}

function closeSide(){
    let btn = document.getElementById("menu");
    let btn2 = document.getElementById("close");
    let side = document.querySelector(".menu-items");

    side.style.right = "-100%"

    btn.style.display="block"
    btn2.style.display="none"
}

hideSide.addEventListener("touchstart", function(event){

    event.preventDefault();
    closeSide();
})

hideSide.addEventListener("touchmove", function(event){

    event.preventDefault();
    closeSide();
})




function initMap() {
    // The location to center the map (latitude and longitude)
    const location = { lat: 40.7128, lng: -74.0060 }; // New York City

    // Create the map centered at the location
    const map = new google.maps.Map(document.getElementById('map'), {
        zoom: 10,  // Zoom level
        center: location,  // Center of the map
    });

    // Add a marker at the location
    const marker = new google.maps.Marker({
        position: location,
        map: map,
    });
}



const elements = document.querySelectorAll(".agent")

window.onscroll = ()=>{
    elements.forEach(sec =>{
        let top = window.scrollY;
        let offset = sec.offsetTop;
        let height = sec.offsetHeight;

        if(top >= offset && top < offset + height){
            sec.classList.add('show')
        }
        else{
            sec.classList.remove('show')
        }

    })
    
}
