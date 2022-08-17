@extends('layouts.master')
@section('title', __('Formulaire - Devenir Partenaire'))

@section('content')

<!-- -------- START HEADER 8 w/ card over right bg image ------- -->
  <header>
    <div class="page-header min-vh-85">
      <div>
        <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none 
        d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 
        border-bottom-end-radius-0" src="{{ asset('third/assets/img/curved-images/curved-11.jpg') }}" alt="image">
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 d-flex justify-content-center flex-column">
            <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              <div class="text-center">
                <h3 class="text-gradient text-primary">Devenir Partenaire</h3>
                <p class="mb-0">

                </p>
              </div>
              <form id="contact-form" method="post" autocomplete="off" action="{{ route('contact.store') }}">
                @csrf
                <div class="card-body pb-2">
                  <div class="row justify-content-center">
					 <h5 class="text-gradient text-primary" style="text-align: center;">A propos de vous</h5>
                   
                  </div>
				  
				   <div class="row">
						<div class="col-md-12">
						<select name="job" class="form-control form-select" aria-label="Default select example" id="job">
										<option value="">
											Vous êtes
										  </option>
										
																  
										  <option value="À la recherche d’une création de franchise">
											À la recherche d’une création de franchise
										  </option>

										  <option value="À la recherche d’une reprise ou d’un investissement">
											À la recherche d’une reprise ou d’un investissement
										  </option>

										  <option value="Dans une autre situation">
											Dans une autre situation
										  </option>

									</select>
                </div>			
					</div>
					<br>
					 <div class="row">
                               
                                <div class="col-md-12">
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="civility" id="flexRadioDefault1" value="monsieur" checked>
                                    <label class="form-check-label" for="flexRadioDefault1" style="color:#1b138a;">
                                    Monsieur
                                    </label>
                                  </div>
                                  
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="civility" value="madame" id="flexRadioDefault2">
                                    <label class="form-check-label" for="flexRadioDefault2" style="color:#1b138a;">
                                    Madame
                                    </label>
                                  </div>
											
                                    </div>
                                </div>
								<br>
					 <div class="row">
                                  
                                    <div class="col-md-6">
                                    <div class="input-group mb-4">
                                      <input class="form-control" placeholder="Nom" aria-label="Full Name" type="text" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6 ps-md-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Prénom" required>
                                    </div>
                                    </div>
                                    
                                  </div>
                                  
                                  <div class="row">
                                  
                                    <div class="col-md-6">
                                    <div class="input-group mb-4">
                                      <input class="form-control" placeholder="Téléphone" aria-label="Full Name" type="tel" required>
                                    </div>
                                    </div>
                                    <div class="col-md-6 ps-md-2">
                                    <div class="input-group">
                                      <input type="email" class="form-control" placeholder="Email" required>
                                    </div>
                                    </div>
                                    
                                  </div>
                                  
								<div class="row">
                                  
                                   <div class="col-md-12">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Adresse" required>
                                    </div>
                                    </div>
                                    
                                </div>
								  
								  <br>
								  
                                <div class="row">
                                  
                                    <div class="col-md-6">
                                    <div class="input-group mb-4">
                                      <input class="form-control" placeholder="Code postal" aria-label="Full Name" type="number">
                                    </div>
                                    </div>
                                    <div class="col-md-6 ps-md-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="ville" required>
                                    </div>
                                    </div>
                                    
                                </div>
								
								<div class="row">
                                  
                                   <div class="col-md-12">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Quelle profession exercez-vous actuellement ? " required>
                                    </div>
                                    </div>
                                    
                                </div>
					
                </div>
				
			  
            </div>
			
          </div>
		  
		<div class="col-lg-6 d-flex justify-content-center flex-column" style="margin-top:-30px">
            
			<div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
              
                
				<div class="card-body pb-2">
				
                  <div class="row justify-content-center">
					 <h5 class="text-gradient text-primary" style="text-align: center;">Comment avez vous connu Youdom CARE?</h5>
                  </div>
				  
				   <div class="row">
						<div class="col-md-12">
							<select name="job" class="form-control form-select" aria-label="Default select example" id="job">
																  
								<option value='Les Echos de la Franchise'>Les Echos de la Franchise</option>
								<option value='L’Observatoire de la Franchise'>L’Observatoire de la Franchise</option>
								<option value='Toute la Franchise'>Toute la Franchise</option>
								<option value='Google / Site Internet'>Google / Site Internet</option>
								<option value='Radio'>Radio</option><option value='Pub TV'>Pub TV</option>
								<option value='Réseaux sociaux'>Réseaux sociaux</option><option value='Salons de la franchise'>Salons de la franchise</option>
								<option value='Fédération Française de la Franchise'>Fédération Française de la Franchise</option>
								<option value='Presse spécialisée (Capital, Management, etc.)'>Presse spécialisée (Capital, Management, etc.)</option>
								<option value='Affichage'>Affichage</option>
								<option value='Autre'>Autre</option>

							</select>
						</div>			
					</div>
					
					<br>
					<div class="row justify-content-center">
					 <h5 class="text-gradient text-primary" style="text-align: center;">Votre Projet</h5>
					</div>
					
					
					<br>
					
					<div class="row">
                                  
                        <div class="col-md-12">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Dans quelle(s) villes souhaitez vous ouvrir une agence?" required>
                                    </div>
                                    </div>
                                    
                    </div>
					<br>
					<div class="row">
						<div class="col-md-12">
							<select name="job" class="form-control form-select" aria-label="Default select example" id="job">
																  
									<option value='' selected='selected' class='gf_placeholder'>Quel est votre apport personnel ? *</option>
									<option value='Je n’ai pas d’apport personnel'>Je n’ai pas d’apport personnel</option>
									<option value='Entre 10 000 et 20 000 €'>Entre 10 000 et 20 000 €</option>
									<option value='Entre 20 000 et 30 000 €'>Entre 20 000 et 30 000 €</option>
									<option value='Plus de 30 000€'>Plus de 30 000€</option>

							</select>
						</div>			
					</div>
					
					<br>
					<div class="row">
						<div class="col-md-12">
							<textarea name="message" class="form-control" id="message" rows="4" placeholder="Parlez-nous de votre projet" required></textarea>
						</div>
					</div>
					<br>
					
					<div class="row">
                        
						<div class="col-md-6">
                           Je veux recevoir les actualités du réseau de franchise			
                        </div>
						
                        <div class="col-md-6">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                                <label class="form-check-label" for="flexRadioDefault1" style="color:#1b138a;">
                                    Oui
                                </label>
                            </div>
                                  
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                                <label class="form-check-label" for="flexRadioDefault2" style="color:#1b138a;">
                                    Non
                                </label>
                            </div>
											
                        </div>
                    </div>
					<br>                             

                <div class="row">
                    <div class="col-md-12 text-center">
                      <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Envoyer</button>
                    </div>
                </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- -------- END HEADER 8 w/ card over right bg image ------- -->



    <script>
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
            document.getElementById("join-us-form").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {
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
        </script>
@endsection
