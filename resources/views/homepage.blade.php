@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')

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

				<section class="main-promo-six-months-free" id="main-promo-six-months-free">

					<div class="container container_card">
						<div class="section-body section-body_card section-body_card_blue section-body_card_margin-top color_white main-promo-six-months-free__body">

							<h2 class="heading heading__lvl1 main-promo-six-months-free__heading" style="text-align: center;">
								 <span style="color:white;">Quels sont vos besoins d'aide à domicile ?</span>
							</h2>
							<br/>
							<h4 class="heading  main-promo-six-months-free__heading" style="text-align: center;">
								 <span style="color:white;">Expliquez-nous votre situation en 3 clics</span>
							</h4>

							<form id="regForm" method="post" action="{{ route('need.store') }}">
								@csrf
								<!-- One "tab" for each step in the form: -->
								<div class="tab">
									<input type="hidden" name="service" id="serviceForm" value="">
									<img src="/_next/static/media/step1.png" style=" display: block; margin-left: 28%; margin-right: auto; width: 30%;"/>
									<ul class="margin-top-lg cards-steps__list" style="margin-left:20%">

										<li style="margin-right: 30px;">
											<div class="cards-steps__icons-wrap color_red">

													<img src="{{  asset('_next/static/media/icones/menage.PNG') }} " alt="" style="height: 120px"/>
											</div>
											  <div style="white-space: nowrap">
														<input type="checkbox" class="chkbox" name="services[]" value="Bike">
  											    <label for="vehicle1" style="white-space: nowrap"> Aide-ménagère </label>
												</div>

										</li>



										<li style="margin-right: 30px;">
											<div class="cards-steps__icons-wrap color_red">
												<img src="{{  asset('_next/static/media/icones/handicape.PNG') }} " alt="" style="height: 120px" />

											</div>
											<div style="white-space: nowrap">
														<input type="checkbox" class="chkbox" name="services[]" value="service-handicap">
  											    <label for="vehicle1" style="white-space: nowrap"> Service handicap </label>
												</div>
										</li>

										<li style="margin-right: 30px;">
											<div class="cards-steps__icons-wrap color_red">
												<img src="{{  asset('_next/static/media/icones/autonomie.PNG') }} " alt=""  style="height: 120px"/>
											</div>
											  <div style="white-space: nowrap">
														<input type="checkbox" class="chkbox" name="services[]" value="aide-autonomie">
  											    <label for="vehicle1" style="white-space: nowrap"> Aide à l’autonomie </label>
												</div>
										</li>


									</ul>

									<ul class="margin-top-lg cards-steps__list" style="margin-left:0%">


										<li style="margin-right: 30px;">
											<div class="cards-steps__icons-wrap color_red">

												<img src="{{  asset('_next/static/media/icones/accompagnement.PNG') }} " alt="" style="height: 120px"/>

											</div>
											 <div style="white-space: nowrap">
														<input type="checkbox" class="chkbox" name="services[]" value="accompagnement">
  											    <label for="vehicle1" style="white-space: nowrap"> Accompagnements </label>
												</div>
										</li>

										<li style="margin-right: 30px;">
											<div class="cards-steps__icons-wrap color_red">
												<img src="{{  asset('_next/static/media/icones/hopital.PNG') }} " alt="" style="height: 120px"/>
											</div>
											  <div style="white-space: nowrap">
														<input type="checkbox" class="chkbox" name="services[]" value="retour-hospitalisation">
  											    <label for="vehicle1" style="white-space: nowrap"> Retour d’hospitalisation </label>
												</div>
										</li>

										<li style="margin-right: 30px;">
											<div class="cards-steps__icons-wrap color_red">
												<img src="{{  asset('_next/static/media/icones/garde.PNG') }} " alt="" style="height: 120px"/>
											</div>
											<div style="white-space: nowrap">
														<input type="checkbox" class="chkbox" name="services[]" value="gardes-non-medicalisées">
  											    <label for="vehicle1" style="white-space: nowrap"> Gardes non médicalisées </label>
												</div>
										</li>

										<li style="margin-right: 30px;">
											<div class="cards-steps__icons-wrap color_red">
												<img src="{{  asset('_next/static/media/icones/administration.PNG') }} " alt="" style="height: 120px"/>
											</div>
											 <div style="white-space: nowrap">
														<input type="checkbox" class="chkbox" name="services[]" value="assistance-administrative">
  											    <label for="vehicle1" style="white-space: nowrap"> Assistance administrative </label>
												</div>
										</li>


									</ul>

								</div>

								<div class="tab">
									<img src="/_next/static/media/step2.png" style=" display: block; margin-left: 28%; margin-right: auto; width: 30%;"/>

									<div class="when">
										<label class="heading margin-top-sm" style="margin-right: 20px color: #fff; font-weight:700; font-size:25px;"> A Partir de quand </label>
										<select name="start_at" id="" class="classic">
											<option value="Immédiatement" >Immédiatement</option>
											<option value="Dans 1 mois" >Dans 1 mois</option>
											<option value="Dans 2 mois" >Dans 2 mois</option>
											<option value="Dans 3 mois" >Dans 3 mois</option>
											<option value="Dans plus de 3 mois" >Dans plus de 3 mois</option>
										</select>
									</div>

									<div class="when">
										<label class="heading margin-top-sm" style="color: #fff; font-weight:700; font-size:25px;">
											Cliquez pour sélectionner vos horaires
										</label>

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
									<img src="/_next/static/media/step3.png" style=" display: block; margin-left: 28%; margin-right: auto; width: 30%;"/>
									<div class="when">
										<p class="heading margin-top-sm"
										style="margin-right: 20px color: #fff; font-weight:700; font-size:25px;">
										C'est presque terminé ! </p>
										<p class="heading margin-top-sm"
										style="margin-right: 20px color: #fff; font-weight:700; font-size:15px;">
											Laissez-nous vos coordonnées et nous vous rappellerons dans les 2 heures ouvrables.!
									</p>
									<br>
									<p class="heading margin-top-sm"
										style="margin-right: 20px color: #fff; font-weight:700; font-size:15px;">
											À qui est destinée notre aide ? *
									</p>
										<select name="for_who" id="" class="classic">
											<option value="Vous recherchez une aide pour vous" >Vous recherchez une aide pour vous</option>
											<option value="Vous recherchez une aide pour quelqu’un d’autre" >Vous recherchez une aide pour quelqu’un d’autre</option>
										</select>

										<p class="heading margin-top-sm"
										style="margin-right: 20px color: #fff; font-weight:700; font-size:25px;">
										À propos de vous! </p>
                                        <br>

										<select name="gender" id="" class="classic">
												<option value="" selected>Vous êtes ? *</option>
												<option value="un homme" >Un homme</option>
												<option value="une femme" >Une femme</option>
											</select>


										<input type="text" placeholder="Votre Nom *" name="firstname" class="firstname" required>
										<input type="text" placeholder="Votre Prénom *" name="lastname" class="lastname" required>
										<input type="number" placeholder="Votre Code Postal *" name="postal_code" class="firstname" required>
										<input type="text" placeholder="Votre Ville *" name="town" class="lastname" required>
										<input type="email" placeholder="Votre Email *" name="email" class="firstname" required>
										<input type="number" placeholder="Votre Téléphone *" name="phone" class="lastname" required>
										<input type="text" placeholder="Votre Adresse *" name="address" class="email">

									</div>
								</div>



								<div style="overflow:auto;">
									<div style="float:right;">
										<button type="button" class="margin-top-default button button_w-m-full" id="prevBtn" onclick="nextPrev(-1)">Précedent</button>
										<button type="button" class="margin-top-default button button_w-m-full"  id="nextBtn" onclick="nextPrev(1)">Suivant</button>
									</div>
								</div>
								<!-- Circles which indicates the steps of the form: -->
								<div style="text-align:center;margin-top:40px;">
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
								</div>
							</form>

							<div class="main-promo-six-months-free__circle">
							</div>


						</div>
					</div>

				</section>
				<br>
				<section class="lp-banking-track-cashflow">
					<div class="container">
						<div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">
							<div class="lp-banking-track-cashflow__image-wrap image">
								<picture class="picture__image-container ">
								<img src="{{  asset('_next/static/media/women.png') }} " srcSet="/_next/static/media/lp-banking-track-cashflow__simg_1_en@2x.95edf884.png 2x" alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
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
									<a href="#" class="button button_blue button_margin-default button_w-m-full" id="target-action-lp-banking-invite-team" data-target-action="data-target-action">En Savoir Plus</a></div>
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
								<a href="{{ route('join-us') }}" class="button button_w-m-full" id="target-action-main-cards-business">ACCEDER A L'ESPACE RH</a><div><a class="link link_underline link_white main-cards__btn-learn-more" data-inner-link="true" data-test="header_nav__main-cards-learn-more" href="cards/index.html">EN SAVOIR PLUS</a></div>
							</div>

						</div>

						<div class="image main-cards__simg-wrap">

							<picture class="picture__image-container ">



								<img src="{{  asset('_next/static/media/join-us.png') }}" srcSet="_next/static/media/main-ecard__simg_ver-2_visa@2x.e3f90129.png 2x" alt="" class="picture__image " width="592" />

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





				<script>

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
		</script>
@endsection
