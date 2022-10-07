

					document.querySelectorAll('.allDays').forEach((item,index,items)=>{
                        let parel =item.parentElement;

                        let dataTimes = document.getElementById('dataTimes');

                        let dataAll=document.querySelectorAll('.allDays');
                            item.addEventListener('click',()=>{
                                //console.log(item.getAttribute('data-time'));
                                //let parent = item.parentElement;
                                //console.log(parent);



                                if(item.style.backgroundColor == 'blue'){


                                          item.style.backgroundColor = 'white';

                                }



                                else

                                    item.style.backgroundColor = 'blue'
                                    dataAll.forEach((el,i)=>{
                                        if(index==i){
                                            console.log(el.dataset.time);
                                            dataTimes.value +=" "+el.dataset.time;
                                        }



                                    })




                                console.log(item.parentElement.id);

                                              //console.log(parel.children)
                                Array.prototype.forEach.call(parel.children,child =>{
                                      child.nextElementSibling.style.backgroundColor="blue";
                                item.addEventListener('click',()=>{
                                  if(item.style.backgroundColor == 'blue')
                                      child.nextElementSibling.style.backgroundColor="white";
                                  else
                                      child.nextElementSibling.style.backgroundColor="blue";
                                });
                                          })
                              });
                        }




					  )


					  document.querySelectorAll('.allJourney').forEach((curr,index,arrays)=>{

                        let dataTimesJourney = document.getElementById('dataTimes');

                        let dataAll=document.querySelectorAll('.allJourney');

									curr.addEventListener('click',()=>{
						  //initialize document
                                        console.log("bb");
						  var mornings=document.querySelectorAll('.inJourney');


										var ArrayJourney;
										ArrayJourney=Array.from(mornings);
										var ArrayMorning=ArrayJourney.slice(0,7);
										var ArrayMidday=ArrayJourney.slice(7,14);
										var ArrayAfternoon=ArrayJourney.slice(14,21);
										var ArrayNight=ArrayJourney.slice(21,28);

						  if(curr.style.backgroundColor=="blue"){
							curr.style.backgroundColor="white";

											ArrayMorning[index].style.backgroundColor="white";
											ArrayMidday[index].style.backgroundColor="white";
											ArrayAfternoon[index].style.backgroundColor="white";
											ArrayNight[index].style.backgroundColor="white";


						  }else{
                            console.log(ArrayJourney)
							curr.style.backgroundColor="blue";

											//console.log(ArrayMorning,ArrayMidday,ArrayAfternoon,ArrayNight);
											ArrayMorning[index].style.backgroundColor="blue";
											ArrayMidday[index].style.backgroundColor="blue";
											ArrayAfternoon[index].style.backgroundColor="blue";
											ArrayNight[index].style.backgroundColor="blue";

                                            dataAll.forEach((el,i)=>{
                                                if(index==i){
                                                    console.log(el.dataset.time);
                                                    dataTimesJourney.value =" "+curr.getAttribute('data-time');
                                                }

                                            })

										}

										//document.querySelectorAll('.inJourney').forEach()

						})
					  })

								document.querySelectorAll('.night').forEach((curr,ind)=>{
									curr.addEventListener("click",()=>{

										var mornings=document.querySelectorAll('.inJourney');
										var ArrayJourney=Array.from(mornings);

										if(curr.style.backgroundColor=="blue"){
											curr.style.backgroundColor='white';
											ArrayJourney[ind].style.backgroundColor="white";
										}else{
											curr.style.backgroundColor='blue';
											ArrayJourney[ind].style.backgroundColor="blue";
										}
									})
								})

                                document.querySelectorAll('.allDay').forEach((curr,index)=>{

									curr.addEventListener('click',()=>{
                                    var alldays=document.querySelectorAll('.everyday');
									var ArrayDays,
                                    ArrayDays=Array.from(alldays);
									var ArrayMorning=ArrayDays.slice(0,7);
									var ArrayMidday=ArrayDays.slice(7,14);
									var ArrayAfternoon=ArrayDays.slice(14,21);
									var ArrayNight=ArrayDays.slice(21,28);
									var ArrayWholeJourney=ArrayDays.slice(28,35);
									var ArrayNightAndMorning=ArrayDays.slice(35,42);
										if(curr.style.backgroundColor=='blue'){
											curr.style.backgroundColor="white";

											ArrayMorning[index].style.backgroundColor="white";
											ArrayMidday[index].style.backgroundColor="white";
											ArrayAfternoon[index].style.backgroundColor="white";
											ArrayNightAndMorning[index].style.backgroundColor="white";
											ArrayWholeJourney[index].style.backgroundColor="white";
											ArrayNight[index].style.backgroundColor="white";
										}else{

                                            console.log(index,ArrayDays)
											curr.style.backgroundColor="blue";
											ArrayMorning[index].style.backgroundColor="blue";
											ArrayMidday[index].style.backgroundColor="blue";
											ArrayAfternoon[index].style.backgroundColor="blue";
											ArrayNightAndMorning[index].style.backgroundColor="blue";
											ArrayWholeJourney[index].style.backgroundColor="blue";
											ArrayNight[index].style.backgroundColor="blue";
										}
									})
								})

                                let wholeday=document.getElementById('wholeday');
                                wholeday.addEventListener('click',()=>{
                                    var whole=document.querySelectorAll('.whole');
                                    var arrayWholeDay=Array.from(whole);
                                    //console.log(arrayWholeDay);
                                    if(wholeday.style.backgroundColor=="blue"){
                                        wholeday.style.backgroundColor="white";
                                        arrayWholeDay.forEach((current)=>{
                                            current.style.backgroundColor="white";
                                        })
                                    }else{
                                        wholeday.style.backgroundColor="blue";
                                        arrayWholeDay.forEach((current)=>{
                                            current.style.backgroundColor="blue";
                                        })
                                    }
                                })

                                let wholeAll=document.getElementById("wholeAll");

                                wholeAll.addEventListener('click',()=>{
                                    var everyday=document.querySelectorAll('.all');
                                    var ArrayEveryDay=Array.from(everyday);
                                    if(wholeAll.style.backgroundColor=="blue"){
                                        wholeAll.style.backgroundColor="white"
                                        ArrayEveryDay.forEach((curr)=>{
                                            curr.style.backgroundColor="white";
                                        })
                                    }else{
                                        wholeAll.style.backgroundColor="blue";
                                        ArrayEveryDay.forEach((curr)=>{
                                            curr.style.backgroundColor="blue";
                                        })
                                    }
                                })
                                var Injourney=document.querySelectorAll('.inJourney');

                                var ArrayInjourneys=Array.from(Injourney);

                                Injourney.forEach((item)=>{
                                    item.addEventListener('click',()=>{
                                        console.log('bonjour')
                                        if(item.style.backgroundColor=="blue"){
                                            item.style.backgroundColor="white";
                                        }else{
                                            item.style.backgroundColor="blue"
                                        }
                                    })

                                })



                  let items = document.getElementsByTagName('td');
                  let dataTimes = document.getElementById('dataTimes');

                  const betterItems = [...items];

                  betterItems.forEach(function(item){
                    if(item.style.backgroundColor=="blue")
                     dataTimes.value += " "+ item.getAttribute('data-time');
                    console.log(dataTimes.value);
                  });

                  console.log(dataTimes.value);
                  console.log(items);
                  console.log("level");




					//checking if at least one checkbox if checked



					   //console.log(item.getAttribute('data-time'));









