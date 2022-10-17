@extends('layouts.master')
@section('title', __('Conditions générales d\'utilisation'))

@section('content')
<style>
	
    .color-text{
        color: #30005B;
    }
    .color-orange{
        color:#D9644A;
    }
    
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

                                <div class="col-md-12" >
                                    <h2 class="heading heading__lvl1 stillforce-heading-red">CONDITIONS GÉNÉRALES <span style="color:#594EE6;">D’UTILISATION</span></h2>
                                </div>
                                    
                            </div>
                            
                    </div>
			
	        </section>

        <section class="py-5" style="margin-top: -110px;">
            <div class="container" >
            <div class="row">
                <div class="row justify-content-start">
                
                    <div class="col-lg-12 mx-auto">

                        <p class="mb-5" >
                            YOUDOM-SERVICES s’engage à collecter et traiter les données à caractère personnel des utilisateurs du site YOUDOM-CARE conformément aux 
														réglementations françaises et européennes applicables en matière de respect de la vie privée, notamment le Règlement général à la protection des 
														données et la loi Informatique et Libertés modifiée. 
                        </p>
                    </div>
            
                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: -30px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> Responsable de traitement, finalités et base légale</span>
                        </h2>
                                    <p class="mb-5" >
                                          Les données à caractère personnel vous concernant sont collectées et traitées par YOUDOM-SERVICES pour des finalités déterminées, 
																					explicites et légitimes. <br>
																					Ce faisant, les données personnelles vous concernant sont collectées et traitées par YOUDOM-SERVICES de manière loyale, licite et 
																					transparente et sont destinées à la gestion de :

																					 <ul class="margin-top-sm list list_star">

                                                            <li class="text">Votre demande de contact </li>
                                                            <li class="text">Votre demande de mise en relation  </li>
                                                            <li class="text">Votre inscription ou abonnement aux services de notre site  </li>
                                                            <li class="text">La recherche d’un agence près de votre domicile  </li>
																														<li class="text">Votre candidature à un emploi  </li>
                                                </ul>
																					<br>
																					En nous communiquant volontairement vos données personnelles dans le cadre des services proposés sur le site YOUDOM-CARE, 
																					vous consentez que nous les utilisions afin de répondre à votre demande d’information ou pour répondre aux services auxquels 
																					vous vous êtes abonnés ou inscrits volontairement.

                                    </p>
                                  
                    </div>
					
					<div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: 10px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> Les données collectées vous concernant</span>
                        </h2>
                                    <p class="mb-5" >
                                         Selon les objectifs poursuivis, nous traitons les données que vous nous avez communiquées :

																					 <ul class="margin-top-sm list list_star">

                                                            <li class="text">Nom, prénom, coordonnées afin de répondre à votre demande de contact  </li>
                                                            <li class="text">Définition de vos besoins et budget mensuel afin de pouvoir vous proposer une offre de services personnalisée  </li>
                                                            <li class="text">Les informations communiquées dans le formulaire de contact   </li>
                                                            <li class="text">Le cas échéant, les informations communiquées dans votre candidature à un emploi.  </li>
                                                </ul>
																					<br>
																				Certaines données sont collectées automatiquement du fait de vos actions sur le site. Pour plus d’information visitez 
																				notre page « Gestion des cookies ». <br>
																				YOUDOM-SERVICES s’engage à mettre en œuvre des mesures de sécurité et de confidentialité adaptées au risque pour vos droits et libertés.


                                    </p>
                                  
                    </div>
					
					<div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: 10px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> Les destinataires de vos données</span>
                        </h2>
                                    <p class="mb-5" >
                                         Selon les objectifs poursuivis, peuvent être destinataires de vos données :

																					 <ul class="margin-top-sm list list_star">

                                                            <li class="text">Le personnel administratif habilité de YOUDOM-SERVICES  </li>
                                                            <li class="text">Les prestataires de services habilités par YOUDOM-SERVICES   </li>
                                                            <li class="text">Éventuellement, les partenaires de YOUDOM-SERVICES après avoir obtenu votre consentement explicite    </li>
                                                            <li class="text">Les autorités, organismes publics et administration légalement habilitées à les recevoir   </li>
																														<li class="text">Le cas échéant, des destinataires peuvent être situés hors Union Européenne dans un pays assurant un niveau de protection adéquat ou moyennant des garanties appropriées.   </li>
                                                </ul>
																					<br>
																				Certaines données sont collectées automatiquement du fait de vos actions sur le site. Pour plus d’information visitez 
																				notre page « Gestion des cookies ». <br>
																				YOUDOM-SERVICES s’engage à mettre en œuvre des mesures de sécurité et de confidentialité adaptées au risque pour vos droits et libertés.


                                    </p>
                                  
                    </div>
					
					<div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: 10px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> La durée de conservation de vos données</span>
                        </h2>
                                    <p class="mb-5" >
                                         Selon les finalités poursuivies, vos données seront conservées pendant une durée conforme aux réglementations applicables et à la doctrine 
																				 publiée par la Commission Nationale de l’Informatique et des Libertés (CNIL). <br> <br>
																				En cas d’abonnement ou inscription à l’un des services proposés par notre site, vos données sont conservées pour toute la durée de 
																				cet abonnement ou inscription. A tout instant, <b> vous pouvez vous désinscrire ou vous désabonner de ces services.</b>  <br> <br>
																				Dans le cadre des formulaires de demande de contact ou de demande de mise en relation, 
																				vos données sont <b> conservées 2 ans </b>  à compter de votre dernier contact avec YOUDOM-SERVICES. <br> <br>
																				Les candidatures non retenues ne seront pas conservées. Cependant, si nous souhaitons conserver votre CV pour vous recontacter, 
																				votre consentement sera préalablement recueilli et votre CV conservé pendant 2 ans.
																					 


                                    </p>
                                  
                    </div>
					
					<div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: 10px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> Vos droits sur les données vous concernant</span>
                        </h2>
                                    <p class="mb-5" >
                                         Vous disposez du droit d’accéder aux données vous concernant, d’en demander la rectification, l’effacement ou la portabilité, de vous 
																				 opposer au traitement ou de le limiter. 
																				 Si vous avez donné votre accord, vous pouvez le retirer à tout moment. Vous bénéficiez également d’un droit à 
																				 la gestion post mortem de vos données et d’introduire une <b>réclamation </b>  auprès de la CNIL.
																				 <br> <br>
																				Pour exercer vos droits, contactez-nous en signant votre demande et en y joignant un 
																				justificatif d’identité (carte d’identité, passeport…) :

																				<ul class="margin-top-sm list list_star">

                                                            <li class="text">Par voie postale : Délégué à la Protection des Données – Département Protection des Données Groupe YOUDOM-SERVICES – 61 rue Lyon 75012 Paris  </li>
                                                            <li class="text">Par courriel : dpo@youdom-care.com   </li>
                                                </ul>
																				<br>
																				Pour plus d’informations, vous pouvez consulter le site de la CNIL : <a href="http://www.cnil.fr" target="_blank">www.cnil.fr</a>.

                                    </p>
                                  
                    </div>
					
					

                </div>
            </div>
            </div>
	</section>

</section>

@endsection
