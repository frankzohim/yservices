@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')
    <section class="lp-banking-track-cashflow">
        <div class="container">
            <div
                class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">

                <div class="lp-banking-track-cashflow__content">
                    <h3 class="heading heading__lvl1 stillforce-heading-blue" style="color:#E84347;">Venez exercez votre
                        talent </h3>
                    <h1 class="heading heading__lvl1 stillforce-heading-blue" style="">Chez YOUDOM SERVICES </h1>
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

    <div class="card mb-3" style="max-width: 100%; ">
        <div class="row g-0">
            <div class="main-invoicing__simg-wrap">

                <div class="col-md-8">
                    <div class="card-body">
                        <h1 class="card-title color_white ">Rejoignez-Nous</h1>
                        <p class="card-text color_white">Chez Youdom Services nous vous proposons un salaire avantageux et
                            attratif.</p>
                    </div>

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end" ">
                        <a href="#" class="button  button_w-m-full " id="target-action-main-invoicing-business">Rejoignez-Nous</a>
                    </div>
               
              </div>
              
              

        </div>
            </div>
          </div>

        <section class="main-invoicing">

        <div class="row" style="padding-right: 20px; padding-left: 20px;">
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title color_red">En tant qu'auxiliaire de vie</h1>
                  <p class="card-text">Pour profiter d’un salaire avantageux et attractif, d’un planning bien rempli, et du fait de toujours aller chez les mêmes clients.</p>
                  <a href="#" class="btn btn-primary">Devenez...</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h1 class="card-title color_red">Dans l’une de nos agences</h1>
                  <p class="card-text">Rejoignez un environnement de travail motivant et agréable avec des prises de responsabilités rapides en intégrant l’une de nos agences.
                    
                    </p>
                  <a href="#" class="btn btn-primary">JE PROPOSE MON SUPER PROFIL</a>
                </div>
              </div>
            </div>
          </div>

          <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="{{ asset('_next/static/media/fonctionnement.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block color_blue-3">
                  <h1 class="color_blue-3">La compétence d’un professionnel…</h1>
                  <p><h2> est un réseau national d’agences de services à la personne spécialisées dans l’aide à domicile pour les personnes âgées, avec un positionnement
                    haut de gamme.</h2></p>
                </div>
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="{{ asset('_next/static/media/image3.png') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block color_blue-3">
                  <h1 class="color_blue-3">… L’esprit d’une famille</h1>
                  <p><h2>Petits-fils garantit des conditions de travail optimales à ses collaborateurs et aux auxiliaires de vie.
                    Tout le monde est gagnant !.</h2></p>
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
          </div>

          


  

  



@endsection
