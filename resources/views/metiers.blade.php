@extends('layouts.master')
@section('title', __('Nos metiers'))



@section('content')
    <link rel='stylesheet' id='style-css' href="{{ asset('assets/css/metier.css') }}" type='text/css' media='' />
    <main role="main">

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


                <div class="nav-metiers-primaires">


                    <div class="nav-metiers-primaires__item">
                        <a href="#pourquoi-rejoindre-o2" class="nav-metiers-primaires__link"
                            style="background-image: url('https://www.o2recrute.fr/wp-content/uploads/2017/04/e3087687b1af4fb272e21f603deb1c37.jpg');">
                            <div class="content">
                                <div aria-hidden="true" class="badge icon-garde_enfant">
                                    <svg viewBox="0 0 367 476.69">
                                        <use
                                            xlink:href="https://www.o2recrute.fr/wp-content/themes/O2_recrute/images/icons.svg#i_garde-enfant">
                                        </use>
                                    </svg>
                                </div>
                                <p class="title" style="color: white">
                                    <span>Assistant de vie</span>
                                </p>
                            </div>
                        </a>
                    </div>


                    <div class="nav-metiers-primaires__item">
                        <a href="https://www.o2recrute.fr/intervenants-a-domicile/auxiliaire-de-vie"
                            class="nav-metiers-primaires__link"
                            style="background-image: url('https://www.o2recrute.fr/wp-content/uploads/2017/04/31c153a162c0c2478216df430bbf6a96.jpg');">
                            <div class="content">
                                <div aria-hidden="true" class="badge icon-senior">
                                    <svg viewBox="0 0 402.79 479.48">
                                        <use
                                            xlink:href="https://www.o2recrute.fr/wp-content/themes/O2_recrute/images/icons.svg#i_senior">
                                        </use>
                                    </svg>
                                </div>
                                <p class="title">
                                    <span>Auxiliaires de vie à domicilee</span>
                                </p>
                            </div>
                        </a>
                    </div>


                    {{-- <div class="nav-metiers-primaires__item">
                        <a href="https://www.o2recrute.fr/intervenants-a-domicile/jardinier"
                            class="nav-metiers-primaires__link"
                            style="background-image: url('https://www.o2recrute.fr/wp-content/uploads/2017/04/104c33d4360d803b84528a2dc6c53c4b.jpg');">
                            <div class="content">
                                <div aria-hidden="true" class="badge icon-jardinier">
                                    <svg viewBox="0 0 494.26 407.24">
                                        <use
                                            xlink:href="https://www.o2recrute.fr/wp-content/themes/O2_recrute/images/icons.svg#i_jardinier">
                                        </use>
                                    </svg>
                                </div>
                                <p class="title">
                                    <span>Jardinier</span>
                                </p>
                            </div>
                        </a>
                    </div> --}}


                    <div class="nav-metiers-primaires__item">
                        <a href="https://www.o2recrute.fr/intervenants-a-domicile/assistant-menager"
                            class="nav-metiers-primaires__link"
                            style="background-image: url('https://www.o2recrute.fr/wp-content/uploads/2017/04/f23f2bf7c7d6ad4485e5877efb9d4eed.jpg');">
                            <div class="content">
                                <div aria-hidden="true" class="badge icon-menage">
                                    <svg viewBox="0 0 341.38 481.85">
                                        <use
                                            xlink:href="https://www.o2recrute.fr/wp-content/themes/O2_recrute/images/icons.svg#i_menage">
                                        </use>
                                    </svg>
                                </div>
                                <p class="title">
                                    <span>Assistant ménager</span>
                                </p>
                            </div>
                        </a>
                    </div>


                </div>

                <div class="row">
                    <div class="ctn_content">

                        <!-- PAGE : DESC -->
                        <h2>Assistant de vie</h2>
                        <h2>Les qualités requise pour être aide à domicile</h2>

                        <p><strong> Être aide à domicile, c’est se mettre au service d’une ou plusieurs personnes pour
                                faciliter la vie quotidienne, et le maintien à domicile. Chaque jour, cette professionnelle
                                doit mettre en œuvre des compétences multiples : </strong></p>
                        <ul>
                            <li>Faire preuve d’empathie et de grandes capacités relationnelles, être à l’écoute et
                                bienveillante, faire preuve de patience,</li>
                            <li>Maîtriser les protocoles sanitaires et connaître les produits d’entretien pour chacune des
                                tâches ménagères,</li>
                            <li>Savoir utiliser différents robots électroménagers ou outils de jardinage,</li>
                            <li>Respecter les règles d'hygiène et de propreté,</li>
                            <li>Connaître les gestes de premiers secours,</li>
                            <li>Savoir adapter ses activités et façons de faire selon les demandes de chaque client.</li>
                            <li>Prévenir les accidents domestiques,</li>
                            <li> Faire preuve de ponctualité et de politesse</li>
                        </ul>
                        <h2>Les qualités requise pour être aide à domicile</h2>
                        <p>Comme <strong>l’auxiliaire de vie sociale</strong>le rôle de l’aide à domicile est d’aider la
                            personne âgée à continuer à vivre en autonomie à son domicile. A ce titre, elle peut se charger
                            du ménage, des courses, des repas, de l’accompagnement lors des déplacements, de la toilette…
                            L’aide à domicile doit être discrète, attentive, à l’écoute. Comme pour l’auxiliaire de vie
                            sociale, l’aide à domicile doit avoir une bonne condition physique lui permettant d’aider la
                            personne âgée à se lever ou à se coucher, mais aussi porter les courses</p>
                        {{-- <h2>Qu’est-ce qu’une aide à domicile ?</h2>
                        <p><strong>Dans le domaine des services à la personne,</strong>  le métier d’aide à domicile s’exerce auprès de personnes âgées, malades ou en situation de handicap pour réaliser des tâches de la vie quotidienne à leur place ou en leur venant en aide</p>

                        <ul>
                            <li>Dans le domaine des services à la personne,</li>
                            <li>L’aide à l’habillement</li>
                            <li>La préparation des repas</li>
                            <li>L’aide à la prise des repas si nécessaire</li>
                            <li>L’accompagnement pour les déplacements</li>
                            <li><li>L’accompagnement pour les déplacements</li></li>
                        </ul> --}}





                        <div class="section-body section-body_card
                                section-body_card_pink section-body_card_margin-top main-invoicing__body"
                            style="background-color: #E84347">

                            <h2 class="heading heading__lvl1 color_blue" style="color: white;"> Les missions d’une aide à
                                domicile
                            </h2>
                            <p class="margin-top-xs text" style="color: white;">
                                <span class=""> Les missions d’une aide à domicile varient en fonction de la personne
                                    à assister chez elle et de son niveau d’autonomie. Il peut s’agir de faire quelques
                                    heures de ménage, de faire la vaisselle et de ranger la cuisine, d’aller faire les
                                    courses avec la personne ou encore d’assurer le repassage de son linge. L’aide à
                                    domicile peut aussi être sollicitée pour entretenir le jardin, pour la tonte, le
                                    désherbage ou l’arrosage, par exemple.
                                    Ponctuellement, l’aide à domicile peut éclairer le bénéficiaire sur une démarche
                                    administrative ou un courrier officiel auquel il faut répondre.
                                </span></b>
                            </p>

                            <p class="margin-top-xs text" style="color: white;">Chacune de ces missions exercées au domicile
                                du bénéficiaire est l’occasion également de discuter avec la personne, et de rompre ainsi un
                                éventuellement isolement. <br>




                            <div class="main-invoicing__simg-wrap">

                                <picture class="picture__image-container ">

                                    <img src="{{ asset('_next/static/media/fonctionnment.png') }} "
                                        srcSet="_next/static/media/main-invoicing__simg_en_it@2x.7fe58826.png 2x"
                                        alt="" class="picture__image " loading="lazy" />
                                </picture>

                            </div>

                        </div>









                        <h2>Auxiliaires de vie à domicile</h2>
                        <h2>LES QUALITÉS REQUISES POUR ETRE AUXILIARE DE VIE</h2>
                        <p>.S’occuper au quotidien de personnes âgées, dépendantes ou handicapées, n’est pas donné à tout le
                            monde. Pour exercer ce métier et être épanoui, il est important de posséder certaines qualités
                            humaines fondamentales :</p>
                        <ul>
                            <li>Avoir de fortes capacités relationnelles et de l’écoute,</li>
                            <li>L’auxiliaire de vie doit posséder un grand sens de communication</li>
                            <li>Être réactif et dynamique, savoir prendre des initiatives,</li>
                            <li>Avoir une excellente connaissance des différents publics et des pathologies liées au
                                vieillissement et au handicap,</li>
                            <li>Avoir une bonne condition physique,</li>
                            <li>Savoir adapter ses activités et façons de faire selon les demandes de chaque client.</li>
                            <li>Elle ou il doit être à l'écoute de la personne aidée et des aidants, doit posséder un sens
                                du contact et de l'empathie afin d'établir un lien de confiance avec la personne et son
                                entourage</li>
                            <li>Un diplôme ou titre professionnel dans l’assistance aux personnes âgées</li>
                        </ul>


                        <h2>LES MISSIONS DE L’AUXILAIRE DE VIE</h2>
                        <p>L’auxiliaire de vie aux familles relaie les familles auprès de personnes fragilisées ou sensibles
                            comme les :</p>

                        <ul>
                            <li>Personnes âgées,</li>
                            <li>Personnes dépendantes (maladie, convalescence ou enfants),</li>
                            <li>Personnes handicapées,</li>
                            <li>Enfants (au domicile des parents).</li>
                        </ul>
                        <p>Il exerce son activité soit ponctuellement, soit de façon régulière. Il contribue au maintien à
                            domicile en facilitant la vie quotidienne des personnes auprès desquelles il intervient. Il les
                            accompagne ainsi dans les actes de la vie au quotidien
                        </p>
                        <h3>L’assistant de vie aux familles doit être capable de :</h3>
                        <ul>
                            <li>Réaliser des tâches domestiques (préparation des repas, faire les courses, entretien de la
                                maison…)</li>
                            <li>Assister les personnes dans les actes de la vie quotidienne (toilette corporelle,
                                alimentation, aide aux déplacements…)</li>
                            <li>Prendre en charge de jeunes enfants.</li>
                        </ul>

                        <p><img class="alignnone size-large wp-image-286"
                                src="https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c-1170x400.jpg"
                                alt="" width="1170" height="400"
                                srcset="https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c.jpg 1170w, https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c-250x85.jpg 250w, https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c-750x256.jpg 750w, https://www.o2recrute.fr/wp-content/uploads/2017/04/94ab4471fe7400133d135fbb52d5350c-768x263.jpg 768w"
                                sizes="(max-width: 1170px) 100vw, 1170px" /></p>


                        <h2>Votre univers de travail chez Youdom-care en tant que</h2>
                        <h3>Assistant Ménager</h3>
                        <ul>
                            <li>Vous intervenez au domicile de nos clients. Les particuliers sont les clients de YOUDOM-CARE
                            </li>
                            <li>Vous êtes salarié en CDI d’une ou plusieurs agences dans le même département ou région </li>
                            <li>En fonction de vos disponibilités Youdom-Care vous propose des missions évolutives chez un
                                ou plusieurs clients</li>
                            <li>YOUDOM-CARE vous fournit le matériel professionnel adéquat pour mener à bien votre mission .
                            </li>
                            <li>YOUDOM-CARE vous accompagne tout au long de votre parcours professionnel en vous proposant
                                des formations</li>
                        </ul>

                        <h3>Votre évolution de carrière chez YOUDOM-CARE</h3>
                        <p>Chez YOUDOM-CARE vous bénéficiez d’un parcours individuel de formation spécifique à notre méthode
                            ménage-repassage.</p>
                        <p>Pour accroître vos compétences et développer plus d’expériences dans votre domaine d’activité en
                            tant que assistant ménager, nous proposons le multi-activité à nos intervenants à domicile. Le
                            principe est de vous donner la possibilité d’exercer, dans une même journée ou au sein d’une</p>

                        <!-- SUBNAV -->
                        <nav id="anchor-menu" class="anchor-nav">
                            <ul class="nav menu container">


                                <li><a href="#Assistant-de-vie" class="menu-item"><span>Assistant de vie</span></a></li>


                                <li><a href="#Auxiliaires-de-vie-à-domicile" class="menu-item"><span>Auxiliaires de vie à
                                            domicile</span></a></li>


                                <li><a href="#Assistant-Ménager" class="menu-item"><span>Assistant ménager</span></a></li>


                                {{-- <li><a href="#formation-et-evolution-professionnelle" class="menu-item"><span>Formation et
                                            évolution professionnelle</span></a></li> --}}

                            </ul>
                        </nav>

                    </div>

                </div>



            </div>
        </div>
    </main>




    <script src="https://www.o2recrute.fr/wp-content/themes/O2_recrute/js/AOXJsManager.plugins.min.js"
        type="text/javascript"></script>
    <script src="https://www.o2recrute.fr/wp-content/themes/O2_recrute/js/AOXJsManager.min.js" type="text/javascript">
    </script>


    <script src="https://www.o2recrute.fr/wp-content/themes/O2_recrute/js/svg4everybody.legacy.min.js"
        type="text/javascript"></script>

    <script src="https://www.o2recrute.fr/wp-content/themes/O2_recrute/js/jquery.carrouselcss.js" type="text/javascript">
    </script>
    <script src="https://www.o2recrute.fr/wp-content/themes/O2_recrute/js/jquery.utils.js" type="text/javascript"></script>
    <script src="https://www.o2recrute.fr/wp-content/themes/O2_recrute/js/jquery.gallery.js" type="text/javascript">
    </script>

    <script src="https://www.o2recrute.fr/wp-content/themes/O2_recrute/js/functions_o2recrute.js" type="text/javascript">
    </script>




@endsection
