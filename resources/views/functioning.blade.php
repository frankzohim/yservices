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
        color: #D9644A;
        font-size:15px;
        font-family: Poppins, sans-serif;
    }

    .color-text{
        color: #30005B;
    }
    .color-orange{
        color:#D9644A;
    }

  </style>

<section class="py-0 md:py-15 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 animated-content">
        <div class="flex flex-wrap md:flex-col-reverse items-center">
            <div class="w-full md:w-1/2 md:pl-10">
                <br>
                <h3 data-animate="animate-right" class=" md:text-xl mt-0 md:mt-8 text-gray-700" 
                style="line-height: 1.5">
                Youdom Care s’engage à rendre votre quotidien plus simple, en adaptant nos services à vos besoins. 
                Nous sommes disponibles à tout moment afin d’organiser au mieux les prestations proposées.
                Nous proposons des services à domicile personnalisés, et sélectionnons soigneusement les auxiliaires 
                de vie professionnels et les aides-soignants qui vous accompagneront tout au long du 
                processus de maintien à domicile.
                </h3>
            </div>   
            <div class="w-full md:w-1/2 mt-4 md:mt-0">
                <h1 data-animate="animate-right" class=" text-xl md:text-5xl font-bold text-indigo-800" 
                style="line-height: 1.2">
                    
                    <span class="text-yellow-500" style="font-size:40px;">
                        <span class="color-text"> Notre </span> 
                        <span class="color-orange">fonctionnement
                            </span>  
                    </span>
                </h1>
                <img data-animate="animate-left" class="w-full " 
                src="{{ asset('_next/static/media/functioning/intro.jpeg') }}" style="border-radius: 15px;">
            </div>
                           
        </div>               
    </div>
</section>
	
<section class="py-0 md:py-20 bg-gray-100">
    <div class="max-w-7xl mx-auto px-4 animated-content">
        <div class="flex flex-wrap md:flex-col-reverse items-center">
            <div class="w-full md:w-1/2 md:pl-10">
                <br>
                <h3 data-animate="animate-right" class=" md:text-xl mt-0 md:mt-8 text-gray-700" 
                style="line-height: 1.5">
                Parlez-nous de vous ou de votre proche, de vos attentes.
                </h3>
            </div>   
            <div class="w-full md:w-1/2 mt-4 md:mt-0">
                <h1 data-animate="animate-right" class=" text-xl md:text-5xl font-bold text-indigo-800" 
                style="line-height: 1.2">
                    
                    <span class="text-yellow-500" style="font-size:40px;">
                        <span class="color-text"> Projet </span> 
                        <span class="color-orange">de vie
                            </span>  
                    </span>
                </h1>
                <img data-animate="animate-left" class="w-full " 
                src="{{ asset('_next/static/media/functioning/projet-vie.webp') }}" style="border-radius: 15px;">
            </div>
                           
        </div>               
    </div>
</section>


<section class="py-2 md:py-20">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-1/2 mt-2 md:mt-0">
                <img data-animate="animate-right" class="w-full "  style="border-radius: 10px;"
                src="{{ asset('_next/static/media/fonctionnement4.png') }}">
            </div>

            <div class="w-full md:w-1/2 md:pr-20" >
                <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" 
                style="line-height: 1.2; font-size:25px;">
                    Evaluation
                    <span class="text-yellow-500 color-orange">des besoins</span>
                </h1>
                <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
                                        Ecoute de la demande et explication des missions à réaliser.
										Déterminons ensemble les services qui vous correspondent.


                </h3>
                                         <div class="mt-3 text-gray-700 font-semibold">
                                              <a href="{{ route('devis.form') }}">
                                                         <button  class="px-3 py-3 text-lg bg-yellow-500 font-bold text-white rounded-full" style="background-color: #30005B"> 
                                                                Demandez un devis </button>
                                                </a>
                   
                                        </div>
               
            </div>
           
        </div>               
    </div>
</section>

<section class="py-0 md:py-20">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
            

            <div class="w-full md:w-1/2 md:pr-20" >
                <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" 
                style="line-height: 1.2; font-size:25px;">
                Visite à 
                    <span class="text-yellow-500 color-orange">domicile</span>
                </h1>
                <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
                    <ul class="margin-top-default list list_10px list_bullet-color_blue">
                                        <li>
                                            
                                            <span 
                                            style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                            Rencontre au domicile par un conseiller Youdom-Care avec les bénéficiaires pour 
											identifier les besoins  et envies gratuitement.
											</span>
                                        </li>

                                        <li>
                                            <span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                                Présentation des aides financières et aide au montage des dossiers
                                            </span>
                                        </li>
                                        <li>
                                            <span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
                                                50 % de réduction d’impôt
                                            </span>
                                        </li>
                                      
                                    </ul>

                </h3>
               
            </div>

            <div class="w-full md:w-1/2 mt-2 md:mt-0">
                <img data-animate="animate-right" class="w-full "  style="border-radius: 10px;"
                src="{{ asset('_next/static/media/4136673.jpg') }}">
            </div>
           
        </div>               
    </div>
</section>

<section class="py-0 md:py-20">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
            

			 <div class="w-full md:w-1/2 mt-2 md:mt-0">
                <img data-animate="animate-right" class="w-full "  style="border-radius: 10px;"
                src="{{ asset('_next/static/media/fonctionnement4.png') }}">
            </div>
			
            <div class="w-full md:w-1/2 md:pr-20" >
                <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" 
                style="line-height: 1.2; font-size:25px;">
                Elaboration d’un devis
                    <span class="text-yellow-500 color-orange">personnalisé</span>
                </h1>
                <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
                    Déterminons ensemble la durée, la fréquence, les jours, les heures et le contenu des interventions.
                </h3>
               
            </div>

           
           
        </div>               
    </div>
</section>

<section class="py-2 md:py-20">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
            

            <div class="w-full md:w-1/2 md:pr-20" >
                <h1 data-animate="animate-right" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" 
                style="line-height: 1.2; font-size:25px;">
                &nbsp; Sélection d’un(e) intervenant (e)
                    <span class="text-yellow-500 color-orange">,formé(e) et dédié(e) à vos attentes</span>
                </h1>
                <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " 
                 >
                 Afin d’établir une relation de confiance et offrir un service sur-mesure et stable, la même personne 
                 interviendra à chaque fois (sauf absence).

                </h3>
               
            </div>
			
			<div class="w-full md:w-1/2 mt-2 md:mt-0">
                <img data-animate="animate-right" class="w-full "  style="border-radius: 10px;"
                src="{{ asset('_next/static/media/fonctionnement3.png') }}">
            </div>
           
        </div>               
    </div>
</section>

<section class="py-0 md:py-20">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
            
			<div class="w-full md:w-1/2 mt-2 md:mt-0">
                <img data-animate="animate-right" class="w-full "  style="border-radius: 10px;"
                src="{{ asset('_next/static/media/3054191.jpg') }}">
            </div>
			
            <div class="w-full md:w-1/2 md:pr-20" >
                <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" 
                style="line-height: 1.2; font-size:25px;">
                Confiance & 
                    <span class="text-yellow-500 color-orange">convivialité</span>
                </h1>
                <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
                    Avant le début des prestations, rencontre et présentation au domicile l’intervenant(e) sélectionné(e).
                </h3>
               
            </div>
           
        </div>               
    </div>
</section>
		
				
<section class="py-2 md:py-20">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
           

            <div class="w-full md:w-1/2 md:pr-20" style="text-align:left">
                <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" 
                style="line-height: 1.2; font-size:25px;">
                Un planning qui s'adapte à 
                    <span class="text-yellow-500 color-orange">l'évolution de vos besoins</span>
                </h1>
                <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " 
                style="text-align: left" >
                    Le planning des interventions à votre domicile pourra s’adapter à l’évolution de vos besoins.
                </h3>
               
            </div>
			
			 <div class="w-full md:w-1/2 mt-2 md:mt-0">
                <img data-animate="animate-right" class="w-full "  style="border-radius: 10px;"
                src="{{ asset('_next/static/media/fonctionnement1.png') }}">
            </div>
           
        </div>               
    </div>
</section>



<section class="py-0 md:py-20">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
            
			
			<div class="w-full md:w-1/2 mt-2 md:mt-0">
                <img data-animate="animate-right" class="w-full "  style="border-radius: 10px;"
                src="{{ asset('_next/static/media/fonctionnement6.png') }}">
            </div>
			
            <div class="w-full md:w-1/2 md:pr-20" >
                <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" 
                style="line-height: 1.2; font-size:25px;">
                Suivi et contrôle 
                    <span class="text-yellow-500 color-orange">qualité régulier</span>
                </h1>
                <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
                    Afin de garantir un service conforme aux attentes de nos bénéficiaires, des enquêtes de satisfaction et des visites régulières sont réalisées. Un interlocuteur unique, de la prise de contact à la fin de la durée du contrat, s’informe régulièrement de l’évolution des besoins de la personne aidée, âgées ou en situation de handicap. Il est donc possible, en cours de contrat, d’adapter la prestation initialement mise en place : organisation des interventions, tâches à réaliser, qualification du personnel.
                    
                </h3>
               
            </div>

            
           
        </div>               
    </div>
</section>	

<section class="py-2 md:py-20">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
            

            <div class="w-full md:w-1/2 md:pr-20" >
                <h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" 
                style="line-height: 1.2; font-size:25px;">
                La protection des 
                    <span class="text-yellow-500 color-orange">données (RGPD) </span>
                </h1>
                <h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " 
                >
                    Toutes les données concernant le ou la bénéficiaire font l’objet d’un traitement 
					informatisé dans les conditions fixées par le règlement général de la protection des 
					données( RGPD) Les données médicales sont soumises au secret professionnel, auquel est tenu l’ensemble du personnel.
                </h3>
                                    
            </div>
			
			<div class="w-full md:w-1/2 mt-2 md:mt-0">
                <img data-animate="animate-right" class="w-full "  style="border-radius: 10px;"
                src="{{ asset('_next/static/media/fonctionnement2.png') }}">
            </div>
           
        </div>               
    </div>
</section>
   
@endsection
