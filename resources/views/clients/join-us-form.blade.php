@extends('layouts.master')
@section('title', __('Formulaire - Nous Rejoindre'))


@section('content')

<style>
.invalid {
 border: 2px solid red;
}
</style>



        <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
        <header>
            <div class="page-header min-vh-85">
            <div>
                <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0"
                src="{{ asset('third/assets/img/curved-images/curved8.jpg') }}" alt="image">
            </div>
            <div class="container">
                <div class="row">
                    @if (session('update_success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: white">
                          <strong>Super !</strong> votre demande a été envoyé avec succès.
                          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                
                @if (session('update_failure'))
                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif
          
                @if ($errors->any())
                  <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color: white">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                    <div class="col-lg-7 d-flex justify-content-center flex-column">
                        <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                        <div class="text-center">
                            <h2 class="text-gradient text-primary" style="font-size:28px;">Je postule chez Youdom - CARE</h2>
                            
                        </div>
              <form id="join-us-form" method="post" action="{{ route('join.store') }}" autocomplete="on" enctype="multipart/form-data">
                           @csrf
                            <div class="card-body pb-2">
                              
								<div class="tab">
									<div class="form-group mb-0 mt-md-0 mt-4">
										<label class="form-check-label" style="color:#1b138a; font-size:18px;">
											  Sélectionnez le poste auquel vous souhaiter postuler
										</label>
										<select name="job"  class="form-control" required style="">
											  <option value="" disabled selected>
												Sélectionner dans la liste
											</option>
                                            <optgroup label="Les metiers pour la famille et les personnes fragiles">

                                                <option value="Auxiliaire de vie sociale (AVS)">
                                                   Auxiliaire de vie sociale (AVS)
                                                </option>
                                                <option value="Aide médico-psychologique (AMP)">
                                                  	Aide médico-psychologique (AMP)
                                                </option>
                                                <option value="Technicien de l’intervention sociale et familiale (TISF)">
                                                  Technicien de l’intervention sociale et familiale (TISF)
                                                </option>
                                                <option value="Aide-ménagère">
                                                  Aide-ménagère
                                                </option>
                                                <option value="Aide-soignante">Aide-soignante</option>
                                                <option value="Autre">Autre</option>
                                            </optgroup>
                                            <optgroup label="Les métiers de la vie quotidienne">

                                                <option value="Agent d’entretien de petits travaux et de jardins">
                                                   Agent d’entretien de petits travaux et de jardins
                                                </option>
                                                <option value="Agent de surveillance du domicile">
                                                  Agent de surveillance du domicile
                                                </option>
                                                <option value="Assistant administrative à domicile">
                                                  Assistant administrative à domicile
                                                </option>
                                                <option value="Assistant informatique et internet à domicile">
                                                  Assistant informatique et internet à domicile
                                                </option>
                                                <option value="Cuisinier à domicile">Cuisinier à domicile</option>
                                                <option value="Employé familial">Employé familial</option>
                                                <option value="Employé de ménage à domicile">Employé de ménage à domicile</option>
                                                <option value="Diététicien(e) à domicile">Diététicien(e) à domicile</option>
                                                <option value="Chauffeur accompagnateur">Chauffeur accompagnateur</option>
                                            </optgroup>
                                            <optgroup label=" Bureaux & managements">

                                                <option value="Responsables de secteur">
                                                  Responsables de secteur
                                                </option>
                                                <option value="Assistance responsable secteur">
                                                  Assistance responsable secteur
                                                </option>
                                                <option value="Responsable d’agence">
                                                  Responsable d’agence
                                                </option>
                                                <option value="Chargé de recrutemente">
                                                  Chargé de recrutemente
                                                </option>
                                                <option value="Chargé de formation">
                                                  Chargé de formation
                                                </option>
                                                <option value="Chargé de clientèle">
                                                  Chargé de clientèle
                                                </option>
                                            </optgroup>

                                            <optgroup label="Direction et d'encadrement">

                                                <option value="Directeur de structure">
                                                  Directeur de structure
                                                </option>
                                                <option value="Responsable de secteur">
                                                  Responsable de secteur
                                                </option>
                                                <option value="Directeur d’agence">
                                                  Directeur d’agence
                                                </option>
                                                <option value="RH">
                                                  RH
                                                </option>
                                                <option value="Juridique">
                                                  Juridique
                                                </option>
                                                <option value="Chargé de communication">Chargé de communication</option>
                                                <option value="Publicité et développement">Publicité et développement</option>
                                                <option value="Communication">Communication</option>
                                            </optgroup>
										</select>

									</div>
									<br>
									<div class="form-group mb-0 mt-md-0 mt-4">
											<label class="form-check-label" style="color:#1b138a; font-size:18px;">
											  À partir de quand êtes-vous disponible ?
											  </label>
										<select name="available" class="form-control form-select" aria-label="Default select example" id="job" required>
												<option value="" disabled selected>
												  Sélectionner dans la liste
											  </option>


											  <option value="Immédiatement">
												Immédiatement
											  </option>

											  <option value="Dans 1 mois">
												Dans 1 mois
											  </option>

											  <option value="Dans 2 mois">
												Dans 2 mois
											  </option>

											  <option value="Dans 3 mois">
												Dans 3 mois
											  </option>

										</select>

									</div>
									<br>
									 <div class="text-center" >
										<h2 class="text-gradient text-primary" style="font-size:22px;">Je postule dans des agences *</h2>
									</div>
									<br>
                  <div class="row">
                      <div class="col-3">
                         <label for="radius" style="color: #1b138a">À moins de</label> 
                      </div>
                      <div class="col-9">
                        <select id="agenciesRadius" name="radius" class="form-control" class="selectmenu" required>
                          <option value="">Distance *</option><option value="5">5 km</option><option value="10">10 km</option><option value="20">20 km</option><option value="30" selected="selected">30 km</option> </select> 
                      </div>
                     
                  </div>
                  <br>
                  <div class="row">
                      
                      <div class="col-3">
                           <label for="radius" style="color: #1b138a">À partir de</label> 
                      </div>
                      <div class="col-9">
                           <input type="text" id="agenciesAddress" class="form-control" name="address" placeholder="Votre ville (Saisir les premières lettres) *" autocomplete="off" />
                      </div>
                  </div>
									<br>
								</div>
								
								<div class="tab">
									  <div class="form-group mb-0 mt-md-0 mt-4">
															<label class="form-check-label" style="color:#1b138a; font-size:18px;">
										  Sélectionner votre diplôme
										  </label>
															<select name="diploma" class="form-control form-select" aria-label="Default select example" id="job">
											<option value="">
											  Sélectionner dans la liste
										  </option>

                       <optgroup label="Directeur de structure">

                                                <option value="Certificat d'aptitude aux fonctions d'encadrement et de responsable d'unité d'intervention sociale (CAFERUIS)">
                                                   Certificat d'aptitude aux fonctions d'encadrement et de responsable d'unité d'intervention sociale (CAFERUIS)
                                                </option>
                                                <option value="Licence professionnelle Intervention sociale spécialité Coordonnateur secteur gérontologique">
                                                  	Licence professionnelle Intervention sociale spécialité Coordonnateur secteur gérontologique
                                                </option>
                                                <option value="Responsable d'entreprise d'économie sociale et solidaire">
                                                  Responsable d'entreprise d'économie sociale et solidaire
                                                </option>
                                                <option value="Certificat d'aptitude aux fonctions de direction d'établissement ou de services d'intervention sociale (CAFDES)">
                                                  Certificat d'aptitude aux fonctions de direction d'établissement ou de services d'intervention sociale (CAFDES)
                                                </option>
                                                <option value="Directeur des établissements sanitaires et sociaux (GESS)">
                                                  Directeur des établissements sanitaires et sociaux (GESS)</option>
                                                <option value="Responsable dirigeant de l'intervention sociale et services à la personne (DISAP)">
                                                  Responsable dirigeant de l'intervention sociale et services à la personne (DISAP)</option>
                                                <option value="Directeur d'établissement de l'intervention sociale">
                                                  Directeur d'établissement de l'intervention sociale</option>
                                                <option value="Gestionnaire d'établissements médicaux et médico-sociaux">
                                                  Gestionnaire d'établissements médicaux et médico-sociaux</option>
                                                <option value="Diplôme d'État d'ingénierie sociale (DEIS)">
                                                  Diplôme d'État d'ingénierie sociale (DEIS)</option>
                        </optgroup>

                       <optgroup label="Responsable de secteur">

                                                <option value="BTS Services et prestation en secteur sanitaire et social (BTS SP3S)">
                                                   BTS Services et prestation en secteur sanitaire et social (BTS SP3S)
                                                </option>
                                                <option value="BTS économie sociale familiale (BTS ESF)">
                                                  	BTS économie sociale familiale (BTS ESF)
                                                </option>
                                                <option value="Diplôme d’Etat de l’intervention sociale et familiale (DE TISF)">
                                                  Diplôme d’Etat de l’intervention sociale et familiale (DE TISF)
                                                </option>
                                                <option value="DUT carrières sociales Assistance sociale">
                                                  DUT carrières sociales Assistance sociale
                                                </option>
                                                <option value="Diplôme d'État d'éducateur spécialisé (DEES)">
                                                  Diplôme d'État d'éducateur spécialisé (DEES)</option>
                                                <option value="Diplôme d'État d'assistant de service social (DEASS)">
                                                  Diplôme d'État d'assistant de service social (DEASS)</option>
                                                <option value="Licence professionnelle Santé spécialité Cadres fonctionnels des établissements sociaux et médico-sociaux">
                                                  Licence professionnelle Santé spécialité Cadres fonctionnels des établissements sociaux et médico-sociaux</option>
                                               
                        </optgroup>

                       <optgroup label="Assistant au responsable de secteur">

                                                <option value="BTS Services et prestation en secteur sanitaire et social (BTS SP3S)">
                                                   BTS Services et prestation en secteur sanitaire et social (BTS SP3S)
                                                </option>
                                                <option value="BTS économie sociale familiale (BTS ESF)">
                                                  	BTS économie sociale familiale (BTS ESF)
                                                </option>
                                                <option value="Diplôme d’Etat de l’intervention sociale et familiale (DE TISF)">
                                                  Diplôme d’Etat de l’intervention sociale et familiale (DE TISF)
                                                </option>
                                                <option value="BTS Économie sociale et familiale (ESF)">
                                                  BTS Économie sociale et familiale (ESF)
                                                </option>
                                                <option value="Diplôme d’État de conseiller en économie sociale familiale (DECSF)">
                                                  Diplôme d’État de conseiller en économie sociale familiale (DECSF)</option>
                                                <option value="Diplôme d'État d'éducateur technique spécialisé (DEETS)">
                                                  Diplôme d'État d'éducateur technique spécialisé (DEETS)</option>
                        </optgroup>

                        <optgroup label="AUXILIAIRE DE VIE SOCIALE (AVS)">

                                                <option value="Diplôme d’État accompagnement éducatif et social (DE AES)">
                                                   Diplôme d’État accompagnement éducatif et social (DE AES)
                                                </option>
                                                <option value="Titre professionnel Assistant(e) de vie aux familles ( TP ADVF)">
                                                  	BTS économie sociale familiale (BTS ESF)
                                                </option>
                                                <option value="Mention complémentaire Aide à domicile (MC AD)">
                                                  Mention complémentaire Aide à domicile (MC AD)
                                                </option>
                                                <option value="CAP Agricole services aux personnes et vente en milieu rural (CAPa SAPVER)">
                                                  CAP Agricole services aux personnes et vente en milieu rural (CAPa SAPVER)
                                                </option>
                                                <option value="Baccalauréat professionnel Accompagnement, soins et services à la personne - option A : à domicile (Bac Pro ASSP)">
                                                  Baccalauréat professionnel Accompagnement, soins et services à la personne - option A : à domicile (Bac Pro ASSP)</option>
                                               
                                                 
                                                <option value="Auxiliaire de gérontologie">
                                                   Auxiliaire de gérontologie</option>
                                                
                                               <option value="Assistant(e) de vie dépendance">
                                                  Assistant(e) de vie dépendance</option>
                                               
                                                  <option value="Diplôme d'État Auxiliaire de vie sociale (DEAVS) uniquement par la VAE">
                                                  Diplôme d'État Auxiliaire de vie sociale (DEAVS) uniquement par la VAE</option>
                        </optgroup>

									

															</select>

										</div>
									  <br>
                    <div class="form-group mb-0 mt-md-0 mt-4">
															<label class="form-check-label" style="color:#1b138a; font-size:18px;">
                        Combien d'années d'expérience professionnelle avez-vous ?*
                        </label>

                      <input class="form-control" type="number" id="formFile" name="year_of_experience" required>
										</div>
                    <br>
									  <div class="form-group mb-0 mt-md-0 mt-4">
															<label class="form-check-label" style="color:#1b138a; font-size:18px;">
                        Charger votre CV
                        </label>

                      <input class="form-control" type="file" id="formFile" name="cv">
										</div>

					<br>
                    <div class="form-group mb-0 mt-md-0 mt-4">
															<label class="form-check-label" style="color:#1b138a; font-size:18px;">
                        Charger votre diplôme
                        </label>

                      <input class="form-control" type="file" id="formFile" name="diploma_file">
										</div>
									  <br>
								</div>
								
								<div class="tab">
								  <div class="row">
									<div class="form-group mb-0 mt-md-0 mt-4">
											<label class="form-check-label" style="color:#1b138a; font-size:18px;">
											  Civilité
											  </label>
										<select name="civilite" class="form-control form-select" aria-label="Default select example" required>
												


											  <option value="Monsieur">
												Monsieur
											  </option>

											  <option value="Madame">
												Madame
											  </option>

										</select>

									</div>
									</div>
									<br>
									<div class="row">

										<div class="col-md-6">
										<div class="input-group mb-4">
										  <input class="form-control" placeholder="Nom" name="name" aria-label="Full Name" type="text" autofocus>
										</div>
										</div>
										<div class="col-md-6 ps-md-2">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="Prénom" name="username">
										</div>
										</div>

									  </div>

									  <div class="row">

										<div class="col-md-6">
										<div class="input-group mb-4">
										  <input class="form-control" placeholder="Téléphone" aria-label="Full Name" type="number" name="phone_number">
										</div>
										</div>
										<div class="col-md-6 ps-md-2">
										<div class="input-group">
										  <input type="email" class="form-control" placeholder="Email" name="email">
										</div>
										</div>
									  </div>

									  <div class="row">

										<div class="col-md-6">
										<div class="input-group mb-4">
										  <input class="form-control" placeholder="Code postal" aria-label="Full Name"  name="postal_code" id="searchI">
										</div>
										<ul class="list-group" id="result"></ul>

										</div>
										<div class="col-md-6 ps-md-2">
										<div class="input-group">
										  <input type="text" class="form-control" placeholder="ville" name="town" id="town">
										</div>
										</div>

									  </div>
									  <div class="form-group mb-0 mt-md-0 mt-4">
										<textarea name="informations" required class="form-control" id="message" rows="6" placeholder="Décrivez-vous en au moins 250 caractères" ></textarea>
									  </div>
								</div>


							

								<!-- unchange blocks for buttons -->
								<div class="row">
									<div class="col-md-12 text-center">
										<button type="button" class="btn bg-gradient-primary mt-3 mb-0" id="prevBtn" onclick="nextPrev(-1)">Précedant</button>
										<button type="button" style="background-color:#1b138a" class="btn bg-gradient-primary mt-3 mb-0" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
									</div>
								</div>
								<!-- Circles which indicates the steps of the form: -->
								  <div style="text-align:center;margin-top:40px;">
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
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
          console.log(n);
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
          console.log(currentTab);
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            console.log("submiting form");
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
          z = x[currentTab].getElementsByTagName("select");

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

           // A loop that checks every input field in the current tab:
          for (i = 0; i < z.length; i++) {
            // If a field is empty...
            if (z[i].value == "") {
              // add an "invalid" class to the field:
              z[i].style.borderColor = 'red';
              z[i].style.borderWidth = '2px solid';
              console.log("in z loop");
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
