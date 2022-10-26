@extends('layouts.master')
@section('title', __('Franchisé – Youdom Cares'))

@section('content')

    <style>
        section.big-section{padding:50px 0}
        .alt-font strong{font-weight:600; font-family: Poppins,sans-serif; font-size: 2.3rem;
    line-height: 3rem;}
        .btn-link.text-dark-charcoal,.text-dark-charcoal,a.text-dark-charcoal-hover:hover{color:#2f2f2f}
        .font-weight-700{font-weight:700!important}
        .letter-spacing-minus-1px{letter-spacing:-1px}
        blockquote{border-left:2px solid;color:#232323;font-size:18px;line-height:30px;font-weight:500;padding:2px 40px;margin-top:50px;margin-bottom:50px}
        blockquote p{margin-bottom:17px!important}
        blockquote footer{color:#828282}.blog-image blockquote h6::before{content:"\e67f";font-family:themify;font-size:40px;top:5px;position:relative;margin-right:12px;color:#2e94eb}
        .blog-image blockquote{padding:60px;border:0;margin:0}
        .btn-link.text-dark-charcoal,.text-dark-charcoal,a.text-dark-charcoal-hover:hover{color:#2f2f2f}
        .border-width-4px{border-width:4px!important}
        .border-color-olivine-green{border-color:#8bb867!important}
        .w-90{width:90%}
        .btn .btn-white{background-color:#232323;border-color:#232323;color:#fff}
        .btn-fancy{padding:6px 16px;font-size:12px}
        .color-text{
        color: #30005B;
    }
.color-orange{
        color:#D9644A;
    }
    </style>

    <!-- start section -->
        <section class="big-section wow animate__fadeIn">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-12 col-md-10 col-xl-4 col-lg-5 md-margin-5-rem-bottom wow animate__fadeIn" data-wow-delay="0.2s">
                        <h2 class="heading heading__lvl1 stillforce-heading-red" style="font-size: 40px">Devenez <span style="color:#594EE6;font-size: 40px;">franchisé</span></h2>
                        <blockquote class="border-width-4px border-color-olivine-green text-extra-medium padding-25px-left pe-0 margin-40px-top margin-30px-bottom lg-w-95">
                            Youdom Services est un réseau national d’agences de services à la personne spécialisées dans l’aide à domicile pour les personnes âgées.

                        </blockquote>
                        <p class="w-90 md-w-100">Rejoignez un réseau de plus de plusieurs agences !</p>
                        <br> <br>
                        <a href="{{ route('partner_form.create') }}" class="margin-top-default button button_w-m-full" style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
									Devenir franchisé
								</a>
                    </div>
                    <div class="col-12 col-md-10 col-lg-7 offset-xl-1 wow animate__zoomIn" data-wow-delay="0.4s">
                        <img src="{{ asset('_next/static/media/franchise-people.png') }}" width="80%" alt="" />
                    </div>
                </div>
            </div>
        </section>
    <!-- end section -->

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

                <br> 
                <a href="{{ route('about') }}" class="margin-top-default button button_w-m-full" style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
									En Savoir Plus
								</a>
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
                    <br>
                    <br>
                   <a href="#" class="margin-top-default button button_w-m-full" style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
									En Savoir Plus
								</a>
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

<section class="fdb-block" style="margin-left: 30%">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-12 m-auto ml-lg-auto mr-lg-0 col-lg-12 pt-5 pt-lg-0">
        <img alt="image" class="img-fluid" src="{{ asset("_next/static/media/documentation.png") }}">
      </div>
    </div>
  </div>
</section>

<section class="fdb-block" style="margin-left: 35%">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-12 col-lg-6 col-xl-5">
        <h1>Avoir plus d'informations</h1>
        <p class="lead mb-5">Vous souhaitez devenir franchisé chez Youdom Service mais souhaitez avoir plus d'informations, alors contactez nous.</p>

        	<a href="{{ route('contact.create') }}" class="margin-top-default button button_w-m-full" style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
									Contactez Nous
								</a>
      </div>
    </div>
  </div>
</section>



  @endsection





