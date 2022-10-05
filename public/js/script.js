
const navigation = document.getElementById("navigation");
const primaryColor = "#6669EC";
let enableScrollImpact = true;

// animation management.
const animatedContents = document.querySelectorAll(".animated-content");

if(document.getElementById("disable-scroll-impact")){
    enableScrollImpact = false;
}

animateElements();

window.onscroll = function () {

    const demotest = document.getElementById("demo-test");

    // manage navigation background.
    if(enableScrollImpact){
        if(window.scrollY == 0){
            navigation.style.backgroundColor = "transparent";
            navigation.style.color = "black"
        }else{
            navigation.style.backgroundColor = primaryColor;
            navigation.style.color = "white"
        }
    }

    // animate elements.
    animateElements();
   
}

//
const domStoreNavigationBgColor = document.getElementById("navigation-bg-color");
if(domStoreNavigationBgColor){
    navigation.style.backgroundColor = primaryColor;
    navigation.style.color = "white"
}


function animateElements(){
    const animateItems = document.querySelectorAll(".animated-item");
    animateItems.forEach( item => {
        if( (window.scrollY + 100) > item.offsetTop ){
            if( !item.classList.contains(item.dataset.animate) ){
                item.classList.add(item.dataset.animate);
                item.classList.remove("animated-item");
            }
        }
    });
}
