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
                          <h2 class="heading heading__lvl1 stillforce-heading-red"> Nos <span style="color:#594EE6;">m??tiers</span></h2>
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue">N</span>os m??tiers en tant que intervenants ?? domicile </h2>
                                            <p class="mb-5">
                                                <ul class="margin-top-sm list list_star">

                                                            <li class="text"><a href="#assist">Assistant m??nager</a> </li>
                                                            <li class="text"><a href="#auxiliaire">Auxiliaires de vie ?? domicile</a></li>
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
                                            <span style="color: #DF034D;"> ssistant m??nager</span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    <div class="col-lg-12 mx-auto">
                                        <p class=" mb-5 ">
                                            <span style="color:#594EE6;" >Votre r??le</span><br><br>
                                                    Vous am??liorez le quotidien des clients de YOUDM-CARE en assurant en toute autonomie une propret??  r??guli??re et une hygi??ne parfaites de leur maison (a??rer les pi??ces, d??poussi??rer, nettoyer les sols, repassage???)
                                                   <br><br> <span style="color:#594EE6;" >Le poste</span><br><br>
                                                    Ce m??tier demande une grande capacit?? d???adaptation ,un grand sens de devoir  et une application attentive aux menus d??taill??s du clients afin de r??pondre ?? ses besoins et exigences: nettoyage de la maison , courses, pr??paration des repas,  rangement, entretien du linge, repassage???
                                                    Expert dans son domaine ,l???assistant m??nager effectue des prestations de qualit?? gr??ce ?? ses comp??tences techniques mais aussi parce qu???il fait preuve de : sens du service, discr??tion, autonomie, capacit??s d???organisation et d???adaptation ?? diverses consignes
                                                    semaine, plusieurs activit??s (exemple : Assistant m??nager + Assistant de vie ou autre) et de r??aliser ainsi un temps plein avec le m??me employeur.
                                                    Sachez que l?????volution interne est un engagement fort au sein de soci??t??.
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                                <span style="color:#594EE6;" > Qualit??s requise pour ??tre assistant m??nager </span>

                                                            <ul class="margin-top-sm list list_star">

                                                                        <li class="text">Avoir une  premi??re exp??rience en entretien de domicile </li>
                                                                        <li class="text">Capacit?? d???organisation et de prise d???initiative </li>
                                                                        <li class="text">Un bon sens relationnel   </li>
                                                                        <li class="text">Une bonne connaissance et maitrise  des techniques d???entretien et de nettoyage de la maison  </li>
                                                                        <li class="text">Une bonne connaissance et ma??trise des techniques de repassage </li>
                                                                        <li class="text">Un grand sens du service et de la discr??tion </li>
                                                                        <li class="text">Une disponibilit?? r??guli??re : minimum 24h par semaine   </li>
                                                                        <li class="text">Un v??hicule et le permis B peuvent ??tre demand??s en fonction des zones d???intervention et des demandes des clients  </li>
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
                                            <span style="color: #DF034D;"> uxiliaires de vie ?? domiciler</span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    <div class="col-lg-12 mx-auto">
                                        <p class=" mb-5 ">
                                            <span style="color:#594EE6;" >Votre r??le</span><br>
                                            Comme l???auxiliaire de vie sociale, le r??le de l???aide ?? domicile est d???aider la personne ??g??e ?? continuer ?? vivre en autonomie ?? son domicile. A ce titre, elle peut se charger du m??nage, des courses, des repas, de l???accompagnement lors des d??placements, de la toilette??? L???aide ?? domicile doit ??tre discr??te, attentive, ?? l?????coute. Comme pour l???auxiliaire de vie sociale, l???aide ?? domicile doit avoir une bonne condition physique lui permettant d???aider la personne ??g??e ?? se lever ou ?? se coucher, mais aussi porter les courses

                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                                <span style="color:#594EE6;" >Les qualit??s requise pour ??tre aide ?? domicile</span><br>

                                                ????tre aide ?? domicile, c???est se mettre au service d???une ou plusieurs personnes pour faciliter la vie quotidienne, et le maintien ?? domicile. Chaque jour, cette professionnelle doit mettre en ??uvre des comp??tences multiples :
                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text">Faire preuve d???empathie et de grandes capacit??s relationnelles, ??tre ?? l?????coute et bienveillante, faire preuve de patience, </li>
                                                    <li class="text">Ma??triser les protocoles sanitaires et conna??tre les produits d???entretien pour chacune des t??ches m??nag??res, </li>
                                                    <li class="text">Savoir utiliser diff??rents robots ??lectrom??nagers ou outils de jardinage,   </li>
                                                    <li class="text">Respecter les r??gles d'hygi??ne et de propret?? </li>
                                                    <li class="text">Conna??tre les gestes de premiers secours, </li>
                                                    <li class="text">Savoir adapter ses activit??s et fa??ons de faire selon les demandes de chaque client. </li>
                                                    <li class="text">Pr??venir les accidents domestiques,   </li>
                                                    <li class="text">Faire preuve de ponctualit?? et de politesse  </li>
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
                                            <span style="color:#594EE6;" >Qu???est-ce qu???une aide ?? domicile ?</span><br>
                                            Dans le domaine des services ?? la personne, le m??tier d???aide ?? domicile s???exerce aupr??s de personnes ??g??es, malades ou en situation de handicap pour r??aliser des t??ches de la vie quotidienne ?? leur place ou en leur venant en aide
                                            <ul class="margin-top-sm list list_star">
                                                <li class="text">L???aide ?? la toilette </li>
                                                <li class="text">L???aide ?? l???habillement </li>
                                                <li class="text">La pr??paration des repas   </li>
                                                <li class="text">L???aide ?? la prise des repas si n??cessaire </li>
                                                <li class="text">L???accompagnement pour les d??placements </li>
                                                <li class="text">L???aide pour le lever et le coucher </li>
                                            </ul>
<br>
                                            <span style="color:#594EE6;" >Les missions d???une aide ?? domicile</span><br>

                                            Les??missions d???une aide ?? domicile??varient en fonction de la personne ?? assister chez elle et de son niveau d???autonomie. Il peut s???agir de faire quelques heures de m??nage, de faire la vaisselle et de ranger la cuisine, d???aller faire les courses avec la personne ou encore d???assurer le repassage de son linge. L???aide ?? domicile peut aussi ??tre sollicit??e pour entretenir le jardin, pour la tonte, le d??sherbage ou l???arrosage, par exemple.
                                            Ponctuellement, l???aide ?? domicile peut ??clairer le b??n??ficiaire sur une d??marche administrative ou un courrier officiel auquel il faut r??pondre.
                                            Chacune de ces missions exerc??es au domicile du b??n??ficiaire est l???occasion ??galement de discuter avec la personne, et de rompre ainsi un ??ventuellement isolement.
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
                                                <span style="color:#594EE6;" >LES QUALIT??S REQUISES pour etre auxiliare de vie</span><br>
                                                S???occuper au quotidien de personnes ??g??es, d??pendantes ou handicap??es, n???est pas donn?? ?? tout le monde. Pour exercer ce m??tier et ??tre ??panoui, il est important de poss??der??certaines qualit??s humaines fondamentales??:

                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text">Avoir de fortes capacit??s relationnelles et de l?????coute, </li>
                                                    <li class="text">L???auxiliaire de vie  doit poss??der un grand sens de communication </li>
                                                    <li class="text">??tre r??actif et dynamique, savoir prendre des initiatives,   </li>
                                                    <li class="text">Avoir une excellente connaissance des diff??rents publics et des pathologies li??es au vieillissement et au handicap, </li>
                                                    <li class="text">??tre autonome pour intervenir seul au domicile et organiser son travail en fonction des publics et des situations, </li>
                                                    <li class="text">Avoir une bonne condition physique, </li>
                                                    <li class="text">Elle ou il  doit????tre???? l'??coute de la personne aid??e et des aidants, doit poss??der un sens du contact et de l'empathie afin??d'??tablir un lien de confiance avec la personne et son entourage </li>
                                                    <li class="text">Savoir s???adapter. </li>
                                                    <li class="text">Un dipl??me ou titre professionnel dans l???assistance aux personnes ??g??es   </li>
                                                    <li class="text">Et/ou une exp??rience v??rifiable d???au moins trois ans dans l???assistance aux personnes ??g??es </li>
                                                    <li class="text">Un tr??s bon relationnel ???Respectueuse,  politesse, empathie, courtoisie, ponctualit??, joviale ,ouvert d???esprit, organis?? </li>
                                                    <li class="text">Une grande discr??tion face aux ??l??ments de vie priv??e </li>
                                                    <li class="text">Une capacit?? ?? appr??cier l?????volution de l???autonomie de la personne ??g??e</li>
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

                                            <span style="color:#594EE6;" >Les missions de l???auxilaire de vie</span><br>
                                            L???auxiliaire de vie aux familles relaie les familles aupr??s de??personnes fragilis??es ou sensibles??comme les :
                                            <ul class="margin-top-sm list list_star">
                                                <li class="text">Personnes ??g??es, </li>
                                                <li class="text">Personnes d??pendantes (maladie, convalescence ou enfants), </li>
                                                <li class="text">Personnes handicap??es,   </li>
                                                <li class="text">Enfants (au domicile des parents). </li>
                                                <li class="text">L???accompagnement pour les d??placements </li>
                                                <li class="text">L???aide pour le lever et le coucher </li>
                                            </ul>

                                            Il exerce son activit?? soit ponctuellement, soit de fa??on r??guli??re. Il contribue au maintien ?? domicile en facilitant la vie quotidienne des personnes aupr??s desquelles il intervient. Il les accompagne ainsi dans les actes de la vie au quotidien
                                            L???assistant de vie aux familles doit ??tre capable de :
                                            <ul class="margin-top-sm list list_star">
                                                <li class="text">R??aliser des t??ches domestiques (pr??paration des repas, faire les courses, entretien de la maison???) </li>
                                                <li class="text">Assister les personnes dans les actes de la vie quotidienne (toilette corporelle, alimentation, aide aux d??placements???) </li>
                                                <li class="text">Prendre en charge de jeunes enfants.  </li>
                                            </ul>
                                            Toutes les??actions de l???assistant de vie aux familles visent ????faciliter la vie quotidienne??des personnes dont il s???occupe. Gr??ce ????lui, les personnes restent chez elles dans de bonnes conditions. Il met en place une relation professionnelle, planifie et organise ses interventions, prend en compte les mesures de pr??vention et de s??curit??. Il tient compte des personnes, respecte et met en ??uvre les r??gles professionnelles de base
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
                                otre univers de travail chez Youdom-care en tant que Assistant M??nager</h2>

                        Vous intervenez au domicile de nos clients.  Les particuliers sont les clients de YOUDOM-CARE
                        Vous ??tes salari?? en CDI d???une ou plusieurs agences dans le m??me d??partement ou r??gion
                        . En fonction de vos disponibilit??s Youdom-Care vous propose des missions ??volutives chez un ou plusieurs clients
                        YOUDOM-CARE vous fournit le mat??riel professionnel ad??quat pour mener ?? bien votre mission .
                        YOUDOM-CARE vous accompagne tout au long de votre parcours professionnel en vous proposant des formations<br><br>

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:36px;">
                            <span class="alt-font first-letter first-letter-big text-fast-blue">V </span>otre ??volution de carri??re chez YOUDOM-CARE</h2>
                        Chez YOUDOM-CARE  vous b??n??ficiez d???un parcours individuel de formation sp??cifique ?? notre m??thode m??nage-repassage.
                        Pour accro??tre vos comp??tences et d??velopper plus d???exp??riences dans votre domaine d???activit?? en tant que assistant m??nager, nous proposons le multi-activit?? ?? nos intervenants ?? domicile. Le principe est de vous donner la possibilit?? d???exercer, dans une m??me journ??e ou au sein d???une


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
                                                    <li class="text">Charg?? de recrutement </li>
                                                    <li class="text">Charg?? de client??le  </li>
                                                    <li class="text">Responsable d???agence </li>
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
                                                    <li class="text">D??veloppement  </li>
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

