@extends('layouts.master')
@section('title', __('Nos metiers'))

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
                          <h2 class="heading heading__lvl1 stillforce-heading-red"> Nos <span style="color:#594EE6;">métiers</span></h2>
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue">N</span>os métiers en tant que intervenants à domicile </h2>
                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><a href="#assist">Assistant ménager</a> </li>
                                                            <li class="text"><a href="#auxiliaire">Auxiliaires de vie à domicile</a></li>
                                                            <li class="text"><a href="#assistant">Assistant de vie</a> </li>
                                                </ul>
                                            </p><br><br>
                                            <a href="{{ route('join-us') }}" class="margin-top-default button button_w-m-full"
                                               style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
                                                        Nous Rejoindre
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
<br><br><br><br><br>


        <br>
        <!-- start section -->
        <section id="auxiliaire">
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> A </span>
                                            <span style="color: #DF034D;"> ssistant ménager</span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    <div class="col-lg-12 mx-auto">
                                        <p class=" mb-5 ">
                                            <span style="color:#594EE6;" >Votre rôle</span><br><br>
                                                    Vous améliorez le quotidien des clients de YOUDM-CARE en assurant en toute autonomie une propreté  régulière et une hygiène parfaites de leur maison (aérer les pièces, dépoussiérer, nettoyer les sols, repassage…)
                                                   <br><br> <span style="color:#594EE6;" >Le poste</span><br><br>
                                                    Ce métier demande une grande capacité d’adaptation ,un grand sens de devoir  et une application attentive aux menus détaillés du clients afin de répondre à ses besoins et exigences: nettoyage de la maison , courses, préparation des repas,  rangement, entretien du linge, repassage…
                                                    Expert dans son domaine ,l’assistant ménager effectue des prestations de qualité grâce à ses compétences techniques mais aussi parce qu’il fait preuve de : sens du service, discrétion, autonomie, capacités d’organisation et d’adaptation à diverses consignes
                                                    semaine, plusieurs activités (exemple : Assistant ménager + Assistant de vie ou autre) et de réaliser ainsi un temps plein avec le même employeur.
                                                    Sachez que l’évolution interne est un engagement fort au sein de société.
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                                <span style="color:#594EE6;" > Qualités requise pour être assistant ménager </span>

                                                            <ul class="margin-top-sm list list_star">

                                                                        <li class="text">Avoir une  première expérience en entretien de domicile </li>
                                                                        <li class="text">Capacité d’organisation et de prise d’initiative </li>
                                                                        <li class="text">Un bon sens relationnel   </li>
                                                                        <li class="text">Une bonne connaissance et maitrise  des techniques d’entretien et de nettoyage de la maison  </li>
                                                                        <li class="text">Une bonne connaissance et maîtrise des techniques de repassage </li>
                                                                        <li class="text">Un grand sens du service et de la discrétion </li>
                                                                        <li class="text">Une disponibilité régulière : minimum 24h par semaine   </li>
                                                                        <li class="text">Un véhicule et le permis B peuvent être demandés en fonction des zones d’intervention et des demandes des clients  </li>
                                                            </ul>

                                            </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >

                                         <img class="img-rounded" src="{{ asset('_next/static/media/metier3.jpg') }}" alt="" />

                                        </p>
                                        <a href="{{ route('join-us') }}" class="margin-top-default button button_w-m-full"
                                        style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
                                                 Nous Rejoindre
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
<br><br>
        <!-- start section -->
        <section id="assist">
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> A </span>
                                            <span style="color: #DF034D;"> uxiliaires de vie à domiciler</span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    <div class="col-lg-12 mx-auto">
                                        <p class=" mb-5 ">
                                            <span style="color:#594EE6;" >Votre rôle</span><br>
                                            Comme l’auxiliaire de vie sociale, le rôle de l’aide à domicile est d’aider la personne âgée à continuer à vivre en autonomie à son domicile. A ce titre, elle peut se charger du ménage, des courses, des repas, de l’accompagnement lors des déplacements, de la toilette… L’aide à domicile doit être discrète, attentive, à l’écoute. Comme pour l’auxiliaire de vie sociale, l’aide à domicile doit avoir une bonne condition physique lui permettant d’aider la personne âgée à se lever ou à se coucher, mais aussi porter les courses

                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                                <span style="color:#594EE6;" >Les qualités requise pour être aide à domicile</span><br>

                                                 Être aide à domicile, c’est se mettre au service d’une ou plusieurs personnes pour faciliter la vie quotidienne, et le maintien à domicile. Chaque jour, cette professionnelle doit mettre en œuvre des compétences multiples :
                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text">Faire preuve d’empathie et de grandes capacités relationnelles, être à l’écoute et bienveillante, faire preuve de patience, </li>
                                                    <li class="text">Maîtriser les protocoles sanitaires et connaître les produits d’entretien pour chacune des tâches ménagères, </li>
                                                    <li class="text">Savoir utiliser différents robots électroménagers ou outils de jardinage,   </li>
                                                    <li class="text">Respecter les règles d'hygiène et de propreté </li>
                                                    <li class="text">Connaître les gestes de premiers secours, </li>
                                                    <li class="text">Savoir adapter ses activités et façons de faire selon les demandes de chaque client. </li>
                                                    <li class="text">Prévenir les accidents domestiques,   </li>
                                                    <li class="text">Faire preuve de ponctualité et de politesse  </li>
                                                </ul>

                                            </p>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >

                                         <img class="img-rounded" src="{{ asset('_next/static/media/metier1.jpg') }}" alt="" />

                                        </p>
                                        <a href="{{ route('join-us') }}" class="margin-top-default button button_w-m-full"
                                        style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
                                                 Nous Rejoindre
                                        </a>
                                    </div>
                                    <div class="col-lg-12 mx-auto">
                                        <p class=" mb-5 "><br>
                                            <span style="color:#594EE6;" >Qu’est-ce qu’une aide à domicile ?</span><br>
                                            Dans le domaine des services à la personne, le métier d’aide à domicile s’exerce auprès de personnes âgées, malades ou en situation de handicap pour réaliser des tâches de la vie quotidienne à leur place ou en leur venant en aide
                                            <ul class="margin-top-sm list list_star">
                                                <li class="text">L’aide à la toilette </li>
                                                <li class="text">L’aide à l’habillement </li>
                                                <li class="text">La préparation des repas   </li>
                                                <li class="text">L’aide à la prise des repas si nécessaire </li>
                                                <li class="text">L’accompagnement pour les déplacements </li>
                                                <li class="text">L’aide pour le lever et le coucher </li>
                                            </ul>
<br>
                                            <span style="color:#594EE6;" >Les missions d’une aide à domicile</span><br>

                                            Les missions d’une aide à domicile varient en fonction de la personne à assister chez elle et de son niveau d’autonomie. Il peut s’agir de faire quelques heures de ménage, de faire la vaisselle et de ranger la cuisine, d’aller faire les courses avec la personne ou encore d’assurer le repassage de son linge. L’aide à domicile peut aussi être sollicitée pour entretenir le jardin, pour la tonte, le désherbage ou l’arrosage, par exemple.
                                            Ponctuellement, l’aide à domicile peut éclairer le bénéficiaire sur une démarche administrative ou un courrier officiel auquel il faut répondre.
                                            Chacune de ces missions exercées au domicile du bénéficiaire est l’occasion également de discuter avec la personne, et de rompre ainsi un éventuellement isolement.
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
<br><br>
        <!-- start section -->
        <section id="assistant">
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> A </span>
                                            <span style="color: #DF034D;"> ssistant de vie</span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                                <span style="color:#594EE6;" >LES QUALITÉS REQUISES pour etre auxiliare de vie</span><br>
                                                S’occuper au quotidien de personnes âgées, dépendantes ou handicapées, n’est pas donné à tout le monde. Pour exercer ce métier et être épanoui, il est important de posséder certaines qualités humaines fondamentales :

                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text">Avoir de fortes capacités relationnelles et de l’écoute, </li>
                                                    <li class="text">L’auxiliaire de vie  doit posséder un grand sens de communication </li>
                                                    <li class="text">Être réactif et dynamique, savoir prendre des initiatives,   </li>
                                                    <li class="text">Avoir une excellente connaissance des différents publics et des pathologies liées au vieillissement et au handicap, </li>
                                                    <li class="text">Être autonome pour intervenir seul au domicile et organiser son travail en fonction des publics et des situations, </li>
                                                    <li class="text">Avoir une bonne condition physique, </li>
                                                    <li class="text">Elle ou il  doit être à l'écoute de la personne aidée et des aidants, doit posséder un sens du contact et de l'empathie afin d'établir un lien de confiance avec la personne et son entourage </li>
                                                    <li class="text">Savoir s’adapter. </li>
                                                    <li class="text">Un diplôme ou titre professionnel dans l’assistance aux personnes âgées   </li>
                                                    <li class="text">Et/ou une expérience vérifiable d’au moins trois ans dans l’assistance aux personnes âgées </li>
                                                    <li class="text">Un très bon relationnel –Respectueuse,  politesse, empathie, courtoisie, ponctualité, joviale ,ouvert d’esprit, organisé </li>
                                                    <li class="text">Une grande discrétion face aux éléments de vie privée </li>
                                                    <li class="text">Une capacité à apprécier l’évolution de l’autonomie de la personne âgée</li>
                                                </ul>

                                            </p>



                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >

                                         <img class="img-rounded" src="{{ asset('_next/static/media/metier2.jpg') }}" alt="" />

                                        </p>
                                        <a href="{{ route('join-us') }}" class="margin-top-default button button_w-m-full"
                                        style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
                                                 Nous Rejoindre
                                        </a>
                                    </div>
                                    <div class="col-lg-12 mx-auto">
                                        <p class=" mb-5 ">

                                            <span style="color:#594EE6;" >Les missions de l’auxilaire de vie</span><br>
                                            L’auxiliaire de vie aux familles relaie les familles auprès de personnes fragilisées ou sensibles comme les :
                                            <ul class="margin-top-sm list list_star">
                                                <li class="text">Personnes âgées, </li>
                                                <li class="text">Personnes dépendantes (maladie, convalescence ou enfants), </li>
                                                <li class="text">Personnes handicapées,   </li>
                                                <li class="text">Enfants (au domicile des parents). </li>
                                                <li class="text">L’accompagnement pour les déplacements </li>
                                                <li class="text">L’aide pour le lever et le coucher </li>
                                            </ul>

                                            Il exerce son activité soit ponctuellement, soit de façon régulière. Il contribue au maintien à domicile en facilitant la vie quotidienne des personnes auprès desquelles il intervient. Il les accompagne ainsi dans les actes de la vie au quotidien
                                            L’assistant de vie aux familles doit être capable de :
                                            <ul class="margin-top-sm list list_star">
                                                <li class="text">Réaliser des tâches domestiques (préparation des repas, faire les courses, entretien de la maison…) </li>
                                                <li class="text">Assister les personnes dans les actes de la vie quotidienne (toilette corporelle, alimentation, aide aux déplacements…) </li>
                                                <li class="text">Prendre en charge de jeunes enfants.  </li>
                                            </ul>
                                            Toutes les actions de l’assistant de vie aux familles visent à faciliter la vie quotidienne des personnes dont il s’occupe. Grâce à lui, les personnes restent chez elles dans de bonnes conditions. Il met en place une relation professionnelle, planifie et organise ses interventions, prend en compte les mesures de prévention et de sécurité. Il tient compte des personnes, respecte et met en œuvre les règles professionnelles de base
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

        <section class="py-5" style="margin-top: -30px;">
            <div class="container" >
            <div class="row">
                <div class="row justify-content-start">

                    <div class="col-lg-12 mx-auto">

                        <p class="mb-5" >
                            <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:36px;">
                                <span class="alt-font first-letter first-letter-big text-fast-blue">V </span>                           
                                otre univers de travail chez Youdom-care en tant que Assistant Ménager</h2>

                        Vous intervenez au domicile de nos clients.  Les particuliers sont les clients de YOUDOM-CARE
                        Vous êtes salarié en CDI d’une ou plusieurs agences dans le même département ou région
                        . En fonction de vos disponibilités Youdom-Care vous propose des missions évolutives chez un ou plusieurs clients
                        YOUDOM-CARE vous fournit le matériel professionnel adéquat pour mener à bien votre mission .
                        YOUDOM-CARE vous accompagne tout au long de votre parcours professionnel en vous proposant des formations<br><br>

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:36px;">
                            <span class="alt-font first-letter first-letter-big text-fast-blue">V </span>otre évolution de carrière chez YOUDOM-CARE</h2>
                        Chez YOUDOM-CARE  vous bénéficiez d’un parcours individuel de formation spécifique à notre méthode ménage-repassage.
                        Pour accroître vos compétences et développer plus d’expériences dans votre domaine d’activité en tant que assistant ménager, nous proposons le multi-activité à nos intervenants à domicile. Le principe est de vous donner la possibilité d’exercer, dans une même journée ou au sein d’une


                        </p>
                    </div>
<br><br>
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">

                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="planning-tab" class="tab-pane fade in active show">
                                <div class="row">
                                     <div class="col-12 col-lg-12 col-md-12  text-sm-start">

                                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> Q </span>
                                            <span style="color: #DF034D;"> uels sont nos metiers ?</span>
                                        </h2>
                                    </div>
<br><br>
                                    <div class="col-12 col-lg-12 col-md-12 text-center text-sm-start" style="margin-bottom: -200px;">

                                        <p class="mb-5" >
                                        </p>

                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5">
                                                <span style="color:#594EE6;" > En Agence</span>
                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text">Responsable de secteur</li>
                                                    <li class="text">Chargé de recrutement </li>
                                                    <li class="text">Chargé de clientèle  </li>
                                                    <li class="text">Responsable d’agence </li>
                                                </ul>
                                            </p>
                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            <span style="color:#594EE6;" >Au Siege</span>
                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text">Ressources humaines</li>
                                                    <li class="text">Communication </li>
                                                    <li class="text">Juridique   </li>
                                                    <li class="text">Développement  </li>
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

</section>


@endsection

