@extends('layouts.master')
@section('title', __('A Propos de Nous'))

@section('content')

<section class="main-intro-all">

				<section class="lp-banking-track-cashflow" style="margin-top: 50px">
					<div class="container">
						<div style="display: flex">
								<div style="flex: 1">
										<div class="">
												<h2 class="heading heading__lvl1 stillforce-heading-red">Qui sommes-nous ?</span></h2> <br>
													<p class="heading heading__lvl1 stillforce-heading-blue " style="font-size: 25px">
														L’aide à domicile sur- mesure pour les personnes âgées, en situation d'handicap ou en perte d’autonomie.
													</p>
													<p class="text text_lg margin-top-default" style="font-size: 19px">
													Spécialistes du services à la personne et  du grand âge, les conseillers de <span style="color: #E84347; font-weight:700;">YOUDOM-CARE </span>    identifient,
													pour vous ou l’un de vos proches en perte d’autonomie, des solutions pour bien vieillir chez soi :
													services à domicile (ménage, téléassistance, garde de nuit…), adaptation du logement, transport médicalisé …
													</p>

													<p class="text text_lg margin-top-default" style="font-size: 19px">

															<span style="color: #E84347; font-weight:700;">YOUDOM-CARE </span> - est la première entreprise au service des seniors et des proches aidants.
															Gage de qualité, sa raison d’être est d’offrir à chacun des solutions de confiance pour bien
															vivre et bien vieillir à domicile.

													</p>

														<p class="text text_lg margin-top-default" style="font-size: 19px">

															La construction du modèle innovant <span style="color: #E84347; font-weight:700;">YOUDOM-CARE </span> repose sur une conviction forte :
															<span style="color: #E84347; font-weight:400;"> le maintien du lien social</span> pour permettre à la personne âgée ou handicapée de bien vivre chez soi .
 															Cette originalité repose sur une <span style="color: #E84347; font-weight:400;"> approche humaine de l’aide à domicile</span> où l’intervenant est avant tout
															 une sentinelle bienveillante qui accompagne la personne âgée dans les différentes phases de la vieillesse de manière conviviale et positive.


													</p>


											</div>
								</div>
								<div style="flex:1"><div class="">
								<picture class="picture__image-container ">
								<img src="{{  asset('_next/static/media/about.png') }} " srcSet="/_next/static/media/lp-banking-track-cashflow__simg_1_en@2x.95edf884.png 2x" alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
								</picture>
							</div></div>
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

				<section class="lp-banking-track-cashflow">
					<div class="container">

						<div class="padding-top-sm padding-bottom-sm section-body_margin-top lp-banking-track-cashflow__body">
							<div class="image lp-banking-track-cashflow__image-wrap">
								<picture class="picture__image-container ">

									<img src="{{  asset('_next/static/media/why-us-2.png') }} " srcSet="/_next/static/media/lp-banking-track-cashflow__simg_1_fr@2x.de21b672.png 2x" alt="" class="picture__image " loading="eager" />
								</picture>
							</div>

							<div class="lp-banking-track-cashflow__content">

									<h2 class="heading heading__lvl1 lp-banking-track-cashflow__heading">
										Pourquoi choisir YOUDOM-CARE ?
									</h2>
									<p class="margin-top-default text text_lg">
										La satisfaction de nos clients est au cœur de notre attention
									</p>
									<ul class="margin-top-default list list_10px list_bullet-color_blue">
												<li>
													<h4 class="heading heading__lvl4">GARANTIE</h4>
													<span class="text" style="color:black;">Un(e) auxiliaire de vie unique et adapté à vos besoins
													C’est pourquoi, nous sélectionnons des hommes et des femmes professionnels, diplômés avec des références vérifiées pour un service
													sur-mesure et adapté à vos besoins.</span>
												</li>

												<li>
													<h4 class="heading heading__lvl4">TRANQUILLITÉ D’ESPRIT</h4>
													<span class="text" style="color:black;">Fini les rendez-vous manqués ou les congés pour le suivi médical de votre proche.
													Vous pouvez désormais travailler en toute quiétude sachant que votre proche est  entre de bonnes mains.
													</span>
												</li>
											</ul>
								</div>
						</div>
					</div>

				</section>

				<section class="lp-banking-track-cashflow" style="margin-top:-10%">
					<div class="container">

						<div class="padding-top-sm padding-bottom-sm section-body_margin-top lp-banking-track-cashflow__body">
							

							<div class="lp-banking-track-cashflow__content">

									<ul class="margin-top-default list list_10px list_bullet-color_blue">
												<li>
													<h4 class="heading heading__lvl4">PROFESSIONNALISME</h4>
													<span class="text" style="color:black;">Nos intervenants sont hautement qualifiés 
														pour vous apporter un service de très haute qualité. Professionnalisme, 
														confidentialité et respect sont les valeurs fondamentales de chaque service 
														que nous offrons.</span>
												</li>

												<li>
													<h4 class="heading heading__lvl4">UN SERVICE SUR MESURE</h4>
													<span class="text" style="color:black;">
														Chez YOUDOM-CARE, nous savons que les soins complets aux personnes âgées vont bien 
														au-delà de la simple assistance aux besoins de base. A cet effet, nous concevons 
														un plan de soins adapté aux besoins de chaque client.
													</span>
												</li>

												<li>
													<h4 class="heading heading__lvl4">ÉCONOMIE</h4>
													<span class="text" style="color:black;">
														Crédit d’impôt de 50%* des sommes versées.
													</span>
												</li>

												<li>
													<h4 class="heading heading__lvl4">Formation</h4>
													<span class="text" style="color:black;">
														Formation continue de nos intervenants, auxiliaires de vie 
													</span>
												</li>

												
									</ul>
							</div>

							<div class="image lp-banking-track-cashflow__image-wrap">
								<ul class="margin-top-default list list_10px list_bullet-color_blue">
									<li>
										<h4 class="heading heading__lvl4">PRIVILÈGES</h4>
										<span class="text" style="color:black;">
											Un suivi d’exception au quotidien et un diagnostic renforcé qui font la différence !
										</span>
									</li>

									<li>
										<h4 class="heading heading__lvl4">Des intervenants fiables </h4>
										<span class="text" style="color:black;">Nous vous garantissons toujours la même aide à 
											domicile ou auxiliaire de vie, formée et sélectionnée pour ses qualités humaines qui 
											interviendra auprès de votre proche.
										</span>
									</li>

									<li>
										<h4 class="heading heading__lvl4">Ambiance familiale </h4>
										<span class="text" style="color:black;">Nous traitons vos proches comme les membres de 
											notre famille. Nous abordons tous les aspects de la vie d’une personne âgée, malade, 
											en situation d’handicap en nous efforçant d’enrichir sa journée de toutes les manières
											 possibles !
										</span>
									</li>
									<li>
										<h4 class="heading heading__lvl4">Coordination de soin</h4>
										<span class="text" style="color:black;">
											Coordination avec les intervenants médicaux et paramédicaux
										</span>
									</li>
								</ul>
							</div>
						</div>
					</div>

				</section>





</section>

@endsection
