@extends('layouts.master')
@section('title', __('Fonctionnement - Youdom Services'))

@section('content')

		<style>

    .content-wrap{position:relative;padding:80px 0;overflow:hidden}

    .nav-tabs{border:none}
    .nav-tabs>li.nav-item{display:inline-block;float:none;margin:0;padding:0 20px}
    .nav-tabs>li.nav-item>a.nav-link{border:none;margin-bottom:0}
    .nav-tabs>li.nav-item>a.nav-link{border-bottom:1px solid transparent}
    .nav-tabs>li.nav-item>a.nav-link.active,.nav-tabs>li.nav-item>a.nav-link.active:hover,.nav-tabs>li.nav-item>a.nav-link:hover{background:0 0;border-color:#222;color:#222;cursor:pointer}
    .nav-tabs.nav-tabs-light>li.nav-item>a.nav-link.active,.nav-tabs.nav-tabs-light>li.nav-item>a.nav-link.active:focus,.nav-tabs.nav-tabs-light>li.nav-item>a.nav-link:focus,.nav-tabs.nav-tabs-light>li.nav-item>a.nav-link:hover{border-bottom:1px solid #fff;color:#fff}
    

    .tab-style-01 .nav-tabs>li.nav-item{padding:0 35px}

    .tab-style-01 .nav-tabs>li.nav-item>a.nav-link{padding:0;margin-left:25px;position:relative;border-bottom:none!important}
    .tab-style-01 .grid-filter.nav-tabs>li.nav-item>a.nav-link{margin-left:0}
    .tab-style-01 .nav-tabs>li.nav-item .tab-border{width:0;height:2px;display:block;margin-top:5px;opacity:0;visibility:hidden;transition-duration:.5s}
    .tab-style-01 .nav-tabs>li.active .tab-border,.tab-style-01 .nav-tabs>li.nav-item>a.nav-link.active+.tab-border{opacity:1;width:100%;visibility:visible}
    .tab-style-01 .nav-tabs>ul{counter-reset:slideNum}
    .tab-style-01 .nav-tabs>li{counter-increment:slideNum;line-height:16px}
    .tab-style-01 .nav-tabs>li.nav-item>a.nav-link:before{content:"0"counter(slideNum) ".";position:absolute;left:-25px}
    .tab-style-01 .grid-filter.nav-tabs>li.nav-item>a.nav-link:before{display:none}
    .tab-style-01 .nav-tabs>li:last-child{border-right:none;padding-right:0}
    .tab-style-01 .nav-tabs>li:first-child{padding-left:0}
    .tab-style-01.without-number .nav-tabs>li.nav-item>a.nav-link:before{content:""}
    .tab-style-01.without-number .nav-tabs>li.nav-item>a.nav-link{margin-left:0}@media(hover:hover){.tab-style-01 .nav-tabs>li.nav-item>a.nav-link:hover+.tab-border{opacity:1;width:100%;visibility:visible}}
    .alt-font{font-family:Poppins,sans-serif}
    .alt-font strong{font-family: Poppins,sans-serif; font-weight:600}
    .font-weight-600{font-weight:600!important}
    .position-relative {
        position: relative!important;
        }

    .bg-extra-dark-gray{background-color:#232323}
    .tab-content>.tab-pane{padding:0 15px}
    .feature-box .text-end{-webkit-box-align:end;-ms-flex-align:end;align-items:flex-end}
    section .big-section{padding:160px 0}
    .margin-six-bottom{margin-bottom:6%}
    .margin-7-rem-bottom{margin-bottom:7rem}
    .text-medium{font-size:14px;line-height:20px}

    .text-gradient-sky-blue-pink{background:linear-gradient(to right,#556fff,#556fff,#e05fc4,#f767a6,#ff798e);-webkit-background-clip:text;-webkit-text-fill-color:transparent}.text-gradient-sky-blue-dark-pink{background:linear-gradient(to right,#5065da,#556fff,#c557ad,#e65f9a,#e66176);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
    .text-gradient-sky-blue-pink-2{background:linear-gradient(to right top,#6670ed,#556fff,#d45eba,#f767a6,#f5667d);-webkit-background-clip:text;-webkit-text-fill-color:transparent}
    .margin-15px-bottom{margin-bottom:15px}

    img {
        max-width: 100%;
        height: auto;
    }

    img, svg {
        vertical-align: middle;
    }

    a.nav-link{
        color: #5D00F4;
        font-size:15px;
        font-family: Poppins, sans-serif;
    }

    a.nav-link.active{
        color: #F65155;
        font-size:15px;
        font-family: Poppins, sans-serif;
    }

  </style>
	<section class="py-5">
		<div class="container">
		  <div class="row">
			<div class="row text-center my-sm-5 mt-5">
			  <div class="col-lg-10 mx-auto">
				<h2 class="text-primary text-gradient mb-0" style="font-family: Open Sans; font-weight:bold; font-size:36px;">Notre fonctionnement </h2>

				<p class="lead" style="font-family: Open Sans; font-weight:400; font-size:20px; color:rgb(103,116,142)">
					Nous proposons des services à domicile sur mesure, assurés par des auxiliaires de vie professionnelles, 
					des aides-soignants (es) avec pour seul souci constant de rendre le quotidien des personnes âgées ou personnes en situation handicap 
					plus agréable et de faciliter leur maintien à domicile. </p>
			  </div>
		
			   <div class="col-lg-12 mx-auto" style="margin-top:10px">
						<h2 class="" style="font-family: Open Sans; font-weight:700; font-size:25px; color:rgb(89,78,230)">Comment fonctionne la mise en place d’une prestation d’aide à domicile chez YOUDOM-CARE </h2>
			  </div>

			</div>
		  </div>
		</div>
	</section>
	
	
	
	
		 <!-- start section -->
        
        <section class="big-section">
            <div class="container ">
                <div class="row justify-content-center">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                        
                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="planning-tab" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/4136673.jpg') }}" alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6 text-center text-sm-start">

                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 30px;">Evaluation des besoins</h5>

                                        <p class="w-85 lg-w-100" style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
																					 <ul class ="margin-top-sm list list_star">
																							 <li> Ecoute de la demande et explication des missions à réaliser </li>
																							 <li> Rencontre au domicile avec les bénéficiaires pour identifier les besoins gratuitement </li>
																							 <li> Présentation des aides financières et aide au montage des dossiers </li>
																							 <li> 50 % de réduction d’impôt </li> 
																					 </ul>
                                        </p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->
                            

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
		
		<!-- start section -->
        
        <section class="big-section" style="margin-top:100px;">
            <div class="container ">
                <div class="row justify-content-center">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                       
                        <div class="tab-content">
                            
                            <!-- start tab item -->
                            <div id="research-tab" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                   
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">
                                      
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                       style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 30px;">Elaboration d’un devis personnalisé</h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                       Nous déterminons ensemble la durée, la fréquence, les jours, les heures et le contenu des interventions. 
																				</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
									
									 <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/fonctionnement4.png') }}" alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->
                           

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
		
				 <!-- start section -->
        
        <section class="big-section" style="margin-top:100px;">
            <div class="container ">
                <div class="row justify-content-center">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                       
                        <div class="tab-content">
                           
                            <!-- start tab item -->
                            <div id="target-tab" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/fonctionnement3.png') }}" alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">

                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 25px;">
																				Sélection d’un(e) intervenant (e) qualifié(e) ,formé(e) et dédié(e) à vos attentes</h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                       Afin d’établir une relation de confiance et offrir un service sur-mesure et stable, la même personne interviendra à chaque fois (sauf absence)</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->
                            

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
		
				 <!-- start section -->
        
        <section class="big-section" style="margin-top:100px;">
            <div class="container ">
                <div class="row justify-content-center">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                       
                        
                            <!-- start tab item -->
                            <div id="campaign-tab" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                   
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">

                                        
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 35px;">Confiance & convivialité</h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                       Avant le début des prestations, rencontre et présentation au domicile l’intervenant(e) sélectionné(e).</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
									
									 <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/3054191.jpg') }} " alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->

                            

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
		
				 <!-- start section -->
        
        <section class="big-section" style="margin-top:100px;">
            <div class="container ">
                <div class="row justify-content-center">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                        
                        <div class="tab-content">

                            <!-- start tab item -->
                            <div id="implication-tab" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/fonctionnement1.png') }} " alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">

                                        
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 35px;">Un planning qui s'adapte à l'évolution de vos besoins </h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                       Le planning des interventions à votre domicile pourra s’adapter à l’évolution de vos besoins.</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->
                           
                           

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
		
				 <!-- start section -->
        
        <section class="big-section" style="margin-top:100px;">
            <div class="container ">
                <div class="row justify-content-center">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                       
                        <div class="tab-content">
                            
                           
                            <!-- start tab item -->
                            <div id="suivi-tab" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                   
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">

                                        
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 35px;">Suivi et contrôle qualité régulier </h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                       Afin de garantir un service conforme aux attentes de nos bénéficiaires, des enquêtes et des visites sont régulièrement réalisées.
																				Un interlocuteur unique, de la prise de contact à la fin de la durée du contrat, s’informer régulièrement de l’évolution des besoins 
																				de la personne aidée, âgées ou en situation de handicap
																				Ce qui signifie que nous pouvons, en cours de contrat, adapter la prestation initialement 
																				mise en place : organisation des interventions, tâches à réaliser, qualification du personnel, etc</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
									
									 <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/fonctionnement6.png') }} " alt="" />
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
		
				 <!-- start section -->
        
        <section class="big-section" style="margin-top:100px;">
            <div class="container ">
                <div class="row justify-content-center">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                        
                        <div class="tab-content">
                            
														 <!-- start tab item -->
                            <div id="protection-tab" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/fonctionnement2.png') }} " alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">

                                        
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 35px;">La protection des données (RGPD) </h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                       Toutes les données concernant le ou la bénéficiaire font l’objet d’un traitement informatisé dans les conditions fixées par le 
																			 règlement général de la protection des données(RGPD) Les données médicales sont soumises au secret professionnel, auquel est tenu l’ensemble du personnel</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
   
@endsection
