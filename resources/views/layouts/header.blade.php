
<div class="header__container">
  <!--
	<aside class="popup popup-promo Closepopup" data-test="popup-promo">

		<div class="container"  id="exampleModalScrollable" tabindex="-1" role="dialog" aria-labelledby="exampleModalScrollableTitle" aria-hidden="true">
			<div class="popup-promo__body popup-promo__body_it-banking" role="document">
				<p class="text color_white popup-promo__description">
					Take your chance to get 6 months free on a Start plan
				</p>
				<div class="popup-promo__btn-wrap popup-promo__btn-wrap_it-banking" >
					<a href="#main-promo-six-months-free" class="button button_xsmall button_white" data-test="popup-promo__learn-more">
						Learn more
					</a>
				</div>
				<div class="popup__close popup__close_white" data-test="popup-promo__close"
					style="display: flex; justify-content: center; align-items: center;">

					 <span style="font-size: 20px; color: white;" id="close-button" >
						 <i class="fa-solid fa-xmark"></i>
					 </span>
				</div>

			</div>

		</div>
		</aside>

	-->

			<aside class="popup popup-promo" style="margin-left:-85px; font-family:Montserrat, sans-serif; font-size:14px; background-color:white;"
			data-test="popup-promo">

				<div class="container" style="margin-left: 32%">
					<div class="">

								<nav class="header__nav header-nav">
								<ul class="header-nav__list">
									<!--
									<li class="header-nav__item" style="color:#272854"><a class="link_inherit" data-test="header_nav__pricing" href="{{ route('join-us') }}">Trouver un emploi</a>
									</li>
								-->


									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" style="color:#272854" data-test="header_nav__help">
										<a class="link_inherit text-xl  font-bold text-indigo-800 color-orange " style="font-size: 15px;" data-test="header_nav__pricing"
									href="{{ route('become_partner') }}">Devenez partenaire</a>
									</li>

									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" style="color:#272854" data-test="header_nav__help">
										<a class="link_inherit font-bold text-indigo-800 color-orange" style="font-size: 15px;" data-test="header_nav__pricing" href="{{ route('join-us-content') }}">Nous rejoindre</a>
									</li>
									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" style="color:#272854" data-test="header_nav__help">
										<a class="link_inherit font-bold text-indigo-800 color-orange" style="font-size: 15px;" data-test="header_nav__pricing" href="{{ route('devis.form') }}"> Demandez un devis</a>
									</li>


									@auth
							<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" style="color:#272854" data-test="header_nav__help"> Mon Compte
                                <ul >
                                    <li><a href="#"><i data-feather="homepage"></i>Tableau de bord</a></li>
                            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                              @csrf
                            </form>
                           <li> <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>Déconnexion</a></li>
                                </ul>
                            </li>

                            {{-- <ul class="header-dropdown">

								<li class="onhover-dropdown mobile-account"> <i class="fa fa-user" aria-hidden="true"></i>
									Mon Compte
									<ul class="profile-dropdown onhover-show-div p-20 profile-dropdown-hover">
										<li><a href="#"><i data-feather="user"></i>Editer le profil</a></li>
										<li><a href="{{route('dashboard')}}"><i data-feather="home"></i>Tableau de Bord</a></li>
										<form method="POST" action="{{ route('logout') }}" id="logout-form">
										@csrf


									</form>
										<li><a href="{{ route('logout') }}" onclick="event.preventDefault();
									document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>Déconnexion</a></li>
									</ul>
								</li>
							</ul>--}}


                            		@endauth
									@guest
										<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" style="color:#272854"><a class="link_inherit font-bold text-indigo-800 color-orange"
											style="font-size: 15px;" data-test="header_nav__pricing" href="{{ route('login') }}">Mon Compte</a>
									</li>
									@endguest

								</ul>
						</nav>


					</div>

				</div>
			</aside>

			<header class="header header__standart_height header_white">

				<div class="container">
					<div class="header__body">
						<div class="header__left">

							<div class="header__logo-wrap">
								<a class="" aria-label="Youdom" data-inner-link="true" href="{{ route('homepage') }}">
									<img src="{{  asset('_next/static/media/logo-color-new.png') }}"   />
								</a>
							</div>

							<nav class="header__nav header-nav">
								<ul class="header-nav__list">

										<li class="header-nav__item"><a class="link_inherit text-xl  font-bold text-indigo-800 color-text" style="font-size: 17px;" data-test="header_nav__blog" href="{{ route('homepage') }}">Accueil</a>
									</li>

									<li class="header-nav__item"><a class="link_inherit text-xl  font-bold text-indigo-800 color-text" style="font-size: 17px;" data-test="header_nav__blog" href="{{ route("services") }}">Nos Services</a>
									</li>

									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" data-test="header_nav__help">
										<a class="link_inherit text-xl  font-bold text-indigo-800 color-text" style="font-size: 17px;" data-test="header_nav__blog" href="{{ route('functioning') }}"> Fonctionnement</a>

									</li>

									<li class="header-nav__item"><a class="link_inherit text-xl  font-bold text-indigo-800 color-text" style="font-size: 17px;" data-test="header_nav__blog" href="{{ route('about') }}">Qui Sommes-nous</a>
									</li>


									<li class="header-nav__item"><a class="link_inherit text-xl  font-bold text-indigo-800 color-text" style="font-size: 17px;" data-test="header_nav__pricing" href="{{ route('contact.create') }}">Contact</a>
									</li>



									<li class="header-nav__item"><a class="link_inherit text-xl  font-bold text-indigo-800 color-text"
										style="font-size: 17px;" data-test="header_nav__blog" href="{{ route('bloc.index') }}">Blog</a>
									</li>
								</ul>
						</nav>

						</div>

						<div class="header__right">


							<a href="{{ route('devis.create') }}"
							class="px-3 py-3 text-lg bg-yellow-500 font-bold text-white rounded-full"
										style="background-color: #D9644A"
							id="target-action-header" data-f-btn-signup="true">Inscription</a>

								<!-- <img class="search-icon" src="_next/static/media/icones/search.svg" alt=""> -->
								<aside class="burger-menu header__burger-menu">
									<div class="burger-menu__header">
										<div class="header__actions">
											<div class="burger-menu__close">
												<span></span><span></span><span></span>
											</div>
										</div>
									</div>

									<div class="burger-menu__content" style="background-color: #D9644A; color:white;">

										<ul class="" >

											<li class="burger-menu__nav-item">
												<div class="burger-menu__nav-heading">
													<a class="link_inherit" data-inner-link="true"
													href="{{ route('homepage') }}">
														Accueil<svg class="icon burger-menu__nav-arrow"></svg>
													</a>
												</div>

											</li>

											<li class="burger-menu__nav-item ">
												<a class="link_inherit" data-inner-link="true"
												href="{{ route('services') }}">Nos Services</a>
											</li>
											<li class="burger-menu__nav-item ">
												<a class="link_inherit" data-inner-link="true"
												href="{{ route('functioning') }}">Notre fonctionnement</a>
											</li>
											<li class="burger-menu__nav-item ">
												<a class="link_inherit" data-inner-link="true"
												href="{{ route('about') }}">Qui sommes-nous</a>
											</li>
											<li class="burger-menu__nav-item ">
												<a class="link_inherit" data-inner-link="true"
												href="{{ route('contact.create') }}">Contact</a>
											</li>
											<li class="burger-menu__nav-item ">
												<a class="link_inherit" data-inner-link="true"
												href="{{ route('bloc.index') }}">Blog</a>
											</li>
										</ul>



									</div>

								</aside>
						</div>
					</aside>
						</div>
					</div>
				</div>
			</header>
	</div>


