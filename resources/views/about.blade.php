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

								<section class="main-invoicing">

					<div class="container container_card">

						<div class="section-body section-body_card section-body_card_pink section-body_card_margin-top main-invoicing__body">

							<h2 class="heading heading__lvl1 color_blue">Des services à la personne pour toutes et tous
							</h2>
							<p class="margin-top-xs text">La mission de Youdom-Care :  <br> Accompagner les particuliers en perte d'autonomie dans leurs besoins de personne: <br>
								<span class=""> Youdom-Care accompagne pour le maintien à domicile d'une personne âgée, en perte d'autonomie ou en situation de handicap et
									vous permet une déduction d'impôt</span></b></p>

								<p class="margin-top-xs text">Nos coordinateurs vous accompagnent pour vos besoins ponctuels ou permanents d'aide à domicile. <br>
									<a href="{{ route('services') }}">Nos services</a>  d'aide à la personne s'adressent à tous, quels que soient vos besoins :</p>

							<div class="margin-top-lg main-invoicing__content-wrap">

								<div class="main-invoicing__info">

									<ul class="main-invoicing__list">

										<li><div class="main-invoicing__list-icon-wrap">
											<svg class="icon  icon_sm"><use href="#hourglass"></use></svg></div>
											<p class="margin-top-xs text"> <b>Perte d'autonomie</b>  débutante ou confirmée chez la <b>personne âgée </b> </p>
										</li>

										<li>
											<div class="main-invoicing__list-icon-wrap"><svg class="icon  icon_sm"><use href="#link_ver-2"></use></svg></div>
											<p class="margin-top-xs text">Sortie d'hospitalisation</p>
										</li>

										<li>
											<div class="main-invoicing__list-icon-wrap"><svg class="icon  icon_sm"><use href="#idea"></use></svg></div>
											<p class="margin-top-xs text">Situation de handicap</p>
										</li>

										<li>
											<div class="main-invoicing__list-icon-wrap"><svg class="icon  icon_sm"><use href="#invoice"></use></svg></div>
											<p class="margin-top-xs text">Et bien plus encore !</p>
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

									<h2 class="heading heading__lvl1 lp-banking-track-cashflow__heading text-center">
										Pourquoi choisir YOUDOM-CARE ?
									</h2>
									<p class="margin-top-default text text_lg">
										La satisfaction de nos clients est au cœur de notre attention
									</p>
									<ul class="margin-top-default list list_10px list_bullet-color_blue">
												<li>
													<h4 class="heading heading__lvl4">GARANTIE</h4><span class="text">Un(e) auxiliaire de vie unique et adapté à vos besoins
													C’est pourquoi, nous sélectionnons des hommes et des femmes professionnels, diplômés avec des références vérifiées pour un service
													sur-mesure et adapté à vos besoins.</span>
												</li>

												<li>
													<h4 class="heading heading__lvl4">TRANQUILLITÉ D’ESPRIT</h4>
													<span class="text">Fini les rendez-vous manqués ou les congés pour le suivi médical de votre proche.
													Vous pouvez désormais travailler en toute quiétude sachant que votre proche est  entre de bonnes mains.
													</span>
												</li>
											</ul>
								</div>
						</div>
					</div>

				</section>
                <div class="container mt-5">
					<h1 class="text-center ">NOTRE CHARTE QUALITÉ</h1>
                    <p class="text-center">La qualité au cœur de toutes nos prestations</p>
					<div class="container overflow-hidden text-center mt-5">
						<div class="row gy-5 ">
						    <div class="col-6 ">
                                <div class="p-4  border bg-white rounded-5 shadow mt-2">
                                    <img src="{{ asset('assets/img/care.png') }}" class="w-25" />
                                    <div class="container mt-4">
                                        <h3>YOUDOM-CARE</h3>
                                        <p style="text-align: justify">Choisir YOUDOM-CARE , c’est s’entourer de vrais professionnels et dont le seul objectif est  la satisfaction des clients </p>
                                    </div>

                            </div>
						</div>
						<div class="col-6">
							<div class="p-3  border bg-white rounded-5 shadow">
                                <img src="{{ asset('assets/img/enterprise.png') }}" class="w-25" />

                                <div class="container mt-4">
                                    <h4>L’HUMAIN AU CŒUR DE L’ENTREPRISE</h4>
                                    <p class="fs-6" style="text-align: justify">Nous mettons en place des pratiques de management valorisant le travail exécuté et la personne elle-même.
                                        Youdom-care  motive ses collaborateurs à aller toujours plus loin dans l’excellence.</p>
                                </div>
                            </div>
						  </div>

                          <div class="container overflow-hidden text-center ">
                            <div class="row gx-5">
                              <div class="col">
                                <div class="p-4  border bg-white rounded-5 shadow mt-3">
                                    <img src="{{ asset('assets/img/confidential-folder.png') }}" class="w-25" />

                                    <div class="container mt-4">
                                        <h4>Confidentialité. Respect. Discrétion.</h4>
                                        <p style="text-align: justify">Nous Respectons la vie privée du client inscrit sur Youdom tout en faisant évoluer les pratiques pour améliorer leur satisfaction</p>
                                    </div>
                              </div>
                              </div>
                              <div class="col">
                                <div class="p-3  mt-3 border bg-white rounded-5 shadow">
                                    <img src="{{ asset('assets/img/customer-service-help-svgrepo-com.svg') }}" class="w-25" />

                                    <div class="container mt-4">
                                        <h4>Accueil. Disponibilité. Réactivité</h4>
                                        <p style="text-align: justify">Nous repondons de manière rapide et adaptée à chaque demande pour ainsi vous Fournir des informations complètes et fiables tout au long de la prestation</p>
                                    </div>
                              </div>
                              </div>
                            </div>
                          </div>
						</div>
					  </div>
				  </div>

                <div class="card mt-5">

                    <div class="card-body bg-dark">

					  <section class="fdb-block">
						<div class="container mt-5">
						  <div class="row align-items-center">
							<div class="col-12 col-md-12 col-lg-6 col-xl-5">
							  <h1 class='text-white'>Nos Engagements</h1>
							  <p class="lead mb-5 text-white">Notre équipe vous accompagne dans toutes vos démarches et vous propose des solutions adaptées à vos besoins .
								Nos auxiliaires de vie sont diplômés et expérimentés et détiennent une expérience solide dans le domaine du maintien à domicile  des personnes en perte d’autonomie
							  </p>

							 <a href="clients/rejoindre"> <button type="button" class="btn btn-primary btn-lg">Nous Rejoindre</button></a>
							<a href="clients/franchise"><button type="button" class="btn btn-secondary btn-lg" style="margin-left: 12px;">Devenez Partenaire</button></a>
							</div>
							<div class="col-12 col-md-8 m-auto ml-lg-auto mr-lg-0 col-lg-6 pt-5 pt-lg-0">
							  <img alt="image" class="img-fluid " src="{{ asset("assets/img/pngegg.png") }}" style="width: 75%;">
							</div>
						  </div>
						</div>
					  </section>

                    </div>
                  </div>




</section>

@endsection
