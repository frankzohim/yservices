@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')


<section class="main-intro-all">

	<section class="lp-banking-track-cashflow" style="margin-top: 50px">
					<div class="container">
						<div style="display: flex">
								<div style="flex: 1">
									 <div class=" d-flex  flex-column">
                                        <h1 class="text-gradient text-primary">Venez exercer votre talent</h1>
                                        <h1 class="mb-4">chez Youdom - CARE</h1>
                                        <p class="lead pe-5 me-5">…pour nous aider à proposer les meilleurs services d’aide à domicile !</p>
                                        <div class="buttons">
                                           <a href="{{ route('join-us') }}">
                                                <button type="button" class="btn btn-primary btn-lg mt-4" style="background-color:#DF034D">Nous Rejoindre Maintenant</button>
                                            </a> 
                                           

                                        </div>
                                        </div>
								</div>
								<div style="flex:1">
                                    <div class="">
                                        <picture class="picture__image-container ">
                                        <img src="{{  asset('_next/static/media/join-us1.png') }} " style="margin-left:-20%" width="100%" 
                                        srcSet="/_next/static/media/lp-banking-track-cashflow__simg_1_en@2x.95edf884.png 2x" alt="" 
                                        class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                                        </picture>
							</div></div>
						</div>
					</div>
				</section>
<!-- -------- END HEADER 1 w/ text and image on right ------- -->

  <div class="container">
    <div class="row">
      <div class="col-lg-4">
        <div class="info-horizontal bg-gradient-primary border-radius-xl p-5">
       
          <div class="description">
            <h5 class="text-white">En tant qu'intervenant</h5>
            <p class="text-white">Vous profitez d'un salaire avantageux et attractifn d'un planing bien rempli et du fait de toujours aller chez les mêmes clients.</p>
            <a href="#" class="text-white icon-move-right">
              Commencer Maintenant
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 px-lg-1 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-100 border-radius-xl p-5">
          <div class="icon">
            <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>document</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g transform="translate(154.000000, 300.000000)">
                      <path class="color-foreground" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
                      <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="description ps-5">
            <h5>Professionnalisme</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quisquam non eaque libero dicta quae officiis porro 
                quo impedit aliquid nesciunt repellendus molestiae rerum ipsa labore saepe, repudiandae cumque. Velit.</p>
            <a href="" class="text-primary icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mt-lg-0 mt-4">
        <div class="info-horizontal bg-gray-100 border-radius-xl p-5">
          <div class="icon">
            <svg class="text-primary" width="25px" height="25px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
              <title>ungroup</title>
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g transform="translate(-2170.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
                  <g transform="translate(1716.000000, 291.000000)">
                    <g id="ungroup" transform="translate(454.000000, 151.000000)">
                      <path class="color-background" d="M38.1818182,10.9090909 L32.7272727,10.9090909 L32.7272727,30.9090909 C32.7272727,31.9127273 31.9127273,32.7272727 30.9090909,32.7272727 L10.9090909,32.7272727 L10.9090909,38.1818182 C10.9090909,39.1854545 11.7236364,40 12.7272727,40 L38.1818182,40 C39.1854545,40 40,39.1854545 40,38.1818182 L40,12.7272727 C40,11.7236364 39.1854545,10.9090909 38.1818182,10.9090909 Z"></path>
                      <path class="color-foreground" d="M27.2727273,29.0909091 L1.81818182,29.0909091 C0.812727273,29.0909091 0,28.2781818 0,27.2727273 L0,1.81818182 C0,0.814545455 0.812727273,0 1.81818182,0 L27.2727273,0 C28.2781818,0 29.0909091,0.814545455 29.0909091,1.81818182 L29.0909091,27.2727273 C29.0909091,28.2781818 28.2781818,29.0909091 27.2727273,29.0909091 Z"></path>
                    </g>
                  </g>
                </g>
              </g>
            </svg>
          </div>
          <div class="description ps-5">
            <h5>L’esprit d’une famille</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit quisquam non eaque libero dicta quae officiis porro 
                quo impedit aliquid nesciunt repellendus molestiae rerum ipsa labore saepe.</p>
            <a href="" class="text-primary icon-move-right">
              Read more
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>

   <div class="container mt-sm-5">
    <div class="page-header min-vh-50 my-sm-3 mb-3 border-radius-xl" style="background-image: url('https://raw.githubusercontent.com/creativetimofficial/public-assets/master/soft-ui-design-system/assets/img/desktop.jpg');">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ms-lg-5">
            <h4 class="text-white mb-0">Plus de 300 agences</h4>
            <h1 class="text-white">Dans toute la France</h1>
            <p class="lead text-white opacity-8">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eius reiciendis beatae error voluptas iure illum, reprehenderit dignissimos alias at repellat, fugit placeat ipsa! Rem sit aperiam eligendi cumque dolorem velit?</p>
            <a href="#" class="text-white icon-move-right">
              En Savoir Plus
              <i class="fas fa-arrow-right text-sm ms-1"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  






    @endsection
