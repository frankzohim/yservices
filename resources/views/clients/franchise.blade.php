@extends('layouts.master')
@section('title', __('Franchisé – Youdom Cares'))

@section('content')

<section class="lp-banking-track-cashflow" >
    <div class="container">
        <div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">

            <div class="lp-banking-track-cashflow__content">
                <h1 class="heading heading__lvl1 stillforce-heading-blue" style="color:#594EE6; font-weight:700; font-size:65px;">Devenez franchisé </h1>
                <h1 class="heading heading__lvl1" style="color: #E84347; font-weight:700; font-size:65px; line-height:59.5px;">Youdom Care</h1>
                <br>
                <h2 class="text heading__lvl1 stillforce-heading-blue" style="">Youdom Services est un réseau national d’agences de services à la personne spécialisées dans l’aide à domicile pour les personnes âgées. </h2>
                <h2 class=" stillforce-heading-blue color_red "  style="">Rejoignez un réseau de plus de 220 agences ! </h2>

                <div class=" gap-2   " style=" margin-top:30px;">
                    <a href="{{ route('partner_form') }}" class="button1  button_w-m-full color_blue-3 " id="target-action-main-invoicing-business">Devenir franchisé</a>
                </div>
            </div>
            <div class="lp-banking-track-cashflow__image-wrap image">
                <picture class="picture__image-container ">
                    <img src="{{ asset('_next/static/media/franchise-people.png') }} " width="100%" srcSet="/_next/static/media/franchise-people.png 2x"
                        alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                </picture>
            </div>
        </div>
       
    </div>
</section>

<section class="lp-banking-track-cashflow " >
    <div class="container decou" style="background: rgb(53, 91, 161)">
        <div
        class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">

        <div class="lp-banking-track-cashflow__image-wrap image">
            <picture class="picture__image-container ">
                <img src="{{ asset('_next/static/media/grand-pa.png') }} " width="95%" srcSet="/_next/static/media/grand-pa.png 2x"
                    alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
            </picture>
        </div>

            <div class="lp-banking-track-cashflow__content">
                <h1 class="heading heading__lvl1 stillforce-heading-blue color_white" style="">Découvrez le concept Youdom Services </h1>
                <h2 class="text heading__lvl1 stillforce-heading-blue color_white" style="margin-top:20px; margin-bottom:20px">Le service d’aide à domicile que vous voudriez <br> pour vos propres grands-parents.</h2>
                <a href="#" class="button  button_w-m-full color_blue-3 " id="target-action-main-invoicing-business">En Savoir Plus </a>
            </div>
    </div>
</section>

<section class="lp-banking-track-cashflow" style="margin-top:-20px">
    <div class="container">
        <div
        class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">

            <div class="lp-banking-track-cashflow__content">
                <h1 class="heading heading__lvl1" style="color: #E84347; font-weight:700; font-size:40px; line-height:59.5px;"" style="">Le marché de l’aide à domicile </h1>
                <h2 class="text heading__lvl1 stillforce-heading-blue" style="">En 2050, la population française atteindra 70 millions de personnes. <br>
                   Cette augmentation s’accompagne d’un vieillissement de la population en raison de l’allongement de l’espérance de vie et de l’arrivée à l’âge de la retraite des baby-boomers. </h2>
                <a href="#" class="button2  button_w-m-full color_blue-3 " style="margin-top:25px" id="target-action-main-invoicing-business">En Savoir Plus </a>
            </div>
            <div class="lp-banking-track-cashflow__image-wrap image">
                <picture class="picture__image-container ">
                    <img src="{{ asset('_next/static/media/market.png') }} " width="55%" srcSet="/_next/static/media/market.png 2x"
                        alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="fdb-block">
  <div class="container" style="margin-left: 25%">
    <div class="row align-items-center">
     
      <div class="col-12 col-md-12 m-auto ml-lg-auto mr-lg-0 col-lg-12 pt-5 pt-lg-0">
        <img alt="image" class="img-fluid" src="{{ asset('_next/static/media/documentation.png') }}">
      </div>
    </div>

    <div class="row align-items-center">
      <div class="col-12 col-md-12 col-lg-12 col-xl-12">
        <h1>Demandez une documentation</h1>
        <p class="lead mb-5">Vous voulez devenir franchisé Youdom Care ? Contactez Laurent Wattez, notre Directeur du développement.</p>

       <a href="clients/formfranchise" class="button2  button_w-m-full color_blue-3 "  id="target-action-main-invoicing-business">Contactez Nous </a>
      </div>
      
    </div>


  </div>
</section>



  @endsection





