@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')
<section class="lp-banking-track-cashflow">
    <div class="container">
        <div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">

            <div class="lp-banking-track-cashflow__content">
                <h3 class="heading heading__lvl1 stillforce-heading-blue" style="color:#E84347;">Venez exercez votre talent  </h3>
                <h1 class="heading heading__lvl1 stillforce-heading-blue" style="">chez YOUDOM SERVICES </h1>
                <h4 class="text stillforce-heading-blue" style="">…pour nous aider à proposer
                    les meilleurs services d’aide à domicile ! </h4>
            </div>
            <div class="lp-banking-track-cashflow__image-wrap image">
                <picture class="picture__image-container ">
                <img src="{{  asset('_next/static/media/image3.png') }} " srcSet="/_next/static/media/image3.png 2x" alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                </picture>
            </div>
        </div>
    </div>
</section>

<section class="main-invoicing">

    <div class="container container_card container_cardh ">

        <div class="section-body section-body_card section-body_card_pink section-body_card_margin-top main-invoicing__body">

            <h2 class="heading heading__lvl1 color_blue">Rejoignez-Nous
            </h2>
            <p class="margin-top-xs text text_lg">Chez Youdom Services nous vous proposons un salaire avantageux et attratif.</b></p>

            <div class="margin-top-lg main-invoicing__content-wrap">

                <div class="main-invoicing__info">

                    <div class="main-invoicing__btn-wrap button_margin-default">
                        <a href="#" class="button button_secondary button_w-m-full" id="target-action-main-invoicing-business">Rejoignez-Nous</a>
                    </div>

                </div>

                <div class="main-invoicing__simg-wrap">

                    <picture class="picture__image-container ">

                        <img src="{{  asset('_next/static/media/fonctionnement.png') }} " srcSet="_next/static/media/image2.png 2x" alt="" class="picture__image " loading="lazy" />
                    </picture>

                </div>
            </div>
        </div>
    </div>

</section>



@endsection



