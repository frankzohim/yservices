<div class="header__container">

			<aside class="popup popup-promo" data-test="popup-promo">

<div class="container">
	<div class="popup-promo__body popup-promo__body_it-banking">
		<p class="text color_white popup-promo__description">
			Take your chance to get 6 months free on a Start plan
		</p>
		<div class="popup-promo__btn-wrap popup-promo__btn-wrap_it-banking">
			<a href="#main-promo-six-months-free" class="button button_xsmall button_white" data-test="popup-promo__learn-more">
				Learn more
			</a>
		</div>
		<div class="popup__close popup__close_white" data-test="popup-promo__close">
		</div>
		
	</div>
	
</div>
</aside>

			<aside class="popup popup-promo" style="margin-left:-85px; font-family:Montserrat, sans-serif; font-size:14px; background-color:white;"
			data-test="popup-promo">

				<div class="container" style="margin-left: 32%">
					<div class="">

								<nav class="header__nav header-nav" >
								<ul class="header-nav__list">

									<li class="header-nav__item" style="color:#272854"><a class="link_inherit" data-test="header_nav__pricing" href="#">Nous Rejoindre</a>
									</li>

								<li class="header-nav__item" style="color:#272854"><a class="link_inherit" data-test="header_nav__pricing" href="{{ route('become_partner') }}">Devenez partenaire</a>
									</li>

									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" style="color:#272854" data-test="header_nav__help">
										Nous rejoindre
									</li>
									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" style="color:#272854" data-test="header_nav__help">
										Demandez un devis
									</li>

									@auth
										  <li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" style="color:#272854" data-test="header_nav__help">
                            <form method="POST" action="{{ route('logout') }}" id="logout-form">
                              @csrf
                            </form>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"><i data-feather="log-out"></i>Déconnexion</a>

                    </li>
									@endauth
									@guest
										<li class="header-nav__item" style="color:#272854"><a class="link_inherit" data-test="header_nav__pricing" href="{{ route('login') }}">Mon Compte</a>
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
									<img src="{{  asset('_next/static/media/logo.png') }}"   />
								</a>
							</div>

							<nav class="header__nav header-nav">
								<ul class="header-nav__list">

										<li class="header-nav__item"><a class="link_inherit" data-test="header_nav__blog" href="{{ route('homepage') }}">Accueil</a>
									</li>

									<li class="header-nav__item"><a class="link_inherit" data-test="header_nav__blog" href="#">Nos Services</a>
									</li>

									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" data-test="header_nav__help">
										Fonctionnement

									</li>

									<li class="header-nav__item"><a class="link_inherit" data-test="header_nav__blog" href="{{ route('about') }}">Qui Sommes-nous</a>
									</li>
								

									<li class="header-nav__item"><a class="link_inherit" data-test="header_nav__pricing" href="#">Contact</a>
									</li>



									<li class="header-nav__item"><a class="link_inherit" data-test="header_nav__blog" href="#">Blog</a>
									</li>
								</ul>
						</nav>

						</div>

						<div class="header__right" style="margin-bottom:15px;">

								<img class="search-icon" src="_next/static/media/icones/search.svg" alt="">
								</li></ul></div></aside>
						</div>
					</div>
				</div>
			</header>
	</div>
