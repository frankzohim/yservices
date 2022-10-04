var choose=document.querySelectorAll('.choose');
let data=document.querySelectorAll('.hour');
let dataHours=document.getElementById('IntervenantId');
let dataArray=[];
var check=document.querySelectorAll('.ischeck');




    choose.forEach((item,index,array)=>{


        item.addEventListener('click',()=>{

            check.forEach((i,ind,indArr)=>{

                if(item.style.backgroundColor == 'blue'){
                    item.style.backgroundColor = 'white';

                    item.style.color="black";
                    indArr[index].checked=false;
                    console.log(ind);


                } else{
                    item.style.backgroundColor = 'blue'

                    item.style.color="white";

                    console.log(ind);
                    indArr[index].checked=true;
                }

            })

        })






})





