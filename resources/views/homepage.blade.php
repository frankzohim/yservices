@extends('layouts.master')
@section('title', __('Youdom Care – Aide à domicile sur mesure en Europe'))
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

.portlet{margin-bottom:10px;position:relative}.portlet>.portlet-content-editable{border-color:transparent}.portlet>.portlet-topper{display:none}

	</style>
    <section class="main-intro-all" style="background-color: #F2DCC2;">

					<div class="container" >

						<div class="section-body padding-top-sm main-intro-all__body">

							<div class="main-intro-all__content">

								<div style="margin-bottom:55px;">

									<h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" style="line-height: 1.2">
                            L'aide à domicile<br> 
                            <span class="text-yellow-500 color-orange"> Sur-mesure</span>
                        </h1>

								</div>

								<div style="margin-bottom:30px;">

							

									
									 <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 text-justify" style="line-height: 1.5">
													
										<!-- <p class="margin-top-xs text text_lg color_grey hide-mobile hide-tablet-sm text-indigo-800 color-text font-bold" >Aide à domicile pour :</p> -->
										<p class="margin-top-xs text text_lg color_grey  text-indigo-800 color-text font-bold" >Aide à domicile pour :</p>
										
                           <ul class="margin-top-xs list list_10px  main-intro-all__list">

															<li class="color-grey "><b>Les personnes âgées</b> </li>
															<li class="text color-grey"><b>Les personnes en situation handicap  </b> </li>
															<li class="text color-grey"><b>Les personnes en perte d’autonomie   </b> </li>
															<li class="text color-grey"><b>Les enfants handicapés ou malades   </b> </li>
														</ul>
                        </h3>
								</div>
								<a href="{{ route('about') }}" class="margin-top-default button button_w-m-full" id="target-action-main-intro-all" style="background-color:#D9644A; border-radius:25px;">
									En Savoir Plus
								</a>

								<a href="{{ route('join-us') }}" class="margin-top-default button button_w-m-full" style="background-color:#30005B; border-radius:25px;" 
								id="target-action-main-intro-all">
									Nous Rejoindre
								</a>


							</div>

							<div class="main-intro-all__simg-wrap">

							<picture class="picture__image-container ">

								<img src="{{  asset('_next/static/media/old.png') }}"   />


							</picture>

							</div>
						</div>

					</div>


	</section>

	<div class="section" style="margin-top:-50px;">
		<div class="container content-wrap clearfix">
			<div class="heading-block topmargin-sm center">
				<h3><span class="text-xl md:text-5xl font-bold text-indigo-800 color-text" style="font-size:40px;"> 
					Besoin d'un intervenant</span>
					<span class="text-yellow-500 color-orange" style="font-weight:700; font-size:40px; line-height:59.5px;"> 
						à domicile ?</span>
					
				 </h3>
				 <div class="mt-3 text-gray-700 font-semibold">
					<a href="{{ route('devis.create') }}">
							   <button  class="px-3 py-3 text-lg bg-yellow-500 
							   font-bold text-white rounded-full" 
							   style="background-color: #30005B"> 
									  CLIQUEZ ICI </button>
					  </a>

				</div>
			</div>
			<!--
			<form id="regForm" method="post" action="" >

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
											<img src="{{ asset('_next/static/media/services/70/13.png') }}" 
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
											<img src="{{ asset('_next/static/media/services/70/12.png') }}" 
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
											<img src="{{ asset('_next/static/media/services/70/1.png') }}"  
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
											<img src="{{ asset('_next/static/media/services/70/13.png') }}" 
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
										style="background-color: #30005B"  id="nextBtn" onclick="nextPrev(1)">Suivant</button>
										
										
									</div>
								</div>
								
								<div style="text-align:center;margin-top:-20px;">
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
								</div>

			</form>
		-->

		</div>
	</div>
	<section class="py-2 md:py-20">
		<div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
			<div class="flex flex-wrap items-center">
									 <div class="w-full md:w-1/2 mt-2 md:mt-0" >
					<img data-animate="animate-right"  style="border-radius: 15px;" width="95%" 
											src="{{ asset('_next/static/media/aide-personne-agee-domicile-livraison-repas-courses.jpg') }}">
				</div>
				<div class="w-full md:w-1/2 md:pr-20" style="text-align: center">

					<h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" style="line-height: 1.2">
						Vivre sereinement   
						<span class="text-yellow-500 color-orange"> chez soi</span>
					</h1>
					<!--
					<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">  
					   Maintien à domicile pour les personnes âgées, en situation handicap ou en perte d’autonomie.
					</span> <br>
											
					<h5 class="font-bold color-orange ">
						L'accompagnement personnalisé pour les personnes en perte d'autonomie ou en situation de handicap!
					</h5>
				-->
												
					<br>
										
					<h4 class="font-bold color-orange ">
						Vivez sereinement chez vous en optant pour une aide au maintien à domicile !
					</h4>

					
					<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">  
						YOUDOM-CARE prend soin de vous et vous propose un service d’aide à domicile destiné aux personnes 
						âgées, aux personnes en perte d’autonomie, aux personnes handicapées, aux enfants malades et aux 
						personnes en situation de handicap, fragilisées, qui souhaitent vivre à leur domicile, dans 
						les meilleures conditions. Nous nous occupons de votre bien-être et votre sécurité.
					 </span>
										

					
											 
				   
				</div>
				
			</div>               
		</div>
	</section>
			<br>
	<section class="py-2 md:py-20">
            <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 md:pr-20">
                        <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" style="line-height: 1.2">
                            Pourquoi Choisir <br> 
                            <span class="text-yellow-500 color-orange"> Youdom Care?</span>
                        </h1>
                        <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
							Votre satisfaction, c’est le cœur de notre attention. 

												<ul class="margin-top-default list list_10px list_bullet-color_blue">
												<li>
													<h4 class="font-bold color-orange">GARANTIE</h4>
													<span 
													style="color:#374151; font-size:20px; font-family: 
													Montserrat, sans-serif;">
													Hommes ou femmes, nous sélectionnons avec soin, l’auxiliaire de vie unique, 
													adapté à vos besoins. Diplômes, qualifications et références sont vérifiés afin de 
													répondre au mieux à vos attentes</span>
												</li>

												<li>
													<h4 class="font-bold color-orange">TRANQUILLITÉ D’ESPRIT</h4>
													<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
														Fini les rendez-vous manqués ou les prises de congés pour le suivi médical de votre proche. 
														Vous pouvez désormais travailler en toute quiétude sachant que votre proche est entre de 
														bonnes mains.
													</span>
												</li>
											</ul>

                        </h3>
											<div class="mt-3 text-gray-700 font-semibold">
													  <a href="{{ route('about') }}">
																 <button  class="px-3 py-3 text-lg bg-yellow-500 
																 font-bold text-white rounded-full" 
																 style="background-color: #30005B"> 
																		En savoir plus </button>
														</a>
                           
                        					</div>
                       
                    </div>
                    <div class="w-full md:w-1/2 mt-2 md:mt-0">
                        <img data-animate="animate-right" class="w-full "  style="border-radius: 10px; width:100%"
						src="{{ asset('_next/static/media/home/aide-domicile-personnes-agees.jpeg') }}">
                    </div>
                </div>               
            </div>
        </section>

		<section class="lp-banking-dont-waste-time" >
					<div class="container container_card"  >
						<div class="section-body section-body_card section-body_card_red section-body_margin-top 
						lp-banking-dont-waste-time__body " style="background-color: #30005B; padding:15px 15px;">
							<div class="">

								<h2 class="heading heading__lvl1 color_white ">Des services personnalisés pour tous !</h2>
									<ul class="lp-banking-dont-waste-time__list lp-banking-dont-waste-time-list">
										<li class="lp-banking-dont-waste-time-list__item">
											<p class="lp-banking-dont-waste-time-list__text">Perte d'autonomie débutante ou confirmée chez la personne âgée</p>
										</li>
										
										<li class="lp-banking-dont-waste-time-list__item">
											<p class="lp-banking-dont-waste-time-list__text">Transport et accompagnement de personnes handicapés et personnes à mobilité réduite</p>
										</li>
										
										<li class="lp-banking-dont-waste-time-list__item">
											<p class="lp-banking-dont-waste-time-list__text">
												Aide et accompagnement à domicile des enfants malades ou en situation de handicap</p>
										</li>
									</ul>
									<br>
									<div class="d-flex justify-content-center">
														<a href="{{ route('devis.create') }}" class="px-3 py-3 text-lg bg-yellow-500 font-bold text-white rounded-full" style="background-color: #D9644A" 
														id="target-action-lp-banking-dont-waste-time" data-target-action="data-target-action">
															S'inscrire gratuitement
														</a>
									</div>

									
									
									
									<br>
							</div>

							
						</div>
					</div>
				</section>
	





			<section class="py-8 md:py-16 bg-[#ffffff]" >
            <div class="max-w-7xl mx-auto px-4 ">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 md:pr-20">
                        <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold color-text" style="line-height: 1.2">
                            NOTRE 
                            <span class="text-yellow-500 color-orange">MISSION</span>
                        </h1>
						<h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
							Vous accompagner et vos proches dans la perte 
							d’autonomie en proposant nos services personnalisés adaptés à vos besoins
 
							<ul class="margin-top-default list list_10px list_bullet-color_blue">
									<li>
													 
										<span class="font-bold color-orange">Youdom-Care</span> 
										s’engage à vous fournir le meilleur accompagnement pour le maintien à domicile 
										d'une personne âgée, en perte d'autonomie ou en situation de handicap en assurant 
										une qualité de service garantie 
									</li>

									<li>
													 
										<span class="font-bold color-orange">Nos coordinateurs</span> 
										sont à votre disposition pour vos besoins ponctuels ou permanents d'aide à domicile. 
										Nos services d'aide à la personne s'adressent à tous, quels que soient vos besoins.
									</li>
							</ul>
 
						 </h3>
                      
						
                    </div>    
                    <div class="w-full md:w-1/2">
                        <img data-animate="animate-right" class="w-full " style="border-radius: 15px;"
						src="{{ asset('_next/static/media/home/our-mission-1.jpg') }}">
                    </div>
                </div>               
            </div>
        </section>

				<!--
        <section class="py-2 md:py-20">
					<div class="max-w-7xl mx-auto rounded-md bg-primary p-4 md:p-8">
							<div class="flex justify-center items-center">
									<div class="w-full md:w-3/5 text-white">
											<h1 class="text-xl md:text-4xl font-bold">
													Rejoindre Youdom Care ?
											</h1>
											<h3 class="mt-4 text md:text-2xl">
													Postulez en 5 minutes et obtenez une offre d’emploi du Réseau Youdom Care                
											</h3>
											<div class="mt-4">
												  <a href="{{ route('join-us') }}">
														<button class="px-3 py-3 bg-white text-primary text-lg  font-bold rounded-full ">
															Nous Rejoindre
														</button>
													</a>
													
											</div>
									</div>
									<div class="md:block w-2/5">
											<img data-animate="animate-right" class="md:w-3/5 animated-item" src="{{ asset("_next/static/media/contactez-nous.svg") }}">
									</div>
							</div>
					</div>
			</section> 
		-->

			
				<section class="lp-banking-invite-team">
					<div class="container container_card">
						<div class="section-body section-body_card section-body_card_pink section-body_margin-top 
						lp-banking-invite-team__body " style="padding: 10px;">
							<div class="image lp-banking-invite-team__img-wrap">
								<picture class="picture__image-container ">

								<img src="{{  asset('_next/static/media/home/our-functionning-2.png') }} " 
								srcSet="{{  asset('_next/static/media/home/our-functionning-2.png') }}" alt="" 
								class="picture__image " loading="eager" style="margin-right:10px;"/>
							</picture>
							</div>
							<div class="">
								<h1 data-animate="animate-left" 
								class="text-xl md:text-5xl font-bold color-text" style="line-height: 1.2">
									Notre 
									<span class="text-yellow-500 color-orange"> fonctionnement</span>
								</h1>
								<p class="margin-top-default text text_lg">
									Nous proposons des services à domicile sur mesure, assurés par des auxiliaires de vie 
									professionnelles. </p>
								<br>
							<a href="{{ route('functioning') }}" 
							class="px-3 py-3 text-lg bg-yellow-500 font-bold text-white rounded-full" 
							style="background-color: #30005B" id="target-action-lp-banking-invite-team" 
							data-target-action="data-target-action">En savoir plus</a>
						</div>
						</div>
					</div>
				</section>

				<section class="w-100 p-3" style="margin-left:10px; "> 
					<div class="py-3 w-100"> 
					 <div class="row w-100" > 
					  <div class="col-lg-12"> 
					   <div id="fragment-0-ifao"> 
						<div class=""> 
						 <span id="p_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_Qf6B3Goj5057"></span> 
						 <section class="portlet" id="portlet_com_liferay_journal_content_web_portlet_JournalContentPortlet_INSTANCE_Qf6B3Goj5057"> 
						  <div class="portlet-content"> 
						   <div class="autofit-float autofit-row portlet-header"> 
							<div class="autofit-col autofit-col-end"> 
							 <div class="autofit-section"> 
							  <div class="visible-interaction"> 
							  </div> 
							 </div> 
							</div> 
						   </div> 
						   <div class=" portlet-content-container w-100" > 
							<div class="portlet-body w-100" > 
							 <div class="" > 
							  <div class="journal-content-article " data-analytics-asset-id="114851" data-analytics-asset-title="Youdom Care Recrute !" data-analytics-asset-type="web-content"> 
							   <div class="container-fluid external-site-bloc-container" 
							   style="background-image: linear-gradient(to right, rgba(0,0,0,0.5), rgba(0, 0, 0, 0)) , 
							   url('{{ asset('_next/static/media/home-business-tab-img04.jpg') }}'); background-repeat: no-repeat;
  background-size: cover; "> 
								<div class="external-site-bloc row d-flex flex-row" style="padding:50px 20px;"> 
								 <div class="col-lg-8 col-12 align-self-end align-self-lg-center pb-30"> 
								  <h2 class="mb-3 text-white color-text font-bold">
									Youdom-care recrute <br> 
									Rejoignez-nous
								  </h2> 
								  <h3 class="mb-4 text-white">
									Faites partie d’un groupe en croissance <br> qui offre à chacun l’opportunité <br>
									 d’être acteur de sa carrière. <br>
									 Bénéficier d’un parcours de formation <br>
									  sur mesure tout au long de votre aventure.
								  </h3> 
								  <ul class="list-unstyled"> 
								   <li class="text-medium text-white">
										Auxiliaire de vie 
								   </li> 
								   <li class="text-medium text-white">
										Aide-ménagère 
								   </li> 
								   <li class="text-medium text-white">
										Garde nuit 
								   </li> 
								   <li class="text-medium text-white">
										Aide médico-psychologique 
								   </li> 
								   <li class="text-medium text-white">
										Responsable de secteur 
								   </li> 
								   <li class="text-medium text-white">
									Directeur d'agence 
								   </li> 

								  </ul> 
								 </div> 
								 
								 
								 <div class="col-lg-4 col-12 align-self-end"> 
									<span class="text-white center">
										 <span style="white-space: nowrap"> A la recherche d'un emploi à domicile ?</span> <br> Youdom-care recrute 
									</span>
									<br> <br>
								  <a class="btn btn-outline btn-outline-primary btn-filled-primary 
									d-flex align-items-center justify-content-center w-100 bg-yellow-500 
									font-bold text-white rounded-full" 
									href="{{ route('join-us-content') }}" title="" 
									style="padding:20px 10px; background-color: #30005B"> 
										<span class="d-block text-small font-weight-bold font-nexabold">Rejoignez-nous </span> 
								  </a> 
								 </div> 
								</div> 
							   </div> 
							  </div> 
							 </div> 
							</div> 
						   </div> 
						  </div> 
						 </section> 
						</div> 
					   </div> 
					  </div> 
					 </div> 
					</div> 
				   </section> 
	

	<script src="{{ asset('assets/js/form-multiple-step.js') }}"></script>
	<script>
		var codes = @json($codes_array);

		autocomplete(document.getElementById("postal_code"), codes);


	</script>
	<script>

		 function nextPrev(n) {

			var isChecked=document.querySelectorAll('.form-check-input');
			var isCheckedArray=Array.from(isChecked);
			
			isCheckedArray.forEach((curr)=>{
				if(curr.checked==true){
					document.getElementById("regForm").submit();
				}else{
					//alert("la case n'a pas ete coché")
				}
			})

			

			
		}

	</script>

@endsection
