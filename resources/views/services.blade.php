@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')
<style>
	.content-wrap{position:relative;padding:80px 0;overflow:hidden}

	.feature-box{position:relative;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;margin-left:-.75rem;margin-right:-.75rem}
.feature-box:first-child{margin-top:0}

.media-box{padding:0;margin-left:0;margin-right:0;-ms-flex-direction:column;flex-direction:column}
.media-box .fbox-media{margin:0 0 1.5rem}
.media-box .fbox-media,.media-box .fbox-media a,.media-box .fbox-media img{position:relative;display:block;width:100%;height:auto}
.media-box .fbox-media iframe{display:block}
.media-box p{margin-top:1rem}.media-box 
.fbox-content{-ms-flex-preferred-size:auto}
.media-box.fbox-bg .fbox-media{margin:0}
.media-box.fbox-bg .fbox-content{padding:1.5rem;background-color:#fff;border:1px solid #e5e5e5;border-top:0;border-radius:0 0 5px 5px}
.media-box.fbox-bg .fbox-media img{border-radius:5px 5px 0 0}

.fbox-content{-ms-flex-preferred-size:0;flex-basis:0;-ms-flex-positive:1;flex-grow:1;min-width:0;max-width:100%;padding:0 .75rem}
.fbox-content h3{font-size:16px;font-weight:600;font-family:Poppins,sans-serif;text-transform:uppercase;margin-bottom:0;color:#333}
.fbox-content p{font-family:sans-serif;.5rem;margin-bottom:0;color:#999; font-size: 8px; font-weight: 400;}
.fbox-content .before-heading{font-size:14px}
.fbox-content-sm h3,.fbox-content-sm p{font-size:14px}
.fbox-content-sm .before-heading{font-size:12px}
.fbox-content-lg h3{font-size:20px}
.fbox-content-lg p{font-size:18px;margin-top:.75rem}
.fbox-content-lg .before-heading{font-size:16px}.fbox-sm{margin-left:-.5rem;margin-right:-.5rem}.fbox-sm .fbox-icon{width:3rem;height:2rem;padding:0 .5rem}.fbox-sm .fbox-icon i{font-size:16px;line-height:2rem}.fbox-sm .fbox-content{padding:0 .5rem}.fbox-lg .fbox-icon{width:7.5rem;height:6rem}.fbox-lg .fbox-icon i{font-size:40px;line-height:6rem}.fbox-xl .fbox-icon{width:9.5rem;height:8rem}.fbox-xl .fbox-icon i{font-size:72px;line-height:8rem}.fbox-outline .fbox-icon a{border:1px solid #1abc9c;padding:.25rem;border-radius:50%}.fbox-outline .fbox-icon i{line-height:3.5rem}.fbox-outline.fbox-sm .fbox-icon i{line-height:1.5rem}.fbox-outline.fbox-lg .fbox-icon i{line-height:5.5rem}.fbox-outline.fbox-xl .fbox-icon i{line-height:7.5rem}.fbox-rounded .fbox-icon{border-radius:3px!important}.fbox-rounded .fbox-icon i,.fbox-rounded .fbox-icon img{border-radius:3px!important}.fbox-rounded.fbox-lg .fbox-icon{border-radius:4px!important}.fbox-rounded.fbox-lg .fbox-icon i,.fbox-rounded.fbox-lg .fbox-icon img{border-radius:4px!important}.fbox-rounded.fbox-xl .fbox-icon{border-radius:6px!important}.fbox-rounded.fbox-xl .fbox-icon i,.fbox-rounded.fbox-xl .fbox-icon img{border-radius:6px!important}.fbox-light.fbox-outline .fbox-icon a{border-color:#e5e5e5}.fbox-light .fbox-icon i,.fbox-light .fbox-icon img{border:1px solid #e5e5e5;background-color:#f5f5f5;color:#444}.fbox-dark.fbox-outline .fbox-icon a{border-color:#444}.fbox-dark .fbox-icon i,.fbox-dark .fbox-icon img{background-color:#333}.fbox-border .fbox-icon a{border:1px solid #1abc9c;border-radius:50%}.fbox-border .fbox-icon i,.fbox-border .fbox-icon img{border:none;background-color:transparent!important;color:#1abc9c}.fbox-border.fbox-light .fbox-icon a{border-color:#e5e5e5}.fbox-border.fbox-light .fbox-icon i,.fbox-border.fbox-light .fbox-icon img{color:#888}.fbox-border.fbox-dark .fbox-icon a{border-color:#333}.fbox-border.fbox-dark .fbox-icon i,.fbox-border.fbox-dark .fbox-icon img{color:#444}.fbox-plain .fbox-icon{border:none!important}.fbox-plain .fbox-icon i,.fbox-plain .fbox-icon img{border:none;background-color:transparent!important;color:#1abc9c;border-radius:0}.fbox-plain .fbox-icon i{font-size:48px;line-height:1}.fbox-plain.fbox-image .fbox-icon{width:auto}.fbox-plain.fbox-image .fbox-icon img{width:auto;display:inline-block}.fbox-plain.fbox-light .fbox-icon i,.fbox-plain.fbox-light .fbox-icon img{color:#888}.fbox-plain.fbox-dark .fbox-icon i,.fbox-plain.fbox-dark .fbox-icon img{color:#444}.fbox-plain.fbox-sm .fbox-icon i{font-size:32px}.fbox-plain.fbox-lg .fbox-icon i{font-size:72px}.fbox-plain.fbox-xl .fbox-icon i{font-size:96px}.fbox-center{-ms-flex-direction:column;flex-direction:column;-ms-flex-align:center;align-items:center;text-align:center}.fbox-center .fbox-icon{margin-bottom:1.5rem}.fbox-center .fbox-content{-ms-flex-preferred-size:auto}
.fbox-content+.fbox-icon{margin-top:1.5rem;margin-bottom:0!important}
.fbox-content h3 span.subtitle{display:block;margin-top:5px;color:#444;font-weight:300;text-transform:none}

.text{font-size: 14px;}

.see-more-a{
	text-decoration: none;
}

.see-more{
	font-size: 14px;
	font-weight: bold;
	text-decoration: none;
}


</style>

	<section>

		<div class="container content-wrap">
				<div class="row justify-content-center">

					<div class="col-md-8" >
						<h2 class="heading heading__lvl1 stillforce-heading-red">Nos Services <span style="color:#594EE6;">d'aide à domicile</span></h2>
					</div>
						
				</div>
				
		</div>
			
	</section>
	<section class="fdb-block content-wrap" style="margin-bottom: -80px" >
  <div class="container">
    <div class="row ">
			
				<br>
      <div class="col-6 col-md-6 m-auto ml-lg-auto mr-lg-0 col-lg-6 pt-5 pt-lg-0">
        <img alt="image" class="img-fluid" src="{{ asset("_next/static/media/documentation.png") }}">
      </div>
			<div class="col-6 col-md-6 col-lg-6 col-xl-5">

        <p class="lead mb-5">Découvrez nos services de maintien à domicile adaptés à vos besoins et sur-mesure. <br> Un accompagnement 24h/24 et 7J/7..</p>

        	<a href="{{ route('devis.form') }}" class="margin-top-default button button_w-m-full" style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
									Demandez un devis
								</a>
      </div>
    </div>
  </div>
</section>



	<section id="content">
		<div class="content-wrap">
			<div class="container clearfix">
				<div class="row col-mb-50">
				
					<div class="col-md-4">
						<div class="feature-box media-box">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/aide-autonomie.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Aide à l’autonomie / Geste du quotidien  <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Aide au lever et au coucher </li>
										<li class="text">Aide à la toilette, coiffure, maquillage, habillage </li>
										<li class="text">Aide-ménagère   </li>

									</ul>
						</p>
						</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="feature-box media-box flex-column">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/garde-precense.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Gardes non médicalisées / Présence de nuit<span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Présence de nuits pour personnes âgées</li>
										<li class="text">Garde de nuit pour personnes âgées et personnes en situation d’handicap  </li>
										<li class="text">Présence de nuits auprès des enfants malades   </li>

									</ul>
									<!-- start accordion item -->
									<div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s" style="margin-top:5px">
										<div class="panel-heading active-accordion">
											<a class="accordion-toggle collapsed see-more-a" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-01" aria-expanded="false">
												<div class="panel-title">
													<span class="see-more">
														Voir Plus
																						</span>
													<i class="indicator fas fa-angle-down"></i>
													</div>
													</a>
										</div>
										<div id="accordion-style-01" class="panel-collapse collapse" data-bs-parent="#accordion3">
													<div class="panel-body">
																						<ul class="margin-top-sm list list_star">

																							<li class="text">Garde de jour </li>
																							<li class="text">Garde 24h sur 24  </li>
																							
																						</ul>
												</div>
										 </div>
									 </div>
									<!-- end accordion item -->
						</p>
						</div>
						</div>
					</div>
	
						<div class="col-md-4">
						<div class="feature-box media-box flex-column">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/service-accompagnements.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Accompagnements<span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Accompagnements aux courses</li>
										<li class="text">Accompagnement culturel </li>
										<li class="text">Compagnies et stimulation  </li>
										<li class="text">Promenades et loisirs  </li>
									</ul>
									<!-- start accordion item -->
									<div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s" style="margin-top:5px">
										<div class="panel-heading active-accordion">
											<a class="accordion-toggle collapsed see-more-a" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-02" aria-expanded="false">
												<div class="panel-title">
													<span class="see-more">
														Voir Plus
																						</span>
													<i class="indicator fas fa-angle-down"></i>
													</div>
													</a>
										</div>
										<div id="accordion-style-02" class="panel-collapse collapse" data-bs-parent="#accordion3">
													<div class="panel-body">
																						<ul class="margin-top-sm list list_star">

																							<li class="text">Aide à la mobilité </li>
																							<li class="text">Sorties véhiculées  </li>
																							<li class="text">Lecture, discussion  </li>
																							<li class="text">RDV médicaux  </li>
																						</ul>
												</div>
										 </div>
									 </div>
									<!-- end accordion item -->
						</p>
						</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	
	<section id="content" style="margin-top:-100px;">
		<div class="content-wrap">
			<div class="container clearfix">
				<div class="row col-mb-50">
					
					<div class="col-md-4">
						<div class="feature-box media-box">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/aide-repas.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Aide aux repas <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Courses </li>
										<li class="text">Préparation des repas </li>
										<li class="text">Aide à la prise des repas   </li>
										<li class="text">Prise de médicament   </li>
										<li class="text">Alimentation-Surveillance des régimes  </li>
									</ul>
						</p>
						</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="feature-box media-box">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/service-retour-hospitalisation.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Retour à domicile après hospitalisation  <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Retour au domicile</li>
										<li class="text">Aide au quotidien</li>
										<li class="text">Soin à domicile</li>
										<li class="text">Aide aux courses et repas</li>
									</ul>
						</p>
						</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="feature-box media-box flex-column">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/aide-menagere.jpg') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Aide-ménagère<span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Ménage</li>
										<li class="text">Lessive- repassage </li>
										<li class="text">Entretien du logement </li>
									</ul>
						</p>
						</div>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	
		<section id="content" style="margin-top:-100px;">
		<div class="content-wrap">
			<div class="container clearfix">
				<div class="row col-mb-50 justify-content-center">
					
				
					
					<div class="col-md-4">
						<div class="feature-box media-box">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/assistance-administrative.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Assistance administrative <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Gestion du courrier </li>
										<li class="text">Classement des documents </li>
										<li class="text">Prise de rendez-vous  </li>
										
									</ul>
									<!-- start accordion item -->
									<div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s" style="margin-top:5px">
										<div class="panel-heading active-accordion">
											<a class="accordion-toggle collapsed see-more-a" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03" aria-expanded="false">
												<div class="panel-title">
													<span class="see-more">
														Voir Plus
																						</span>
													<i class="indicator fas fa-angle-down"></i>
													</div>
													</a>
										</div>
										<div id="accordion-style-03" class="panel-collapse collapse" data-bs-parent="#accordion3">
													<div class="panel-body">
																						<ul class="margin-top-sm list list_star">

																							<li class="text">Démarches administrative</li>
																							<li class="text">Loyer , factures   </li>
																						</ul>
												</div>
										 </div>
									 </div>
									<!-- end accordion item -->
						</p>
						</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="feature-box media-box">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/voyage.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Voyage & Evasion <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Sport, loisirs, vacances et handicap </li>
										<li class="text">Les vacances organisés  </li>
										<li class="text">Voyage organisé pour handicapé  </li>
										
									</ul>
									<!-- start accordion item -->
									<div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s" style="margin-top:5px">
										<div class="panel-heading active-accordion">
											<a class="accordion-toggle collapsed see-more-a" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-08" aria-expanded="false">
												<div class="panel-title">
													<span class="see-more">
														Voir Plus
																						</span>
													<i class="indicator fas fa-angle-down"></i>
													</div>
													</a>
										</div>
										<div id="accordion-style-08" class="panel-collapse collapse" data-bs-parent="#accordion3">
													<div class="panel-body">
																						<ul class="margin-top-sm list list_star">

																							<li class="text">Sorties organisées pour handicapés</li>
																							<li class="text">Tourisme pour handicap   </li>
																						</ul>
												</div>
										 </div>
									 </div>
									<!-- end accordion item -->
						</p>
						</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="feature-box media-box">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/transport-des-handicapes.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Transport et accompagnement de personnes handicapées et de personnes à mobilité réduite (PMR) <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Des véhicules TPMR adaptés à vos besoins </li>
										<li class="text">Accompagnement par une aide à domicile  </li>
										<li class="text">Location véhicules adaptés avec chauffeur   </li>
										
									</ul>
									<!-- start accordion item -->
									<div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s" style="margin-top:5px">
										<div class="panel-heading active-accordion">
											<a class="accordion-toggle collapsed see-more-a" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-09" aria-expanded="false">
												<div class="panel-title">
													<span class="see-more">
														Voir Plus
																						</span>
													<i class="indicator fas fa-angle-down"></i>
													</div>
													</a>
										</div>
										<div id="accordion-style-09" class="panel-collapse collapse" data-bs-parent="#accordion3">
													<div class="panel-body">
																						<ul class="margin-top-sm list list_star">
																							<li class="text">Transport de porte-à-porte  </li>
																							<li class="text">Véhicules accessibles aux personnes à mobilité réduite sur demande au moment de réservation  </li>
																							<li class="text">Service assuré 7j :7 de 6 h à 21h  </li>
																						</ul>
												</div>
										 </div>
									 </div>
									<!-- end accordion item -->
						</p>
						</div>
						</div>
					</div>

					
					<div class="col-md-4">
						<div class="feature-box media-box">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/aide-enfant.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Aide et accompagnement à domicile des enfants malades ou handicapés <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Aide à l’enfant malade </li>
										<li class="text">Aide à la vie sociale  </li>
										<li class="text">Aide à la famille   </li>
										
									</ul>
									
						</p>
						</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="feature-box media-box">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/aide-handicap-domicile.png') }}" alt="Why choose Us?">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Aide et accompagnement à domicile des personnes handicapées <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Aider aux actes du quotidien </li>
										<li class="text">Aider pour les repas et les courses  </li>
										<li class="text">Aider pour l'entretien du domicile   </li>
										<li class="text">Accompagner à la vie sociale   </li>
									</ul>

							
								
						   
						</p>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
	</section>
	
				




@endsection
