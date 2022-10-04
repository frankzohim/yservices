@extends('layouts.master')
@section('title', __('Nos formations'))

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

    .img-rounded{
        border-radius: 6px;
    }

    .first-letter{float:left;font-size:50px;line-height:normal;margin:0 20px 0 0;text-align:center;padding:10px 0;font-weight:600}
.first-letter-big{float:left;font-size:100px;line-height:100px;margin:0 35px 0 0;padding:0 8px;text-align:center;font-weight:600;position:relative}
.first-letter-big:before{position:absolute;border-bottom:1px solid;content:"";display:block;width:100%;top:55%;left:0}
.first-letter-block{font-size:30px;height:55px;line-height:25px;padding:15px 0;width:55px;font-weight:500;margin-top:5px}
.first-letter-block-round{border-radius:6px;border:1px solid}
.first-letter-round{border-radius:50%;font-size:35px;padding:15px;width:65px;height:65px;line-height:35px}
.text-fast-blue,a.text-fast-blue-hover:hover{color:#0038e3}
.alt-font{font-family:Poppins,sans-serif}
.alt-font strong{font-weight:600}

</style>
<section class="main-intro-all" style="background-color: white; margin-bottom:auto;">

	  		<section>

                    <div class="container content-wrap">
                            <div class="row justify-content-start">

                                <div class="col-md-12" >
                                    <h2 class="heading heading__lvl1 stillforce-heading-red" style="font-size: 36px">
                                        Nous rassemblons nos talents  <span style="color:#594EE6;">et nous les faisons évoluer</span></h2>
                                </div>
                                    
                            </div>
                            
                    </div>
			
	        </section>

        <!-- start section -->
        <section class="" style="margin-top: -35px;">
            <div class="container">
                <div class="row justify-content-center">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                        
                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="planning-tab" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom" style="margin-right: -60px;">
                                        <img class="img-rounded" src="{{ asset('_next/static/media/traning.jpg') }}" alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6 text-center text-sm-start">

                                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:36px;">
                                            <span class="alt-font first-letter first-letter-big text-fast-blue">N</span>os Formations </h2>
                                            <p class="lead mb-5" >
                                                Plusieurs dispositifs de formations en interne sont mis à disposition des salariés.
                                                En effet, dès la prise de poste, nous pouvons proposer une formation d’intégration liée à l’adaptation de nos méthodes et de nos procédures. Nous favorisons également un maximum la mise en place de binômes avec nos nouvelles recrues, et ce dès la prise de poste.
                                                
                                            </p>
                                            <a href="{{ route('join-us') }}" class="margin-top-default button button_w-m-full" 
                                               style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
                                                        Nous rejoindre
                                            </a>
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

        <section class="py-5" style="margin-top: -30px;">
            <div class="container" >
            <div class="row">
                <div class="row justify-content-start">
                
                    
            
                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: -10px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:22px;">
                            
                            <span style="color: #DF034D;"> Pour les équipes en agences, une formation d’intégration d’une semaine au sein du siège social à Strasbourg est organisée </span>
                        </h2>
                                    <p class="mb-5" >
                                        Cette formation permet aux Responsable d’agence, Assistant d’Agence et 
                                        Responsable de secteur de revenir sur l’ensemble de leurs missions :
                                    </p>
                                   
                    </div>

                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                        <p class="mb-5">
                            <ul class="margin-top-sm list list_star" style="margin-top: -60px;">

                                        <li class="text">Le développement commercial,</li>
                                        <li class="text">Le marketing et la communication </li>
                                        <li class="text">La gestion des missions provenant des mutuelles </li>
                                        <li class="text">La démarche qualité </li>
                            </ul>
                        </p>
                       
                    </div>
                    <div class="col-12 col-lg-6 col-md-6  " >
                        <p class="mb-5" >
                            
                                <ul class="margin-top-sm list list_star" style="margin-top: -60px;">

                                            <li class="text">Les missions liées au maintien à domicile

                                                <ul class="margin-top-sm list list_star" style="margin-top: -0px;">

                                                    <li class="text">Les ressources humaines </li>
                                                    <li class="text">Les outils informatiques </li>
                                                    <li class="text">La comptabilité   </li>
                                                    <li class="text">La facturation  </li>
                                                    <li class="text">La paie  </li>
                                                </ul>
                                            </li>
                                           
                                </ul>

                        </p>
                    </div>

                    
                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" >

                       
                                    <p class="mb-5" style="font-family: Open Sans; font-weight:bold; font-size:22px;" >
                                        À ce titre, nous pouvons proposer des formations sur:
                                    </p>
                                   
                    </div>

                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                        <p class="mb-5">
                            <ul class="margin-top-sm list list_star" style="margin-top: -60px;">

                                        <li class="text">La gestion du stress</li>
                                        <li class="text">La méthode PNL </li>
                                        <li class="text">La gestion des conflits </li>
                                        <li class="text">Le management d’équipeé </li>
                            </ul>
                        </p>
                       
                    </div>

                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                        <p class="mb-5">
                            <ul class="margin-top-sm list list_star" style="margin-top: -60px;">

                                        <li class="text">La qualité de vie au travail</li>
                                        <li class="text">La création d’un réseau de partenaires </li>
                                        <li class="text">Les langueses </li>
                            </ul>
                        </p>
                       
                    </div>
               
            </div>
            </div>
            </div>
	</section>

    
    <!-- start section -->
        <section class="" style="margin-top: -20px;">
            <div class="container" >
                <div class="row ">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                        
                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="planning-tab" class="tab-pane fade in active show">
                                <div class="row" style="margin-bottom: -20px;">
                                     <div class="col-12 col-lg-12 col-md-12  text-sm-start">

                                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px; color:#DF034D;" >
                                            <span class="alt-font first-letter first-letter-big text-fast-blue">L'</span>
                                            <span style="color: #DF034D;">alternance, une véritable passerelle vers l’emploi </span> 
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">
                                    
                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class=" mb-5" >
                                            <span style="">
                                                Vous êtes à la recherche d’un contrat d’apprentissage dans le 
                                                secteur des services à la personne ? Nous recrutons en alternance ! 
                                                Notre Groupe accueille de nombreux alternants chaque année au sein 
                                                de nos agences situées dans toute la France. En effet, l’aide à 
                                                l’insertion des jeunes dans le monde professionnel est un rôle 
                                                nous tenant particulièrement à cœur.
                                            </span>  <br> <br>
                                           
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >

                                            Nous vous permettons d’obtenir une certification reconnue afin 
                                            d’accéder à un emploi d’Assistant de vie aux Familles. 
                                            Nous vous offrons la possibilité d’acquérir une qualification de 
                                            qualité et une garantie d’un emploi dans un secteur porteur 
                                            d’avenir : les services à la personne.
                                            Nous vous formons au titre professionnel d’assistant de vie aux familles 
                                            délivré par notre centre de formation partenaire.
                                            

                                            </p>
                                             
                                    </div>

                                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: -10px;">

                                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:22px;">
                                            
                                            <span style="color: #DF034D;"> Le Titre Professionnel d’Assistant de Vie aux Familles en alternance </span>
                                        </h2>
                                                    <p class="mb-5" >
                                                        Le titre ADVF est un titre professionnel de niveau 3 reconnu 
                                                        par l’Etat en contrat d’apprentissage. Il est délivré par 
                                                        le Ministère chargé de l’emploi et de la formation 
                                                        professionnel. <br>
                                                        La formation en alternance est proposée en présentiel et à distance. Elle est rythmée par des semaines de 35h, dont un jour par semaine de cours théorique.
                                                        <br> Tout en étant rémunéré(e), cette formation vous permet d’acquérir les connaissances pour obtenir les compétences suivantes :

                                                    </p>
                                                   
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12  text-sm-start">

                                        <p class="mb-5">
                                            <ul class="margin-top-sm list list_star" style="margin-top: -60px;">
                
                                                        <li class="text">« Entretenir le logement et le linge d’un particulier »</li>
                                                        <li class="text">« Accompagner la personne dans les actes essentiels du quotidien » </li>
                                                        <li class="text">« Relayer les parents dans la prise en charge des enfants à leur domicile  </li>
                                            </ul>
                                        </p>
                                       
                                    </div>
                

                                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="">

                                       
                                                    <p class="mb-5" >
                                                        <br>
                                                        L’avantage est qu’à tout moment de l’année, il est 
                                                        possible de s’inscrire gratuitement afin de s’insérer 
                                                        rapidement sur le marché de l’emploi. De plus, nous 
                                                        avons pour ambition de poursuivre l’aventure avec nos 
                                                        jeunes diplômés.
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

        <br>
        <!-- start section -->
        <section class="">
            <div class="container" >
                <div class="row ">
						
				</div>
                
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                        
                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="planning-tab" class="tab-pane fade in active show">
                                <div class="row">
                                     <div class="col-12 col-lg-12 col-md-12  text-sm-start">

                                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> D </span>
                                            <span style="color: #DF034D;"> 
                                                EVENIR GÉRANT-E ASSOCIÉ-E </span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">
                                    
                                    <div class="col-12 col-lg-12 col-md-12  text-sm-start">

                                            <p class="mb-5" >
                                                <b>Ouvrir une filiale, le début d’une collaboration pérenne et réussie </b> <br> 
                                                Idéalement positionné sur un marché très porteur, nous disposons des 
                                                meilleurs atouts pour devenir un leader du secteur. <br>
                                                En tant qu’associé-e, nous vous apporterons la formation et le soutien de notre réseau national.
                                                 
                                            <br> 
                                            Nous vous proposons un <b>statut de mandataire social gérant</b>  
                                            et une <b>participation 
                                                dans le capital de l’entreprise</b>  que nous créerons ensemble dans 
                                            votre ville. <br>
                                            Afin de tout mettre en œuvre pour la réussite de votre structure, 
                                            nous nous chargeons :
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-12 col-md-12  " >
                                        <p class="mb-5" >
                                            
                                            <ul class="margin-top-sm list list_star" style="margin-top: -60px;">
                
                                                <li class="text">De vous former</li>
                                                <li class="text">De vous accompagner lors de la création de la société </li>
                                                <li class="text">De mettre à votre disposition un service juridique, RH, marketing et communication, comptabilité, paies et des logiciels métiers sécurisés </li>
                                            </ul>
                                            <br>
                                            En tant que gérant-e, vous assurerez le quotidien de votre entreprise, 
                                            à savoir le développement commercial et le recrutement de 
                                            vos intervenant-es ainsi que la gestion financière de votre structure.
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

        

       
        

       

        

</section>

@endsection
