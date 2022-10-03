@extends('layouts.master')
@section('title', __('Garde de nuit'))

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

                                <div class="col-md-8" >
                                    <h2 class="heading heading__lvl1 stillforce-heading-red">Garde de <span style="color:#594EE6;">nuit</span></h2>
                                </div>
                                    
                            </div>
                            
                    </div>
			
	        </section>

        <!-- start section -->
        <section class="" style="margin-top: -75px;">
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
                                        <img class="img-rounded" src="{{ asset('_next/static/media/garde-nuit.jpg') }}" alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6 text-center text-sm-start">

                                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:36px;">
                                            <span class="alt-font first-letter first-letter-big text-fast-blue">G</span>arde de nuit ou présence de nuit Quelle est la différence ? </h2>
                                            <p class="lead mb-5" >
                                            En fonction des troubles et pathologies présentés par le senior, ou la personne en situation handicap  
                                            il existe deux types d’assistance nocturne : la présence de nuit et la garde de nuit.
                                            </p>
                                            <a href="{{ route('devis.form') }}" class="margin-top-default button button_w-m-full" 
                                               style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
                                                        Demandez un devis
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
                
                    <div class="col-lg-12 mx-auto">

                        <p class="mb-5" >
                            Cette assistance s’étend généralement sur une plage horaire de 20h à 8h du matin
                            Par ailleurs , certains services d’aide à domicile ou les  Services de Soins Infirmiers à Domicile (SSIAD) proposent  éventuellement des  
                            gardes itinérantes de nuit ,des interventions de 15-30 minutes pour assurer la toilette, le change, le coucher et/ou le lever de la personne âgée. 
                        </p>
                    </div>
            
                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: -30px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            <span class="alt-font first-letter first-letter-big text-fast-blue">Q</span>
                            <span style="color: #DF034D;"> uelle est la différence entre une  garde nuit ou présence de nuit ? </span>
                        </h2>
                                    <p class="mb-5" >
                                           Pour les seniors dépendants, souffrants ou qui viennent de sortir de l’hôpital, les personnes malade ou en situation handicap  il 
                                           est souvent nécessaire de faire appel à un auxiliaire de vie qui dormira dans la maison. Cet assistant peut accomplir deux types de 
                                           services : la garde de nuit ou la présence de nuit.
                                    </p>
                                  
                        </div>

                </div>
            </div>
            </div>
	</section>

    
    <!-- start section -->
        <section class="" style="margin-top: -75px;">
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue">L</span>
                                            <span style="color: #DF034D;">a présence de nuit : une présence attentive dans la maison </span> 
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">
                                    
                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class=" mb-5" >
                                            <span style="">
                                                La présence de nuit consistant à assurer une présence sécurisante tout au long de la nuit, la présence de nuit s’adresse aux 
                                            personnes autonomes ou en perte d’autonomie légère. On parle également de garde non médicalisée.
                                            </span>  <br> <br>
                                            Contrairement à la garde, l’auxiliaire qui assure une simple présence de nuit n’est pas tenue de rester toute la nuit aux côtés de 
                                            la personne qu’elle assiste. <br> Elle peut dormir dans une pièce voisine, et n’aura pas forcément besoin de se lever fréquemment. 
                                             <br> <br>
                                            Toutefois, elle reste vigilante, et peut intervenir en cas de besoin. Si la garde s’apprête à se lever plusieurs fois la nuit, 
                                            la présence de nuit se limite généralement à une seule intervention maximum jusqu’au matin.
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >

                                            Ce service commence généralement après le repas du soir, et se termine au réveil. Il peut inclure, en cas de besoin, 
                                            l’assistance pour la toilette et le petit-déjeuner. <br> <br>
                                            <span style="color: #DF034D">
                                                La présence de nuit est donc sollicitée pour accompagner les personnes autonomes, mais qui ont besoin d’une présence rassurante 
                                                à leur domicile.  C’est par exemple le cas des seniors qui reviennent de l’hôpital, ou des personnes angoissées pendant la nuit suite 
                                            à une chute ou à un petit accident. Le simple fait de savoir que quelqu’un dort à côté permet de les rassurer.
                                            </span>  <br>
                                            Ainsi, la présence de nuit dure seulement quelques jours, juste le temps que la personne accompagnée retrouve ses habitudes. <br>
                                            Les services d’un garde de nuit peuvent être permanents dans le cas où la personne est dépendante.

                                            </p>
                                             <a href="{{ route('devis.form') }}" class="margin-top-default button button_w-m-full" 
                                               style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
                                                        Demandez un devis
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> L </span>
                                            <span style="color: #DF034D;"> a garde de nuit : une présence active aux côtés de l’accompagné </span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">
                                    
                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                            La garde de nuit est assurée par un(e) auxiliaire de vie formée spécifiquement à cette mission ou un personnel 
                                            médical –aide-soignant, infirmier. <br> <br>
                                            La <span style="color: #DF034D">  garde de nuit</span> concerne les personnes âgées malades ou présentant une perte d’autonomie 
                                            lourde (démence, maladie d’Alzheimer, maladie parkinson insuffisance respiratoire…) 
                                            nécessitant une surveillance de chaque instant. <br> <br>
                                            Les services d’une garde sont également utiles pour les personnes malades, les personnes handicapées. <br>
                                             La garde de nuit et la personne qu’elle assiste dorment dans la même pièce. 
                                             Par conséquent, l’auxiliaire de vie doit se tenir prêt à aider 

                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                           l’accompagné à chaque fois qu’il se lève. Il peut intervenir à plusieurs reprises pendant la nuit.
                                           <br>
                                           La garde-malade peut alors accompagner la personne aux toilettes, l’aider à boire ou à satisfaire divers besoins pendant la nuit. 
                                           Une garde est également sollicitée pour les personnes dépendantes. Elle peut alors assurer les soins et les changes pendant la nuit. 
                                           <br> <br>
                                           Elle veille sur la personne assistée à partir du repas du soir jusqu’au lendemain matin. 
                                           Elle l’aide à manger, à enfiler sa tenue de nuit, à se coucher, à se lever, à faire sa toilette et à prendre son petit-déjeuner.
                                           <br> <br>
                                           De manière générale, la garde de nuit assure une assistance active aux seniors souffrant ou dépendant, qui sont maintenus à domicile.

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
                                            <span style="color: #DF034D;"> éclarer et rémunérer un assistant de vie qui travaille la nuit</span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">
                                    
                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                            Comme les autres travaux d’un salarié à domicile, les services d’une garde ou d’une présence de nuit 
                                            peuvent être déclarés par le biais du CESU. Ce dispositif simplifie les démarches, et permet de bénéficier d’un crédit 
                                            d’impôt à hauteur de 50 % du coût du service facturé. Lors de la déclaration, il faut entrer dans la 
                                            rubrique « compléments de salaire » et sélectionner le type d’heures concernées par les services de 
                                            ’auxiliaire de vie. En principe, cela va de 21 h à 6 h, soit 9 heures au maximum. <br> 
                                            Vous pourrez ensuite rémunérer votre auxiliaire de vie selon les moyens les plus pratiques pour vous. 
                                            Il convient de noter qu’un financement est possible sous conditions. 
                                            Il y a notamment l’Allocation personnalisée d’autonomie ou APA, qui est dirigée par les départements. 
                                            La disponibilité de l’aide dépend essentiellement du niveau de revenu et du niveau de dépendance de la personne accompagnée.

                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                         <img class="img-rounded" src="{{ asset('_next/static/media/assistante-de-vie-aux-familles-2-1024x683.jpg') }}" alt="" />

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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> Q </span>
                                            <span style="color: #DF034D;"> uels sont les soins et services d’assistance de nuit ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -200px;">

                                        <p class="mb-5" >
                                            En fonction des besoins du senior accompagné, une assistance de nuit peut inclure plusieurs services :
                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text">L’aide au repas,</li>
                                                            <li class="text">L’aide à la prise de médicament </li>
                                                            <li class="text">L’aide à la toilette  </li>
                                                            <li class="text">L’accompagnement aux toilettes ou le changement des protections anatomiques </li>
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text">L’aide au coucher </li>
                                                            <li class="text">L’aide au lever </li>
                                                            <li class="text">Certains soins à domicile   </li>
                                                            <li class="text">L’apaisement des angoisses  </li>
                                                </ul>

                                        </p>
                                    </div>

                                </div>

                                <div class="row ">
                                    
                                 
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
                                            <span style="color: #DF034D;"> ans quels cas faire appel à une garde de nuit ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -70px;">

                                        <p class="mb-5" >
                                            L’anxiété des seniors a tendance à s’accroitre la nuit. 
                                            En vieillissant la qualité du sommeil tend à se dégrader la nuit surtout
                                             avec les troubles d’angoisses, l’insomnie, troubles d’anxiétés ; 
                                             dépressions et palpitations… Les troubles de l’humeur qui surviennent 
                                             pendant la phase nocturne sont bien souvent des éléments déclencheurs 
                                             pour l’entourage en matière de placement en maison de 
                                             retraite ou en EHPAD.
                                        </p>

                                    </div>

                                   
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                               

                                        </p>
                                    </div>

                                </div>

                                <div class="row ">
                                    
                                 
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> P</span>
                                            <span style="color: #DF034D;"> ourquoi se faire accompagner ou se faire assister à son domicile ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -70px;">

                                        <p class="mb-5" >
                                            Se faire accompagner à son domicile permet d’assurer une présence 
                                            permanente pour veiller sur une personne âgée vulnérable, malade ou 
                                            personne en situation handicap. <br>
                                            La garde de nuit est ainsi envisagée dans plusieurs cas :

                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><b>Les troubles de l’humeur :</b> 
                                                                anxiété qui apparait à la tombée du jour ou de 
                                                                réveils nocturnes associés à des douleurs ou des 
                                                                troubles du sommeil, l’agitation et le stress 
                                                                pendant la nuit sont fréquents chez les seniors.
                                                            </li>
                                                            <li class="text"><b>Les troubles de démence :   </b> 
                                                                Particulièrement chez les personnes touchées par une démence de type Alzheimer. 
                                                                Le rôle de l’auxiliaire de vie ou aide à domicile consiste alors à rassurer et 
                                                                à apaiser la personne âgée afin d’améliorer son confort.  
                                                            </li>
                                                            <li class="text"> <b>Les déambulations nocturnes :</b>  La déambulation nocturne, qui apparaît fréquemment en cas de maladie d'Alzheimer et d'autres types démences chez les personnes âgées peut conduire à de nombreuses situations dangereuses, puisque la personne est trop désorientée pour être parfaitement consciente de ce qu'elle fait.
                                                                Concrètement, il s’agit d’aller-retours fréquents voire incessants pouvant conduire à l’épuisement du sujet ou de son aidant. Souvent associée à une pathologie neurodégénérative ainsi qu’à des troubles du rythme circadien, les déambulations peuvent conduire à une chute ou une fugue.
                                                                </li>
                                                           
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                    <li class="text"><b>Le retour à domicile après hospitalisation : </b> 
                                                        Afin d’assister et de rassurer les personnes vulnérables 
                                                        sortant de l’hôpital, d’une clinique ou d’une maison de 
                                                        repos, il est fréquent de faire appel à une garde de nuit. 
                                                        Requérant généralement des soins médicaux ainsi qu’une 
                                                        assistance pour certains gestes du quotidien, ce service 
                                                        permet de s’assurer du bon rétablissement du patient.
                                                    </li>
                                                    <li class="text"><b>Les chutes et accidents :    </b> 
                                                        En France, les chutes des personnes âgées entraînent chaque année plus de 100 000 hospitalisations et plus de 10 000 décès. Ces chutes ont des conséquences physiques, psychologiques, sociales et marquent une rupture dans la vie des individus et une perte d'autonomie
Les personnes âgées sont fréquemment touchées par les accidents domestiques, et en particulier par les chutes. Pouvant se révéler dramatique, notamment pour les seniors touchés par l’ostéoporose, ce type d’accident nécessite une prise en charge rapide, notamment pour aider la personne à se relever.

                                                    </li>
                                                </ul>

                                        </p>
                                    </div>

                                </div>

                                <div class="row ">
                                    
                                 
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> Q</span>
                                            <span style="color: #DF034D;"> uels modes d’intervention et quels coûts pour une garde de nuit ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -70px;">

                                        <p class="mb-5" >
                                            Comme toute prestation de service à domicile il existe différentes 
                                            modalités d’intervention pour faire appel à un service de garde de nuit. <br>
                                            La garde de nuit peut se faire :

                                            
                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><b>En emploi direct :</b> 
                                                                le senior ou son aidant est l’employeur  de l’auxiliaire de vie ou du garde-malade. <br> 
                                                                Celui-ci se charge de recruter le garde-malade qui intervient à domicile et assure l’entière 
                                                                gestion administrative du salarié et la déclaration des charges. 
                                                                Il peut pour se faire avoir recours à l’utilisation du CESU (Chèque Emploi Service Universel).
                                                            </li>
                                                            <li class="text"><b>En mode mandataire :   </b> 
                                                                Le mandataire est chargé de l’ensemble des démarches administratives 
                                                                et juridiques concernant 
                                                                l’employé (recrutement, gestion de paie, licenciement…). 
                                                                En revanche, l’employeur demeure la personne âgée qui assure la 
                                                                rémunération de l’intervenant de nuit à son domicile. 
                                                            </li>
                                                           
                                                           
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                    <li class="text"><b>En passant par un prestataire :  </b> 
                                                        c’est alors une entreprise ou une association qui gère pour vous la partie administrative, voire salarie (prestataire) de l’auxiliaire ou garde-malade. 
En qualité d’employeur, le prestataire du service se charge, contre rémunération, du recrutement, du suivi et de la gestion de l’intervenant de nuit. Et le senior règle chaque heure d’intervention de l’aidant auprès du prestataires du service.

                                                    </li>
                                                    
                                                </ul>

                                        </p>
                                    </div>

                                </div>

                                <div class="row ">
                                    
                                 
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> C</span>
                                            <span style="color: #DF034D;"> ombien coûte une garde de nuit pour personne âgée ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -70px;">

                                        <p class="mb-5" >
                                            Proposés d’ordinaire sous forme de forfait, <b>les tarifs d’une intervention
                                                de nuit varient en fonction du volume horaire couvert et du type de 
                                                service proposé : présence de nuit ou garde de nuit.</b>  <br><br>

                                               <span style="color: #DF034D;"> <b>Tarif pour une garde de nuit de personne âgée ou handicapée</b>  </span> <br>

                                            Les tarifs en vigueur pour une garde de nuit sont élevés. 
                                            Etant donné que le garde malade de nuit travaille en général de 20 heures à 8 heures le matin, ce type de prestation est sujette à une majoration pour travail de nuit variant de 9 à 12h, les heures travaillées de nuit ne peuvent dans ce cadre ni dépasser les 12h consécutives ni excéder 5 nuits consécutives (hors situation exceptionnelle). Au-delà de ce volume horaire, les heures sont alors rémunérées en horaires classiques.
                                            <br> Le tarif d'une garde nuit en emploi direct est moins élevé. 
                                            La Convention collective nationale des salariés du particulier 
                                            employeur décide de ce tarif horaire. La convention fixe généralement 
                                            les tarifs aux alentours de 10 euros brut.

                                            <br> <br>

                                           <span style="color:#DF034D;">  <b>Tarif pour une présence de nuit à domicile</b>   </span> <br>
                                            Le coût d’une présence de nuit est moins chère qu’une garde de nuit car le personnel n'est 
                                            pas qualifié ce type de prestation  ne nécessite pas toujours d’intervention active <br>
                                            Une distinction est en effet opérée dans ce cas entre les heures dites de présence 
                                            responsable –présence de nuit–, 
                                            ne nécessitant pas toujours d’intervention, et les heures effectives –garde de nuit– impliquant 
                                            une surveillance active. Ainsi, une heure de présence responsable est rémunérée à hauteur 
                                            des 2/3 d’une heure travaillée. <br>
                                            Une <b>fourchette de prix en fonction du service requis : garde de nuit ou 
                                                présence de nuit </b> 
                                             (il est bon de garder à l’esprit que le recours aux services de maintien
                                              à domicile ouvre droit à un crédit d’impôt de 50 %) : <br> <br>                                    

                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><b>Forfait présence de nuit </b> <br>
                                                                hors aides Entre 80 et 100 € 
                                                            </li>
                                                            
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                    <li class="text"><b>Forfait garde de nuit  </b> <br>
                                                        hors aides Entre 140 et 200 €

                                                    </li>
                                                    
                                                </ul>

                                        </p>
                                    </div>

                                </div>

                                <div class="row ">
                                    
                                 
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> Q</span>
                                            <span style="color: #DF034D;"> uelles aides pour financer une garde de nuit ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -70px;">

                                        <p class="mb-5" >
                                            Afin de supporter la charge que représente une garde de nuit, vous pouvez compter sur :
                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><b>Le crédit d’impôt :</b> <br>
                                                                Le recours à un service d’aide à la personne ou à une auxiliaire de vie en emploi direct ouvre droit 
                                                                à un crédit d’impôt de 50 % des sommes versées dans la limite de 12 000 € par an avec une majoration 
                                                                de 1 500 € par personne âgée de plus de 65 ans. Il s’agit d’un véritable soutien financier pour un 
                                                                service essentiel au maintien à domicile.	
                                                            </li>
                                                            <li class="text"><b>L’APA (Allocation Personnalisée d’Autonomie) :   </b> <br>
                                                                la principale aide financière pour les personnes de plus de 60 ans en perte d’autonomie.
                                                            </li>
                                                            <li class="text"><b>La PCH (Prestation Compensatoire du Handicap)   </b> <br>
                                                                si votre proche présente un handicap important
                                                            </li>
                                                           
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                    <li class="text"><b>Les caisses de retraite  </b> <br>
                                                        Destinées aux personnes âgées non éligibles à l’APA, les caisses de retraite, et notamment la CNAV et la MSA, permettent de financer de manière ponctuelle ou régulière les services à la personne tels que la garde de nuit. <br>
                                                        Autre aide financée par la caisse de retraite : l’ARDH (Aide au Retour à Domicile après Hospitalisation) permet d’accompagner le retour des seniors chez eux après un séjour hospitalier, en participant notamment au financement de l’aide à domicile.
                                                    </li>
                                                    <li class="text"><b>L’assurance maladie et les complémentaires santé  </b> <br>
                                                        Des aides, voire une prise en charge (dans des situations d’urgence et temporaires) de l’Assurance Maladie.
                                                    </li>
                                                    
                                                </ul>

                                        </p>
                                    </div>

                                </div>

                                <div class="row ">
                                    
                                 
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
