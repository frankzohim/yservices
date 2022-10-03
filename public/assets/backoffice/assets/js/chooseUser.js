var choose=document.querySelectorAll('.choose');
var isPaint=false;



choose.forEach((item)=>{

    item.addEventListener('click',()=>{
        if(item.style.backgroundColor == 'blue'){
            item.style.backgroundColor = 'white';
            item.style.color="black";
        } else{
            item.style.backgroundColor = 'blue'
            item.style.color="white";
        }
    })



})
