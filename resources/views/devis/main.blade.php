
@extends('layouts.master')
@section('title', __('Demande de devis - Youdom Care'))

<link rel="stylesheet" href="{{ asset('assets/css/autocomplete.css') }}">
@section('content')
<style>

    .color-text{
        color: #30005B;
    }
    .color-orange{
        color:#D9644A;
    }
    .input-size{
      width:335px; 
      height:45px
    }



</style>
<main class="relative" x-data="Main">

        <nav class="fixed top-0 left-0 w-full z-40" id="navigation">





</nav>
  <input id="navigation-bg-color" type="hidden" value="primary">
    <input id="disable-scroll-impact" type="hidden" value="disable">

    <div class="row w-full md:w-1/2 mx-auto py-4">

        @if (session('update_success'))
         <div class="alert alert-success alert-dismissible show" role="alert" style="color: white">
          <strong>Super !</strong> votre demande a été envoyé avec succès.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session('update_failure'))
        <div class="alert alert-danger alert-dismissible show"  role="alert" style="color: white">
          <strong>Désolé</strong> {{ session('update_failure') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
     
      @if ($errors->any())

        <div class="alert alert-danger alert-dismissible show" role="alert">
          <ul>
            @foreach ($errors->all() as $error)
                <li style="color: white">{{ $error }}</li>
            @endforeach
        </ul>
         
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
        </div>
      @endif
    </div>

    <section class="py-8 md:py-20">
        
        <div class="max-w-7xl px-4 mx-auto flex w-full flex-wrap">   
            
            <div class="w-full md:w-2/5 md:pr-20">
                <h1 class="main-title  md:text-left  text-3xl xl:text-4xl font-bold text-indigo-800" style="line-height: 1.3"> 
                  Contactez-nous pour une demande de devis personnalisé
					<div class="w-48  border-b-4 mx-auto md:mx-0 border-yellow-500 mt-4"></div>
				</h1>
                <h3 class="mt-4 mx-auto text-lg text-gray-700" >
                  Complétez ce formulaire et un conseiller vous rappelle immédiatement pour étudier ensemble votre besoin
                </h3>
                <h2 class="text-yellow-500 font-bold mt-4 text-2xl md:text-4xl color-orange" style="font-size:25px;"> 
                  Youdom-Care vous accompagne et accompagne vos proche</h2>

                  <h3 class="mt-4 mx-auto text-lg text-gray-700" >

                    Vous ou l’un de vos proches rencontrez des difficultés pour accomplir les gestes et les tâches du quotidien? Chez Youdom Care, nous faisons bien plus que du simple maintien à domicile. Nos auxiliaires de vie sont formés afin d’accompagner les personnes âgées qui en ressentent le besoin.

                  </h3>
                    <ul class="mt-4 space-y-4">

                         <li class="flex items-center space-x-2">
                             <i class="fas fa-phone text-sm"></i>
                            <span class="font-bold  text-indigo-900">
                                +33 6.87.26.38.65
                            </span>
                        </li>
                                                <li class="flex items-center space-x-2">
                           <i class="fas fa-envelope text-sm"></i>
                            <span class="font-bold  text-indigo-900">
                                contact@youdom-care.com
                            </span>
                        </li>
                  </ul>
                       <div class="mt-4">
                    <button type="button" class="btn btn-icon-only btn-link color-text btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                      <i class="fab fa-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link color-text btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                      <i class="fab fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link color-text btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                      <i class="fab fa-dribbble"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link color-text btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
            </div>
            
            <div class="w-full md:w-3/5 mx-auto relative" x-data="Contact">
                <img src="{{ asset('_next/static/media/blob1.svg') }}" class=" md:block text-yellow-300 absolute z-0 top-[-200px] left-[-150px]">
                
				<div class="p-4 md:p-12 shadow-xl relative bg-white rounded-lg">
                   
				<form  method="post"  action="{{ route('devis.send') }}">
					@csrf
                    <div x-show="!display.contactSuccess">
					
						<div class="flex flex-wrap md:flex-nowrap md:space-x-2">
										 <div class="col-md-12 pe-2 mb-3">
							 <div class="d-flex justify-content-center">
								<span class="  md:text-left  text-2xl  font-bold text-indigo-800"> Un conseiller vous contactera sous 24h </span>  
							 </div>

							 <div class="flex flex-wrap md:flex-nowrap md:space-x-2">

							  <div class="row" style="margin-bottom: 10px;">
								  <div class="col-md-12">
									  <div class="mt-4">
										<select name="for_who" id="" class="mt-4 block w-full border 
										border-gray-300  px-4 py-2 rounded-md " required style="width: 170%;">
										  <option value="">Vous recherchez une auxiliaire de vie pour *</option>
										  <option value="vous même">Pour vous-même</option>
										  <option value="un proche">Pour un proche</option>
										</select>
										
									  </div>
								  </div>
							  </div>

											<fieldset>
												<legend class="  md:text-left  text-2xl  font-bold text-indigo-800" style="font-size: 15px;">
								QUELS SONT VOS BESOINS ?  *:</legend>
												 <div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" 
                          value="Aide au lever">
													<label for="music" style="color: black">Aide au lever</label>
												  </div>
												<div class="col-md-4 pe-2 mb-3 form-check">
												  <input type="checkbox" class="form-check-input" id="music" name="type[]" value="Aide au coucher">
												  <label for="music" style="color: black">Aide au coucher</label>
												</div>
												<div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Aide à la toilette">
													<label for="music" style="color: black">Aide à la toilette</label>
												  </div>
												  <div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Aide aux repas">
													<label for="music" style="color: black">Aide aux repas</label>
												  </div>
												 <div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Aide aux courses">
													<label for="music" style="color: black">Aide aux courses</label>
												  </div>
								<div class="col-md-4 pe-2 mb-3 form-check">
												  <input type="checkbox" class="form-check-input" id="type" name="type[]" value="Aide-ménagère">
												  <label for="coding" style="color: black; white-space:nowrap;">Aide-ménagère</label>
												</div>
							  <div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" 
                          value="Entretien du linge ">
													<label for="music" style="color: black">Entretien du linge </label>
												  </div>
												<div class="col-md-4 pe-2 mb-3 form-check">
												  <input type="checkbox" class="form-check-input" id="music" name="type[]" value="Repassage linge">
												  <label for="music" style="color: black">Repassage linge</label>
												</div>
												<div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Aide à la mobilité">
													<label for="music" style="color: black">Aide à la mobilité</label>
												  </div>
												  <div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Aide au transport">
													<label for="music" style="color: black">Aide au transport</label>
												  </div>
												 <div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Accompagnement">
													<label for="music" style="color: black">Accompagnement</label>
												  </div>
								<div class="col-md-4 pe-2 mb-3 form-check">
												  <input type="checkbox" class="form-check-input" id="type" name="type[]" value="Promenades et loisirs">
												  <label for="coding" style="color: black; white-space:nowrap;">Promenades/loisirs</label>
												</div>
							  <div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Garde de jour">
													<label for="music" style="color: black">Garde de jour</label>
												  </div>
												<div class="col-md-4 pe-2 mb-3 form-check">
												  <input type="checkbox" class="form-check-input" id="music" name="type[]" value="Garde de nuit">
												  <label for="music" style="color: black">Garde de nuit</label>
												</div>
												<div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Garde 24/24">
													<label for="music" style="color: black">Garde 24/24</label>
												  </div>
												  <div class="col-md-4 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Aide administrative">
													<label for="music" style="color: black">Aide administrative</label>
												  </div>
												 <div class="col-md-8 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" id="music" name="type[]" value="Retour d’hospitalisation">
													<label for="music" style="color: black">Retour d’hospitalisation</label>
												  </div>
												  
											  </fieldset>
							  
										  </div>
									<div class="flex flex-wrap md:flex-nowrap " style="margin-left:2px">
						  <div class="row" style="margin-bottom: 10px;">
							<div class="col-md-12">
								<div class="mt-4">
								  <select name="start_time" id="" class="mt-4 block w-full border 
								  border-gray-300  px-4 py-2 rounded-md " required style="width: 140%;">
									<option value="">Dans quel délai souhaitez-vous une aide à domicile ? *</option>
									<option value="Immédiatement">Immédiatement</option>
									<option value="sous un mois">Sous un mois</option>
									<option value="sous 2 mois">Sous 2 mois</option>
									<option value="sous un mois">sous 3 mois</option>
								  </select>
								  
								</div>
							</div>
						</div>
						<legend class="  md:text-left  text-2xl  font-bold text-indigo-800" style="font-size: 15px;">
						  VOS INFORMATIONS PERSONNELLES 
						</legend>
					<div class="row">
                      <div class="col-md-12 pe-2 mb-3">

                        <label class="  md:text-left  text-2xl  font-bold text-indigo-800" style="font-size: 15px;">
                          Civilité *</label>
                        <br>
                        <input type="radio" class="btn-check"   name="civility" id="option2" 
                        value="Mr" checked autocomplete="off">
                        <label class="btn btn-primary" style="background-color:#30005B" for="option2">Monsieur</label>

                        <input type="radio" class="btn-check" name="civility" id="option4" value="Mme" autocomplete="off">
                        <label class="btn btn-primary" style="background-color:#30005B" for="option4">Madame</label>
                      </div>
											<div class="col-md-6">
												<div class="w-full mt-4">				   
													<input type="text" name="lastname" value="{{ old('lastname') }}" 
								class="mt-2 block w-full border border-gray-300  px-4  rounded-md input-size" 
								placeholder="Nom" required>
																   
												</div>
											</div>

											<div class="col-md-6">
												<div class="w-full mt-4">
													<input type="text" name="firstname" value="{{ old('firstname') }}"  
								class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md input-size" 
																	placeholder="Prénom"  required>
																	
												</div>
											</div>

					</div>
									</div>
									   
									</div>                        
								   
							</div> 	   
									<div class="flex flex-wrap md:flex-nowrap md:space-x-2">

										<div class="row">
										   <div class="col-md-6">
													 <div class="w-full mt-4">
												<input type="email" name="email" class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md input-size" value="{{ old('email') }}"
												placeholder="Adresse email" required >
													</div>
											</div>

											<div class="col-md-6">
													 <div class="w-full mt-4">
													   
														<input type="tel" name="phone" placeholder="Numero de téléphone" class="mt-2 block w-full border border-gray-300  
														px-4 py-2 rounded-md input-size" value="{{ old('phone') }}" required>
														
													</div>
											</div>

										</div>

										
									   
									</div>
									
						<div class="flex flex-wrap md:flex-nowrap md:space-x-2">

						  <div class="row">
								<div class="col-md-12">
									<div class="mt-4">
										<input type="text" name="postal_code" id="postal_code" class="mt-4 block w-full 
										border border-gray-300  px-4 py-2 rounded-md "  size="100px"
														  placeholder="Code postal" value="{{ old('postal_code') }}" required>
									</div>
								</div>

						  </div>

						  <div class="flex flex-wrap md:flex-nowrap md:space-x-2">
							<div class="row">
								<div class="col-md-12">
													<div class="mt-4">
														<input type="text" name="town" 
														id="town" class="mt-4 block w-full 
										border border-gray-300  px-4 py-2 rounded-md "  size="100px"
														placeholder="ville" value="{{ old('town') }}" required>
													</div>
								</div>
							</div>

					  </div>

										
									   
						</div>
								
									
						  <div class="row">

							<div class="col-md-12">
								
							  <textarea name="comments" class="mt-4 block w-full border-gray-300 px-4 py-2 rounded-md"  
							   rows="4" 
							  cols="4" required style="color: #30005B"> {{ old('comments') }}
							  </textarea>
							</div>
              <br>

              <div class="d-flex justify-content-start" style="margin: 15px 0 15px 0;">
                <span style="font-size:16px">Je souhaite recevoir des communications <br> sur les offres du réseau youdom-care</span>     
             
                <fieldset style="margin-left: 20px;">
                 
  
                      <div class="{{ $errors->has('news') ? ' has-danger' : '' }}">
                         
                          <input
                                  class="form-check-input{{ $errors->has('news') ? ' is-invalid' : '' }}"
                                  type="radio" name="news" id="news" value="1" checked>
                              <label class="form-check-label" for="news" style="color:#30005B;">
                                  {{ __('Oui') }}
                              </label>

                              <input
                              class="form-check-input{{ $errors->has('news') ? ' is-invalid' : '' }}"
                              type="radio" name="news" id="news" value="0">
                          <label class="form-check-label" for="news" style="color:#30005B;">
                              {{ __('Non') }}
                          </label>
                      </div>
  
              </fieldset>
            </div>
            
            <div class="d-flex justify-content-start">
               
              <span style="font-size:16px; margin-right:15px;">J'accepte les Conditions Générales d'Utilisation</span>     
              <input type="checkbox" class="form-check-input" name="accept_cgu" required>
            </div>
			
			<div class="d-flex justify-content-start" style="margin-top: 10px;">
									
										
				<span style="color:#374151; font-size:14px; font-family: Montserrat, 
									sans-serif;">  
										Youdom-care vous informe que vos données seront traitées afin de 
										répondre à votre demande de devis et vous envoyer des offres liées à 
										celle-ci. Conformément à la loi « Informatique et libertés » 
										du 6 janvier 1978 modifiée, vous bénéficiez d’un droit d’accès, 
										rectification, suppression, portabilité et limitation du traitement vous 
										concernant. Pour de plus amples informations et exercer vos droits, 
										vous pouvez contacter notre DPO à l’adresse 
										<a href="mailto:dpo@youdom-care.com" class="color-orange">
											 dpo@youdom-care.com
										</a>
											  ou <a class="color-orange" href="{{ route('confidentialite') }}">
												consulter notre politique de confidentialité
											</a> .
											
									 </span> 
									
									
								  </div>
										
						  </div>
									<div class="mt-3 text-gray-700 font-semibold">
										<button x-on:click="submitContact" class="px-8 py-3 text-lg bg-yellow-500 font-bold text-white rounded-full" style="background-color: #30005B"> Envoyer </button>
									</div>
						  
					</div>
				</form>					
               
            </div>
        </div>
    </section>

        
        

    </main>

    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
	<script>
		var codes = @json($codes_array);

		autocomplete(document.getElementById("postal_code"), codes);
		
	
	</script>
@endsection
