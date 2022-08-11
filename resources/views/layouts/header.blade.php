<div class="header__container">

			<aside class="popup popup-promo" data-test="popup-promo">

				<div class="container">
					<div class="popup-promo__body popup-promo__body_it-banking">
						<p class="text color_white popup-promo__description">
							Saississez votre chance d'obtenir 6 mois gratuits
						</p>
						<div class="popup-promo__btn-wrap popup-promo__btn-wrap_it-banking">
							<a href="#main-promo-six-months-free" class="button button_xsmall button_white" data-test="popup-promo__learn-more">
								Savoir plus
							</a>
						</div>
						<div class="popup__close popup__close_white" data-test="popup-promo__close">
						</div>

					</div>

				</div>
			</aside>

			<aside class="popup popup-promo" style="margin-left:-85px; font-family:Montserrat, sans-serif; font-size:14px; background-color:white;"
			data-test="popup-promo">

				<div class="container">
					<div class="">

								<nav class="header__nav header-nav" >
								<ul class="header-nav__list">

									<li class="header-nav__item" style="color:#272854"><a class="link_inherit" data-test="header_nav__pricing" href="#">Nous Rejoindre</a>
									</li>

								<li class="header-nav__item" style="color:#272854"><a class="link_inherit" data-test="header_nav__pricing" href="#">Devenez partenaire</a>
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


									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" data-test="header_nav__company">
										Entreprise

										<svg class="icon dropdown__arrow"><use href="#arrow-down-alt"></use></svg>

										<div class="dropdown__drop">

											<ul class="dropdown__list" data-test="dropdown-list__company">

												<li class="dropdown__item"><a class="link_inherit" data-test="header_nav__about" href="{{ route('about') }}"><span class="header-nav__name">Qui Sommes Nous?</span></a></li>
												<li class="dropdown__item"><a class="link_inherit" data-test="header_nav__community" href="#"><span class="header-nav__name">Intervenants</span></a></li>
												<li class="dropdown__item"><a class="link_inherit" data-test="header_nav__partnership" href="#"><span class="header-nav__name">Franchises</span></a></li>

											</ul><div class="dropdown__drop-arrow"></div>

										</div>
									</li>


									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" data-test="header_nav__company">
										Nos Services

										<svg class="icon dropdown__arrow"><use href="#arrow-down-alt"></use></svg>

										<div class="dropdown__drop">

											<ul class="dropdown__list" data-test="dropdown-list__company">

													<li class="dropdown__item">
													<a class="link_inherit" data-test="header_nav__community" href="#">
														<span class="header-nav__name">Aide-ménagère</span>
													</a>
												</li>

												<li class="dropdown__item">
													<a class="link_inherit" data-test="header_nav__partnership" href="#">
														<span class="header-nav__name">Service handicap</span>
													</a>
												</li>

												<li class="dropdown__item">
													<a class="link_inherit" data-test="header_nav__about" href="#">
														<span class="header-nav__name">Aide à l’autonomie</span>
													</a>
												</li>



												<li class="dropdown__item">
													<a class="link_inherit" data-test="header_nav__partnership" href="#">
														<span class="header-nav__name">Accompagnements</span>
													</a>
												</li>

												<li class="dropdown__item">
													<a class="link_inherit" data-test="header_nav__partnership" href="#">
														<span class="header-nav__name">Retour d’hospitalisation</span>
													</a>
												</li>

												<li class="dropdown__item">
													<a class="link_inherit" data-test="header_nav__partnership" href="#">
														<span class="header-nav__name">Gardes non médicalisées</span>
													</a>
												</li>

												<li class="dropdown__item">
													<a class="link_inherit" data-test="header_nav__partnership" href="#">
														<span class="header-nav__name">Assistance administrative</span>
													</a>
												</li>

											</ul><div class="dropdown__drop-arrow"></div>

										</div>
									</li>


									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" data-test="header_nav__help" href="clients/fonctionement">
										Notre Fonctionnement

									</li>

									<li class="header-nav__item"><a class="link_inherit" data-test="header_nav__pricing" href="#">Contact</a>
									</li>



									<li class="header-nav__item"><a class="link_inherit" data-test="header_nav__blog" href="blog/index.html">Blog</a>
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
