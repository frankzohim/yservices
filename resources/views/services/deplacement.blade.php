@extends('layouts.master')
@section('title', __('Deplacement'))

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
                        <h2 class="heading heading__lvl1 stillforce-heading-red">D??placements, transport <span style="color:#594EE6;">et handicap </span></h2>
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
                                        <span class="alt-font first-letter first-letter-big text-fast-blue">U</span> n service de transport sur mesure ;
                                    </h2>
                                        <p class="lead mb-5 color:#DF034D" >
                                            <ul class="margin-top-sm list list_star">
                                                <li class="text"> Des v??hicules ??quip??s pour le transport des personnes ?? mobilit?? r??duite ;</li>
                                                <li class="text"> Tout Transport professionnel ;</li>
                                                <li class="text"> Tout Transport priv?? ;</li>
                                                <li class="text"> Tout Transport scolaire ;</li>
                                                <li class="text"> Forme d??s leur int??gration et durant toute leur carri??re les Chauffeurs/Accompagnateurs.</li>
                                            </ul>
<br><br>
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

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:36px;" style="color:#594EE6;">Nos chauffeurs vous conduisent ?? votre destination en toute s??curit??</h2><br><br>

                            <ul class="margin-top-sm list list_star">
                                <li class="text"> Assurent un service de transport sur mesure ;</li>
                                <li class="text"> Poss??dent des v??hicules ??quip??s pour le transport des personnes ?? mobilit?? r??duite ;</li>
                                <li class="text"> Effectuent tout Transport professionnel ;</li>
                                <li class="text"> Effectuent tout Transport priv?? ;</li>
                                <li class="text"> Effectuent tout Transport scolaire ;</li>
                                <li class="text"> Forme d??s leur int??gration et durant toute leur carri??re les Chauffeurs/Accompagnateurs.</li>
                            </ul>
                    </p>
                </div>

                <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: -30px;">
                    <br><br>
                    <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                        <span class="alt-font first-letter first-letter-big text-fast-blue">C</span>
                        <span style="color: #DF034D;"> OMMENT CA MARCHE??? </span>
                    </h2>
                                <p class="mb-5" >

                                    Un conseill?? client??le se d??place ?? votre domicile pour ??changer avec vous sur vos besoins et envies .
                                    Suite ?? sa visite , il pourra vous conseiller et vous remet un devis personnalis?? gratuit et sans engagement  .
                                </p>

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
                                        <span class="alt-font first-letter first-letter-big text-fast-blue">A</span>
                                        <span style="color: #DF034D;">ccompagnement au handicap : quelles aides financi??res ? </span>
                                    </h2>
                                </div>
                            </div>
                            <br>
                            <div class="row ">

                                <div class="col-lg-12 mx-auto">

                                    <p class="mb-5" >
                                        Plusieurs fonds et aides sociales peuvent ??tre d??bloqu??s afin de financer la garde ?? domicile de votre enfant en situation de handicap.??Pensez ?? solliciter la Prestation de Compensation du Handicap (PCH) ou encore L'Allocation d'??ducation de l'Enfant Handicap?? (AEEH)
                                        <br>Selon votre situation ou celle de votre proche, diff??rents types de financements sont possibles :
                                    </p>
                                </div>

                                <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                        <p class=" mb-5" >
                                        <span style="">
                                            <b style="color:#0038e3">La prestation de compensation du handicap (PCH)</b><br>
                                            La prestation de compensation du??handicap??(PCH)
                                            est une aide financi??re destin??e ?? compenser la perte d???autonomie dans la vie quotidienne,
                                            y compris la vie sociale.??

                                        </span>  <br> <br>
                                            <b style="color:#0038e3">L'allocation aux adultes handicap??s (AAH)</b><br>

                                            L???allocation aux adultes handicap??s (AAH)
                                            est une aide financi??re qui garantit
                                            aux personnes handicap??es un revenu
                                            minimal d???existence pour faire face aux d??penses de la vie courante.

                                        </p>

                                </div>
                                <div class="col-12 col-lg-6 col-md-6  " >
                                    <p class="mb-5" >
                                        <b style="color:#0038e3">La carte mobilit?? inclusion (CMI) - mention priorit??</b><br>
                                        La carte mobilit?? inclusion (CMI) mention??????priorit?????? est l???une des trois cartes
                                        qui ont pour but de faciliter votre vie quotidienne et vos d??placements si vous ??tes en perte d'autonomie.
                                        La CMI??????priorit?????? est accord??e sous conditions et permet d'??viter les files d'attente
                                        ou d'avoir une place assise, notamment dans les transports.??
<br>
                                        <span style="">

                                            <b style="color:#0038e3">La carte mobilit?? inclusion (CMI) - mention??invalidit??</b><br>

                                        La carte mobilit?? inclusion (CMI) mention??????invalidit?????? est l???une des trois cartes
                                        qui ont pour but de faciliter votre vie quotidienne et vos d??placements.
                                        La CMI??????invalidit?????? est accord??e sous conditions, si votre perte d'autonomie est importante.
                                         Elle offre les m??mes avantages que la CMI??????priorit??????
                                        avec en plus des r??ductions dans les transports et des avantages fiscaux notamment.??

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
                                            <span class="alt-font first-letter first-letter-big text-fast-blue"> L' </span>
                                            <span style="color: #DF034D;"> allocation d?????ducation de l???enfant handicap?? (AEEH) </span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                            <p class="mb-5" >
                                                L???allocation d?????ducation de l???enfant handicap?? (AEEH)
                                                est une aide financi??re destin??e ?? compenser vos d??penses li??es ?? la situation
                                                 de??handicap??de??votre enfant de moins de 20 ans.
                                                L???AEEH peut ??tre compl??t??e par une??majoration pour parent isol????et par
                                                 des??compl??ments??pour compenser des surco??ts et des pertes de salaires en fonction
                                                  du niveau de handicap de votre enfant.?? <br> <br>

                                                  <b style="color:#0038e3">Le compl??ment de l???allocation d?????ducation de l???enfant handicap?? (compl??ment AEEH)</b><br>

                                            Le <span style="color: #DF034D">  compl??ment de l???allocation</span> d?????ducation de l???enfant handicap?? (compl??ment de l???AEEH)
                                            est un??compl??ment??qui s???ajoute ?? l???allocation d?????ducation de l???enfant handicap??.
                                            Ce dernier vise ?? compenser des surco??ts (frais expos??s) et des pertes financi??res (r??duction d???activit?????).
  <br> <br>

                                            </p>

                                    </div>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            <b style="color:#0038e3">La majoration pour la vie autonome (MVA)??: un compl??ment pour vivre chez soi</b><br>
                                            La majoration pour la vie autonome (MVA) est une aide permettant de financer une partie
                                             des d??penses li??es ?? votre??handicap.
                                            Elle compl??te l'allocation aux adultes handicap??s (AAH).
                                             <br> <br>
                                             La caisse d'allocations familiales (Caf) ou la mutualit?? sociale agricole (MSA)
                                              l'attribue automatiquement et en m??me temps que l'AAH d??s lors que les conditions sont remplies.
                                            <br><br>
                                            <b style="color:#0038e3">La pension d???invalidit??, un revenu pour compenser la perte de capacit?? de travail</b><br>

                                            Une pension d???invalidit?? est un revenu de remplacement vers?? aux salari??s,
                                            ind??pendants et agriculteurs qui, suite ?? un accident ou une maladie d???origine
                                            non professionnelle, se trouvent en incapacit?? partielle ou totale de travailler.
                                            La pension d'invalidit?? est attribu??e ?? titre provisoire.
                                            Celle-ci peut ??tre r??vis??e, suspendue ou supprim??e selon l'??volution de votre situation.

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
                                            <span style="color: #DF034D;"> a majoration pour la vie autonome (MVA)??: un compl??ment pour vivre chez soi </span>
                                        </h2>
                                    </div>
                                </div>
                                <br>
                                <div class="row ">

                                    La majoration pour la vie autonome (MVA) est une aide permettant de financer une partie des d??penses li??es ?? votre??handicap. Elle compl??te l'allocation aux adultes handicap??s (AAH).
                                    La caisse d'allocations familiales (Caf) ou la mutualit?? sociale agricole (MSA) l'attribue automatiquement et en m??me temps que l'AAH d??s lors que les conditions sont remplies.
                                    <div class="col-12 col-lg-6 col-md-6  text-sm-start">
<br>
                                            <p class="mb-5" >
                                                <b style="color:#0038e3">La majoration pour la vie autonome (MVA) est une aide permettant</b><br>
                                                    de financer une partie des d??penses li??es ?? votre??handicap. Elle compl??te l'allocation aux adultes handicap??s (AAH).

                                                La caisse d'allocations familiales (Caf) ou la mutualit?? sociale agricole (MSA)
                                                l'attribue automatiquement et en m??me temps que l'AAH d??s lors que les conditions sont remplies.
<br> <br>

                                            </p>
                                    </div>
                                    <br>
                                    <div class="col-12 col-lg-6 col-md-6  " >
                                        <p class="mb-5" >
                                            <b style="color:#0038e3">L???allocation personnalis??e d???autonomie (APA)</b>
                                           <br>
                                           L???allocation personnalis??e d???autonomie (APA) est destin??e aux personnes ??g??es de 60 ans et plus, en perte d???autonomie, qui ont besoin d'aide pour accomplir les actes de la vie courante, ou dont l?????tat de sant?? n??cessite une surveillance constante.

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
                                        <span class="alt-font first-letter first-letter-big text-fast-blue"> A </span>
                                        <span style="color: #DF034D;"> UTRES SOURCES DE FINANCEMENT</span>
                                    </h2>
                                </div>
                            </div>
                            <br>
                            <div class="row ">

                                <div class="col-12 col-lg-6 col-md-6  text-sm-start">

                                        <p class="mb-5" >
                                            Afin de vous informer et d'??tudier toutes les possibilit??s de financement qui s'offrent ?? vous, n'h??sitez pas ?? solliciter :<br>

                                            <ul class="margin-top-sm list list_star">
                                                <li class="text"> Votre mairie</li>
                                                <li class="text"> Le conseil g??n??ral de votre d??partement</li>
                                                <li class="text"> Votre mutuelle</li>
                                                <li class="text"> La Maison D??partementale de l'Autonomie (MDA)</li>
                                                <li class="text"> La Maison D??partementale des Personnes Handicap??es (MDPH)</li>

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

