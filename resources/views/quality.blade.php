@extends('layouts.master')
@section('title', __('Nos engagements – Youdom Care'))

@section('content')
	<style>

    .content-wrap{position:relative;padding:80px 0;overflow:hidden}
    section.big-section{padding:160px 0}
    .bg-light-gray{background-color:#f7f7f7}
    .margin-five-bottom{margin-bottom:5%}

    .accordion-style-03 
.panel{padding-left:32px;padding-right:32px;margin-bottom:22px}
.accordion-style-03 .panel .panel-heading{padding:18px 25px 18px 0;position:relative}
.accordion-style-03 .panel .panel-heading i{position:absolute;top:50%;right:0;transform:translateY(-50%);-webkit-transform:translateY(-50%);-moz-transform:translateY(-50%);-ms-transform:translateY(-50%)}
.accordion-style-03 .panel .panel-body{padding:0 20px 30px 0}
   .bg-white{background-color:#fff}
   .box-shadow-small,.box-shadow-small-hover:hover{box-shadow:0 0 15px rgba(0,0,0,.08);transition:all .3s ease-in-out;-moz-transition:all .3s ease-in-out;-webkit-transition:all .3s ease-in-out;-ms-transition:all .3s ease-in-out;-o-transition:all .3s ease-in-out}.box-shadow-dark-hover:hover,.box-shadow-double-large-hover:hover,.box-shadow-extra-large-hover:hover,.box-shadow-large-hover:hover,.box-shadow-light-hover:hover,.box-shadow-medium-hover:hover,.box-shadow-small-hover:hover,.box-shadow-very-light-hover:hover{-moz-transform:translate3d(0,-3px,0);-o-transform:translate3d(0,-3px,0);-ms-transform:translate3d(0,-3px,0);-webkit-transform:translate3d(0,-3px,0);transform:translate3d(0,-3px,0)}.text-shadow-large{text-shadow:0 0 50px rgba(0,0,0,.9)}
   .border-radius-5px{border-radius:5px}
  </style>
     <!-- start section -->
        <section class="big-section bg-light-gray wow animate__fadeIn">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center margin-five-bottom">
                        <h6 class="alt-font text-extra-dark-gray font-weight-500">NOTRE CHARTE QUALITÉ</h6>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-6 col-lg-6 col-md-10">
                        <div class="panel-group accordion-event accordion-style-03" id="accordion3" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="panel-heading active-accordion">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-01" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Choisir YOUDOM-CARE </span>
                                            <i class="indicator fas fa-angle-down text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-01" class="panel-collapse collapse show" data-bs-parent="#accordion3">
                                    <div class="panel-body">Choisir YOUDOM-CARE , c’est s’entourer de vrais professionnels et dont le seul objectif est  la satisfaction des clients </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-02" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">L’HUMAIN AU CŒUR DE L’ENTREPRISE</span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-02" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body">Nous mettons en place des pratiques de management valorisant le travail exécuté et la personne elle-même. Youdom-care  motive ses collaborateurs à aller toujours plus loin dans l’excellence, récompense les performances et encourage le renforcement des compétences
</div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-03" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Accueil, Disponibilité, Réactivité. </span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-03" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body">Répondre de manière rapide et adaptée à chaque demande. </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                    </div>

                      <div class="col-6 col-lg-6 col-md-10">
                        <div class="panel-group accordion-event accordion-style-03" id="accordion3" data-active-icon="fa-angle-down" data-inactive-icon="fa-angle-right">
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.2s">
                                <div class="panel-heading active-accordion">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-01" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Strategy and planning</span>
                                            <i class="indicator fas fa-angle-down text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-01" class="panel-collapse collapse show" data-bs-parent="#accordion3">
                                    <div class="panel-body">Lorem ipsum is simply dummy text of the printing type setting and industry. Lorem ipsum has been the industry's standard dummy.</div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-02" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Finance and restructuring</span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-02" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body">Lorem ipsum is simply dummy text of the printing type setting and industry. Lorem ipsum has been the industry's standard dummy.</div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-03" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Operations and efficiency</span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-03" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body">Lorem ipsum is simply dummy text of the printing type setting and industry. Lorem ipsum has been the industry's standard dummy.</div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->
@endsection