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


<section class="lp-banking-track-cashflow " ">
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
              <div class="card h-100">
                <picture class="picture__image-container ">
                    <img src="{{ asset('_next/static/media/image15.png') }} " srcSet="/_next/static/media/image15.png 2x"
                        alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                </picture>
                <div class="card-body">
                  <h2 class="card-title color_red">Nos franchisé∙e∙s témoignent</h2>
                  <p class="card-text color_blue-3">« Youdom Services m’a séduit par son nom, pour son business model et par les rencontres que j’ai pu y faire. C’est un réseau jeune et dynamique. Les quatre semaines de formation m’ont permis de découvrir tous les aspects du métier de l’aide à domicile. L’équipe de Youdom Services nous donne de nombreux coups de main pour que tout soit bien en place au sein de notre agence. Cela m’a notamment permis d’être très vite au-dessus des prévisions que je m’étais fixées en termes d’activité et de rentabilité. »</p>
                </div>
                <div class="card-footer" style="background: cornflowerblue">
                  <small class="text-muted2 ">Yves Jacquemard Franchisé à Montrouge</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <picture class="picture__image-container ">
                    <img src="{{ asset('_next/static/media/image15.png') }} " srcSet="/_next/static/media/image15.png 2x"
                        alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                </picture>
                <div class="card-body">
                  <h2 class="card-title color_red">Nos franchisé∙e∙s témoignent</h2>
                  <p class="card-text color_blue-3">« Le réseau Youdom Services a des valeurs humaines fortes. Un feeling s’est très vite crée. Ils m’ont beaucoup aidé pour préparer mon projet de franchise. Aujourd’hui encore, ils continuent à me soutenir en répondant à l’ensemble de mes questions sur la coordination ou le recrutement. Il arrive que l’équipe d’animation passe à mon agence pour voir quel est mon fonctionnement, pour me conseiller. C’est un vrai accompagnement au quotidien. J’apprécie également le fait de pouvoir partager mon expérience avec les autres franchisés du réseau. »</p>
                </div>
                <div class="card-footer" style="background: cornflowerblue">
                  <small class="text-muted2 ">Elodie Gey Franchisée à Bordeaux Le Bouscat et Mérignac</small>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card h-100">
                <picture class="picture__image-container ">
                    <img src="{{ asset('_next/static/media/image15.png') }} " srcSet="/_next/static/media/image15.png 2x"
                        alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                </picture>
                <div class="card-body">
                  <h2 class="card-title color color_red">Nos franchisé∙e∙s témoignent</h2>
                  <p class="card-text color_blue-3">« Ce qui m’a avant tout attiré chez Youdom Services c'est son nom. Il véhicule à lui seul toutes les valeurs que je souhaite transmettre dans mon activité de service aux personnes dépendantes. La franchise a aussi été un moyen d’accéder à des ressources importantes tout en me faisant gagner deux à trois ans d’activité. Sans oublier l’image de marque. Avec Youdom Services, soyez rassurés, nos valeurs familiales ne s’appliquent pas qu’à nos clients, vous serez réellement épaulés. »</p>
                </div>
                <div class="card-footer" style="background: cornflowerblue">
                  <small class="text-muted2 ">Simon FlévaudFranchisé à Nantes et Couëron </small>
                </div>
              </div>
            </div>
          </div>

</section>



  @endsection





