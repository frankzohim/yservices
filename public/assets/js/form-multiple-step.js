

					document.querySelectorAll('.allDays').forEach((item,index,items)=>{
                        let parel =item.parentElement;


                            item.addEventListener('click',()=>{
                                //console.log(item.getAttribute('data-time'));
                                //let parent = item.parentElement;
                                //console.log(parent);



                                if(item.style.backgroundColor == 'blue')


                                          item.style.backgroundColor = 'white';


                                else

                                item.style.backgroundColor = 'blue'


                                console.log('djjj')
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

									curr.addEventListener('click',()=>{
						  //initialize document

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

				  var currentTab = 0; // Current tab is set to be the first tab (0)
				  showTab(currentTab); // Display the current tab

				  function showTab(n) {

					// This function will display the specified tab of the form...
					var x = document.getElementsByClassName("tab");
					x[n].style.display = "block";
					//... and fix the Previous/Next buttons:
					if (n == 0) {
					  document.getElementById("prevBtn").style.display = "none";
					} else {
					  document.getElementById("prevBtn").style.display = "inline";
					}
					if (n == (x.length - 1)) {
					  document.getElementById("nextBtn").innerHTML = "Valider ma demande";
					} else {
					  document.getElementById("nextBtn").innerHTML = "Suivant";
					}
					//... and run a function that will display the correct step indicator:
					fixStepIndicator(n)
				  }

				  function nextPrev(n) {

                    var isChecked=document.querySelectorAll('.chkbox');
                    var isCheckedArray=Array.from(isChecked);

                    isCheckedArray.forEach((curr)=>{
                        if(curr.checked==true){

                        }else{
                            //alert("la case n'a pas ete coché")
                        }
                    })

				  // This function will figure out which tab to display
				  var x = document.getElementsByClassName("tab");
				  // Exit the function if any field in the current tab is invalid:
				  if (n == 1 && !validateForm()) return false;
				  // Hide the current tab:
				  x[currentTab].style.display = "none";
				  // Increase or decrease the current tab by 1:
				  currentTab = currentTab + n;
				  // if you have reached the end of the form...

				  if (currentTab >= x.length) {
					// ... the form gets submitted:
					document.getElementById("regForm").submit();

					return false;
				  }
				  // Otherwise, display the correct tab:
				  showTab(currentTab);
          }

				  function validateForm() {

					let dataTimes;
					//checking if at least one checkbox if checked
					if(currentTab == 0){
					   const form = document.querySelector('#regForm');
					   const checkboxes = form.querySelectorAll('input[type=checkbox]');
					   const checkboxLength = checkboxes.length;
					   const firstCheckbox = checkboxLength > 0 ? checkboxes[0] : null;
					   const service = document.getElementById('serviceForm');
					   //console.log(service);
					   let getTrue = false;
					   for (let i = 0; i < checkboxLength; i++) {
								if (checkboxes[i].checked) {
									valid = true;
									getTrue = true
									break;
								}

							}

					   if(!getTrue)
						 valid = false;

					   return valid;
					}

					if(currentTab==1){
					  const items = document.getElementsByTagName('td');
					  let dataTimes = document.getElementById('dataTimes');

					  const betterItems = [...items];

					  betterItems.forEach(function(item){
						if(item.style.backgroundColor=="blue")
						 dataTimes.value += " "+ item.getAttribute('data-time');
					  });

					  console.log(dataTimes.value);
					   //console.log(item.getAttribute('data-time'));
					}




					// This function deals with validation of the form fields
					var x, y, i, valid = true;
					x = document.getElementsByClassName("tab");
					y = x[currentTab].getElementsByTagName("input");
					// A loop that checks every input field in the current tab:
					for (i = 0; i < y.length; i++) {
					  // If a field is empty...
					  if (y[i].value == "") {
						// add an "invalid" class to the field:
						y[i].className += " invalid";
						// and set the current valid status to false
						valid = false;
					  }
					}

					// If the valid status is true, mark the step as finished and valid:
					if (valid) {
					  document.getElementsByClassName("step")[currentTab].className += " finish";
					}

					return valid; // return the valid status
				  }

				  function fixStepIndicator(n) {
					// This function removes the "active" class of all steps...
					var i, x = document.getElementsByClassName("step");
					for (i = 0; i < x.length; i++) {
					  x[i].className = x[i].className.replace(" active", "");
					}
					//... and adds the "active" class on the current step:
					x[n].className += " active";
				  }
