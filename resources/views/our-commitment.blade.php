@extends('layouts.master')
@section('title', __('Nos engagements – Youdom Care'))

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

  </style>
        
        <!-- start section -->
        
        <section class="big-section">
            <div class="container content-wrap">
                <div class="row justify-content-center">

					<div class="col-md-12 text-center margin-six-bottom" >
						<h2 class="heading heading__lvl1 stillforce-heading-red">Nos <span style="color:#594EE6;">engagements</span></h2>
					</div>
						
				</div>
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center margin-six-bottom">
                        <h6 class="heading heading__lvl1 stillforce-heading-red" style="font-size:20px;">Nos engagements de service consistent à :  </h6>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 tab-style-01 without-number wow animate__fadeIn">
                        <!-- start tab navigation -->
                        <ul class="nav nav-tabs text-uppercase justify-content-center text-center alt-font 
                        font-weight-500 margin-7-rem-bottom md-margin-5-rem-bottom sm-margin-20px-bottom">
                            <li class="nav-item"><a class="nav-link active" data-bs-toggle="tab" href="#planning-tab">Accompagnement</a><span class="tab-border bg-extra-dark-gray"></span></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#research-tab">Service de qualité</a><span class="tab-border bg-extra-dark-gray"></span></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#target-tab">Fidélité</a><span class="tab-border bg-extra-dark-gray"></span></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#campaign-tab">Partage</a><span class="tab-border bg-extra-dark-gray"></span></li>
                            <li class="nav-item"><a class="nav-link" data-bs-toggle="tab" href="#implication-tab">Implication </a><span class="tab-border bg-extra-dark-gray"></span></li>
                          
                        </ul>
                        <!-- end tab navigation -->
                        <div class="tab-content">
                            <!-- start tab item -->
                            <div id="planning-tab" class="tab-pane fade in active show">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/home-business-tab-img01.jpg') }}" alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6 text-center text-sm-start">

                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 30px;">Accompagnement Personnalisé</h5>

                                        <p class="w-85 lg-w-100" style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                            Notre équipe vous accompagne dans toutes vos démarches et vous propose des solutions adaptées à vos besoins.</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->
                            <!-- start tab item -->
                            <div id="research-tab" class="tab-pane fade in">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/home-business-tab-img02.jpg') }}" alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">
                                      
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                       style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 30px;">Service de qualité</h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                       Nos auxiliaires de vie sont diplômés et expérimentés et détiennent une expérience solide dans le domaine du maintien à domicile  des personnes en perte d’autonomie 
La sélection de nos auxiliaires de vie est rigoureuse et exigeante. Les profils retenus justifient soit d’une expérience professionnelle d’au moins 3 ans dans le secteur de l’aide à domicile, soit d’un diplôme d’Etat d’auxiliaire de vie ou d’un 
certificat de compétences professionnelles (délivré par les ministères), gages de sérieux des acquis professionnels
Nos chefs de secteur les encadrent au quotidien et s’assurent de la satisfaction des bénéficiaires 
</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->
                            <!-- start tab item -->
                            <div id="target-tab" class="tab-pane fade in">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/home-business-tab-img03.jpg') }}" alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">

                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 25px;">Assurer la fidélité de nos salariés pour vous satisfaire</h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                        YOUDOM-CARE  met tous les moyens en œuvre pour offrir à nos clients une solution de qualité pour tous les services d’aide à domicile, tout en valorisant nos salariés.</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->
                            <!-- start tab item -->
                            <div id="campaign-tab" class="tab-pane fade in">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/home-business-tab-img04.jpg') }} " alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">

                                        
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 35px;">Partage</h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                       Partager, avec vous, la confiance que nous avons en notre personnel. Vous faire bénéficier de la rigueur de notre organisation</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
                                    </div>
                                </div>
                            </div>
                            <!-- end tab item -->

                            <!-- start tab item -->
                            <div id="implication-tab" class="tab-pane fade in">
                                <div class="row align-items-center">
                                    <div class="col-12 col-md-6 text-end sm-margin-40px-bottom">
                                        <img src="{{ asset('_next/static/media/implication.jpg') }} " alt="" />
                                    </div>
                                    <div class="col-12 col-lg-5 offset-lg-1 col-md-6">

                                        
                                        <h5 class="alt-font font-weight-600 text-extra-dark-gray margin-35px-bottom md-margin-30px-bottom"
                                        style="font-family:Poppins, sans-serif; font-size:33px; margin-bottom: 35px;">Implication </h5>
                                        <p class="w-85 lg-w-100"
                                        style="font-family:Robo, sans-serif; font-size:15px; margin-bottom: 25px;">
                                       Impliquer nos intervenants dans votre exigence de qualité</p>
                                        <a href="{{ route('need.create') }}" class="btn btn-fancy btn-medium btn-dark-gray margin-20px-top"
                                        style="font-family:Roboto, sans-serif; padding:12px 28px; color:white; background-color:#232323; font-size:12px; margin: 20px 0px 0px;">Demandez un devis</a>
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
@endsection