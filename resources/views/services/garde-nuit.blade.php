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
<section class="main-intro-all" style="background-color: white;">

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
            <div class="container" style="margin-left:340px;">
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
            <div class="container" style="margin-left:340px;">
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
            <div class="container" style="margin-left:340px;">
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
            <div class="container" style="margin-left:340px;">
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





</section>

@endsection
