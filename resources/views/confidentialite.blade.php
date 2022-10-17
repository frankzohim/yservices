@extends('layouts.master')
@section('title', __('Protection des données personnelles'))

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
                                    <h2 class="heading heading__lvl1 stillforce-heading-red">Protection des données  <span style="color:#594EE6;"> personnelles</span></h2>
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
                          YOUDOM-CARE s’engage à collecter et traiter les données à caractère personnel des utilisateurs du site YOUDOM-CARE conformément 
                          aux réglementations françaises et européennes applicables en matière de respect de la vie privée, notamment le Règlement général à 
                          la protection des données et la loi Informatique et Libertés modifiée.
                        </p>
                    </div>
            
                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: -30px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> Qui traite vos données et pour quelles finalités ? </span>
                        </h2>
                                    <p class="mb-5" >
                                         YOUDOM-services , enregistré sous le numéro 918 366 600 R.C.S Paris, dont le siège social est situé 61 rue de Lyon 75012 PARIS, 
                                         est responsable des traitements de données personnelles fondés sur votre consentement et ayant pour finalités :

																					 <ul class="margin-top-sm list list_star">

                                                            <li class="text">La communication d’informations relatives à YOUDOM-CARE Services  </li>
                                                            <li class="text">La gestion et le suivi de vos demandes d’information concernant nos offres de services (prise de contact, demande de devis et simulateur de besoins) </li>
                                                            <li class="text">L’envoi d’offres commerciales personnalisées par voie électronique (courrier électronique, SMS et MMS) par YOUDOM-CARE et les 
                                                                sociétés du Groupe YOUDOM-services;  </li>
                                                            <li class="text">La gestion des newsletters   </li>
															<li class="text">La gestion des cookies  </li>
                                                </ul>
																					<br>
										En nous communiquant volontairement vos données personnelles par téléphone ou via les formulaires de contact en ligne, 
                                        vous acceptez que nous les utilisions afin de répondre à votre demande. <br>
                                        La gestion de votre candidature à un emploi est basée sur l’exécution de mesures pré-contractuelles prises à votre demande. <br>
                                        Enfin, la réalisation d’enquêtes de satisfaction, de statistiques, d’études internes, d’analyses marketing de nos fichiers 
                                        prospects et clients, d’audits et de missions de contrôle interne est basée sur l’intérêt légitime du Groupe YOUDOM-services.


                                    </p>
                                  
                    </div>
					
					<div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: 10px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> Quelles sont les données que nous traitons ?</span>
                        </h2>
                                    <p class="mb-5" >
                                         Les données vous concernant que nous sommes susceptibles de traiter portent sur : 
                                         votre identité, vos coordonnées, définition de vos besoins et budget mensuels afin de pouvoir vous proposer 
                                         une offre de services personnalisée le cas échéant, ainsi que les informations que vous nous avez communiquées 
                                         par téléphone ou via les formulaires de contact en ligne. <br> <br>
                                        Chaque formulaire indique les données obligatoires ou facultatives pour la gestion de votre demande, ainsi que les conséquences 
                                        d’un défaut de réponse de votre part. <br> <br>
                                        L’accès à l’« Espace Salariés » et à l’« Espace agence » traite les données d’identification et le mot de passe des 
                                        utilisateurs habilités.
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
										En visitant les sites Internet du Groupe YOUDOM-services, des données de navigation vous concernant sont susceptibles d’être 
                                        collectées afin de vous permettre d’accéder aux différentes fonctionnalités offertes. Ces données sont recueillies au moyens de 
                                        traceurs ou cookies déposés sur votre terminal. La loi stipule que nous ne pouvons stocker des cookies sur votre terminal 
                                        que s’ils sont strictement nécessaires au fonctionnement de ce site. <br>
                                        Vous pouvez cependant vous y opposer et les supprimer en utilisant les paramètres de votre navigateur, 
                                        cependant votre expérience utilisateur risque d’être dégradée. Pour tous les autres types de cookies, nous avons besoin 
                                        de votre consentement préalable. <br>
                                        Pour plus d’informations et gérer vos consentements, veuillez consulter notre page « Paramétrer les Cookies » .


                                    </p>
                                  
                    </div>

                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: 10px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> Qui sont les destinataires de vos données ?</span>
                        </h2>
                                    <p class="mb-5" >
                                       YOUDOM-CARE fait partie du Groupe YOUDOM-SERVICES Seul le personnel habilité par YOUDOM-CARE et les agences YOUDOM-CARE 
                                       correspondant à votre demande et, le cas échéant, le personnel habilité par les sociétés du groupe YOUDOM-SERVICES, pourront 
                                       avoir connaissance de ces informations. Le cas échéant, d’autres destinataires peuvent être situés hors Union Européenne, 
                                       par exemple afin de traiter les demandes de renseignements. <br> <br>
                                       Vos données ne seront pas communiquées à des tiers, sauf demande de communication formulée par les autorités administratives 
                                       ou judiciaires compétentes.

                                    </p>
                                  
                    </div>

                    <div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: 10px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> Combien de temps sont conservées vos données ?</span>
                        </h2>
                                    <p class="mb-5" >
                                        Vos données sont conservées pendant une durée n’excédant pas celle nécessaire aux fins pour lesquelles elles sont traitées. <br> 
                                        En cas d’abonnement ou inscription à l’un des services proposés par notre site, vos données sont conservées pour toute 
                                        la durée de cet abonnement ou inscription. A tout instant, vous pouvez vous désinscrire ou vous désabonner de ces services.
                                        <br>
                                        Dans le cadre des formulaires de demande de contact ou de demande 
                                        de mise en relation, vos données sont conservées 2 ans à compter de votre dernier contact avec YOUDOM-SERVICES. <br> <br>
                                        Les candidatures non retenues ne seront pas conservées. Cependant, si nous souhaitons conserver votre CV pour vous recontacter, votre consentement sera préalablement recueilli et votre CV conservé pendant 2 ans.
                                    </p>
                                  
                    </div>
					
					
					
					<div class="col-12 col-lg-12  col-md-12 text-sm-start" style="margin-top: 10px;">

                        <h2 class="text-primary  mb-0" style="font-family: Open Sans; font-weight:bold; font-size:25px;">
                            
                            <span style="color: #DF034D;"> Quels sont vos droits et comment les exercer ?</span>
                        </h2>
                                    <p class="mb-5" >
                                         Conformément au règlement général sur la protection des données (RGPD) et à la loi Informatique et Libertés du 6 janvier 1978 modifiée, 
                                         vous disposez d’un droit d’accès, de rectification, de suppression et de portabilité des données personnelles vous concernant. 
                                         Vous pouvez également prévoir des dispositions post-mortem sur vos données, demander la limitation du traitement, vous y opposer, 
                                         ainsi que retirer votre consentement à tout moment. <br> <br>
                                         Vous pouvez exercer ces droits :

											<ul class="margin-top-sm list list_star">

                                                    <li class="text">Par voie postale : Délégué à la Protection des Données – Département Protection des Données Groupe 
                                                        YOUDOM-SERVICES – 61 rue Lyon 75012 Paris  </li>
                                                    <li class="text">Par courriel : dpo@youdom-care.com   </li>
                                            </ul>
											<br>
												Pour plus d’informations, vous pouvez consulter le site de la CNIL : 
                                                <a href="http://www.cnil.fr" target="_blank">www.cnil.fr</a>.

                                    </p>
                                  
                    </div>
					
					

                </div>
            </div>
            </div>
	</section>

</section>

@endsection
