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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue">G</span>arde de nuit ou pr??sence de nuit Quelle est la diff??rence ? </h2>
                                            <p class="lead mb-5" >
                                            En fonction des troubles et pathologies pr??sent??s par le senior, ou la personne en situation handicap  
                                            il existe deux types d???assistance nocturne : la pr??sence de nuit et la garde de nuit.
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
                            Cette assistance s?????tend g??n??ralement sur une plage horaire de 20h ?? 8h du matin
                            Par ailleurs , certains services d???aide ?? domicile ou les  Services de Soins Infirmiers ?? Domicile (SSIAD) proposent  ??ventuellement des  
                            gardes itin??rantes de nuit ,des interventions de 15-30 minutes pour assurer la toilette, le change, le coucher et/ou le lever de la personne ??g??e. 
                        </p>
                    </div>
            
                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: -30px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            <span class="alt-font first-letter first-letter-big text-fast-blue">Q</span>
                            <span style="color: #DF034D;"> uelle est la diff??rence entre une  garde nuit ou pr??sence de nuit ? </span>
                        </h2>
                                    <p class="mb-5" >
                                           Pour les seniors d??pendants, souffrants ou qui viennent de sortir de l???h??pital, les personnes malade ou en situation handicap  il 
                                           est souvent n??cessaire de faire appel ?? un auxiliaire de vie qui dormira dans la maison. Cet assistant peut accomplir deux types de 
                                           services : la garde de nuit ou la pr??sence de nuit.
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
                                            <span style="color: #DF034D;">a pr??sence de nuit : une pr??sence attentive dans la maison </span> 
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">
                                    
                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class=" mb-5" >
                                            <span style="">
                                                La pr??sence de nuit consistant ?? assurer une pr??sence s??curisante tout au long de la nuit, la pr??sence de nuit s???adresse aux 
                                            personnes autonomes ou en perte d???autonomie l??g??re. On parle ??galement de garde non m??dicalis??e.
                                            </span>  <br> <br>
                                            Contrairement ?? la garde, l???auxiliaire qui assure une simple pr??sence de nuit n???est pas tenue de rester toute la nuit aux c??t??s de 
                                            la personne qu???elle assiste. <br> Elle peut dormir dans une pi??ce voisine, et n???aura pas forc??ment besoin de se lever fr??quemment. 
                                             <br> <br>
                                            Toutefois, elle reste vigilante, et peut intervenir en cas de besoin. Si la garde s???appr??te ?? se lever plusieurs fois la nuit, 
                                            la pr??sence de nuit se limite g??n??ralement ?? une seule intervention maximum jusqu???au matin.
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >

                                            Ce service commence g??n??ralement apr??s le repas du soir, et se termine au r??veil. Il peut inclure, en cas de besoin, 
                                            l???assistance pour la toilette et le petit-d??jeuner. <br> <br>
                                            <span style="color: #DF034D">
                                                La pr??sence de nuit est donc sollicit??e pour accompagner les personnes autonomes, mais qui ont besoin d???une pr??sence rassurante 
                                                ?? leur domicile.  C???est par exemple le cas des seniors qui reviennent de l???h??pital, ou des personnes angoiss??es pendant la nuit suite 
                                            ?? une chute ou ?? un petit accident. Le simple fait de savoir que quelqu???un dort ?? c??t?? permet de les rassurer.
                                            </span>  <br>
                                            Ainsi, la pr??sence de nuit dure seulement quelques jours, juste le temps que la personne accompagn??e retrouve ses habitudes. <br>
                                            Les services d???un garde de nuit peuvent ??tre permanents dans le cas o?? la personne est d??pendante.

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
                                            <span style="color: #DF034D;"> a garde de nuit : une pr??sence active aux c??t??s de l???accompagn?? </span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">
                                    
                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                            La garde de nuit est assur??e par un(e) auxiliaire de vie form??e sp??cifiquement ?? cette mission ou un personnel 
                                            m??dical ???aide-soignant, infirmier. <br> <br>
                                            La <span style="color: #DF034D">  garde de nuit</span> concerne les personnes ??g??es malades ou pr??sentant une perte d???autonomie 
                                            lourde (d??mence, maladie d???Alzheimer, maladie parkinson insuffisance respiratoire???) 
                                            n??cessitant une surveillance de chaque instant. <br> <br>
                                            Les services d???une garde sont ??galement utiles pour les personnes malades, les personnes handicap??es. <br>
                                             La garde de nuit et la personne qu???elle assiste dorment dans la m??me pi??ce. 
                                             Par cons??quent, l???auxiliaire de vie doit se tenir pr??t ?? aider 

                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                           l???accompagn?? ?? chaque fois qu???il se l??ve. Il peut intervenir ?? plusieurs reprises pendant la nuit.
                                           <br>
                                           La garde-malade peut alors accompagner la personne aux toilettes, l???aider ?? boire ou ?? satisfaire divers besoins pendant la nuit. 
                                           Une garde est ??galement sollicit??e pour les personnes d??pendantes. Elle peut alors assurer les soins et les changes pendant la nuit. 
                                           <br> <br>
                                           Elle veille sur la personne assist??e ?? partir du repas du soir jusqu???au lendemain matin. 
                                           Elle l???aide ?? manger, ?? enfiler sa tenue de nuit, ?? se coucher, ?? se lever, ?? faire sa toilette et ?? prendre son petit-d??jeuner.
                                           <br> <br>
                                           De mani??re g??n??rale, la garde de nuit assure une assistance active aux seniors souffrant ou d??pendant, qui sont maintenus ?? domicile.

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
                                            <span style="color: #DF034D;"> ??clarer et r??mun??rer un assistant de vie qui travaille la nuit</span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">
                                    
                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                            Comme les autres travaux d???un salari?? ?? domicile, les services d???une garde ou d???une pr??sence de nuit 
                                            peuvent ??tre d??clar??s par le biais du CESU. Ce dispositif simplifie les d??marches, et permet de b??n??ficier d???un cr??dit 
                                            d???imp??t ?? hauteur de 50 % du co??t du service factur??. Lors de la d??claration, il faut entrer dans la 
                                            rubrique ?? compl??ments de salaire ?? et s??lectionner le type d???heures concern??es par les services de 
                                            ???auxiliaire de vie. En principe, cela va de 21 h ?? 6 h, soit 9 heures au maximum. <br> 
                                            Vous pourrez ensuite r??mun??rer votre auxiliaire de vie selon les moyens les plus pratiques pour vous. 
                                            Il convient de noter qu???un financement est possible sous conditions. 
                                            Il y a notamment l???Allocation personnalis??e d???autonomie ou APA, qui est dirig??e par les d??partements. 
                                            La disponibilit?? de l???aide d??pend essentiellement du niveau de revenu et du niveau de d??pendance de la personne accompagn??e.

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
                                            <span style="color: #DF034D;"> uels sont les soins et services d???assistance de nuit ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -200px;">

                                        <p class="mb-5" >
                                            En fonction des besoins du senior accompagn??, une assistance de nuit peut inclure plusieurs services :
                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text">L???aide au repas,</li>
                                                            <li class="text">L???aide ?? la prise de m??dicament </li>
                                                            <li class="text">L???aide ?? la toilette  </li>
                                                            <li class="text">L???accompagnement aux toilettes ou le changement des protections anatomiques </li>
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text">L???aide au coucher </li>
                                                            <li class="text">L???aide au lever </li>
                                                            <li class="text">Certains soins ?? domicile   </li>
                                                            <li class="text">L???apaisement des angoisses  </li>
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
                                            <span style="color: #DF034D;"> ans quels cas faire appel ?? une garde de nuit ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -70px;">

                                        <p class="mb-5" >
                                            L???anxi??t?? des seniors a tendance ?? s???accroitre la nuit. 
                                            En vieillissant la qualit?? du sommeil tend ?? se d??grader la nuit surtout
                                             avec les troubles d???angoisses, l???insomnie, troubles d???anxi??t??s ; 
                                             d??pressions et palpitations??? Les troubles de l???humeur qui surviennent 
                                             pendant la phase nocturne sont bien souvent des ??l??ments d??clencheurs 
                                             pour l???entourage en mati??re de placement en maison de 
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
                                            <span style="color: #DF034D;"> ourquoi se faire accompagner ou se faire assister ?? son domicile ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -70px;">

                                        <p class="mb-5" >
                                            Se faire accompagner ?? son domicile permet d???assurer une pr??sence 
                                            permanente pour veiller sur une personne ??g??e vuln??rable, malade ou 
                                            personne en situation handicap. <br>
                                            La garde de nuit est ainsi envisag??e dans plusieurs cas :

                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><b>Les troubles de l???humeur :</b> 
                                                                anxi??t?? qui apparait ?? la tomb??e du jour ou de 
                                                                r??veils nocturnes associ??s ?? des douleurs ou des 
                                                                troubles du sommeil, l???agitation et le stress 
                                                                pendant la nuit sont fr??quents chez les seniors.
                                                            </li>
                                                            <li class="text"><b>Les troubles de d??mence :   </b> 
                                                                Particuli??rement chez les personnes touch??es par une d??mence de type Alzheimer. 
                                                                Le r??le de l???auxiliaire de vie ou aide ?? domicile consiste alors ?? rassurer et 
                                                                ?? apaiser la personne ??g??e afin d???am??liorer son confort.  
                                                            </li>
                                                            <li class="text"> <b>Les d??ambulations nocturnes :</b>  La d??ambulation nocturne, qui appara??t fr??quemment en cas de maladie d'Alzheimer et d'autres types d??mences chez les personnes ??g??es peut conduire ?? de nombreuses situations dangereuses, puisque la personne est trop d??sorient??e pour ??tre parfaitement consciente de ce qu'elle fait.
                                                                Concr??tement, il s???agit d???aller-retours fr??quents voire incessants pouvant conduire ?? l?????puisement du sujet ou de son aidant. Souvent associ??e ?? une pathologie neurod??g??n??rative ainsi qu????? des troubles du rythme circadien, les d??ambulations peuvent conduire ?? une chute ou une fugue.
                                                                </li>
                                                           
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                    <li class="text"><b>Le retour ?? domicile apr??s hospitalisation : </b> 
                                                        Afin d???assister et de rassurer les personnes vuln??rables 
                                                        sortant de l???h??pital, d???une clinique ou d???une maison de 
                                                        repos, il est fr??quent de faire appel ?? une garde de nuit. 
                                                        Requ??rant g??n??ralement des soins m??dicaux ainsi qu???une 
                                                        assistance pour certains gestes du quotidien, ce service 
                                                        permet de s???assurer du bon r??tablissement du patient.
                                                    </li>
                                                    <li class="text"><b>Les chutes et accidents :    </b> 
                                                        En France, les chutes des personnes ??g??es entra??nent chaque ann??e plus de 100 000 hospitalisations et plus de 10 000 d??c??s. Ces chutes ont des cons??quences physiques, psychologiques, sociales et marquent une rupture dans la vie des individus et une perte d'autonomie
Les personnes ??g??es sont fr??quemment touch??es par les accidents domestiques, et en particulier par les chutes. Pouvant se r??v??ler dramatique, notamment pour les seniors touch??s par l???ost??oporose, ce type d???accident n??cessite une prise en charge rapide, notamment pour aider la personne ?? se relever.

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
                                            <span style="color: #DF034D;"> uels modes d???intervention et quels co??ts pour une garde de nuit ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -70px;">

                                        <p class="mb-5" >
                                            Comme toute prestation de service ?? domicile il existe diff??rentes 
                                            modalit??s d???intervention pour faire appel ?? un service de garde de nuit. <br>
                                            La garde de nuit peut se faire :

                                            
                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><b>En emploi direct :</b> 
                                                                le senior ou son aidant est l???employeur  de l???auxiliaire de vie ou du garde-malade. <br> 
                                                                Celui-ci se charge de recruter le garde-malade qui intervient ?? domicile et assure l???enti??re 
                                                                gestion administrative du salari?? et la d??claration des charges. 
                                                                Il peut pour se faire avoir recours ?? l???utilisation du CESU (Ch??que Emploi Service Universel).
                                                            </li>
                                                            <li class="text"><b>En mode mandataire :   </b> 
                                                                Le mandataire est charg?? de l???ensemble des d??marches administratives 
                                                                et juridiques concernant 
                                                                l???employ?? (recrutement, gestion de paie, licenciement???). 
                                                                En revanche, l???employeur demeure la personne ??g??e qui assure la 
                                                                r??mun??ration de l???intervenant de nuit ?? son domicile. 
                                                            </li>
                                                           
                                                           
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                    <li class="text"><b>En passant par un prestataire :  </b> 
                                                        c???est alors une entreprise ou une association qui g??re pour vous la partie administrative, voire salarie (prestataire) de l???auxiliaire ou garde-malade. 
En qualit?? d???employeur, le prestataire du service se charge, contre r??mun??ration, du recrutement, du suivi et de la gestion de l???intervenant de nuit. Et le senior r??gle chaque heure d???intervention de l???aidant aupr??s du prestataires du service.

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
                                            <span style="color: #DF034D;"> ombien co??te une garde de nuit pour personne ??g??e ?</span>
                                        </h2>
                                    </div>

                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -70px;">

                                        <p class="mb-5" >
                                            Propos??s d???ordinaire sous forme de forfait, <b>les tarifs d???une intervention
                                                de nuit varient en fonction du volume horaire couvert et du type de 
                                                service propos?? : pr??sence de nuit ou garde de nuit.</b>  <br><br>

                                               <span style="color: #DF034D;"> <b>Tarif pour une garde de nuit de personne ??g??e ou handicap??e</b>  </span> <br>

                                            Les tarifs en vigueur pour une garde de nuit sont ??lev??s. 
                                            Etant donn?? que le garde malade de nuit travaille en g??n??ral de 20 heures ?? 8 heures le matin, ce type de prestation est sujette ?? une majoration pour travail de nuit variant de 9 ?? 12h, les heures travaill??es de nuit ne peuvent dans ce cadre ni d??passer les 12h cons??cutives ni exc??der 5 nuits cons??cutives (hors situation exceptionnelle). Au-del?? de ce volume horaire, les heures sont alors r??mun??r??es en horaires classiques.
                                            <br> Le tarif d'une garde nuit en emploi direct est moins ??lev??. 
                                            La Convention collective nationale des salari??s du particulier 
                                            employeur d??cide de ce tarif horaire. La convention fixe g??n??ralement 
                                            les tarifs aux alentours de 10 euros brut.

                                            <br> <br>

                                           <span style="color:#DF034D;">  <b>Tarif pour une pr??sence de nuit ?? domicile</b>   </span> <br>
                                            Le co??t d???une pr??sence de nuit est moins ch??re qu???une garde de nuit car le personnel n'est 
                                            pas qualifi?? ce type de prestation  ne n??cessite pas toujours d???intervention active <br>
                                            Une distinction est en effet op??r??e dans ce cas entre les heures dites de pr??sence 
                                            responsable ???pr??sence de nuit???, 
                                            ne n??cessitant pas toujours d???intervention, et les heures effectives ???garde de nuit??? impliquant 
                                            une surveillance active. Ainsi, une heure de pr??sence responsable est r??mun??r??e ?? hauteur 
                                            des 2/3 d???une heure travaill??e. <br>
                                            Une <b>fourchette de prix en fonction du service requis : garde de nuit ou 
                                                pr??sence de nuit </b> 
                                             (il est bon de garder ?? l???esprit que le recours aux services de maintien
                                              ?? domicile ouvre droit ?? un cr??dit d???imp??t de 50 %) : <br> <br>                                    

                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><b>Forfait pr??sence de nuit </b> <br>
                                                                hors aides Entre 80 et 100 ??? 
                                                            </li>
                                                            
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                    <li class="text"><b>Forfait garde de nuit  </b> <br>
                                                        hors aides Entre 140 et 200 ???

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
                                            Afin de supporter la charge que repr??sente une garde de nuit, vous pouvez compter sur :
                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><b>Le cr??dit d???imp??t :</b> <br>
                                                                Le recours ?? un service d???aide ?? la personne ou ?? une auxiliaire de vie en emploi direct ouvre droit 
                                                                ?? un cr??dit d???imp??t de 50 % des sommes vers??es dans la limite de 12 000 ??? par an avec une majoration 
                                                                de 1 500 ??? par personne ??g??e de plus de 65 ans. Il s???agit d???un v??ritable soutien financier pour un 
                                                                service essentiel au maintien ?? domicile.	
                                                            </li>
                                                            <li class="text"><b>L???APA (Allocation Personnalis??e d???Autonomie) :   </b> <br>
                                                                la principale aide financi??re pour les personnes de plus de 60 ans en perte d???autonomie.
                                                            </li>
                                                            <li class="text"><b>La PCH (Prestation Compensatoire du Handicap)   </b> <br>
                                                                si votre proche pr??sente un handicap important
                                                            </li>
                                                           
                                                </ul>
                                            </p>
                                           
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            
                                                <ul class="margin-top-sm list list_star">

                                                    <li class="text"><b>Les caisses de retraite  </b> <br>
                                                        Destin??es aux personnes ??g??es non ??ligibles ?? l???APA, les caisses de retraite, et notamment la CNAV et la MSA, permettent de financer de mani??re ponctuelle ou r??guli??re les services ?? la personne tels que la garde de nuit. <br>
                                                        Autre aide financ??e par la caisse de retraite : l???ARDH (Aide au Retour ?? Domicile apr??s Hospitalisation) permet d???accompagner le retour des seniors chez eux apr??s un s??jour hospitalier, en participant notamment au financement de l???aide ?? domicile.
                                                    </li>
                                                    <li class="text"><b>L???assurance maladie et les compl??mentaires sant??  </b> <br>
                                                        Des aides, voire une prise en charge (dans des situations d???urgence et temporaires) de l???Assurance Maladie.
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
