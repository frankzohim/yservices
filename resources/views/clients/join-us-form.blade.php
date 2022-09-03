@extends('layouts.master')
@section('title', __('Formulaire - Nous Rejoindre'))


@section('content')




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
                            <h3 class="text-gradient text-primary">Rejoindre Youdom - CARE</h3>
                            <p class="mb-0">
                            Pour toute autre question, y compris les opportunités de partenariat,
                            veuillez envoyer un e-mail à contact@youdom.com ou contactez-nous en utilisant notre
                            formulaire de contact
                            </p>
                        </div>
                        <form id="join-us-form" method="post" action="{{ route('join.store') }}" autocomplete="on" enctype="multipart/form-data">
                           @csrf
                            <div class="card-body pb-2">
                              <div class="tab">
                              <div class="row">
                                <div class="col-md-6">

                                <div class="input-group mb-4">
                                  Civilité
                                </div>
                                </div>
                                <div class="col-md-6 ps-md-2">
                                    <fieldset>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="civility" id="flexRadioDefault1" value="monsieur" checked>
                                            <label class="form-check-label" for="flexRadioDefault1" style="color:#1b138a;">
                                            Monsieur
                                            </label>
                                          </div>

                                          <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" name="civility" id="flexRadioDefault2" value="madame">
                                            <label class="form-check-label" for="flexRadioDefault2" style="color:#1b138a;">
                                            Madame
                                            </label>
                                          </div>
                                    </fieldset>


                                </div>
                                </div>
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

								<div class="tab">
									<div class="form-group mb-0 mt-md-0 mt-4">
										<label class="form-check-label" style="color:#1b138a; font-size:18px;">
											  Sélectionnez le poste auquel vous souhaiter postuler
											  </label>
																<select name="job" class="" aria-label="Default select example" id="job">
											  <option value="">
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
									<select name="available" class="form-control form-select" aria-label="Default select example" id="job">
											<option value="">
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


                      <option value="BTS économie sociale familiale (BTS ESF)">
                        BTS économie sociale familiale (BTS ESF)
                      </option>

                      <option value="Diplôme d’État accompagnement éducatif et social (DE AES)">
                        Diplôme d’État accompagnement éducatif et social (DE AES)
                      </option>

										</select>

									</div>
                  <br>
                  <div class="form-group mb-0 mt-md-0 mt-4">
										<label class="form-check-label" style="color:#1b138a; font-size:18px;">
                      Charger votre CV
                      </label>

                    <input class="form-control" type="file" id="formFile" name="cv">
									</div>
                  <br>
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
