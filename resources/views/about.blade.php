@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')

<section class="main-intro-all">

				<section class="lp-banking-track-cashflow" style="margin-top: 50px">
					<div class="container">
						<div style="display: flex">
								<div style="flex: 1">
										<div class="">
												<h2 class="heading heading__lvl1 stillforce-heading-red">Qui sommes-nous ?</span></h2> <br>
													<p class="heading heading__lvl1 stillforce-heading-blue " style="font-size: 25px">
														L’aide à domicile sur- mesure pour les personnes âgées, en situation handicap ou en perte d’autonomie.
													</p>
													<p class="text text_lg margin-top-default" style="font-size: 19px">
														YOUDOM-CARE est un service d’aide à domicile pour les personnes âgées, pour les personnes en perte d’autonomie, 
														pour les personnes handicapées, pour les enfants malades et pour les personnes en situation handicap , fragilisées qui 
														souhaitent vivre à leur domicile, dans les meilleures conditions de bien-être et de sécurité.
													</p>

													<p class="text text_lg margin-top-default" style="font-size: 19px">
														
															Nous traitons vos proches comme les membres de notre famille. Nous abordons tous 
															les aspects de la vie d’une personne âgée, malade, en situation d’handicap en nous efforçant d’enrichir sa journée 
															de toutes les manières possibles !

													</p>

													
											</div>
								</div>
								<div style="flex:1"><div class="">
								<picture class="picture__image-container ">
								<img src="{{  asset('_next/static/media/about.png') }} " srcSet="/_next/static/media/lp-banking-track-cashflow__simg_1_en@2x.95edf884.png 2x" alt="" class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
								</picture>
							</div></div>
						</div>
					</div>
				</section>

				<section class="lp-banking-track-cashflow">
					<div class="container">
						<div class="padding-top-sm padding-bottom-sm section-body_margin-top lp-banking-track-cashflow__body">
							<div class="image lp-banking-track-cashflow__image-wrap">
								<picture class="picture__image-container ">
									
									<img src="{{  asset('_next/static/media/why-us-2.png') }} " srcSet="/_next/static/media/lp-banking-track-cashflow__simg_1_fr@2x.de21b672.png 2x" alt="" class="picture__image " loading="eager" />
								</picture>
							</div>
							
							<div class="lp-banking-track-cashflow__content">
									<h2 class="heading heading__lvl1 lp-banking-track-cashflow__heading">
										Pourquoi choisir YOUDOM-CARE ?
									</h2>
									<p class="margin-top-default text text_lg">
										La satisfaction de nos clients est au cœur de notre attention
									</p>
									<ul class="margin-top-default list list_10px list_bullet-color_blue">
												<li>
													<h4 class="heading heading__lvl4">GARANTIE</h4><span class="text">Un(e) auxiliaire de vie unique et adapté à vos besoins
													C’est pourquoi, nous sélectionnons des hommes et des femmes professionnels, diplômés avec des références vérifiées pour un service 
													sur-mesure et adapté à vos besoins.</span>
												</li>

												<li>
													<h4 class="heading heading__lvl4">TRANQUILLITÉ D’ESPRIT</h4> 
													<span class="text">Fini les rendez-vous manqués ou les congés pour le suivi médical de votre proche.
													Vous pouvez désormais travailler en toute quiétude sachant que votre proche est  entre de bonnes mains.
													</span>
												</li>
											</ul>
								</div>
						</div>
					</div>

				</section>
				
					

			
			
				
</section>


@endsection