@extends('layouts.master')
@section('title', __('Accompagnement'))

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
                            <h2 class="heading heading__lvl1 stillforce-heading-red">Accompagnement et aide <span style="color:#594EE6;">aux personnes handicapees</span></h2>
                        </div>

                    </div>

            </div>

        </section>

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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue">B</span>esoin d'une aide à domicile pour accompagner vos proches malades ou en situation handicap ? </h2>
                                            <p class="lead mb-5" >
                                                Nous vous proposons un accompagnement sur mesure !
                                                Nos auxiliaires de vie spécialisées dans l’aide au handicap ont pour mission d’accompagner et soutenir les personnes en situation de handicap  ou en incapacité temporaire .

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
                            Nos auxiliaires de vie sont animés par la volonté d’accompagner l’autonomie des personnes les plus fragiles .
                            Nos auxiliaires de vie sont formées pour accompagner les adultes et les enfants dans leur actes du quotidien. Aide à la toilette, habillage, au lever/coucher, aide et préparation aux repas, sorties, voyage, présence et garde de nuit , ménage , repassage  ect..
                           Nos prestations sont personnalisées et nous nous adaptons à votre planning et à vos attentes . Notre mission  est d’êtres à vos côtés, jour après jour , pour vous aider à préserver votre autonomie
<br><br>                           Facilitez le quotidien de vos Proches Handicapés grâce à nos Auxiliaires Qualifiés. Bénéficiez de l'Allocation d'Autonomie & de 50% Crédit D'Impôt pour une Aide à Domicile.
                        </p>
                    </div>

            <div class="tab-content">
                <!-- start tab item -->
                        <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: -30px;">

                            <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                                <span class="alt-font first-letter first-letter-big text-fast-blue">C </span>
                                <span style="color: #DF034D;">hoisir YOUDOM-CARE c'est :</span>

                            </h2>

                            <div class="col-12 col-lg-6 col-md-6  ">

                                <p class="mb-5">
                                    <ul class="margin-top-sm list list_star">

                                        <li class="text"> Nous vous accompagnons à votre rythme</li>
                                            <li class="text"> Nous sommes présents 7j/7,24h/24</li>
                                            <li class="text"> Formation continue des auxiliaires de vie</li>
                                    </ul>
                                    <ul class="margin-top-sm list list_star">

                                        <li class="text"> Continuité de service : la garantie de prestations toujours assurées</li>
                                        <li class="text"> des Auxiliaires de vie diplômés et/ou expérimentés à votre service</li>
                                        <li class="text"> Coordination avec les intervenants médicaux et paramédicaux</li>

                                    </ul>

                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            </div>
	</section>
<br><br>
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue">Y</span>
                                            <span style="color: #DF034D;">oudom-care  vous accompagne  et accompagne vos proches </span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    <div class="col-lg-12 mx-auto">

                                        <p class="mb-5" >
                                            Besoin  d’une aide pour assurer les gestes du quotidien ?
                                            YOUDOM-CARE vous propose des solutions d’accompagnement sur mesure.
                                            Nos services de maintien à domicile sont là pour vous ou votre proche !
                                             YOUDOM-CARE vous accompagne au quotidien selon vos envies, vos attentes et vos besoins.
                                        </p>
                                    </div>

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class=" mb-5" >
                                            <span style="">
                                                L’AIDE AUX GESTES DU QUOTIDIEN
                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text"> L’aide à la toilette</li>
                                                    <li class="text"> L’aide à l'habillage/déshabillage</li>
                                                    <li class="text"> L’aide aux changes et à l'élimination</li>
                                                    <li class="text"> L’aide à l'alimentation</li>
                                                </ul>

                                            </span>  <br> <br>
                                                L’AIDE À LA MOBILITÉ
                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text"> Transferts</li>
                                                    <li class="text"> L’aide aux déplacements au sein du domicile (au bras ou via une aide technique)</li>
                                                    <li class="text"> L’aide aux déplacements extérieurs</li>
                                                </ul>
                                            </p>

                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            L'ACCOMPAGNEMENT À LA VIE SOCIALE
                                            <ul class="margin-top-sm list list_star">
                                                <li class="text"> L’accompagnement aux activités de loisirs</li>
                                                <li class="text"> L’accompagnement aux activités sportives</li>
                                                <li class="text"> L’accompagnement aux sorties culturelles</li>
                                                <li class="text"> Lecture, jeux de cartes, jeux de société</li>
                                                <li class="text"> Proposition d'activité créatives</li>
                                            </ul>
<br>
                                            <span style="">
                                            L’ASSISTANCE ADMINISTRATIVE
                                            <ul class="margin-top-sm list list_star">
                                                <li class="text"> L’accompagnement lors de démarches administratives simples</li>
                                                <li class="text"> L’aide au classement de documents administratifs</li>
                                                <li class="text"> L’aide pour compléter les documents administratifs</li>
                                                <li class="text"> L’aide à la préparation des commandes</li>
                                            </ul>

                                            </span>  <br>

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

        <br><br>
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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> U </span>
                                            <span style="color: #DF034D;"> ne solution sur-mesure pour garde d'enfants en situation de handicap</span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                                Nos gardes d’enfants qui interviennent auprès d’enfants en situation de handicap sont formés pour accompagner vos enfants dans les actes de la vie quotidienne sans oublier  les activités d’éveil.
<br>
                                                Nos gardes d’enfants effectuent l’ensemble des tâches nécessaires à la garde d’un enfant en situation de handicap et de ses frères et sœurs :<br>


                                                <ul class="margin-top-sm list list_star">
                                                    <li class="text"> accompagner et/ou aider aux actes de la vie quotidienne dans le respect des rythmes, besoins et capacités de chaque enfant / de l’enfant,</li>
                                                    <li class="text"> préparer et donner le goûter et des repas équilibrés en tenant compte d’éventuels régimes alimentaires,</li>
                                                    <li class="text"> accompagner vos enfants sur les trajets domicile ou maison - crèche/école/établissement, au rendez-vous extérieurs ou aux activités de loisirs,</li>
                                                    <li class="text"> participer à l’éveil de l’enfant, animer des activités ludo-éducatives, réaliser des activités définies par l’équipe pluridisciplinaire en charge de l’enfant, surveillance des devoirs</li>
                                                </ul>
                                            </p>

                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >

                                         <img class="img-rounded" src="{{ asset('_next/static/media/aide-enfant.png') }}" alt="" />

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
