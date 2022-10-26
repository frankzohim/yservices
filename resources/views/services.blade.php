@extends('layouts.master')
@section('title', __('Nos services – Youdom Care'))

@section('content')
<style>
	.color-text{
        color: #30005B;
    }
    .color-orange{
        color:#D9644A;
    }
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

<section class="py-6 md:py-20">
	<div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
		<div class="flex flex-wrap items-center">
								 <div class="w-full md:w-1/2 mt-2 md:mt-0" >
				<img data-animate="animate-right"  style="border-radius: 15px;" width="95%" 
										src="{{ asset('_next/static/media/services/slide-service-2.jpg') }}">
			</div>
			<div class="w-full md:w-1/2 md:pr-20" style="text-align: center">

				<h3 data-animate="animate-left" class=" text-xl md:text-4xl font-bold 
						text-indigo-800 color-text" style="line-height: 1.2">
					Nos Services   
					<span class="text-yellow-500 color-orange"> d'aide à domicile</span>
				</h3>
			
											
				<br>

				
				<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">  
					Découvrez nos services de maintien à domicile sur mesure et adapté à vos besoins.
					Un accompagnement garanti 24h/24 et 7 jours /7
				 </span>
									

				 <div class="mt-3 text-gray-700 font-semibold">
					<a href="{{ route('devis.form') }}">
							   <button  class="px-3 py-3 text-lg bg-yellow-500 
							   font-bold text-white rounded-full" 
							   style="background-color: #30005B"> 
							   Demandez un devis </button>
					  </a>

		  </div>
										 
			   
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
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">
							Présence de nuit<span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Présence de nuits pour personnes âgées</li>
										<li class="text">Garde de jour  </li>
										<li class="text">Présence de nuits auprès des enfants malades   </li>

									</ul>
									<br>
									<button class="btn btn-primary rounded-full" id="btn1" style="background-color: #30005B" type="button" onclick="openclose('btn1','accordion-style-01')">
										Voir plus
									</button>
									<div id="accordion-style-01" style="display: none">
										<ul class="margin-top-sm list list_star" >

											<li class="text">Garde de nuit pour personnes âgées et personnes en situation d’handicap </li>
											<li class="text">Garde 24h sur 24  </li>
										</ul>
									</div>
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
										
									</ul>
									<br>
									<button class="btn btn-primary rounded-full" id="btn2" style="background-color: #30005B" type="button" onclick="openclose('btn2','accordion-style-02')">
										Voir plus
									</button>
									<div id="accordion-style-02" style="display: none">
										<ul class="margin-top-sm list list_star" >
											<li class="text">Promenades et loisirs  </li>
											<li class="text">Aide à la mobilité </li>
											<li class="text">Sorties véhiculées  </li>
											<li class="text">Lecture, discussion  </li>
											<li class="text">RDV médicaux  </li>
										</ul>
									</div>
									
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
							<br>
							<button class="btn btn-primary rounded-full" id='btn3' 
							style="background-color: #30005B" type="button" onclick="openclose('btn3','accordion-style-03')">
								Voir plus
							</button>
							<div id="accordion-style-03" style="display: none">
								<ul class="margin-top-sm list list_star" >

									<li class="text">Démarches administrative</li>
									<li class="text">Loyer , factures   </li>
								</ul>
							</div>
							
						</p>
						</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="feature-box media-box">
						<div class="fbox-media">
						<img src="{{ asset('_next/static/media/services/tele-assistance-personnes-agees.png') }}" alt="Téléassistance personnes âgées ">
						</div>
						<div class="fbox-content px-0">
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">Téléassistance personnes âgées <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
									<ul class="margin-top-sm list list_star">

										<li class="text">Détecteur de chute et géolocalisation </li>
										<li class="text">Livré configuré et prêt à l'emploi </li>
										<li class="text">Mise en haut parleur automatique sur le médaillon  </li>
										
									</ul>
									<br>
									<button class="btn btn-primary rounded-full" id='btn8' 
									style="background-color: #30005B" type="button" onclick="openclose('btn8','accordion-style-08')">
										Voir plus
									</button>
									<div id="accordion-style-08" style="display: none">
										<ul class="margin-top-sm list list_star" >

											<li class="text">Modification facile des paramétrages sur l'espace client</li>
											<li class="text">Fonctionne à l'intérieur du domicile et à l'extérieur  </li>
											<li class="text">Se porte au choix en médaillon, bracelet, clip ceinture ou brassard  </li>
											<li class="text">Alerte en temps réel les contacts d'urgences par appel téléphonique (rappel si pas décroché)  </li>
											<li class="text">Totalement autonome grâce à sa carte SIM. Pas besoin de téléphone portable ou fixe ni de Wi-Fi  </li>
										</ul>
									</div>
									
									  
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
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">
							TRANSPORT VEHICULE (PMR) <span class="subtitle" style="color:#1b138a"></span></h3>
						<p>
							<ul class="margin-top-sm list list_star">

										<li class="text">Des véhicules TPMR adaptés à vos besoins </li>
										<li class="text">Accompagnement par une aide à domicile  </li>
										<li class="text">Location véhicules adaptés avec chauffeur   </li>
										
									</ul>
									<br>
									<button class="btn btn-primary rounded-full" id='btn9' 
									style="background-color: #30005B" type="button" onclick="openclose('btn9','accordion-style-09')">
										Voir plus
									</button>
									<div id="accordion-style-09" style="display: none">
										<ul class="margin-top-sm list list_star" >

											<li class="text">Transport de porte-à-porte  </li>
											<li class="text">Véhicules accessibles aux personnes à mobilité réduite sur demande au moment de réservation  </li>
											<li class="text">Service assuré 7j :7 de 6 h à 21h  </li>
										</ul>
									</div>
								
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
						<h3 style="color: #E84347; font-weight:700; font-size:15px; ">
							Aide aux enfants handicapés ou malades <span class="subtitle" style="color:#1b138a"></span></h3>
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
								<h3 style="color: #E84347; font-weight:700; font-size:15px; ">
									Aide à la mobilité <span class="subtitle" style="color:#1b138a"></span></h3>
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
					
					<div class="col-md-4">
						<div class="feature-box media-box">
							<div class="fbox-media">
							<img src="{{ asset('_next/static/media/services/assistance-informatique.png') }}" alt="Why choose Us?">
							</div>
							<div class="fbox-content px-0">
								<h3 style="color: #E84347; font-weight:700; font-size:15px; ">
									Assistance Informatique <span class="subtitle" style="color:#1b138a"></span></h3>
								<p>
									<ul class="margin-top-sm list list_star">

												<li class="text">Assistance et dépannage informatique </li>
												<li class="text">Aide à l’utilisation des outils informatique  </li>
												
												
									</ul>
									<br>
									<button class="btn btn-primary rounded-full" id='btn10' 
									style="background-color: #30005B" type="button" onclick="openclose('btn10','accordion-style-10')">
										Voir plus
									</button>
									<div id="accordion-style-10" style="display: none">
										<ul class="margin-top-sm list list_star" >
											<li class="text">Installation et configuration de vos ordinateurs   </li>
											<li class="text">Installation de box et applications  </li>
											<li class="text">S’initier, se former à l’utilisation d’un ordinateur, tablette, smartphone </li>
										</ul>
									</div>
								</p>
							</div>
						</div>
					</div>
			</div>
		</div>
		
	</section>
	
	<script>
		function openclose(btn,id){
			console.log('here in openclose');
			console.log(document.getElementById(id).style.display);
			if(document.getElementById(id).style.display  == "none"){
				document.getElementById(id).style.display  = "block";
				document.getElementById(btn).innerHTML = 'Voir moins';
			}
				
			else{
				document.getElementById(id).style.display  = "none"
				document.getElementById(btn).innerHTML = 'Voir plus';
			}
				

		}
	</script>




@endsection
