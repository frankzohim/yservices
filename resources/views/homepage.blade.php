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
									
									<p class="margin-top-xs text text_lg color_grey hide-mobile hide-tablet-sm" style="color: #E84347;">Aaide à domicile pour :</p>
									
									<ul class="margin-top-xs list list_10px list_bullet-color_black main-intro-all__list">
										
										<li class="text"><b>Les personnes âgées</b> </li>
										<li class="text"><b>Les personnes âgées en situation handicap  </b> </li>
										<li class="text"><b>Les personnes âgées en perte d’autonomie   </b> </li>
										
									</ul>
								</div>
								<a href="#" class="margin-top-default button button_w-m-full" id="target-action-main-intro-all">
									En Savoir Plus
								</a>
								
								<a href="#" class="margin-top-default button button_w-m-full" style="background-color:#594EE6" id="target-action-main-intro-all">
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
								 <span>Quels sont vos besoins d'aide à domicile ?</span>
							</h2>
							<br/>
							<h4 class="heading  main-promo-six-months-free__heading" style="text-align: center;">
								 <span>Expliquez-nous votre situation en 3 clics</span>
							</h4>
							
							<form id="regForm" action="/action_page.php">

								<!-- One "tab" for each step in the form: -->
								<div class="tab">Name:
									<p><input placeholder="First name..." oninput="this.className = ''" name="fname"></p>
									<p><input placeholder="Last name..." oninput="this.className = ''" name="lname"></p>
								</div>
								<div class="tab">Contact Info:
									<p><input placeholder="E-mail..." oninput="this.className = ''" name="email"></p>
									<p><input placeholder="Phone..." oninput="this.className = ''" name="phone"></p>
								</div>
								<div class="tab">Birthday:
									<p><input placeholder="dd" oninput="this.className = ''" name="dd"></p>
									<p><input placeholder="mm" oninput="this.className = ''" name="nn"></p>
									<p><input placeholder="yyyy" oninput="this.className = ''" name="yyyy"></p>
								</div>
								<div class="tab">Login Info:
									<p><input placeholder="Username..." oninput="this.className = ''" name="uname"></p>
									<p><input placeholder="Password..." oninput="this.className = ''" name="pword" type="password"></p>
								</div>
								<div style="overflow:auto;">
									<div style="float:right;">
										<button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
										<button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
									</div>
								</div>
								<!-- Circles which indicates the steps of the form: -->
								<div style="text-align:center;margin-top:40px;">
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
									<span class="step"></span>
								</div>
							</form>
						
								
								<ul class="margin-top-lg cards-steps__list" style="margin-left:120px">
									
									<li>
										<div class="cards-steps__icons-wrap color_red">
										
											   <img src="{{  asset('_next/static/media/intimite.svg') }} " alt="" />
											   <img class="cards-steps__icons-arrow hide-tablet hide-mobile" src="http://finom.co/_next/static/media/dotted-arrow.52d3e164.svg" alt="" />
										</div>
										
										<h3 class="margin-top-xs heading heading__lvl3">Intimité</h3>
									</li>
									
									<li>
										<div class="cards-steps__icons-wrap color_red">
											
											<img src="{{  asset('_next/static/media/repas.svg') }} " alt="" />
											<img class="cards-steps__icons-arrow hide-tablet hide-mobile" src="http://finom.co/_next/static/media/dotted-arrow.52d3e164.svg" alt="" />
										</div>
										
										<h3 class="margin-top-xs heading heading__lvl3">Repas</h3>
									</li>
									
									<li>
										<div class="cards-steps__icons-wrap color_red">
											<img src="{{  asset('_next/static/media/menage.svg') }} " alt="" />
											<img class="cards-steps__icons-arrow hide-tablet hide-mobile" src="http://finom.co/_next/static/media/dotted-arrow.52d3e164.svg" alt="" />
										</div>
										<h3 class="margin-top-xs heading heading__lvl3">Ménage</h3>
									</li>
									
									<li>
										<div class="cards-steps__icons-wrap color_red">
											<img src="{{  asset('_next/static/media/accompagnement.svg') }} " alt="" />
											<img class="cards-steps__icons-arrow hide-tablet hide-mobile" src="http://finom.co/_next/static/media/dotted-arrow.52d3e164.svg" alt="" />
										</div>
										<h3 class="margin-top-xs heading heading__lvl3">Accompagnements</h3>
									</li>
									
									<li>
										<div class="cards-steps__icons-wrap color_red">
											<img src="{{  asset('_next/static/media/presence.svg') }} " alt="" />
										</div>
										<h3 class="margin-top-xs heading heading__lvl3">Présence</h3>
									</li>
								
									
								</ul>
								<a href="#" class="margin-top-default button button_w-m-full" style=" display: block; margin-left: auto; margin-right: auto; width: 20%;" id="target-action-main-intro-all">
									Etape suivante
								</a>
							<div class="main-promo-six-months-free__circle">
							</div>
							
							
						</div>
					</div>
					
				</section>
				
				<section class="lp-banking-track-cashflow">
					<div class="container">
						<div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">
							<div class="lp-banking-track-cashflow__image-wrap image">
								<picture class="picture__image-container ">
								<img src="{{  asset('_next/static/media/old.png') }} " srcSet="/_next/static/media/lp-banking-track-cashflow__simg_1_en@2x.95edf884.png 2x" alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
								</picture>
							</div>
							<div class="lp-banking-track-cashflow__content">
								<h2 class="heading heading__lvl1 stillforce-heading-red">Pourquoi Choisir <span style="color:#594EE6;">Youdom Services</span></h2>
									<p class="text text_lg margin-top-default">
										Chez Youdom Services, nous avons le même niveau d’exigence pour nos clients que pour nos propres grands-parents.
									</p>
									<ul class="margin-top-default">
										<li class="lp-banking-track-cashflow__item heading heading__lvl4"><span>Nous vous garantissons toujours le même auxiliaire de vie</span></li>
										<li class="lp-banking-track-cashflow__item heading heading__lvl4">Un conseiller dédié pour un service personnalisé.</li>
										<li class="lp-banking-track-cashflow__item heading heading__lvl4">Des prestations flexibles qui évoluent selon vos besoins.</li>
									</ul>
							</div>
						</div>
					</div>
				</section>
				
				
				
				<section class="main-invoicing">
				
					<div class="container container_card">
						
						<div class="section-body section-body_card section-body_card_pink section-body_card_margin-top main-invoicing__body">
						
							<h2 class="heading heading__lvl1 color_blue">Notre Fonctionnement
							</h2>
							<p class="margin-top-xs text text_lg">Chez Youdom Services le fonctionnement est très simple. <span class="stillforce-heading-red-small"> Un service sur-mesure et un interlocuteur unique.</span></b></p>
							
							<div class="margin-top-lg main-invoicing__content-wrap">
								
								<div class="main-invoicing__info">
								
									<ul class="main-invoicing__list">
										
										<li><div class="main-invoicing__list-icon-wrap">
											<svg class="icon  icon_sm"><use href="#hourglass"></use></svg></div><p class="margin-top-xs text">Lorem ipsum <b>Lorem ipsum</b> Lorem ipsum Lorem ipsum <b>Lorem ipsum</b> Lorem ipsum</p>
										</li>
										
										<li>
											<div class="main-invoicing__list-icon-wrap"><svg class="icon  icon_sm"><use href="#link_ver-2"></use></svg></div><p class="margin-top-xs text">Lorem ipsum dolor sit amet, consectetur adipiscing eli <b>sint occaecat</b></p>
										</li>
										
										<li>
											<div class="main-invoicing__list-icon-wrap"><svg class="icon  icon_sm"><use href="#idea"></use></svg></div><p class="margin-top-xs text">Aboris<b>nisi ut aliquip ex ea </b> commodo consequat. Duis</p>
										</li>
										
										<li>
											<div class="main-invoicing__list-icon-wrap"><svg class="icon  icon_sm"><use href="#invoice"></use></svg></div><p class="margin-top-xs text">Excepteur sint occaecat cupidatat non proident <b>officia</b></p>
										</li>
										
									</ul>
									
									<div class="main-invoicing__btn-wrap button_margin-default">
										<a href="#" class="button button_secondary button_w-m-full" id="target-action-main-invoicing-business">Créer un compte</a><div><a class="link link_underline link_blue-bright main-invoicing__btn-learn-more" data-inner-link="true" data-test="header_nav__main-invoicing-learn-more" href="#">En Savoir Plus</a></div>
									</div>
									
								</div>
								
								<div class="main-invoicing__simg-wrap">
									
									<picture class="picture__image-container ">
																		
										<img src="{{  asset('_next/static/media/fonctionnement.png') }} " srcSet="_next/static/media/main-invoicing__simg_en_it@2x.7fe58826.png 2x" alt="" class="picture__image " loading="lazy" />
									</picture>
									
								</div>
							</div>
					    </div>
					</div>
				
				</section>
				
				<section class="lp-banking-support-team color_white">
					<div class="container container_card">
					<div class="lp-banking-support-team__body section-body section-body_card section-body_card_blue section-body_card_margin-top">
						<h2 class="heading heading__lvl1">Pourquoi choisir Youdom Services</h2>
						
						<div class="lp-banking-support-team__content margin-top-default" style="margin-top:0px">
							
							<div class="lp-banking-support-team__content-image-wrap" >
							
								<picture class="picture__image-container ">
									
									
									<img  src="{{  asset('_next/static/media/why-us.png') }} " srcSet="/_next/static/media/lp-banking-support-team__team_it@2x.5c133c0b.png 2x" alt="" class="picture__image lp-banking-support-team__content-picture" loading="lazy" />
									
								</picture>
								
							</div>
							<div class="lp-banking-support-team__content-message">
								
								<ul class="lp-banking-support-team__content-list">
									<li class="lp-banking-support-team__content-item">
										<svg class="icon icon_sm"><use href="#clock"></use></svg><span class="text">Nous vous garantissons toujours le même auxiliaire de vie.</span>
									</li>
									
									<li class="lp-banking-support-team__content-item">
										<svg class="icon icon_sm"><use href="#check-circle"></use></svg><span class="text">Un conseiller dédié pour un service personnalisé.</span>
									</li>
									
									<li class="lp-banking-support-team__content-item">
										<svg class="icon icon_sm"><use href="#eye"></use></svg><span class="text">Des prestations flexibles qui évoluent selon vos besoins.</span>
									</li>
									
									<li class="lp-banking-support-team__content-item">
										<svg class="icon icon_sm"><use href="#settings"></use></svg><span class="text">Des prestations flexibles qui évoluent selon vos besoins. </span>
									</li>
								</ul>
								
								<div class="lp-banking-support-team__content-contact margin-top-lg">
									
									<button class="button button_w-m-full lp-banking-support-team-contact-us__button" id="target-action-lp-banking-support-team-chat" disabled="">
										Ouvrir le chat
									</button>
									
									<a class="button button_w-m-full button_white lp-banking-support-team-contact-us__button" href="https://api.whatsapp.com/send?phone=3197014203777" target="_blank" rel="noreferrer">
										<img src="http://finom.co/_next/static/media/whatsapp.ed0dbc2b.svg" alt="" /><span>Discutez Sur WhatsApp</span>
									</a>
									
									
								</div>
							</div>
							
						</div>
					</div></div>
				</section>
				
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
				
				<section class="main-why-we" id="main-why-we">

					<div class="container">
						<div class="padding-bottom-sm section-body undefined">
							<h2 class="heading heading__lvl1 ta-c">Gérez vos finances facilement à partir de votre téléphone</h2>
							<ul class="margin-top-default main-why-we-list">
								<li><div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card"><svg class="icon color_blue-bright icon_normal"><use href="#briefcase"></use></svg><h3 class="margin-top-sm heading heading__lvl2">Compte professionnel</h3><ul class="margin-top-sm list list_star"><li class="text">Web&App</li><li class="text">Invitez votre équipe à accéder à votre compte en toute sécurité</li><li class="text">IBAN Français</li></ul></div></li>
								
								<li><div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card"><svg class="icon color_blue-bright icon_normal"><use href="#box"></use></svg><h3 class="margin-top-sm heading heading__lvl2">Réconciliation</h3><ul class="margin-top-sm list list_star"><li class="text">Rapprochement automatique des factures et des paiements par virement</li><li class="text">Collectez, stockez et numérisez les reçus et autres documents en un clin d'œil</li></ul></div></li><li><div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card"><svg class="icon color_blue-bright icon_normal"><use href="#card"></use></svg><h3 class="margin-top-sm heading heading__lvl2">Cartes</h3><ul class="margin-top-sm list list_star"><li class="text">Cartes physiques et virtuelles gratuites</li><li class="text">Un cashback de 3%, le plus élevé du marché</li></ul></div></li><li><div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card"><svg class="icon color_blue-bright icon_normal"><use href="#user"></use></svg><h3 class="margin-top-sm heading heading__lvl2">Service client</h3><ul class="margin-top-sm list list_star"><li class="text">Réponse du service client en moins de 5 min</li><li class="text">92% de nos clients nous ont attribué 5 étoiles pour notre travail</li></ul></div></li><li><div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card"><svg class="icon color_blue-bright icon_normal"><use href="#invoice"></use></svg><h3 class="margin-top-sm heading heading__lvl2">Facturation</h3><ul class="margin-top-sm list list_star"><li class="text">Rappels automatiques de paiement envoyés à vos clients</li><li class="text">60 sec pour créer une facture et l'envoyer au client e-mail, facebook, Whatsapp</li><li class="text">Le lien présenté avec la facture permet de la payer en 1 clic</li></ul></div></li><li><div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card"><svg class="icon color_blue-bright icon_normal"><use href="#file"></use></svg><h3 class="margin-top-sm heading heading__lvl2">Comptabilité</h3><ul class="margin-top-sm list list_star"><li class="text">Accès dédié complet ou limité pour votre comptable</li></ul></div></li>
							</ul>
						</div>
					</div>

				</section>
				
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
								<a href="#" class="button button_w-m-full" id="target-action-main-cards-business">ACCEDER A L'ESPACE RH</a><div><a class="link link_underline link_white main-cards__btn-learn-more" data-inner-link="true" data-test="header_nav__main-cards-learn-more" href="cards/index.html">EN SAVOIR PLUS</a></div>
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
				
				<section class="lp-banking-invite-team">
					<div class="container container_card">
						<div class="section-body section-body_card section-body_card_pink section-body_margin-top lp-banking-invite-team__body ">
							<div class="image lp-banking-invite-team__img-wrap">
								<picture class="picture__image-container ">
								
								<img src="{{  asset('_next/static/media/lp-banking-invite-team__simg_ver-2_fr.301d3092.webp') }} " srcSet="/_next/static/media/lp-banking-invite-team__simg_ver-2_fr@2x.7788242e.png 2x" alt="" class="picture__image " loading="eager" /></picture>
							</div><div class="lp-banking-invite-team__content"><h2 class="heading heading__lvl2 color_blue lp-banking-invite-team__heading">Invitez vos employés, vos collègues et votre comptable à accéder à votre compte FINOM en toute sécurité</h2><p class="margin-top-default text text_lg">Invitez de nouveaux utilisateurs à rejoindre votre compte. Attribuez-leur un accès complet ou limité pour consulter, créer ou télécharger des factures.</p><a href="https://app.finom.co/fr/signup/" class="button button_blue button_margin-default button_w-m-full" id="target-action-lp-banking-invite-team" data-target-action="data-target-action">Essayer gratuitement</a></div>
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

				
				<section class="lp-banking-support-team color_white"><div class="container container_card">
					<div class="lp-banking-support-team__body section-body section-body_card section-body_card_blue section-body_card_margin-top">
						<h2 class="heading heading__lvl1">Bénéficiez d'une assistance premium rapide et professionnelle de la part de notre service client !</h2>
						
						<div class="lp-banking-support-team__content margin-top-default">
							
							<div class="lp-banking-support-team__content-image-wrap">
							
								<picture class="picture__image-container ">
									
									
									<img src="{{  asset('_next/static/media/lp-banking-support-team__team_it%401x.36f5a763.png') }} " srcSet="/_next/static/media/lp-banking-support-team__team_it@2x.5c133c0b.png 2x" alt="" class="picture__image lp-banking-support-team__content-picture" loading="lazy" />
									
								</picture>
								
							</div>
							<div class="lp-banking-support-team__content-message">
								
								<ul class="lp-banking-support-team__content-list">
									<li class="lp-banking-support-team__content-item">
										<svg class="icon icon_sm"><use href="#clock"></use></svg><span class="text">Temps de réponse inférieur à 1 minute en utilisant notre application WhatsApp ou Chat</span>
									</li>
									
									<li class="lp-banking-support-team__content-item">
										<svg class="icon icon_sm"><use href="#check-circle"></use></svg><span class="text">Assistance téléphonique ou vidéo dédiée à l'heure qui vous convient</span>
									</li>
									
									<li class="lp-banking-support-team__content-item">
										<svg class="icon icon_sm"><use href="#eye"></use></svg><span class="text">Demandez une démonstration de produit à l'un de nos spécialistes</span>
									</li>
									
									<li class="lp-banking-support-team__content-item">
										<svg class="icon icon_sm"><use href="#date-recurring"></use></svg><span class="text">Centre d'aide interactif disponible 24 heures sur 24 </span>
									</li>
								</ul>
								
								<div class="lp-banking-support-team__content-contact margin-top-lg"><button class="button button_w-m-full lp-banking-support-team-contact-us__button" id="target-action-lp-banking-support-team-chat" disabled="">Ouvrir le chat</button><a class="button button_w-m-full button_white lp-banking-support-team-contact-us__button" href="https://api.whatsapp.com/send?phone=33687263865" target="_blank" rel="noreferrer"><img src="http://finom.co/_next/static/media/whatsapp.ed0dbc2b.svg" alt="" /><span>Discussion WhatsApp</span></a><div class="lp-banking-support-team-contact-us__email-wrap"><span class="text">ou contactez-nous <span class='no-wrap'>e-mail</span>:info@youdom.services</span><br /><a href="#" class="link link_inherit link_hover_underline heading heading__lvl3"></a></div></div>
							</div>
							
						</div>
					</div></div>
				</section>
				
				
				
				<section class="main-about-us">
					<div class="container container_card">
					
					<div class="section-body section-body_card section-body_card_blue-light main-about-us__body section-body_card_margin-top">
						
						<div class="hide-tablet-lg hide-desktop">
							<p class="text caps color_red">About us</p>
							
							<ul class="margin-top-sm main-about-us__list">
								<li>
									<div class="main-about-us__card">
										
										<div class="main-about-us__card-content">
											<svg class="icon color_blue-5" width="36px" height="36px"><use href="#quotes"></use></svg><p class="margin-top-xs text">We’re specialists in the fintech market and serial entrepreneurs. We decided to make things pure and more intuitive. It’s essential to spend time on your business, family and friends. Everything else is just a waste of time like being engaged in paper administrative routines.</p><h3 class="margin-top-xs heading heading heading__lvl1 main-about-us__heading">Antonio la Mura</h3><p class="margin-top-xs text text_lg">Head of business in Italy</p><p class="margin-top-xs text">6 years of experience in fintech and business development. Entrepreneur: farm in southern Italy. Milan, Ital.</p>
										</div>
										
										<div class="main-about-us__person main-about-us__person_1">
											<div class="main-about-us__person-bg">
												<div class="main-about-us__person-bg-rect"></div>
											</div>
											
											<picture class="picture__image-container ">
												
												<img src="{{ asset('_next/static/media/Antonio@1x.a5949d97.png') }}" srcSet="_next/static/media/Antonio@2x.ded0e665.png 2x" alt="" class="picture__image main-about-us__person-img" loading="lazy" />
											</picture>
										</div>
									</div>
								</li>
								
								<li>
									<div class="main-about-us__card"><div class="main-about-us__card-content"><svg class="icon color_blue-5" width="36px" height="36px"><use href="#quotes"></use></svg><p class="margin-top-xs text">That’s why we’ve set up FINOM – a digital solution that helps you create, send and store invoices and electronic invoices. We wanted to build a place where you can grow your business and make money but not waste your time.</p><h3 class="margin-top-xs heading heading heading__lvl1 main-about-us__heading">Alena Valovaya</h3><p class="margin-top-xs text text_lg"></p><p class="margin-top-xs text">4 years in fintech. 13 years in HR, 3 years in Marketing. Сonducts independent coaching with European ECF certification. Lives in Amsterdam, the Netherlands.</p></div><div class="main-about-us__person main-about-us__person_1"><div class="main-about-us__person-bg"><div class="main-about-us__person-bg-rect"></div></div><picture class="picture__image-container "><source media="(max-width: 600px)" srcSet="/_next/static/media/Alyona@1x.c2a46759.webp" type="image/webp" /><source media="(min-width: 601px)" srcSet="/_next/static/media/Alyona@1x.c2a46759.webp 1x, /_next/static/media/Alyona@2x.a0158606.webp 2x" type="image/webp" /><source media="(max-width: 600px)" srcSet="/_next/static/media/Alyona@1x.11e8c724.png" type="image/png" /><img src="../_next/static/media/Alyona%401x.11e8c724.png" srcSet="/_next/static/media/Alyona@2x.d022a1c2.png 2x" alt="" class="picture__image main-about-us__person-img" loading="lazy" /></picture></div></div>
								</li>
								
								<li><div class="main-about-us__card"><div class="main-about-us__card-content"><svg class="icon color_blue-5" width="36px" height="36px"><use href="#quotes"></use></svg><p class="margin-top-xs text">Our goal is to simplify the life of those who provide for half the Europe.</p><h3 class="margin-top-xs heading heading heading__lvl1 main-about-us__heading">Thomas Finan</h3><p class="margin-top-xs text text_lg">Co-founder</p><p class="margin-top-xs text">10+ years managing Customer service teams in a variety of business including fintech and travel. Extensive experience working with entrepreneurs. Lives in London, United Kingdom.</p></div><div class="main-about-us__person main-about-us__person_7"><div class="main-about-us__person-bg"><div class="main-about-us__person-bg-rect"></div></div><picture class="picture__image-container "><source media="(max-width: 600px)" srcSet="/_next/static/media/Thomas@1x.5fa320a3.webp" type="image/webp" /><source media="(min-width: 601px)" srcSet="/_next/static/media/Thomas@1x.5fa320a3.webp 1x, /_next/static/media/Thomas@2x.aca6c2d8.webp 2x" type="image/webp" /><source media="(max-width: 600px)" srcSet="/_next/static/media/Thomas@1x.a28d0330.png" type="image/png" /><img src="../_next/static/media/Thomas%401x.a28d0330.png" srcSet="/_next/static/media/Thomas@2x.e98343a8.png 2x" alt="" class="picture__image main-about-us__person-img" loading="lazy" /></picture></div></div></li><li><div class="main-about-us__card"><div class="main-about-us__card-content"><svg class="icon color_blue-5" width="36px" height="36px"><use href="#quotes"></use></svg><p class="margin-top-xs text">We're using FINOM every day ourselves because we believe that we deserve the best. We're improving FINOM every day based on what entrepreneurs wish and desire. And of course, we're going to build more services for those like us. For those whom “enough” is not enough.</p><h3 class="margin-top-xs heading heading heading__lvl1 main-about-us__heading">Ivo Dimitrov</h3><p class="margin-top-xs text text_lg">Co-founder</p><p class="margin-top-xs text">6+ years in fintech. Entrepreneur: mobile app with marketplace of tatoo artists, online services for startup founders. Berlin, Germany.</p></div><div class="main-about-us__person main-about-us__person_3"><div class="main-about-us__person-bg"><div class="main-about-us__person-bg-rect"></div></div><picture class="picture__image-container "><source media="(max-width: 600px)" srcSet="/_next/static/media/Ivo@1x.e17b5022.webp" type="image/webp" /><source media="(min-width: 601px)" srcSet="/_next/static/media/Ivo@1x.e17b5022.webp 1x, /_next/static/media/Ivo@2x.d2ca2800.webp 2x" type="image/webp" /><source media="(max-width: 600px)" srcSet="/_next/static/media/Ivo@1x.6dd3da5f.png" type="image/png" /><img src="../_next/static/media/Ivo%401x.6dd3da5f.png" srcSet="/_next/static/media/Ivo@2x.7fd160d5.png 2x" alt="" class="picture__image main-about-us__person-img" loading="lazy" /></picture></div></div></li>
							</ul>
						</div>
						
						<div class="hide-mobile hide-tablet-sm">
							<div class="main-about-us__slider-main" id="main-about-us-slider-main">
								<div>
									<div class="main-about-us__info-slide">
										<div>
											<p class="text caps color_red">Qui Sommes Nous</p>
											<h3 class="margin-top-sm heading heading__lvl1">Lorem ipsum</h3>
											<p class="margin-top-xs text text_lg">Lorem ipsum Lorem Ipsum</p>
											<p class="margin-top-xs text">6 Lorem ipsum  consectetur ipsum consectetur ipsum Lorem ipsum Lorem ipsum: farm in Lorem ipsum.</p>
										</div>
										
										<div>
											<div class="main-about-us__comment">
												<svg class="icon color_blue-5" width="36px" height="36px"><use href="#quotes"></use></svg><p class="margin-top-xs text">We’re specialists in the fintech market and serial entrepreneurs. We decided to make things pure and more intuitive. It’s essential to spend time on your business, family and friends. Everything else is just a waste of time like being engaged in paper administrative routines.</p>
											</div>
										</div>
									</div>
								</div>
							
							<div>
								<div class="main-about-us__info-slide"><div><p class="text caps color_red">About us</p><h3 class="margin-top-sm heading heading__lvl1">Alena Valovaya</h3><p class="margin-top-xs text text_lg">Co-founder</p><p class="margin-top-xs text">4 years in fintech. 13 years in HR, 3 years in Marketing. Сonducts independent coaching with European ECF certification. Lives in Amsterdam, the Netherlands.</p></div><div><div class="main-about-us__comment"><svg class="icon color_blue-5" width="36px" height="36px"><use href="#quotes"></use></svg><p class="margin-top-xs text">That’s why we’ve set up FINOM – a digital solution that helps you create, send and store invoices and electronic invoices. We wanted to build a place where you can grow your business and make money but not waste your time.</p></div></div></div>
							</div><div><div class="main-about-us__info-slide"><div><p class="text caps color_red">About us</p><h3 class="margin-top-sm heading heading__lvl1">Thomas Finan</h3><p class="margin-top-xs text text_lg">Co-founder</p><p class="margin-top-xs text">10+ years managing Customer service teams in a variety of business including fintech and travel. Extensive experience working with entrepreneurs. Lives in London, United Kingdom.</p></div><div><div class="main-about-us__comment"><svg class="icon color_blue-5" width="36px" height="36px"><use href="#quotes"></use></svg><p class="margin-top-xs text">Our goal is to simplify the life of those who provide for half the Europe.</p></div></div></div></div><div><div class="main-about-us__info-slide"><div><p class="text caps color_red">About us</p><h3 class="margin-top-sm heading heading__lvl1">Ivo Dimitrov</h3><p class="margin-top-xs text text_lg"></p><p class="margin-top-xs text">6+ years in fintech. Entrepreneur: mobile app with marketplace of tatoo artists, online services for startup founders. Berlin, Germany.</p></div><div><div class="main-about-us__comment"><svg class="icon color_blue-5" width="36px" height="36px"><use href="#quotes"></use></svg><p class="margin-top-xs text">We're using FINOM every day ourselves because we believe that we deserve the best. We're improving FINOM every day based on what entrepreneurs wish and desire. And of course, we're going to build more services for those like us. For those whom “enough” is not enough.</p></div></div></div></div>
							</div>
							
							<div class="margin-top-default main-about-us__slider-nav" id="main-about-us-slider-nav">
								
								<div>
									<div class="main-about-us__person main-about-us__person_1">
										<div class="main-about-us__person-bg">
											<div class="main-about-us__person-bg-rect _blue"></div><div class="main-about-us__person-bg-rect _fill"></div>
										</div>
										<h3 class="text text_bold main-about-us__person-name">Antonio<br />la Mura</h3>
										
										<picture class="picture__image-container ">
											
											<img src="_next/static/media/Antonio@1x.a5949d97.png" srcSet="/_next/static/media/Antonio@2x.ded0e665.png 2x" alt="" class="picture__image main-about-us__person-img" width="275" />
										</picture>
									</div>
								</div>
								
								<div>
									<div class="main-about-us__person main-about-us__person_4">
										
										<div class="main-about-us__person-bg">
											<div class="main-about-us__person-bg-rect _blue"></div><div class="main-about-us__person-bg-rect _fill"></div></div><h3 class="text text_bold main-about-us__person-name">Alena<br />Valovaya</h3>
											
											<picture class="picture__image-container ">
												
												<img src="_next/static/media/Alyona@1x.11e8c724.png" srcSet="/_next/static/media/Alyona@2x.d022a1c2.png 2x" alt="" class="picture__image main-about-us__person-img" width="275" />
											</picture>
									</div>
								</div>
								
								<div>
									<div class="main-about-us__person main-about-us__person_7">
										
										<div class="main-about-us__person-bg">
											<div class="main-about-us__person-bg-rect _small"></div><div class="main-about-us__person-bg-rect _fill _blue"></div></div><h3 class="text text_bold main-about-us__person-name">Thomas<br /> Finan</h3>
											
											<picture class="picture__image-container ">
												
												<img src="_next/static/media/Thomas@1x.a28d0330.png" srcSet="/_next/static/media/Thomas@2x.e98343a8.png 2x" alt="" class="picture__image main-about-us__person-img" width="275" />
											</picture>
									</div>
								</div>
								
								<div>
									<div class="main-about-us__person main-about-us__person_3">
										<div class="main-about-us__person-bg">
											<div class="main-about-us__person-bg-rect _blue">
											</div><div class="main-about-us__person-bg-rect _fill"></div>
										</div><h3 class="text text_bold main-about-us__person-name">Ivo<br />Dimitrov</h3>
											
											<picture class="picture__image-container ">
												<img src="_next/static/media/Ivo@1x.6dd3da5f.png" srcSet="/_next/static/media/Ivo@2x.7fd160d5.png 2x" alt="" class="picture__image main-about-us__person-img" width="275" />
											</picture>
									</div>
								</div>
							</div>
						</div></div></div>
				
				</section>
				
				<section class="security-data">
					<div class="container container_card">
						<div class="section-body section-body_card section-body_card_pink-light security-data__body section-body_card_margin-top">
							<h2 class="heading heading__lvl1">La sécurité de vos Grand-Parents </h2>
							<ul class="security-data__list margin-top-default">

								<li class="security-data-list__item">
										<div class="security-data-list__icon-wrap">
												<img src="_next/static/media/gdpr.svg" alt="" class="security-data-list__icon" />
										</div><h3 class="heading margin-top-sm">Our servers are protected and hosted in the European Union</h3><p class="text margin-top-xs">We comply with the 2016 General Data Protection Rules (GDPR)</p>
									</li>
								
								<li class="security-data-list__item">
										<div class="security-data-list__icon-wrap"><img src="_next/static/media/tls-protocol.svg" alt="" class="security-data-list__icon" />
											</div><h3 class="heading margin-top-sm">TLS protocol</h3><p class="text margin-top-xs">All information and registration data are encrypted before being sent to our servers so that no one can intercept them</p>
									</li>
								
								<li class="security-data-list__item"><div class="security-data-list__icon-wrap">
										<img src="_next/static/media/3dsecure.svg" alt="" class="security-data-list__icon" />
										</div><h3 class="heading margin-top-sm">3D Secure</h3>
										<p class="text margin-top-xs">Confirm each online card transaction with a unique one-time password</p></li>

							</ul>
						</div>
					</div>
				</section>
@endsection