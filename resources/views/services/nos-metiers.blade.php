@extends('layouts.master')
@section('title', __('Nos metiers'))

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

	<div class="section" style="margin-top:-50px;">
		<div class="container content-wrap clearfix">
			<div class="heading-block topmargin-sm center">
				<h3><span class="text-xl md:text-5xl font-bold text-indigo-800 color-text" style="font-size:40px;"> 
					Nos</span>
					<span class="text-yellow-500 color-orange" 
                    style="font-weight:700; font-size:40px; line-height:59.5px;"> 
						M??tiers</span>
				 </h3>
				
			</div>
		</div>
	</div>
	<section class="py-0 md:py-20" style="margin-top: -35px;">
            <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 md:pr-20">
                        <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" style="line-height: 1.2">
                            Nos m??tiers en tant que 
                            <span class="text-yellow-500 color-orange"> intervenants ?? domicile</span>
                        </h1>
                        <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >

												<ul class="margin-top-default list list_10px list_star">
												<li>
													<h1 class="font-bold color-orange">Assistant m??nager</h1>
													
												</li>

												<li>
													<h4 class="font-bold color-orange">Auxiliaires de vie ?? domicile</h4>
													
												</li>
												<li>
													<h4 class="font-bold color-orange">Assistant de vie</h4>
													
												</li>
											</ul>

                        </h3>
											<div class="mt-3 text-gray-700 font-semibold">
												<a href="{{ route('join-us') }}">
														   <button  class="px-3 py-3 text-lg bg-yellow-500 
														   font-bold text-white rounded-full" 
														   style="background-color: #30005B"> 
														   Nous Rejoindre </button>
												  </a>

											</div>
                       
                    </div>
                    <div class="w-full md:w-1/2 mt-2 md:mt-0">
                        <img data-animate="animate-right" class="w-full "  style="border-radius: 10px; width:100%"
						src="{{ asset('_next/static/media/garde-nuit.jpg') }}">
                    </div>
                </div>               
            </div>
        </section>

<section class="main-intro-all" style="background-color: white;">
        <br>
        <!-- start section -->
        <section id="auxiliaire">
            <div class="container" style="">
                <div class="row ">

				</div>

                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">

                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="planning-tab" class="tab-pane fade in active show">
                                <div class="row">
                                     <div class="col-12 col-lg-12 col-md-12  text-sm-start">

                                        <h2 class="text-primary  mb-0" style="color:#374151; font-size:35px; font-weight:bold; font-family: Montserrat, sans-serif;">
                                            <span class="color-orange font-bold">I. Assistant  <span class="color-text">m??nager</span> </span>
                                        </h2>
                                    </div>
									<div class="col-12 col-lg-6 col-md-6  text-sm-start">
									<p class="">
										<span class="color-orange font-bold" style="font-size:20px; font-family: Montserrat, sans-serif;">  
											Les qualit??s requises pour ??tre assistant m??nager
										 </span>
										 
										<ul class="margin-top-sm list list_star" style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">

													<li class="text">Avoir une premi??re exp??rience en entretien de domicile </li>
													<li class="text">Capacit?? d???organisation et de prise d???initiative</li>
													<li class="text">Un bon sens relationnel </li>
													<li class="text">Une bonne connaissance et maitrise des techniques d???entretien et de nettoyage de la maison  </li>
													<li class="text">Une bonne connaissance et ma??trise des techniques de repassage </li>
													<li class="text">Un grand sens du service et de la discr??tion </li>
													<li class="text">Une disponibilit?? r??guli??re : minimum 24h par semaine </li>
													<li class="text">Un v??hicule et le permis B peuvent ??tre demand??s en fonction des zones d???intervention et des demandes des clients </li>
										</ul>
									</p>
									</div>
									<div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >

                                         <img class="img-rounded" src="{{ asset('_next/static/media/metier3.jpg') }}" alt="" />

                                        </p>
                                        
                                    </div>
                                </div>

                                <div class="row" style="margin-top: -70px;">

                                    <div class="col-lg-12 mx-auto">
                                        <p class="  ">
                                            <span class="color-orange font-bold" >Votre r??le</span><br>
                                                    <span class="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                                        Vous am??liorez le quotidien des clients de YOUDM-CARE en assurant en toute autonomie une propret??  r??guli??re et une hygi??ne parfaites de leur maison (a??rer les pi??ces, d??poussi??rer, nettoyer les sols, repassage???)
                                                    </span> 
                                                   <br><br> 
                                            <span class="color-orange font-bold" >Le poste</span><br>
                                                <span class="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                                    Ce m??tier demande une grande capacit?? d???adaptation ,un grand sens de devoir  et une application attentive aux menus d??taill??s du clients afin de r??pondre ?? ses besoins et exigences: nettoyage de la maison , courses, pr??paration des repas,  rangement, entretien du linge, repassage???
                                                    Expert dans son domaine ,l???assistant m??nager effectue des prestations de qualit?? gr??ce ?? ses comp??tences techniques mais aussi parce qu???il fait preuve de : sens du service, discr??tion, autonomie, capacit??s d???organisation et d???adaptation ?? diverses consignes
                                                    semaine, plusieurs activit??s (exemple : Assistant m??nager + Assistant de vie ou autre) et de r??aliser ainsi un temps plein avec le m??me employeur.
                                                    Sachez que l?????volution interne est un engagement fort au sein de soci??t??.
                                                </span>
                                                    
                                        </p>
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


        <section class="py-6 md:py-20">
            <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 md:pr-20">
                        <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" style="line-height: 1.2">
                            II. Aide ??
                            <span class="text-yellow-500 color-orange"> domicile</span>
                        </h1>
                        <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
                           ??tre aide ?? domicile, c???est se mettre au service d???une ou plusieurs personnes pour faciliter la vie quotidienne, et le maintien ?? domicile. Chaque jour, cette professionnelle doit mettre en ??uvre des comp??tences multiples :
							<ul class="margin-top-sm list list_star" style="color:#374151; font-size:15px; font-family: Montserrat, sans-serif;">

													<li class="text">Faire preuve d???empathie et de grandes capacit??s relationnelles, ??tre ?? l?????coute et bienveillante, faire preuve de patience </li>
													<li class="text">Ma??triser les protocoles sanitaires et conna??tre les produits d???entretien pour chacune des t??ches m??nag??res</li>
													<li class="text">Savoir utiliser diff??rents robots ??lectrom??nagers ou outils de jardinage </li>
													<li class="text">Respecter les r??gles d'hygi??ne et de propret?? </li>
													<li class="text">Conna??tre les gestes de premiers secours </li>
													<li class="text">Savoir adapter ses activit??s et fa??ons de faire selon les demandes de chaque client </li>
                                                    <li class="text">Pr??venir les accidents domestiques </li>
													<li class="text">Faire preuve de ponctualit?? et de politesse </li>
                                                </ul>
                                                
        
                        </h3>
                                                 
                       
                    </div>
                    <div class="w-full md:w-1/2 mt-2 md:mt-0">
                        <img data-animate="animate-right" class="w-full "  style="border-radius: 10px; width:100%"
                        src="{{ asset('_next/static/media/about/nurse-care-worker-with-older-man.webp') }}">
                    </div>
                </div>               
            </div>
        </section>
		
        <!-- start section -->
        <section id="auxiliaire">
            <div class="container" style="">
                <div class="row ">

				</div>

                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">

                        <div class="tab-content">
                            <!-- start tab item -->
                                <div class="row ">

                                    <div class="col-lg-12 mx-auto">
                                        <p class=" mb-1 ">
                                            <span class="color-orange font-bold" >Votre r??le</span><br>
                                                    <span class="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                                        Comme l???auxiliaire de vie sociale, le r??le de l???aide ?? domicile est d???aider la personne ??g??e ?? continuer ?? vivre en autonomie ?? son domicile. A ce titre, elle peut se charger du m??nage, des courses, des repas, de l???accompagnement lors des d??placements, de la toilette??? L???aide ?? domicile doit ??tre discr??te, attentive, ?? l?????coute. Comme pour l???auxiliaire de vie sociale, l???aide ?? domicile doit avoir une bonne condition physique lui permettant d???aider la personne ??g??e ?? se lever ou ?? se coucher, mais aussi porter les courses
                                                    </span> 
                                                   <br><br> 
                                            <span class="color-orange font-bold" >Qu???est-ce qu???une aide ?? domicile ?</span><br>
                                                <span class="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                                    Dans le domaine des services ?? la personne, le m??tier d???aide ?? domicile s???exerce aupr??s de personnes ??g??es, malades ou en situation de handicap pour r??aliser des t??ches de la vie quotidienne ?? leur place ou en leur venant en aide.
													<div class="d-flex justify-content-between">
                                                        <div >
                                                            <ul class="margin-top-sm list list_star" style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
										
																<li class="text">L???aide ?? la toilette </li>
																<li class="text">L???aide ?? l???habillement </li>
																
																
													        </ul>
                                                        </div>
                                                        <div >
                                                            <ul class="margin-top-sm list list_star" style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
										
																<li class="text">La pr??paration des repas </li>
																<li class="text">L???aide ?? la prise des repas si n??cessaire </li>
																
													        </ul>
                                                        </div>
                                                        <div >
                                                            <ul class="margin-top-sm list list_star" style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
										
																
															
																<li class="text">L???accompagnement pour les d??placements </li>
																<li class="text">L???aide pour le lever et le coucher </li>
													        </ul>
                                                        </div>
                                                    </div>
                                                    
                                                </span>
												
                                                    
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <!-- end tab item -->


                        </div>
                    </div>
                </div>
            </div>
        </section>
		<br>
			<section class="py-2 md:py-20">
            <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 md:pr-20">
                        <h1 data-animate="animate-left" class=" text-xl md:text-2xl font-bold  color-text" style="line-height: 1.2">
                            Les missions d???une
                            <span class="text-yellow-500 color-orange"> aide ?? domicile</span>
                        </h1>
                        <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
							Les missions d???une aide ?? domicile varient en fonction de la personne ?? assister chez elle et de son niveau d???autonomie. Il peut s???agir de faire quelques heures de m??nage, de faire la vaisselle et de ranger la cuisine, d???aller faire les courses avec la personne ou encore d???assurer le repassage de son linge. L???aide ?? domicile peut aussi ??tre sollicit??e pour entretenir le jardin, pour la tonte, le d??sherbage ou l???arrosage, par exemple. 

												<ul class="margin-top-default list list_10px list_bullet-color_blue">
												<li>
													<span 
													style="color:#374151; font-size:20px; font-family: 
													Montserrat, sans-serif;">
													Ponctuellement, l???aide ?? domicile peut ??clairer le b??n??ficiaire sur une d??marche administrative ou un courrier officiel auquel il faut r??pondre.</span>
												</li>

												<li>
													<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
														Chacune de ces missions exerc??es au domicile du b??n??ficiaire est l???occasion ??galement de discuter avec la personne, et de rompre ainsi un ??ventuellement isolement.
													</span>
												</li>
											</ul>

                        </h3>
                       
                    </div>
                    <div class="w-full md:w-1/2 mt-2 md:mt-0">
                        <img data-animate="animate-right" class="w-full "  style="border-radius: 10px; width:100%"
						src="{{ asset('_next/static/media/home/aide-domicile-personnes-agees.jpeg') }}">
                    </div>
                </div>               
            </div>
        </section>
        <!-- end section -->
		
		
		
        <section class="py-6 md:py-20">
            <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 md:pr-20">
                        <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" style="line-height: 1.2">
                            III. Auxiliaire
                            <span class="text-yellow-500 color-orange"> de vie</span>
                        </h1>
                        <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " > 
                            <span class="color-orange font-bold" style="font-size:20px; font-family: Montserrat, sans-serif;">  
                                Les qualit??s requises pour etre auxiliare de vie
                             </span>
                            <br>
                            S???occuper au quotidien de personnes ??g??es, d??pendantes ou handicap??es, n???est pas donn?? 
                            ?? tout le monde. Pour exercer ce m??tier et ??tre ??panoui, il est important de poss??der 
                            certaines qualit??s humaines fondamentales :

							<ul class="margin-top-sm list list_star" style="color:#374151; font-size:15px; font-family: Montserrat, sans-serif;">

													<li class="text">Avoir de fortes capacit??s relationnelles et de l?????coute </li>
													<li class="text">L???auxiliaire de vie doit poss??der un grand sens de communication </li>
													<li class="text">??tre r??actif et dynamique, savoir prendre des initiatives </li>
													<li class="text">Avoir une excellente connaissance des diff??rents publics et des pathologies li??es au vieillissement et au handicap </li>
													<li class="text">??tre autonome pour intervenir seul au domicile et organiser son travail en fonction des publics et des situations </li>
													<li class="text">Avoir une bonne condition physique </li>
                                                    
                                                </ul>
                                                
        
                        </h3>
                                                 
                       
                    </div>
                    <div class="w-full md:w-1/2 mt-2 md:mt-0">
                        <img data-animate="animate-right" class="w-full "  style="border-radius: 10px; width:100%"
                        src="{{ asset('_next/static/media/about/nurse-care-worker-with-older-man.webp') }}">
                    </div>
                   
                </div> 
                <div class="d-flex justify-content-between">
                    <div >
                        <ul class="margin-top-sm list list_star" style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
    
                            <li class="text">Elle ou il doit ??tre ?? l'??coute de la personne aid??e et des aidants, doit poss??der un sens du contact et de l'empathie afin d'??tablir un lien de confiance avec la personne et son entourage </li>
                            <li class="text">Et/ou une exp??rience v??rifiable d???au moins trois ans dans l???assistance aux personnes ??g??es  </li>
                            
                            
                        </ul>
                    </div>
                    <div >
                        <ul class="margin-top-sm list list_star" style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
    
                            <li class="text">Un dipl??me ou titre professionnel dans l???assistance aux personnes ??g??es </li>
                            <li class="text"> Savoir s???adapter</li>
                            
                        </ul>
                    </div>
                    <div >
                        <ul class="margin-top-sm list list_star" style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
    
                            
                        
                            <li class="text">Un tr??s bon relationnel ???Respectueuse, politesse, empathie, courtoisie, ponctualit??, joviale, ouvert d???esprit, organis?? </li>
                            <li class="text">Une grande discr??tion face aux ??l??ments de vie priv??e </li>
                        </ul>
                    </div>
                </div>              
            </div>
        </section>

		<section class="py-2 md:py-20">
            <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
                <div class="flex flex-wrap items-center">
                    <div class="w-full md:w-1/2 md:pr-20">
                        <h1 data-animate="animate-left" class=" text-xl md:text-2xl font-bold  color-text" style="line-height: 1.2">
                            Les missions de 
                            <span class="text-yellow-500 color-orange"> l???auxiliaire de vie</span>
                        </h1>
                        <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
							L???auxiliaire de vie aux familles relaie les familles aupr??s de personnes fragilis??es ou sensibles comme les :

												<ul class="margin-top-default list list_10px list_bullet-color_blue">
												<li>
													<span 
													style="color:#374151; font-size:20px; font-family: 
													Montserrat, sans-serif;">
													Personnes ??g??es</span>
												</li>

												<li>
													<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                                        Personnes d??pendantes (maladie, convalescence ou enfants),
													</span>
												</li>
                                                <li>
													<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                                        Personnes handicap??es
													</span>
												</li>
                                                <li>
													<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                                        Enfants (au domicile des parents).
													</span>
												</li>
											</ul>

                        </h3>
                       
                    </div>
                    <div class="w-full md:w-1/2 mt-2 md:mt-0">
                        <img data-animate="animate-right" class="w-full "  style="border-radius: 10px; width:100%"
						src="{{ asset('_next/static/media/home/aide-domicile-personnes-agees.jpeg') }}">
                    </div>
                </div>               
            </div>
        </section>
        <!-- end section -->
		
        <!-- start section -->
        <section id="assist">
            <div class="container">
                <div class="row ">

				</div>

                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">

                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="planning-tab" class="tab-pane fade in active show">
                                <div class="row">
                                     <div class="col-12 col-lg-12 col-md-12  text-sm-start">

                                        <p class=" mb-5 ">
                                            Il exerce son activit?? soit ponctuellement, soit de fa??on r??guli??re. 
                                            Il contribue au maintien ?? domicile en facilitant la vie quotidienne 
                                            des personnes aupr??s desquelles il intervient. 
                                            Il les accompagne ainsi dans les actes de la vie au quotidien

                                        </p>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                                <span class="color-orange" style="font-size:25px; font-family: Montserrat, sans-serif;">
                                                    L???assistant de vie aux familles doit ??tre capable de :
                                                </span><br>
                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text">R??aliser des t??ches domestiques (pr??paration des repas, faire les courses, entretien de la maison???) </li>
                                                    <li class="text">Assister les personnes dans les actes de la vie quotidienne (toilette corporelle, alimentation, aide aux d??placements???)</li>
                                                    <li class="text">Prendre en charge de jeunes enfants</li>
                                                    
                                                </ul>

                                            </p>
                                            <br>
                                            <p class=" mb-5 ">
                                                Toutes les actions de l???assistant de vie aux familles visent ?? faciliter
                                                la vie quotidienne des personnes dont il s???occupe. Gr??ce ?? lui, les 
                                                personnes restent chez elles dans de bonnes conditions. 
                                                Il met en place une relation professionnelle, planifie et organise ses 
                                                interventions, prend en compte les mesures de pr??vention et de s??curit??. 
                                                Il tient compte des personnes, respecte et met en ??uvre les r??gles 
                                                professionnelles de base.
    
                                            </p>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >

                                         <img class="img-rounded" src="{{ asset('_next/static/media/metier1.jpg') }}" alt="" />

                                        </p>
                                        <div class="mt-3 text-gray-700 font-semibold">
												<a href="{{ route('join-us') }}">
														   <button  class="px-3 py-3 text-lg bg-yellow-500 
														   font-bold text-white rounded-full" 
														   style="background-color: #30005B"> 
														   Nous Rejoindre </button>
												  </a>

											</div>
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
       

        <section class="py-1">
            <div class="container" >
            <div class="row">
                <div class="row justify-content-start">

                    <div class="col-lg-12 mx-auto">

                        <p class="mb-5" >
                            <h2 class="color-orange font-bold" style="font-size:30px; font-family: Montserrat, sans-serif;">
                                                           
                                Votre univers de travail chez Youdom-care en tant que Assistant M??nager
                            </h2>

                        <span class="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                            Vous intervenez au domicile de nos clients.  Les particuliers sont les clients de YOUDOM-CARE
                            Vous ??tes salari?? en CDI d???une ou plusieurs agences dans le m??me d??partement ou r??gion
                            . En fonction de vos disponibilit??s Youdom-Care vous propose des missions ??volutives chez un ou plusieurs clients
                            YOUDOM-CARE vous fournit le mat??riel professionnel ad??quat pour mener ?? bien votre mission .
                            YOUDOM-CARE vous accompagne tout au long de votre parcours professionnel en 
                            vous proposant des formations.
                        </span>
                       
                        <br> <br>
                        <h2 class="color-orange font-bold" style="font-size:30px; font-family: Montserrat, sans-serif;">
                            Votre ??volution de carri??re chez YOUDOM-CARE
                        </h2>
                        Chez YOUDOM-CARE  vous b??n??ficiez d???un parcours individuel de formation sp??cifique 
                        ?? notre m??thode m??nage-repassage.
                        Pour accro??tre vos comp??tences et d??velopper plus d???exp??riences dans votre domaine 
                        d???activit?? en tant que assistant m??nager, nous proposons le multi-activit?? ?? nos 
                        intervenants ?? domicile. 
                        </p>
                    </div>
<br><br>
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">

                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="planning-tab" class="tab-pane fade in active show">
                                <div class="row">
                                     <div class="col-12 col-lg-12 col-md-12  text-sm-start">

                                       
                                    </div>
<br><br>
                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -200px;">

                                        <p class="mb-5" >
                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <span class="color-text font-bold" style="font-size:30px; font-family: Montserrat, sans-serif;" > Nos m??tiers en agence</span>
                                                <ul class="margin-top-sm list list_star" style="margin-top: -35px">
                                                    <li class="text">Responsable de secteur</li>
                                                    <li class="text">Charg?? de recrutement </li>
                                                    <li class="text">Charg?? de client??le  </li>
                                                    <li class="text">Responsable d???agence </li>
                                                </ul>
                                            </p>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            <span class="color-text font-bold" style="font-size:30px; font-family: Montserrat, sans-serif;" >Nos m??tiers au si??ge</span>
                                                <ul class="margin-top-sm list list_star" style="margin-top: -35px">
                                                    <li class="text">Ressources humaines</li>
                                                    <li class="text">Communication </li>
                                                    <li class="text">Juridique   </li>
                                                    <li class="text">D??veloppement  </li>
                                                </ul>
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <!-- end tab item -->


                        </div>
                    </div>
                </div>
            </div>
        </section>
        <br> <br>
</section>


@endsection

