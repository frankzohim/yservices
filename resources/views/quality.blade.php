@extends('layouts.master')
@section('title', __('Notre charte qualité – Youdom Care'))

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

					<div class="col-md-12 text-center margin-six-bottom" >
						<h2 class="heading heading__lvl1 stillforce-heading-red">NOTRE <span style="color:#594EE6;">CHARTE QUALITÉ</span></h2>
					</div>
						
				</div>
                <div class="row justify-content-center">
                    <div class="col-md-12 text-center margin-six-bottom">
                        <h6 class="heading heading__lvl1 stillforce-heading-red" style="font-size:20px;">La qualité au cœur de toutes nos prestations !  </h6>
                    </div>
                </div>
                <br>
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
                                <div id="accordion-style-03-01" class="panel-collapse collapse" data-bs-parent="#accordion3">
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
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Accueil, Disponibilité, Réactivité </span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-03" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body">Répondre de manière rapide et adaptée à chaque demande. </div>
                                </div>
                            </div>
                            <!-- end accordion item -->

                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-03-04" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Confidentialité. Respect. Discrétion </span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-03-04" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body"> Respecter la vie privée et l’intimité des clients.  </div>
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
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-04-01" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Clarté, Rigueur, Transparence</span>
                                            <i class="indicator fas fa-angle-down text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-04-01" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body">Fournir des informations complètes et fiables tout au long de la prestation.</div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.4s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-04-02" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500"> Personnalisation, Écoute, Suivi.</span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-04-02" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body">Adapter notre intervention à l’évolution des besoins des clients. </div>
                                </div>
                            </div>
                            <!-- end accordion item -->
                            <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-04-03" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Compétences, Expériences, Savoir-faire</span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-04-03" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body">Mettre au service des clients des intervenants compétents et professionnels. </div>
                                </div>
                            </div>
                            <!-- end accordion item -->

                             <!-- start accordion item -->
                            <div class="panel bg-white box-shadow-small border-radius-5px wow animate__fadeIn" data-wow-delay="0.6s">
                                <div class="panel-heading">
                                    <a class="accordion-toggle collapsed" data-bs-toggle="collapse" data-bs-parent="#accordion3" href="#accordion-style-04-04" aria-expanded="false">
                                        <div class="panel-title">
                                            <span class="alt-font text-extra-dark-gray d-inline-block font-weight-500">Qualité, Évaluation, Amélioration. </span>
                                            <i class="indicator fas fa-angle-right text-extra-dark-gray icon-extra-small"></i>
                                        </div>
                                    </a>
                                </div>
                                <div id="accordion-style-04-04" class="panel-collapse collapse" data-bs-parent="#accordion3">
                                    <div class="panel-body">Faire évoluer les pratiques pour améliorer la satisfaction des clients. </div>
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