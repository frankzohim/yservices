@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

<style>
    .color-text{
        color: #30005B;
    }
    .color-orange{
        color:#D9644A;
    }
</style>
@section('content')
    <section class="lp-banking-track-cashflow">
        <div class="container">
            <div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">

                <div class="lp-banking-track-cashflow__content">
                    <h3 class="heading heading__lvl1 stillforce-heading-blue" style="color:#E84347;">Venez exercez votre
                        talent </h3>
                    <h1 class="heading heading__lvl1 stillforce-heading-blue color_blue-3" style="">Chez YOUDOM SERVICES </h1>
                    <h4 class="text stillforce-heading-blue" style="">…pour nous aider à proposer
                        les meilleurs services d’aide à domicile! </h4>
                </div>
                <div class="lp-banking-track-cashflow__image-wrap image">
                    <picture class="picture__image-container ">
                        <img src="{{ asset('_next/static/media/image3.png') }} " srcSet="/_next/static/media/image3.png 2x"
                            alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                    </picture>
                </div>
            </div>
        </div>
    </section>

    <section class="lp-banking-track-cashflow">
        <div class="container shadow-lg p-3 mb-5 bg-body rounded">
            <div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">

                <div class="lp-banking-track-cashflow__image-wrap image">
                    <picture class="picture__image-container ">
                        <img src="{{ asset('_next/static/media/image17.png') }} " srcSet="/_next/static/media/image17.png 2x"
                            alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                    </picture>
                </div>
                <div class="lp-banking-track-cashflow__content">
                    <h1 class="heading heading__lvl1 stillforce-heading-blue color_blue-3" style="">Rejoignez-Nous </h1>
                    <h3 class=" stillforce-heading-blue" style="">Chez Youdom Services nous vous proposons un salaire avantageux et attratif. </h3>
                    <button type="button" class="btn btn-primary btn-lg">Rejoignez-Nous</button>
                </div>

            </div>
        </div>
    </section>





    <section class="main-invoicing mb-5">

        <div class="row" style="padding-right: 20px; padding-left: 20px;">
            <div class="col-sm-12 mb-5 ">
                <div class="card" style="background-color: #415de8">
                    <div class="card-body ">
                        <h1 class="card-title color_white">En tant qu'auxiliaire de vie</h1>
                        <h3><p class="card-text color_white ">Pour profiter d’un salaire avantageux et attractif, d’un planning bien rempli,
                            et du fait de toujours aller chez les mêmes clients.</p></h3>
                        <a href="#" class="btn btn-danger">Devenez...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 " >
                <div class="card" style="background-color: #415de8">
                    <div class="card-body color_white">
                        <h1 class="card-title color_white">Dans l’une de nos agences</h1>
                        <h3><p class="card-text color_white">Rejoignez un environnement de travail motivant et agréable avec des prises de
                            responsabilités rapides en intégrant l’une de nos agences.

                        </p></h3>
                        <a href="#" class="btn btn-danger">JE PROPOSE MON SUPER PROFIL</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="{{ asset('_next/static/media/fonctionnement.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block color_blue-3">
                        <h1 class="color_blue-3">La compétence d’un professionnel…</h1>
                        <p>
                        <h2> est un réseau national d’agences de services à la personne spécialisées dans l’aide à domicile
                            pour les personnes âgées, avec un positionnement
                            haut de gamme.</h2>
                        </p>
                    </div>
                </div>
                <div class="carousel-item" data-bs-interval="2000">
                    <img src="{{ asset('_next/static/media/image3.png') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block color_blue-3">
                        <h1 class="color_blue-3">… L’esprit d’une famille</h1>
                        <p>
                        <h2>Petits-fils garantit des conditions de travail optimales à ses collaborateurs et aux auxiliaires
                            de vie.
                            Tout le monde est gagnant !.</h2>
                        </p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div> --}}


        <section class="lp-banking-track-cashflow" >

            <div class="container selecteur-conteneur shadow-lg p-3 bg-body rounded selecteur-conteneur">
                <div class=" row lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm ">

                    {{-- <div class="lp-banking-track-cashflow__image-wrap image">
                        <picture class="picture__image-container ">
                            <img src="{{ asset('_next/static/media/image17.png') }} " srcSet="/_next/static/media/image17.png 2x"
                                alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                        </picture>
                    </div> --}}
                    <div class="lp-banking-track-cashflow__content" >
                        <h1 class="heading heading__lvl1 stillforce-heading-blue color_blue-3" style="color: rgb(255, 149, 0)">La compétence d’un professionnel… </h3>
                        <h4 class=" stillforce-heading-blue" style=""><p>Chez Youdom Services est un réseau national d’agences de services à la personne spécialisées dans l’aide à domicile pour les personnes âgées, avec un positionnement
                            haut de gamme.</p>
                             </h4>

                    </div>

                    <div class="lp-banking-track-cashflow__content">
                        <h1 class="heading heading__lvl1 stillforce-heading-blue color_blue-3" style="color: rgb(255, 149, 0)">… L’esprit d’une famille </h3>
                        <h4 class=" stillforce-heading-blue" style=""><p>Petits-fils garantit des conditions de travail optimales à ses collaborateurs et aux auxiliaires de vie.
                            Tout le monde est gagnant !</p>
                             </h4>

                    </div>

                </div>
            </div>
        </section>










    @endsection
