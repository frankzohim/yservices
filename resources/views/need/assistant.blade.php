@extends('layouts.master')
@section('title', __('Inscription – Aide à domicile sur mesure en Europe'))
<link rel="stylesheet" href="{{ asset('assets/css/autocomplete.css') }}">
@section('content')
<style>
					.content-wrap{position:relative;padding:80px 0;overflow:hidden}
			.center{text-align:center!important}
			.heading-block{margin-bottom:50px}
.emphasis-title h1,.emphasis-title h2,.heading-block h1,.heading-block h2,.heading-block h3,.heading-block h4{margin-bottom:0;font-weight:700;text-transform:uppercase;letter-spacing:1px;color:#333}
.emphasis-title h1,.emphasis-title h2{font-weight:400;letter-spacing:0;text-transform:none}
.heading-block h1{font-size:32px}.heading-block h2{font-size:30px}.heading-block h3{font-size:28px}
.heading-block h4{font-size:20px;font-weight:700}.heading-block>span:not(.before-heading){display:block;margin-top:10px;font-weight:300;color:#777}
.heading-block .before-heading{margin-bottom:7px}.center .heading-block>span,.heading-block.center>span,.heading-block.text-center>span,.text-center .heading-block>span{max-width:700px;margin-left:auto;margin-right:auto}@media(min-width:768px){.text-md-start .heading-block>span{max-width:none!important}}.heading-block h1+span{font-size:24px}.heading-block h2+span{font-size:20px}.heading-block h3+span,.heading-block h4+span{font-size:20px}.heading-block::after{content:'';display:block;margin-top:30px;width:40px;border-top:2px solid #444}.center .heading-block::after,.heading-block.center::after,.heading-block.text-center::after,.text-center .heading-block::after{margin:30px auto 0}@media(min-width:768px){.text-md-start .heading-block::after{margin-left:0!important}}.heading-block.text-end,.heading-block.title-right,.text-end .heading-block{direction:rtl}.heading-block.border-0::after,.heading-block.border-bottom-0::after{display:none}.heading-block.border-color::after{border-color:#1abc9c}
.emphasis-title{margin:0 0 50px}
.emphasis-title h1,.emphasis-title h2{font-size:64px;letter-spacing:-2px}.emphasis-title h1 strong,.emphasis-title h2 strong{font-weight:700}
.fancy-title{position:relative;display:-ms-flexbox;display:flex;-ms-flex-align:center;align-items:center;margin-bottom:2rem}
.fancy-title h1,.fancy-title h2,.fancy-title h3,.fancy-title h4,.fancy-title h5,.fancy-title h6{position:relative;margin-bottom:0}
.fancy-title::after,.fancy-title::before{content:'';-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;max-width:100%;height:0;border-top:3px double #e5e5e5}.fancy-title::before{display:none;margin-right:.75rem}.fancy-title::after{margin-left:.75rem}.title-border::after,.title-border::before{border-top-width:1px;border-top-style:solid}.title-border-color::after,.title-border-color::before{border-top:1px solid #1abc9c!important}.title-center::before{display:block}.title-right::before{display:block}.title-right::after{display:none}.title-bottom-border::after,.title-bottom-border::before{display:none}.title-bottom-border h1,.title-bottom-border h2,.title-bottom-border h3,.title-bottom-border h4,.title-bottom-border h5,.title-bottom-border h6{width:100%;padding:0 0 .75rem;border-bottom:2px solid #1abc9c}.before-heading{display:block;margin:0 0 5px;font-size:16px;font-family:'pt serif',serif;font-style:italic;font-weight:400;color:#999}@media(max-width:767.98px){.title-block h1+span{font-size:18px}.title-block h2+span{font-size:17px}.title-block h3+span{font-size:15px}.title-block h4+span{font-size:13px}.heading-block h1{font-size:30px}.heading-block h2{font-size:26px}.heading-block h3{font-size:22px}.heading-block h4{font-size:19px}.heading-block h1+span{font-size:20px}
.heading-block h2+span{font-size:18px}
.heading-block h3+span,.heading-block h4+span{font-size:17px}
.emphasis-title h1,.emphasis-title h2{font-size:44px!important}}

.bottommargin{margin-bottom:3rem!important}
.topmargin-sm{margin-top:2rem!important}

.team,.team-image{position:relative}

.team-image:hover  {
  opacity: 0.4;
}

.team-image:hover .middle {
  opacity: 1;
}
.team-image img,.team-image>a{display:block;   margin-left: auto;
  margin-right: auto;}
.team-desc{text-align:center}
.team-desc.team-desc-bg{background-color:#fff;padding:10px 0 0px}
.team .si-share{margin-top:30px;text-align:left}
.team .si-share .social-icon{font-size:14px;width:34px}
.team-title{position:relative;padding-top:0px}
.team-title h4{display:block;margin-bottom:0;font-size:12px;text-transform:uppercase;letter-spacing:1px;font-weight:600;color:#D9644A;}
.team-title span{display:block;color:#1abc9c;font-weight:400;font-family:'pt serif',serif;font-style:italic;font-size:16px;margin-top:5px}
.team-content{margin-top:1rem;color:#777}
.team-content p:last-child{margin-bottom:0}
.team.center .team-title::after{left:50%;margin-left:-40px}
.team-list .team-desc{text-align:left}
.team-list .team-title{padding-top:0}
.team .team-desc>.social-icon{margin-top:20px}
.team .team-content~.social-icon{margin-top:30px}
.team:not(.team-list) .social-icon{display:inline-block!important;vertical-align:middle;float:none;margin-left:4px;margin-right:4px}

input[type="checkbox"][id^="cb"] {
  margin-top:-5px;
}

label {
  border: 1px solid #fff;
  display: block;
  position: relative;
  cursor: pointer;
}

label:before {
  background-color: white;
  color: white;
  content: " ";
  display: block;
  border-radius: 50%;
  border: 1px solid grey;
  position: absolute;
  top: -30px;
  left: 0px;
  width: 25px;
  height: 25px;
  text-align: center;
  line-height: 28px;
  transition-duration: 0.4s;
  transform: scale(0);
}

label img {

  transition-duration: 0.2s;
  transform-origin: 50% 50%;
}
.before-heading
:checked + label {
  border-color: #ddd;
}

/*:checked + label:before {
  content: "✓";
  background-color: green;
  transform: scale(1);
}*/

:checked + label img {
  transform: scale(1);
	opacity: 0.5;
  box-shadow: 0 0 5px #333;
  z-index: -1;
}

 .color-text{
        color: #30005B;
    }
.color-orange{
        color:#D9644A;
    }

.color-grey{
	color:#585956;
}
	</style>
	<div class="section">
		<div class="container content-wrap clearfix">
			<div class="heading-block topmargin-sm center">
			
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
			<h3><span class="text-xl md:text-5xl font-bold text-indigo-800 color-text" style="font-size:40px;"> 
				De quels services</span>
				<span class="text-yellow-500 color-orange" style="font-weight:700; font-size:40px; line-height:59.5px;"> 
					avez-vous besoin ?</span>
				
			 </h3>
			</div>
			
			<form id="regForm" method="post" autocomplete="off" action="{{ route('devis.store') }}">
					
					@csrf
					
					<div class="tab">
						<div class="heading-block topmargin-sm center">
							<div class="d-flex justify-content-center">
									<img src="{{ asset('_next/static/media/assistant/steps/step1-1.png') }}" style=" width: 30%;"/>
							</div>
							
							<h5 style="font-weight:700; font-size:30px;" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text">Sélectionnez un ou plusieurs service </h5>
						</div>
						
						<div class="row">

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb1">
											<img src="{{ asset('_next/static/media/services/70/18.png') }}" 
											alt="TOILETTE/HABILLAGE">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb1" name="services[]" 
										value="TOILETTE/HABILLAGE"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											TOILETTE/HABILLAGE
										</label>

									</div>
								</div>

							</div>

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb2">
											<img src="{{ asset('_next/static/media/services/70/9.png') }}"  
											alt="LEVER/COUCHER">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb2" name="services[]" 
										value="LEVER/COUCHER"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											LEVER/COUCHER
										</label>

									</div>									
								</div>

						   </div>

						   <div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb3">
											<img src="{{ asset('_next/static/media/services/70/5.png') }}" 
											alt="PRESENCE NUIT">
										</label>
									</div>

									
									<div class="form-check d-flex justify-content-center">
										
											<input type="checkbox" class="form-check-input" id="cb3" name="services[]" 
										value="PRESENCE NUIT"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											PRESENCE NUIT
										  </label>

									</div>
								</div>

							</div>

					</div>
					
					<div class="row">

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb4">
											<img src="{{ asset('_next/static/media/services/70/2.png') }}" 
											alt="ACCOMPAGNEMENT">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb4" name="services[]" 
										value="ACCOMPAGNEMENT"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											ACCOMPAGNEMENT
										</label>

									</div>
								</div>

							</div>

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb5">
											<img src="{{ asset('_next/static/media/services/70/10.png') }}"  
											alt="GARDE JOUR ET GARDE 24/24">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb5" name="services[]" 
										value="GARDE JOUR ET GARDE 24/24"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											GARDE JOUR ET GARDE 24/24
										</label>

									</div>

									
								</div>

						   </div>

						   <div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb6">
											<img src="{{ asset('_next/static/media/services/70/15.png') }}" 
											alt="AIDE AU REPAS">
										</label>
									</div>

									
									<div class="form-check d-flex justify-content-center">
										
											<input type="checkbox" class="form-check-input" id="cb6" name="services[]" 
										value="AIDE AU REPAS"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											AIDE AUX REPAS
										  </label>

									</div>
								</div>

							</div>

					</div>
					
					<div class="row">

							  <div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb7">
											<img src="{{ asset('_next/static/media/services/70/4.png') }}" 
											alt="AIDE À LA MOBILITÉ">
										</label>
									</div>

									
									<div class="form-check d-flex justify-content-center">
										
											<input type="checkbox" class="form-check-input" id="cb7" name="services[]" 
										value="AIDE À LA MOBILITÉ"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
												AIDE À LA MOBILITÉ
										  </label>

									</div>
								</div>

							</div>
							
							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb8">
											<img src="{{ asset('_next/static/media/services/70/19.png') }}" 
											alt="RAPPEL DE LA PRISE DE MEDICAMENTS">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb8" name="services[]" 
										value="RAPPEL DE LA PRISE DE MEDICAMENTS"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											RAPPEL DE LA PRISE DE MEDICAMENTS
										</label>

									</div>
								</div>

							</div>

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb9">
											<img src="{{ asset('_next/static/media/services/70/20.png') }}"  
											alt="COURSES/LIVRAISON">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb9" name="services[]" 
										value="COURSES/LIVRAISON"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											COURSES/LIVRAISON
										</label>

									</div>

									
								</div>

						   </div>

						 

					</div>
					
					<div class="row">

							  <div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb10">
											<img src="{{ asset('_next/static/media/services/70/16.png') }}" 
											alt="RETOUR D’HOSPITALISATION">
										</label>
									</div>

									
									<div class="form-check d-flex justify-content-center">
										
											<input type="checkbox" class="form-check-input" id="cb10" name="services[]" 
										value="RETOUR D’HOSPITALISATION"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
												RETOUR D’HOSPITALISATION
										  </label>

									</div>
								</div>

							</div>
							
							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb11">
											<img src="{{ asset('_next/static/media/services/70/14.png') }}" 
											alt="MENAGE">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb11" name="services[]" 
										value="MENAGE"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											MENAGE
										</label>

									</div>
								</div>

							</div>

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb12">
											<img src="{{ asset('_next/static/media/services/70/11.png') }}"  
											alt="LESSIVE/REPASSAGE">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb12" name="services[]" 
										value="LESSIVE/REPASSAGE"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											LESSIVE/REPASSAGE
										</label>

									</div>

									
								</div>

						   </div>

						 

					</div>
				

					<div class="row">

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb13">
											<img src="{{ asset('_next/static/media/services/70/6.png') }}" 
											alt="ENFANTS HANDICAPES OU MALADES">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb13" name="services[]" 
										value="ENFANTS HANDICAPES OU MALADES"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											ENFANTS HANDICAPES OU MALADES
										</label>

									</div>
								</div>

							</div>

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb14">
											<img src="{{ asset('_next/static/media/services/70/17.png') }}"  
											alt="TRANSPORT VEHICULE (PMR)">
										</label>
									</div>

									<div class="form-check d-flex justify-content-center">
										
										<input type="checkbox" class="form-check-input" id="cb14" name="services[]" 
										value="TRANSPORT VEHICULE (PMR)"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
											TRANSPORT VEHICULE (PMR)
										</label>

									</div>

									
								</div>

						   </div>

						   <div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										
										<label for="cb15">
											<img src="{{ asset('_next/static/media/services/70/3.png') }}" 
											alt="AIDE ADMINISTRATIVE">
										</label>
									</div>

									
									<div class="form-check d-flex justify-content-center">
										
											<input type="checkbox" class="form-check-input" id="cb15" name="services[]" 
										value="AIDE ADMINISTRATIVE"/> &nbsp;
										<label class="form-check-label font-bold color-text" for="flexCheckDefault">
												AIDE ADMINISTRATIVE
										  </label>

									</div>
								</div>

							</div>

					</div>

				</div>
				
				<div class="tab">

						<div class="heading-block topmargin-sm center">
							<div class="d-flex justify-content-center">
									<img src="{{ asset('_next/static/media/assistant/steps/step2-2.png') }}" style=" width: 30%;"/>
							</div>
							<h5 style="font-weight:700; font-size:30px;" 
							class=" text-xl md:text-5xl font-bold text-indigo-800 color-text">
							À propos du planning</h5>
						</div>

							<div class="row">

								<div class="form-group col-md-7 col-lg-7 mb-0 mt-md-0 mt-4 center" >
										<label style="font-weight:700; font-size:22px;" 
										class=" text-xl md:text-5xl font-bold text-indigo-800 color-text">
											Quand est ce que nous commençons ?
											  </label>


								</div>

								<div class="form-group col-md-5 col-lg-5 mb-0 mt-md-0 mt-4">

										<select name="start_at" class="form-control form-select" 
										aria-label="Default select example" >

											<option value="Immédiatement" > Immédiatement </option>
											<option value="Dans 1 mois" >Dans 1 mois</option>
											<option value="Dans 2 mois" >Dans 2 mois</option>
											<option value="Dans 3 mois" >Dans 3 mois</option>
											<option value="Dans plus de 3 mois" >Dans plus de 3 mois</option>

										</select>

								</div>

							</div>


						    <div class="heading-block topmargin-sm center">
								<h5 class="text-yellow-500 color-orange" style="font-weight:700; 
								font-size:30px; line-height:59.5px;"> Sélectionnez les jours et horaires qui vous conviennent le mieux</h5>
							</div>

							<table class="TimetableDesign PFTimetableDesktop">
										<thead>
										  <tr>
											<th></th>
											<th>Lundi</th>
											<th>Mardi</th>
											<th>Mercredi</th>
											<th>Jeudi</th>
											<th>Vendredi</th>
											<th>Samedi</th>
											<th>Dimanche</th>
											<th class="allDays">Tous les jours</th>
										  </tr>
										</thead>
										<tbody>
										  <tr>
											<th id="morning">Matin</th>
											<td class="inJourney everyday whole all" data-time="Lundi - Matin"></td>
											<td class="inJourney everyday whole all" data-time="Mardi - Matin"></td>
											<td class="inJourney everyday whole all" data-time="Mercredi - Matin"></td>
											<td class="inJourney everyday whole all" data-time="Jeudi - Matin"></td>
											<td class="inJourney everyday whole all" data-time="Vendredi - Matin"></td>
											<td class="inJourney everyday whole all" data-time="Samedi - Matin"></td>
											<td class="inJourney everyday whole all" data-time="Dimanche - Matin"></td>
											<td class="allDays whole all" data-time="Tout les jours-Matin"></td>
										  </tr>
										  <tr>
											<th id="midday">Midi</th>
											<td class="inJourney everyday whole all" data-time="Lundi - Midi"></td>
											<td class="inJourney everyday whole all" data-time="Mardi - Midi"></td>
											<td class="inJourney everyday whole all" data-time="Mercredi - Midi"></td>
											<td class="inJourney everyday whole all" data-time="Jeudi - Midi"></td>
											<td class="inJourney everyday whole all" data-time="Vendredi - Midi"></td>
											<td class="inJourney everyday whole all" data-time="Samedi - Midi"></td>
											<td class="inJourney everyday whole all" data-time="Dimanche - Midi"></td>
											<td class="allDays whole all" data-time="Tout les jours-Midi"></td>
										  </tr>
										  <tr>
											<th id="afternoon">Après-Midi</th>
											<td class="inJourney everyday whole all" data-time="Lundi - Après-midi"></td>
											<td class="inJourney everyday whole all" data-time="Mardi - Après-midi"></td>
											<td class="inJourney everyday whole all" data-time="Mercredi - Après-midi"></td>
											<td class="inJourney everyday whole all" data-time="Jeudi - Après-midi"></td>
											<td class="inJourney everyday whole all" data-time="Vendredi - Après-midi"></td>
											<td class="inJourney everyday whole all" data-time="Samedi - Après-midi"></td>
											<td class="inJourney everyday whole all" data-time="Dimanche - Après-midi"></td>
											<td class="allDays whole all" data-time="Tout les jours-Apres-Midi"></td>
										  </tr>
										  <tr>
											<th id="night">Soir</th>
											<td class="inJourney everyday whole all" data-time="Lundi - Soir"></td>
											<td class="inJourney everyday whole all" data-time="Mardi - Soir"></td>
											<td class="inJourney everyday whole all" data-time="Mercredi - Soir"></td>
											<td class="inJourney everyday whole all" data-time="Jeudi - Soir"></td>
											<td class="inJourney everyday whole all" data-time="Vendredi - Soir"></td>
											<td class="inJourney everyday whole all" data-time="Samedi - Soir"></td>
											<td class="inJourney everyday whole all" data-time="Dimanche - Soir"></td>
											<td class="allDays whole all" data-time="Tout les jours-Soir"></td>
										  </tr>
										  <tr>
											<th>Journée entière (8h > 20h)</th>
											<td class="allJourney everyday whole all" data-time="Lundi - Journée"></td>
											<td class="allJourney everyday whole all" data-time="Mardi - Journée"></td>
											<td class="allJourney everyday whole all" data-time="Mercredi - Journée"></td>
											<td class="allJourney everyday whole all" data-time="Jeudi - Journée"></td>
                        <td class="allJourney everyday whole all" data-time="Vendredi - Journée"></td>
                        <td class="allJourney everyday whole all" data-time="Samedi - Journée"></td>
                        <td class="allJourney everyday whole all" data-time="Dimanche - Journée"></td>
                        <td id="wholeday" class="all" data-time="Tout les jours-Journée "></td>
                      </tr>
                      <tr>
                        <th>Nuit (20h > 8h)</th>
                        <td class="night everyday all" data-time="Lundi - Nuit"></td>
                        <td class="night everyday all" data-time="Mardi - Nuit"></td>
                        <td class="night everyday all" data-time="Mercredi - Nuit"></td>
                        <td class="night everyday all" data-time="Jeudi - Nuit"></td>
                        <td class="night everyday all" data-time="Vendredi - Nuit"></td>
                        <td class="night everyday all" data-time="Samedi - Nuit"></td>
                        <td class="night everyday all" data-time="Dimanche - Nuit"></td>
                        <td class="allDays all" data-time="Tout les jours-Nuit"></td>
                      </tr>
                      <tr>
                        <th>24h/24</th>
                        <td class="allDay all" data-time="lundi-24/24"></td>
                        <td class="allDay all" data-time="mardi-24/24"></td>
                        <td class="allDay all" data-time="mercredi-24/24"></td>
                        <td class="allDay all" data-time="jeudi-24/24"></td>
                        <td class="allDay all" data-time="vendredi-24/24"></td>
                        <td class="allDay all" data-time="samedi-24/24"></td>
                        <td class="allDay all" data-time="dimanche-24/24"></td>
                        <td id="wholeAll" data-time="Tout les jours"></td>
                      </tr>
                    </tbody>
                  </table>
									<input type="hidden" name="data_times" id ="dataTimes" value="" >

				</div>
				
					<div class="tab">

						<div class="heading-block topmargin-sm center">
							<div class="d-flex justify-content-center">
									<img src="{{ asset('_next/static/media/assistant/steps/step3-3.png') }}" style=" width: 30%;"/>
							</div>
							<h5 style="color: #6105F5;font-weight:700; font-size:20px;">
								Afin d’établir votre devis, entrez vos coordonnées, nous nous engageons 
								à vous rappeler au cours des 
								deux prochaines heures (heures et jours ouvrables)</h5>
						</div>

						    <div class="row justify-content-center">

                               <div class="form-group col-md-8 col-lg-8 mb-0 mt-md-0 mt-4" >

									  Civilité

										<select name="gender" class="mt-4 block w-full border 
										border-gray-300  px-4 py-2 rounded-md " aria-label="Default select example">

											<option value="Monsieur" >Monsieur</option>
											<option value="Madame" >Madame</option>
										</select>

								</div>

                            </div>
							<br>
							<div class="row justify-content-center">
							 <div class="form-group col-md-8 col-lg-8 mb-0 mt-md-0 mt-4" >

									  A qui est destinée notre aide?

										<select name="for_who" class="mt-4 block w-full border 
										border-gray-300  px-4 py-2 rounded-md " aria-label="Default select example">

											<option value="Vous même" >Pour vous-même</option>
											<option value="Quelqu'un d'autre" >Pour quelqu’un autre ou proche</option>
										</select>

                            </div>
							 </div>
							<br>
                                <div class="row justify-content-center">

                                    <div class="col-md-4">
                                    <div class="input-group mb-4">
                                      <input class="mt-2 block w-full border border-gray-300  px-4  rounded-md"
									  placeholder="Nom" name="firstname" aria-label="Full Name" type="text" autofocus required>
                                    </div>
                                    </div>
                                    <div class="col-md-4 ps-md-2">
                                    <div class="input-group">
                                      <input type="text" class="mt-2 block w-full border border-gray-300  px-4  rounded-md"
									   placeholder="Prénom" name="lastname" required>
                                    </div>
                                    </div>

                                  </div>

                                  <div class="row justify-content-center">

                                    <div class="col-md-4">
                                    <div class="input-group mb-4">
                                      <input class="mt-2 block w-full border border-gray-300  px-4  rounded-md" 
									  placeholder="Téléphone" aria-label="Full Name" type="number" name="phone" required>
                                    </div>
                                    </div>
                                    <div class="col-md-4 ps-md-2">
                                    <div class="input-group">
                                      <input type="email" class="mt-2 block w-full border border-gray-300  px-4  rounded-md" 
									  placeholder="Email" name="email" required>
                                    </div>
                                    </div>

                                  </div>

								  <div class="row justify-content-center">
									<div class="col-md-8">
										<input type="text" name="address" class="mt-2 block w-full border border-gray-300  px-4  rounded-md"
										 id="message" rows="6" placeholder="Votre adresse">
									 </div>
                                  </div>
								  <br>

								  <div class="row justify-content-center">

                                    <div class="col-md-4">
                                    <div class="input-group mb-4">
										<input class="mt-2 block w-full border border-gray-300  px-4  rounded-md"
										placeholder="Code postal" aria-label="Full Name" type="text" id="postal_code" name="postal_code" required id="searchI" autocomplete="off">
                                    </div>
                                    </div>
                                    <div class="col-md-4 ps-md-2">
                                    <div class="input-group">
                                      <input type="text" class="mt-2 block w-full border border-gray-300  px-4  rounded-md" 
									  placeholder="Ville" name="town" id="town" required>
                                    </div>
                                    </div>

                                  </div>

								  <div class="row justify-content-center">
									<div class="col-md-8">
										<div class="input-group mb-4">
										<fieldset >
											<legend class="  md:text-left  text-2xl  font-bold text-indigo-800" style="font-size: 15px;">
												Besoin  d’un complément de garde ?</legend>
												<div class="col-md-1 pe-2 mb-3 form-check">

												</div>
												<div class="col-md-5 pe-2 mb-3 form-check">
														<input type="checkbox" class="form-check-input" 
														id="music" name="complement[]"  value="Téléassistance">
														<label for="music" style="color: black">Téléassistance</label>
												</div>
												<div class="col-md-6 pe-2 mb-3 form-check">
													<input type="checkbox" class="form-check-input" 
														id="music" name="complement[]" value="Télésurveillance personnes âgées à domicile">
													<label for="music" style="color: black">Télésurveillance personnes âgées à domicile</label>
												</div>
										</fieldset>
									    </div>
									</div>
								</div>
								  <div class="row justify-content-center">

                                    <div class="col-md-8">
                                    <div class="input-group mb-4">
										<legend class="  md:text-left  text-2xl  font-bold text-indigo-800" style="font-size: 15px;">
								Commentaires</legend>
										<textarea name="comments" class="mt-4 block w-full border-gray-300 px-4 py-2 rounded-md"  
										rows="4" placeholder="Commentaires" 
									   cols="4" required style="color: #30005B"> {{ old('comments') }}
									   </textarea>
                                    </div>
                                    <ul class="list-group" id="result"></ul>
                                    </div>


                                  </div>



								  <div class="row justify-content-center">

                                    <div class="col-md-4">
										<span style="font-size:16px">Je souhaite recevoir des communications <br> sur les offres du réseau youdom-care</span>
										
                                    </div>

									<div class="col-md-4">
										<div class="{{ $errors->has('news') ? ' has-danger' : '' }}" class="row">
											<div class="col-md-3">
												<input
												class="form-check-input"
												type="radio" name="news" id="news" value="1" checked>
											<label class="form-check-label" for="news" style="color:#30005B;">
												{{ __('Oui') }}
											</label>
											</div>
											<div class="col-md-3">
												<input
												class="form-check-input"
												type="radio" name="news" id="news" value="0">
											<label class="form-check-label" for="news" style="color:#30005B;">
												{{ __('Non') }}
											</label>
											</div>
												
												
										</div>
										
                                    </div>


                                  </div>

								  <div class="d-flex justify-content-center">
									<div class="col-md-8">
										<div class="col-md-7">
											<span style="font-size:16px; margin-left:-22px;">J'accepte les Conditions Générales d'Utilisation</span>     
										</div>

										<div class="col-md-5">
											<input type="checkbox" class="form-check-input" name="accept_cgu" 
											required>
										</div>
										

									</div>
								
								  </div>
								  <div class="d-flex justify-content-center" style="margin-left: -10px;">
									
									<div class="col-md-8">
										<br>
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
								 
								  

				</div>
				
				<div style="overflow:auto;">
									<div style="float:right;">
										<button type="button" class="px-3 py-3 text-lg bg-yellow-500 font-bold text-white rounded-full" 
										style="background-color: #D9644A" id="prevBtn" onclick="nextPrev(-1)">Précedent</button>
										<button type="button" class="px-3 py-3 text-lg bg-yellow-500 font-bold text-white rounded-full" 
										style="background-color: #30005B"  id="nextBtn" onclick="nextPrev(1)">Suivant</button>
									</div>
								</div>
								
								<div style="text-align:center;margin-top:-20px;">
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
								</div>
			</form>

			
		</div>
	</div>
	<script src="{{ asset('assets/js/form-multiple-step.js') }}"></script>

	<script src="{{ asset('assets/js/typeahead.js') }}"></script>
	<script>
		var codes = @json($codes_array);
				
		autocomplete(document.getElementById("postal_code"), codes);
					
				   
	</script>
@endsection