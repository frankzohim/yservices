@extends('layouts.master')
@section('title', __('Nos metiers'))
@section('content')

<style>

    .color-text{
        color: #30005B;
    }
    .color-orange{
        color:#D9644A;
    }

</style>
    <!-- CONTENT -->
    <div class="page-content">
        <div class="container">
            <div class="row">

                <div class="ctn_content">

                    <!-- PAGE : TITLE -->
                    <div class="page-header1">
                        <h1 class="heading heading__lvl1 stillforce-heading-red">Nos Metiers</h1>
                    </div>

                    <!-- INTRODUCTION -->
                    <div class="lead">
                        <p>Auxiliaires de vie chez nos clients, responsables de secteur, chargés de recrutement… Nos
                            agences recherchent sans cesse de nouveaux talents, partout en France.<br />
                            Découvrez nos fiches métiers qui réinventent l’aide à domicile de demain et rejoignez-nous
                            !.
                        </p>
                    </div>
                </div>

            </div>


            <section class="lp-banking-track-cashflow">
                <div class="container">

                    <div class="padding-top-sm padding-bottom-sm section-body_margin-top lp-banking-track-cashflow__body">
                        <div class="image lp-banking-track-cashflow__image-wrap">
                            <picture class="picture__image-container ">

                                <img src="{{ asset('_next/static/media/metier2.jpg') }} "
                                    srcSet="/_next/static/media/metier2.jpg 2x" alt="" class="picture__image "
                                    loading="eager" />
                            </picture>
                        </div>

                        <div class="lp-banking-track-cashflow__content">

                            <h2 class="heading heading__lvl1 lp-banking-track-cashflow__heading color_blue">
                                Aide à Domicile
                            </h2>
                            <p class="margin-top-default text text_lg">
                                Comme l’auxiliaire de vie sociale, le rôle de l’aide à domicile est d’aider la personne âgée
                                à continuer à vivre en autonomie à son domicile. A ce titre, elle peut se charger du ménage,
                                des courses, des repas, de l’accompagnement lors des déplacements, de la toilette… L’aide à
                                domicile doit être discrète, attentive, à l’écoute. Comme pour l’auxiliaire de vie sociale,
                                l’aide à domicile doit avoir une bonne condition physique lui permettant d’aider la personne
                                âgée à se lever ou à se coucher, mais aussi porter les courses
                            </p>
                        </div>
                    </div>
                </div>

            </section>

            <section class="lp-banking-track-cashflow" style="margin-top:-10%">
                <div class="container">

                    <div class="padding-top-sm padding-bottom-sm section-body_margin-top lp-banking-track-cashflow__body">
                       <div class="lp-banking-track-cashflow__content">

                            <ul class="margin-top-default list list_10px list_bullet-color_blue">
                                <h4 class="heading heading__lvl4">Les qualités requise pour être aide à domicile</h4>

                                <li>Faire preuve d’empathie et de grandes capacités relationnelles, être à l’écoute et
                                    bienveillante, faire preuve de patience,</li>
                                <li>Maîtriser les protocoles sanitaires et connaître les produits d’entretien pour chacune
                                    des
                                    tâches ménagères,</li>
                                <li>Savoir utiliser différents robots électroménagers ou outils de jardinage,</li>
                                <li>Respecter les règles d'hygiène et de propreté,</li>
                                <li>Connaître les gestes de premiers secours,</li>
                                <li>Savoir adapter ses activités et façons de faire selon les demandes de chaque client.
                                </li>
                                <li>Prévenir les accidents domestiques,</li>
                                <li> Faire preuve de ponctualité et de politesse</li>
                           </ul>
                        </div>

                        <div class="image lp-banking-track-cashflow__image-wrap">
                            <ul class="margin-top-default list list_10px list_bullet-color_blue">
                                <h4 class="heading heading__lvl4"> Les missions d’une aide à
                                    domicile</h4>
                                <li>

                                    <span class="text" style="color:black;">
                                        Les missions d’une aide à domicile varient en fonction de la personne
                                        à assister chez elle et de son niveau d’autonomie. Il peut s’agir de faire quelques
                                        heures de ménage, de faire la vaisselle et de ranger la cuisine, d’aller faire les
                                        courses avec la personne ou encore d’assurer le repassage de son linge. L’aide à
                                        domicile peut aussi être sollicitée pour entretenir le jardin, pour la tonte, le
                                        désherbage ou l’arrosage, par exemple.
                                        Ponctuellement, l’aide à domicile peut éclairer le bénéficiaire sur une démarche
                                        administrative ou un courrier officiel auquel il faut répondre.
                                    </span>
                                </li>

                                <li>

                                    <span class="text" style="color:black;">Chacune de ces missions exercées au domicile
                                        du bénéficiaire est l’occasion également de discuter avec la personne, et de rompre
                                        ainsi un
                                        éventuellement isolement.
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

            <section class="lp-banking-track-cashflow">
                <div class="container">

                    <div class="padding-top-sm padding-bottom-sm section-body_margin-top lp-banking-track-cashflow__body">


                        <div class="lp-banking-track-cashflow__content">

                            <h2 class="heading heading__lvl1 lp-banking-track-cashflow__heading color_blue">
                                AUXILIAIRE DE VIE
                            </h2>
                            <p class="margin-top-default text text_lg">
                                Toutes les actions de l’assistant de vie aux familles visent à faciliter la vie quotidienne
                                des personnes dont il s’occupe. Grâce à lui, les personnes restent chez elles dans de bonnes
                                conditions. Il met en place une relation professionnelle, planifie et organise ses
                                interventions, prend en compte les mesures de prévention et de sécurité. Il tient compte des
                                personnes, respecte et met en œuvre les règles professionnelles de base.
                            </p>
                        </div>
                        <div class="image lp-banking-track-cashflow__image-wrap">
                            <picture class="picture__image-container ">

                                <img src="{{ asset('_next/static/media/metier1.jpg') }} "
                                    srcSet="/_next/static/media/metier1.jpg 2x" alt="" class="picture__image "
                                    loading="eager" />
                            </picture>
                        </div>
                    </div>
                </div>

            </section>

            <section class="lp-banking-track-cashflow" style="margin-top:-10%">
                <div class="container">

                    <div class="padding-top-sm padding-bottom-sm section-body_margin-top lp-banking-track-cashflow__body">
                       <div class="lp-banking-track-cashflow__content">
                            <h4 class="heading heading__lvl4">Les qualités requise pour être Auxiliaire de vie</h4>
                            <p>S’occuper au quotidien de personnes âgées, dépendantes ou handicapées, n’est pas donné à tout
                                le
                                monde. Pour exercer ce métier et être épanoui, il est important de posséder certaines
                                qualités
                                humaines fondamentales :</p>

                            <ul class="margin-top-default list list_10px list_bullet-color_blue">
                              <li>Avoir de fortes capacités relationnelles et de l’écoute,</li>
                                <li>L’auxiliaire de vie doit posséder un grand sens de communication</li>
                                <li>Être réactif et dynamique, savoir prendre des initiatives,</li>
                                <li>Avoir une excellente connaissance des différents publics et des pathologies liées au
                                    vieillissement et au handicap,</li>
                                <li>Avoir une bonne condition physique,</li>
                                <li>Savoir adapter ses activités et façons de faire selon les demandes de chaque client.
                                </li>
                                <li>Elle ou il doit être à l'écoute de la personne aidée et des aidants, doit posséder un
                                    sens
                                    du contact et de l'empathie afin d'établir un lien de confiance avec la personne et son
                                    entourage</li>
                                <li>Un diplôme ou titre professionnel dans l’assistance aux personnes âgées</li>


                            </ul>
                        </div>

                        <div class="image lp-banking-track-cashflow__image-wrap">
                            <h4 class="heading heading__lvl4">LES MISSIONS DE L’AUXILAIRE DE VIE</h4>
                            <p>L’auxiliaire de vie aux familles relaie les familles auprès de personnes fragilisées ou
                                sensibles
                                comme les :</p>
                            <ul class="margin-top-default list list_10px list_bullet-color_blue">
                                <li>Personnes âgées,</li>
                                <li>Personnes dépendantes (maladie, convalescence ou enfants),</li>
                                <li>Personnes handicapées,</li>
                                <li>Enfants (au domicile des parents).</li>
                                </li>
                            </ul>

                            <h4 class="margin-top-default heading heading__lvl4">L’assistant de vie aux familles doit être
                                capable de :</h4>

                            <ul class="margin-top-default list list_10px list_bullet-color_blue">

                                <li>Réaliser des tâches domestiques (préparation des repas, faire les courses, entretien de
                                    la
                                    maison…)</li>
                                <li>Assister les personnes dans les actes de la vie quotidienne (toilette corporelle,
                                    alimentation, aide aux déplacements…)</li>
                                <li>Prendre en charge de jeunes enfants.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>

            <p><img class="alignnone size-large wp-image-286"
                    src="https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c-1170x400.jpg"
                    alt="" width="1170" height="400"
                    srcset="https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c.jpg 1170w, https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c-250x85.jpg 250w, https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c-750x256.jpg 750w, https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c-768x263.jpg 768w"
                    sizes="(max-width: 1170px) 100vw, 1170px" /></p>

            <section class="lp-banking-track-cashflow">
                <div class="container">

                    <div class="padding-top-sm padding-bottom-sm section-body_margin-top lp-banking-track-cashflow__body">
                        <div class="image lp-banking-track-cashflow__image-wrap">
                            <picture class="picture__image-container ">

                                <img src="{{ asset('_next/static/media/metier3.jpg') }} "
                                    srcSet="/_next/static/media/metier3.jpg 2x" alt="" class="picture__image "
                                    loading="eager" />
                            </picture>
                        </div>

                        <div class="lp-banking-track-cashflow__content">

                            <h2 class="heading heading__lvl1 lp-banking-track-cashflow__heading color_blue">
                                Assistant Ménager
                            </h2>
                            <p class="margin-top-default text text_lg">
                                Votre univers de travail chez Youdom-care en tant que Assistant Ménager
                            </p>

                            <ul class="margin-top-default list list_10px list_bullet-color_blue">
                                <li>Vous intervenez au domicile de nos clients. Les particuliers sont les clients de
                                    YOUDOM-CARE
                                </li>
                                <li>Vous êtes salarié en CDI d’une ou plusieurs agences dans le même département ou région
                                </li>
                                <li>En fonction de vos disponibilités Youdom-Care vous propose des missions évolutives chez
                                    un
                                    ou plusieurs clients</li>
                                <li>YOUDOM-CARE vous fournit le matériel professionnel adéquat pour mener à bien votre
                                    mission .
                                </li>
                                <li>YOUDOM-CARE vous accompagne tout au long de votre parcours professionnel en vous
                                    proposant
                                    des formations</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </section>


            <section class="main-invoicing">

                <div class="container container_card">

                    <div class="section-body section-body_card
                                        section-body_card_pink section-body_card_margin-top main-invoicing__body"
                        style="background-color: #E84347">

                        <h2 class="heading heading__lvl1 color_blue" style="color: white;">Votre évolution de carrière chez
                            YOUDOM-CARE
                        </h2>
                        <p class="margin-top-xs text" style="color: white;">Chez YOUDOM-CARE vous bénéficiez d’un parcours
                            individuel de formation spécifique à notre méthode
                            ménage-repassage.</p>

                        <p class="margin-top-xs text" style="color: white;">Pour accroître vos compétences et développer
                            plus d’expériences dans votre domaine d’activité en
                            tant que assistant ménager, nous proposons le multi-activité à nos intervenants à domicile. Le
                            principe est de vous donner la possibilité d’exercer, dans une même journée ou au sein d’une</p>

                    </div>
                </div>

            </section>

            <section id="content" style="align-content: center">
                <div class="content-wrap">
                    <div class="container clearfix">
                        <div class="row col-mb-50">
                           <div class="col-md-4">
                                <div class="feature-box media-box flex-column">

                                    <div class="fbox-content px-0">
                                        <h2 class="heading heading__lvl1 color_blue">Nos métiers en agence</h2>
                                        <p>
                                        <ul class="margin-top-sm list list_star">

                                            <li class="text">Responsable de secteur </li>
                                            <li class="text">Chargé de recrutement </li>
                                            <li class="text">Chargé de clientèle </li>
                                            <li class="text">Responsable d’agence </li>

                                        </ul>

                                        <!-- end accordion item -->
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="feature-box media-box">
                                    <div class="fbox-content px-0">
                                        <h2 class="heading heading__lvl1 color_blue">Nos métiers au siège </h2>
                                        <p>
                                        <ul class="margin-top-sm list list_star">

                                            <li class="text">Aide à domicile - personnes handicapées </li>
                                            <li class="text">Ressources humaines </li>
                                            <li class="text">Communication </li>
                                            <li class="text">Juridique </li>
                                            <li class="text">Développement </li>

                                        </ul>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </section>
        @endsection
