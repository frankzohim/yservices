@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')

    <section class="lp-banking-track-cashflow">
        <div class="container">
            <div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">

                <div class="lp-banking-track-cashflow__content">
                    <h1 class="heading heading__lvl1 stillforce-heading-blue color_blue-3" style="">Notre fonctionnement
                        simple </h1>
                    <h2 class="text heading__lvl1 stillforce-heading-blue" style="">
                        <p> conseiller Youdom Services est votre interlocuteur unique dans votre agence. Il est à votre
                            écoute et
                            à votre disposition pour organiser le bon déroulement des prestations, mais aussi pour répondre
                            à vos questions.
                    </h2>
                    <h3 class=" text color_red " style="">C’est pourquoi tous nos clients disposent de la ligne directe
                        et portable de leur conseiller Youdom ainsi que d’un numéro d’astreinte joignable 24h / 24 et 7
                        jours / 7. </h3>
                        <div class=" gap-2   ">
                            <a href="clients/formfranchise" class="button1  button_w-m-full color_blue-3 "
                                id="target-action-main-invoicing-business">Contacter</a>
                        </div>
                </div>
                <div class="lp-banking-track-cashflow__image-wrap image">
                    <picture class="picture__image-container ">
                        <img src="{{ asset('_next/static/media/image17.png') }} "
                            srcSet="/_next/static/media/image17.png 2x" alt=""
                            class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                    </picture>
                </div>
            </div>

            <div class="lp-banking-track-cashflow__body">
                <p>
                <h3 class=" text  " style="">
                    <p> proposons des services à domicile sur mesure, assurés par des auxiliaires de vie professionnelles,
                        avec le souci constant de rendre le quotidien des personnes âgées plus agréable et de faciliter leur
                        maintien à domicile.
                </h3>
                </p>
            </div>

            <div class="lp-banking-track-cashflow__body">
                <p>
                <h2 class=" text color_blue-3 "> Toutes les agences Youdom Services s’appuient sur une charte qualité , sont
                    titulaires de l’agrément des services à la personne et exercent en mode mandataire . </h2>
                </p>
            </div>
        </div>

        <div class="container mt-6 ">
            <div class="row shadow-lg p-3 mb-5 bg-body rounded">
                <div class="col-sm-3">
                    <picture class="picture__image-container ">
                        <img src="{{ asset('_next/static/media/etape.png') }} " srcSet="/_next/static/media/etape.png 2x"
                            alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                    </picture>
                </div>
                <div class="col-sm-9" style="text-align: justify">
                    <h1 class=" color_blue-3 "> Mon aide à domicile en 4 étapes </h1>
                    <div class="row">
                        <div class="col-8 ">
                            <picture class="picture__image-container ">
                                <img src="{{ asset('_next/static/media/etape1.png') }} "
                                    srcSet="/_next/static/media/etape1.png 2x" alt=""
                                    class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                            </picture>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h2 class=" color_red "> Visite d’évaluation des besoins à domicile </h2>
                            <h4 class="text">
                                <p>Votre conseiller Youdom Services vient rencontrer la personne âgée chez elle pour
                                    comprendre
                                    précisément ses besoins. Cette visite est gratuite. </p>
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 ">
                            <picture class="picture__image-container ">
                                <img src="{{ asset('_next/static/media/etape2.png') }} "
                                    srcSet="/_next/static/media/etape2.png 2x" alt=""
                                    class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                            </picture>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h2 class=" color_blue-3 "> Sélection et présentation de l’auxiliaire de vie </h2>
                            <h4 class="text">
                                <p>Compte tenu des besoins identiﬁés et des souhaits exprimés par la personne âgée, le
                                    conseiller Youdom Services sélectionne finalement l’auxiliaire de vie qui lui semble le
                                    plus adapté et vient le présenter à la personne âgée. Cette visite est également
                                    gratuite. </p>
                            </h4>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-8 ">
                            <picture class="picture__image-container ">
                                <img src="{{ asset('_next/static/media/etape3.png') }} "
                                    srcSet="/_next/static/media/etape3.png 2x" alt=""
                                    class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                            </picture>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h2 class=" color_red "> Début des prestations d’aide à domicile </h2>
                            <h4 class="text">
                                <p>Après la première intervention puis à un rythme au minimum mensuel, votre conseiller
                                    Youdom Services vous appelle pour s’assurer du bon déroulement de la prestation et de
                                    votre satisfaction. </p>
                            </h4>
                        </div>
                    </div>



                    <div class="row">
                        <div class="col-8 ">
                            <picture class="picture__image-container ">
                                <img src="{{ asset('_next/static/media/etape4.png') }} "
                                    srcSet="/_next/static/media/etape4.png 2x" alt=""
                                    class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                            </picture>
                        </div>
                        <div class="col-4 col-sm-6">
                            <h2 class=" color_blue-3 "> Un planning qui s'adapte à l'évolution de vos besoins </h2>
                            <h4 class="text">
                                <p>Le planning des interventions à votre domicile pourra s’adapter à l’évolution de vos
                                    besoins. </p>
                            </h4>
                        </div>
                    </div>

                </div>
            </div>


        </div>
        </div>

        <div class="shadow-none p-3 mb-5 bg-light rounded " style="text-align: justify">
            <h1 class=" color_red "> Questions fréquentes </h1>
            <div class="accordion" id="accordionExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <h3 class=" color_blue-3 ">Puis-je interrompre la prestation à tout moment ?</h3>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text">
                            <p>Le mandat de gestion qui vous lie à Petits-fils est conclu sans engagement de durée. Vous
                                pouvez donc le résilier à tout moment, sans préavis et sans frais.</p>

                            <p>A votre demande, nous organisons alors avec vous la fin des interventions d’aide à domicile
                                dans le respect de la règlementation applicable en matière de rupture du contrat de travail.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <h3 class=" color_blue-3 ">Puis-je faire évoluer le planning d'interventionou annuler une
                                intervention?</h3>

                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text">
                            <p>Conformément à la convention collective applicable et compte tenu de la nature évolutive des
                                besoins d’aide à domicile des personnes âgées et dépendantes, le contrat de travail ne
                                prévoit pas une durée du travail fixe. Cette durée pourra donc évoluer pour s’adapter à vos
                                besoins d’assistance.</p>

                            <p>Ainsi, en respectant un délai de prévenance minimum de 5 jours (sauf situation exceptionnelle
                                imprévisible), vous pourrez faire évoluer les horaires d’intervention en fonction de votre
                                nouveau besoin d’aide à domicile. En revanche, toute période d’indisponibilité de votre part
                                ou d’absence de votre domicile, volontaire ou involontaire, donnera lieu au maintien de la
                                rémunération de votre intervenant suivant le planning en cours.</p>

                            <p>Par exception, si occasionnellement la présence de votre auxiliaire de vie n’est pas
                                nécessaire au cours d’une journée, vous pourrez annuler sans aucun frais l’intervention
                                prévue en respectant le délai de prévenance minimum de 5 jours.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <h3 class=" color_blue-3 ">Si l'auxiliaire de vie sélectioné(e) ne me conveint pas Youdom
                                peut-il m'en proposer un(e) autre?</h3>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text">
                            <p>Notre objectif est votre satisfaction. Les auxiliaires de vie que nous vous proposons font
                                l’objet d’une sélection rigoureuse selon des critères de formation, d’expérience et de
                                savoir-être.</p>

                            <p>Avant le début des interventions, compte tenu des besoins identifiés et des souhaits exprimés
                                par la personne âgée, le conseiller Petits-fils sélectionne l’auxiliaire de vie qui lui
                                semble la/le plus adapté(e) et vient vous la/le présenter. Si l’auxiliaire de vie ne
                                convient pas à la personne aidée le conseiller Petits-fils pourra lui en présenter une/un
                                autre.</p>

                            <p>Après le début des interventions, la période d’essai de l’intervenant vous permet de vérifier
                                que l’auxiliaire de vie répond bien à vos attentes.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <h3 class=" color_blue-3 ">comment m'assurer que l'auxiliaire de vie est vien intervenu chez
                                mes parents?</h3>
                        </button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text">
                            <p>Chez Petits-fils nous vous proposons deux outils de contrôle de la présence et de la
                                ponctualité des intervenants à domicile.</p>

                            <p>Nous proposons également un contrôle des horaires de présence par télégestion (téléphone fixe
                                ou mobile). Il s’agit d’un système de pointage par téléphone : à son arrivée comme à son
                                départ, l’auxiliaire de vie appelle depuis le téléphone fixe de la personne aidée sur un
                                numéro vert et les horaires sont automatiquement enregistrés. Cette solution vous est
                                proposée gratuitement.</p>

                            <p>Le contrôle peut s’effectuer par une feuille de présence complétée chaque jour, mentionnant
                                l’heure d’arrivée et l’heure de départ, et signée par l’auxiliaire de vie et par la personne
                                aidée.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapsefive">
                            <h3 class=" color_blue-3 ">Quels sont les aides financières dont je dispose?</h3>
                        </button>
                    </h2>
                    <div id="collapsefive" class="accordion-collapse collapse" aria-labelledby="headingfive"
                        data-bs-parent="#accordionExample">
                        <div class="accordion-body text">
                            <p>Toutes les agences Petits-fils sont déclarées et titulaires de l’agrément des services à la
                                personne.</p>

                            <p>En faisant appel à nos services, vos dépenses d’aide à domicile ouvrent droit à un crédit
                                d’impôt sur le revenu égal à 50% des prestations de services à la personne facturées.</p>

                            <p>Vous pouvez également payer l’intégralité de nos services en CESU (Chèque Emploi Service
                                Universel) préfinancés.</p>

                            <p>Par ailleurs, vous pouvez aussi, et sous conditions d’âge et de perte d’autonomie, bénéficier
                                de l’APA (Allocation Personnalisée d’Autonomie) pour financer nos prestations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="shadow p-3 mb-6 bg-body rounded " >
            <div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">
                <div class="lp-banking-track-cashflow__image-wrap image">
                    <picture class="picture__image-container ">
                        <img src="{{ asset('_next/static/media/information.png') }} "
                            srcSet="/_next/static/media/information.png 2x" alt=""
                            class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                    </picture>
                </div>

                <div class="lp-banking-track-cashflow__content">
                    <h4 class="heading heading__lvl1 stillforce-heading-blue color_blue-3" style="">Besoin de renseignements supplémentaires ? </h4>
                    <h2 class="text heading__lvl1 stillforce-heading-blue" style="text-align: justify">
                        <p> Précisez-nous quels sont les services dont vous souhaiteriez bénéficier. Nous vous contacterons pour vous détailler notre fonctionnement.</p>
                    </h2>
                    <button type="button" class="btn btn-primary btn-lg">Contactez-Nous</button>
                </div>

            </div>
        </div>

    </section>
@endsection
