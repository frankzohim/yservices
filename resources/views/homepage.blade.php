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
.team-image img,.team-image>a{display:block;width:40%;   margin-left: auto;
  margin-right: auto;}
.team-desc{text-align:center}
.team-desc.team-desc-bg{background-color:#fff;padding:10px 0 30px}
.team .si-share{margin-top:30px;text-align:left}
.team .si-share .social-icon{font-size:14px;width:34px}
.team-title{position:relative;padding-top:20px}
.team-title h4{display:block;margin-bottom:0;font-size:20px;text-transform:uppercase;letter-spacing:1px;font-weight:700; color: rgb(68,68,68)}
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
  display: none;
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

:checked + label {
  border-color: #ddd;
}

:checked + label:before {
  content: "✓";
  background-color: green;
  transform: scale(1);
}

:checked + label img {
  transform: scale(1);
	opacity: 0.5;
  box-shadow: 0 0 5px #333;
  z-index: -1;
}

	</style>
    <section class="main-intro-all">
					<div class="container">

						<div class="section-body padding-top-sm main-intro-all__body">

							<div class="main-intro-all__content">

								<div style="margin-bottom:55px;">

									<h1 class="heading heading__lvl1 stillforce-heading-blue-medium" >

									<h1 class="heading heading__lvl1 stillforce-heading-blue" style="">L'aide à domicile</h1>
									<h1 class="heading heading__lvl1" style="color: #E84347; font-weight:700; font-size:70px; line-height:59.5px;">Sur-mesure</h1>

									</h1>

								</div>

								<div style="margin-bottom:30px;">

									<p class="margin-top-xs text text_lg color_grey hide-mobile hide-tablet-sm" style="color: #E84347;">Aide à domicile pour :</p>

									<ul class="margin-top-xs list list_10px list_bullet-color_black main-intro-all__list">

										<li class="text"><b>Les personnes âgées</b> </li>
										<li class="text"><b>Les personnes en situation handicap  </b> </li>
										<li class="text"><b>Les personnes en perte d’autonomie   </b> </li>

									</ul>
								</div>
								<a href="{{ route('about') }}" class="margin-top-default button button_w-m-full" id="target-action-main-intro-all">
									En Savoir Plus
								</a>

								<a href="{{ route('join-us') }}" class="margin-top-default button button_w-m-full" style="background-color:#594EE6" id="target-action-main-intro-all">
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

					<div class="section">
		<div class="container content-wrap clearfix">
			<div class="heading-block topmargin-sm center">
			<h3><span class="heading heading__lvl1 stillforce-heading-blue" style="font-size:40px;"> Quels sont vos besoins</span>
				<span style="color: #E84347; font-weight:700; font-size:40px; line-height:59.5px;"> d'aide à domicile ?</span> </h3>
			</div>

			<form id="regForm" method="post" action="{{ route('devis.store') }}" autocomplete="off">

					@csrf

				<!-- One "tab" for each step in the form: -->
				<div class="tab">
						<div class="heading-block topmargin-sm center">
							<img src="/_next/static/media/step1.png" style=" width: 20%;"/>
							<h5 style="color: #6105F5; font-weight:700; font-size:20px;">Cliquez sur un service pour sélectionner</h5>
						</div>
						<div class="row">

							<div class="col-lg-3 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb1" name="services[]" value="Aide à l'autonomie"/>
										<label for="cb1">
											<img src="{{ asset('_next/static/media/n1.png') }}" alt="AIDE À L’AUTONOMIE">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">AIDE À L’AUTONOMIE / GESTE DU QUOTIDIEN</h4></div>

									</div>
								</div>

							</div>

							<div class="col-lg-3 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb2" name="services[]" value="Gardes non médicalisées"/>
										<label for="cb2">
											<img src="{{ asset('_next/static/media/n2.png') }}"  alt="GARDES NON MÉDICALISÉES">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">GARDES NON MÉDICALISÉES / PRÉSENCE DE NUIT</h4></div>

									</div>
								</div>

						   </div>



							<div class="col-lg-3 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb4" name="services[]" value="Accompagnements"/>
										<label for="cb4">
											<img src="{{ asset('_next/static/media/n4.png') }}" width="100%" alt="Accompagnements">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">ACCOMPAGNEMENTS</h4></div>

									</div>
								</div>

							</div>

							<div class="col-lg-3 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb5" name="services[] " value="Aide aux repas"/>
										<label for="cb5">
											<img src="{{ asset('_next/static/media/n5.png') }}" alt="AIDE AUX REPAS">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">AIDE AUX REPAS</h4></div>

									</div>
								</div>

							</div>

					</div>

					<div class="row">



							<div class="col-lg-3 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb6" name="services[]" value="Retour à domicile après hospitalisation"/>
										<label for="cb6">
											<img src="{{ asset('_next/static/media/nn1.png') }}" alt="RETOUR A DOMICILE APRES HOSPITALISATION">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">RETOUR À DOMICILE APRÈS HOSPITALISATION</h4></div>

									</div>
								</div>

						   </div>

						   <div class="col-lg-3 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb7" name="services[]" value="Aide-ménagère"/>
										<label for="cb7">
											<img src="{{ asset('_next/static/media/nn5.png') }}" alt="AIDE-MÉNAGÈRE">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">AIDE-MÉNAGÈRE</h4></div>

									</div>
								</div>

							</div>

							<div class="col-lg-3 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb8" name="services[]" value="Assistance administrative"/>
										<label for="cb8">
											<img src="{{ asset('_next/static/media/n8.png') }}" alt="ASSISTANCE ADMINISTRATIVE">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">ASSISTANCE ADMINISTRATIVE</h4></div>

									</div>
								</div>

							</div>


							<div class="col-lg-3 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb9" name="services[]" value="Voyage & évasion"/>
										<label for="cb9">
											<img src="{{ asset('_next/static/media/n10.png') }}" alt="VOYAGE & EVASION">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">VOYAGE & EVASION</h4></div>

									</div>
								</div>

							</div>

					</div>

					<div class="row">

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb10" name="services[] " value="Aide et accompagnement des enfants malades ou handicapés"/>
										<label for="cb10">
											<img src="{{ asset('_next/static/media/nn6.png') }}" alt="AIDE ET ACCOMPAGNEMENT À DOMICILE DES ENFANTS MALADES OU HANDICAPÉS">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">AIDE ET ACCOMPAGNEMENT À DOMICILE DES ENFANTS MALADES OU HANDICAPÉS</h4></div>

									</div>
								</div>

							</div>

							<div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb11" name="services[]" value="Transport et accompagnement de personnes handicapées et des PMR"/>
										<label for="cb11">
											<img src="{{ asset('_next/static/media/nn2.png') }}"  alt="TRANSPORT ET ACCOMPAGNEMENT DE PERSONNES HANDICAPÉES ET DE PERSONNES À MOBILITÉ RÉDUITE (PMR)">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">TRANSPORT ET ACCOMPAGNEMENT DE PERSONNES HANDICAPÉES ET DE PERSONNES À MOBILITÉ RÉDUITE (PMR)</h4></div>

									</div>
								</div>

						   </div>

						   <div class="col-lg-4 col-md-6 bottommargin">

								<div class="team">

									<div class="team-image">
										<input type="checkbox" id="cb12" name="services[]" value="Aide et accompagnement à domicile des personnes handicapées"/>
										<label for="cb12">
											<img src="{{ asset('_next/static/media/nn4.png') }}" alt="AIDE ET ACCOMPAGNEMENT À DOMICILE DES PERSONNES HANDICAPÉES">
										</label>
									</div>

									<div class="team-desc team-desc-bg">
									<div class="team-title"><h4  style="color: #E84347; font-weight:700; font-size:15px; ">AIDE ET ACCOMPAGNEMENT À DOMICILE DES PERSONNES HANDICAPÉES</h4></div>

									</div>
								</div>

							</div>



					</div>

				</div>

				<div class="tab">

						<div class="heading-block topmargin-sm center">
							<img src="/_next/static/media/step2.png" style=" width: 20%;"/>
							<h5 style="color: #6105F5; font-weight:700; font-size:20px;">Dites nous plus sur le planning</h5>
						</div>

							<div class="row">

								<div class="form-group col-md-4 col-lg-4 mb-0 mt-md-0 mt-4 center" >
										<label class="form-check-label" style="color:#1b138a; font-size:18px; font-weight:700;">
											  A Partir de quand peut-on commencer?
											  </label>


								</div>

								<div class="form-group col-md-8 col-lg-8 mb-0 mt-md-0 mt-4" >

										<select name="start_at" class="form-control form-select" aria-label="Default select example" >

											<option value="Immédiatement" >Immédiatement</option>
											<option value="Dans 1 mois" >Dans 1 mois</option>
											<option value="Dans 2 mois" >Dans 2 mois</option>
											<option value="Dans 3 mois" >Dans 3 mois</option>
											<option value="Dans plus de 3 mois" >Dans plus de 3 mois</option>

										</select>

								</div>

							</div>


						    <div class="heading-block topmargin-sm center">
								<h5 style="color: #6105F5;font-weight:700; font-size:20px;">Cliquez pour sélectionner vos horaires</h5>
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
							<img src="/_next/static/media/step3.png" style=" width: 20%;"/>
							<h5 style="color: #6105F5;font-weight:700; font-size:20px;">Laissez-nous vos coordonnées et nous vous rappellerons dans les 2 heures ouvrables.!</h5>
						</div>

						    <div class="row justify-content-center">

                               <div class="form-group col-md-8 col-lg-8 mb-0 mt-md-0 mt-4" >

									  Civilité

										<select name="gender" class="form-control form-select" aria-label="Default select example">

											<option value="Monsieur" >Monsieur</option>
											<option value="Madame" >Madame</option>
										</select>

								</div>

                            </div>
							<br>
							<div class="row justify-content-center">
							 <div class="form-group col-md-8 col-lg-8 mb-0 mt-md-0 mt-4" >

									  A qui est destinée notre aide?

										<select name="for_who" class="form-control form-select" aria-label="Default select example">

											<option value="Vous même" >Vous même</option>
											<option value="Quelqu'un d'autre" >Quelqu'un d'autre</option>
										</select>

                            </div>
							 </div>
							<br>
                                <div class="row justify-content-center">

                                    <div class="col-md-4">
                                    <div class="input-group mb-4">
                                      <input class="form-control" placeholder="Nom" name="firstname" aria-label="Full Name" type="text" autofocus required>
                                    </div>
                                    </div>
                                    <div class="col-md-4 ps-md-2">
                                    <div class="input-group">
                                      <input type="text" class="form-control" placeholder="Prénom" name="lastname" required>
                                    </div>
                                    </div>

                                  </div>

                                  <div class="row justify-content-center">

                                    <div class="col-md-4">
                                    <div class="input-group mb-4">
                                      <input class="form-control" placeholder="Téléphone" aria-label="Full Name" type="number" name="phone" required>
                                    </div>
                                    </div>
                                    <div class="col-md-4 ps-md-2">
                                    <div class="input-group">
                                      <input type="email" class="form-control" placeholder="Email" name="email" required>
                                    </div>
                                    </div>

                                  </div>

								  <div class="row justify-content-center">
									<div class="col-md-8">
										<input type="text" name="address" class="form-control" id="message" rows="6" placeholder="Votre adresse">
									 </div>
                                  </div>
								  <br>
                                  <div class="row justify-content-center">

                                    <div class="col-md-8">
                                    <div class="input-group mb-4">
                                      <input class="form-control" placeholder="Code postal" aria-label="Full Name" type="text" id="postal_code" name="postal_code" required id="searchI">
                                    </div>
                                    <ul class="list-group" id="result"></ul>
                                    </div>


                                  </div>

				</div>

				<div style="overflow:auto;">
									<div style="float:right;">
										<button type="button" class="margin-top-default button button_w-m-full" id="prevBtn" onclick="nextPrev(-1)">Précedent</button>
										<button type="button" class="margin-top-default button button_w-m-full" style="background-color:#DF034D;" id="nextBtn" onclick="nextPrev(1)">Suivant</button>
									</div>
								</div>
								<!-- Circles which indicates the steps of the form: -->
								<div style="text-align:center;margin-top:40px;">
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
								</div>

			</form>


		</div>
	</div>

				<br>
				<section class="lp-banking-track-cashflow">
					<div class="container">
						<div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">
							<div class="lp-banking-track-cashflow__image-wrap image">
								<picture class="picture__image-container ">
								<img src="{{  asset('_next/static/media/old-people.png') }} " alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
								</picture>
							</div>
							<div class="lp-banking-track-cashflow__content">
								<h2 class="heading heading__lvl1 stillforce-heading-red">Pourquoi Choisir <span style="color:#594EE6;">Youdom Services</span></h2>
									<p class="text text_lg margin-top-default">
										La satisfaction de nos clients est au cœur de notre attention
									</p>
									<ul class="margin-top-default">
										<li class="lp-banking-track-cashflow__item heading heading__lvl4">Nous vous garantissons toujours le même auxiliaire de vie</li>
										<li class="lp-banking-track-cashflow__item heading heading__lvl4">Un conseiller dédié pour un service personnalisé.</li>
										<li class="lp-banking-track-cashflow__item heading heading__lvl4">Des prestations flexibles qui évoluent selon vos besoins.</li>
									</ul>
									<a href="{{ route('about') }}" class="button button_blue button_margin-default button_w-m-full" id="target-action-lp-banking-invite-team" data-target-action="data-target-action">En Savoir Plus</a></div>
							</div>

						</div>
					</div>
				</section>
				<section class="main-invoicing" >

					<div class="container container_card" >

						<div class="section-body section-body_card
						section-body_card_pink section-body_card_margin-top main-invoicing__body" style="background-color: #E84347">

							<h2 class="heading heading__lvl1 color_blue" style="color: white;">Des services à la personne pour toutes et tous
							</h2>
							<p class="margin-top-xs text" style="color: white;">La mission de Youdom-Care :  <br> Accompagner les particuliers en perte d'autonomie dans leurs besoins de personne: <br>
								<span class=""> Youdom-Care accompagne pour le maintien à domicile d'une personne âgée, en perte d'autonomie ou en situation de handicap et
									vous permet une déduction d'impôt</span></b></p>

								<p class="margin-top-xs text" style="color: white;">Nos coordinateurs vous accompagnent pour vos besoins ponctuels ou permanents d'aide à domicile. <br>
									<a href="{{ route('services') }}" style="color: white;">Nos services</a>  d'aide à la personne s'adressent à tous, quels que soient vos besoins :</p>

							<div class="margin-top-lg main-invoicing__content-wrap">

								<div class="main-invoicing__info">

									<ul class="main-invoicing__list">

										<li><div class="">

											<img src="{{ asset('_next/static/media/icones/numbers/number-one.png') }}" width="15%" alt="">

										</div>
											<p class="margin-top-xs text" style="color: white;">

												<b>Perte d'autonomie</b>  débutante ou confirmée chez la <b>personne âgée </b> </p>
										</li>

										<li>
											<div class="">
												 <img src="{{ asset('_next/static/media/icones/numbers/number-2.png') }}" width="15%" alt="">
											</div>
											<p class="margin-top-xs text" style="color: white;">Sortie d'hospitalisation</p>
										</li>

										<li>
											<div class="">
												 <img src="{{ asset('_next/static/media/icones/numbers/number-3.png') }}" width="15%" alt="">
											</div>
											<p class="margin-top-xs text" style="color: white;">Situation de handicap</p>
										</li>

										<li>
										<div class="">
												 <img src="{{ asset('_next/static/media/icones/numbers/number-four.png') }}" width="15%" alt="">
											</div>
											<p class="margin-top-xs text" style="color: white;">Et bien plus encore !</p>
										</li>

									</ul>



								</div>

								<div class="main-invoicing__simg-wrap">

									<picture class="picture__image-container ">

										<img src="{{  asset('_next/static/media/fonctionnment.png') }} " srcSet="_next/static/media/main-invoicing__simg_en_it@2x.7fe58826.png 2x" alt="" class="picture__image " loading="lazy" />
									</picture>

								</div>
							</div>
					    </div>
					</div>

				</section>

			<!--
				<section class="lp-banking-track-cashflow">
					<div class="container">
						<div class="padding-top-sm padding-bottom-sm section-body_margin-top lp-banking-track-cashflow__body">
							<div class="image lp-banking-track-cashflow__image-wrap">
								<picture class="picture__image-container ">

									<img src="{{  asset('_next/static/media/lp-banking-track-cashflow__simg_1_fr.def2e41c.webp') }} " srcSet="/_next/static/media/lp-banking-track-cashflow__simg_1_fr@2x.de21b672.png 2x" alt="" class="picture__image " loading="eager" />
								</picture>
							</div><div class="lp-banking-track-cashflow__content"><h2 class="heading heading__lvl1 lp-banking-track-cashflow__heading">Suivez vos flux financiers actuels et futurs à l&#x27;aide du nouveau tableau de bord intelligent</h2><p class="margin-top-default text text_lg">Recherchez, catégorisez et filtrez toutes vos factures:</p><ul class="margin-top-default list list_10px list_bullet-color_blue"><li><h4 class="heading heading__lvl4">Par type</h4><span class="text">(logistique, marketing, personnel, un projet spécifique, etc.)</span></li><li><h4 class="heading heading__lvl4">Sur n&#x27;importe quelle période</h4></li><li><h4 class="heading heading__lvl4">Pour un client ou un fournisseur spécifique</h4></li></ul></div>
						</div>
					</div>
				</section>
			-->


				<section class="main-cards color_white"><div class="container container_card">

					<div class="section-body section-body_card section-body_card_dark section-body_card_margin-top main-cards__body">

						<div class="main-cards__info">

							<h2 class="heading heading__lvl1">
								<span class="stillforce-heading-blue"> Rejoindre</span> <span class="stillforce-heading-red">Youdom Services </span>
							</h2>
							<br>

							<p class="">
								Découvrez toutes les offres d’emplois
								du Réseau Youdom Services
							</p>


							<div class="main-cards__btn-wrap margin-top-default">
								<a href="{{ route('join-us') }}" class="button button_w-m-full" id="target-action-main-cards-business">ACCEDER A L'ESPACE RH</a><div>
									<a class="link link_underline link_white main-cards__btn-learn-more" data-inner-link="true" data-test="header_nav__main-cards-learn-more"
									href="{{ route('about') }}">EN SAVOIR PLUS</a></div>
							</div>

						</div>

						<div class="image main-cards__simg-wrap">

							<picture class="picture__image-container ">



								<img src="{{  asset('_next/static/media/join-us.png') }}" alt="" class="picture__image " width="592" />

							</picture>

						</div>

					</div>
				</div>

				</section>
				<!--
				<section class="lp-banking-invite-team">
					<div class="container container_card">
						<div class="section-body section-body_card section-body_card_pink section-body_margin-top lp-banking-invite-team__body ">
							<div class="image lp-banking-invite-team__img-wrap">
								<picture class="picture__image-container ">

								<img src="{{  asset('_next/static/media/lp-banking-invite-team__simg_ver-2_fr.301d3092.webp') }} " srcSet="/_next/static/media/lp-banking-invite-team__simg_ver-2_fr@2x.7788242e.png 2x" alt="" class="picture__image " loading="eager" /></picture>
							</div><div class="lp-banking-invite-team__content"><h2 class="heading heading__lvl2 color_blue lp-banking-invite-team__heading">Invitez vos employés, vos collègues et votre comptable à accéder à votre compte FINOM en toute sécurité</h2><p class="margin-top-default text text_lg">Invitez de nouveaux utilisateurs à rejoindre votre compte. Attribuez-leur un accès complet ou limité pour consulter, créer ou télécharger des factures.</p>

							<a href="#" class="button button_blue button_margin-default button_w-m-full" id="target-action-lp-banking-invite-team" data-target-action="data-target-action">Essayer gratuitement</a></div>
						</div>
					</div>
				</section>

				<section class="lp-banking-dont-waste-time">
					<div class="container container_card">
						<div class="section-body section-body_card section-body_card_red section-body_margin-top lp-banking-dont-waste-time__body ">
							<div class="lp-banking-dont-waste-time__content">

								<h2 class="heading heading__lvl1 color_white lp-banking-dont-waste-time__heading">Gagnez du temps grâce à l&#x27;automatisation et aux fonctions intelligentes</h2>
									<ul class="lp-banking-dont-waste-time__list lp-banking-dont-waste-time-list">
										<li class="lp-banking-dont-waste-time-list__item"><p class="lp-banking-dont-waste-time-list__text">Reliez votre compte bancaire professionnel ou personnel à FINOM</p></li><li class="lp-banking-dont-waste-time-list__item"><p class="lp-banking-dont-waste-time-list__text">Consultez toutes vos transactions sur le tableau de bord FINOM</p></li><li class="lp-banking-dont-waste-time-list__item"><p class="lp-banking-dont-waste-time-list__text">Associez facilement vos factures aux paiements entrants</p></li>
									</ul>

									<a href="#" class="button _xlarge button_blue lp-banking-dont-waste-time__button" id="target-action-lp-banking-dont-waste-time" data-target-action="data-target-action">
									Essayer gratuitement</a>
							</div>

							<div class="image lp-banking-dont-waste-time__image-wrap">
								<picture class="picture__image-container ">

									<img src="{{  asset('_next/static/media/lp-banking-dont-waste-time__simg_1_fr.8d2f9482.webp') }} " srcSet="_next/static/media/lp-banking-dont-waste-time__simg_1_fr.8d2f9482.png 2x" alt="" class="picture__image " loading="eager" />
								</picture>
							</div>
						</div>
					</div>
				</section>
			-->

	<script src="{{ asset('assets/js/form-multiple-step.js') }}"></script>
	<script src="{{ asset('assets/js/typeahead.js') }}"></script>
	<script>
		var codes = @json($codes_array);

		autocomplete(document.getElementById("postal_code"), codes);


	</script>
@endsection
