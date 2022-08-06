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

								<li class="header-nav__item" style="color:#272854"><a class="link_inherit" data-test="header_nav__pricing" href="#">Nous Contacter</a>
									</li>
                                @if (Route::has('login'))
                                    @auth
                                            <li class="header-nav__item">
                                                <a class="link_inherit" data-test="header_nav__blog" style="color:#272854" href="{{ url('/dashboard') }}">
                                                    Dashboard
                                                </a>

                                            </li>
                                        @else
                                            <li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" style="color:#272854" data-test="header_nav__help">
                                                Connexion
                                            </li>

                                            @if(Route::has('register'))
                                                <li class="header-nav__item"><a class="link_inherit" data-test="header_nav__blog" style="color:#272854" href="{{ route('register') }}">Inscription</a>

                                                </li>
                                            @endif

                                    @endauth
                                @endif


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
								<a class="" aria-label="Youdom" data-inner-link="true" href="index.html">
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

												<li class="dropdown__item"><a class="link_inherit" data-test="header_nav__about" href="#"><span class="header-nav__name">Qui Sommes Nous?</span></a></li>
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


									<li class="dropdown dropdown_hover-drop dropdown_theme_arrow header-nav__item header-nav__dropdown" data-test="header_nav__help">
										Notre Fonctionnement

									</li>


									<li class="header-nav__item"><a class="link_inherit" data-test="header_nav__pricing" href="#">Formations</a>
									</li>





									<li class="header-nav__item"><a class="link_inherit" data-test="header_nav__blog" href="blog/index.html">Blog</a>
									</li>
								</ul>
						</nav>

						</div>

						<div class="header__right" style="margin-left: 10px;">

								<img class="search-icon" src="_next/static/media/icones/search.svg" alt="">

								<a href="#" class="button margin-left-xs header__button button_small" id="target-action-header" data-f-btn-signup="true">DEMANDEZ UN DEVIS</a><a href="https://app.finom.co/en/?fnm_product=business" class="button margin-left-xs header__button button_small" id="target-action-my-dashboard" data-f-btn-dashboard="true">My Dashboard</a><aside class="burger-menu header__burger-menu"><div class="burger-menu__header"><div class="header__actions"><div class="burger-menu__close"><span></span><span></span><span></span></div></div></div><div class="burger-menu__content"><ul class="burger-menu__nav"><li class="burger-menu__nav-item"><div class="burger-menu__nav-heading">Products<svg class="icon burger-menu__nav-arrow"><use href="#arrow-down-alt"></use></svg></div><ul class="burger-menu__submenu burger-menu__submenu_big"><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="business-account/index.html"><div class="header-nav__icon header-nav__icon_pink-light"><svg class="icon" width="24px" height="24px"><use href="#invoice"></use></svg></div><div class="header-nav__info"><span class="header-nav__name">Business account</span></div></a></li><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="invoicing/index.html"><div class="header-nav__icon header-nav__icon_pink-light"><svg class="icon" width="16px" height="20px"><use href="#invoice_ver2"></use></svg></div><div class="header-nav__info"><span class="header-nav__name">Invoicing</span></div></a></li><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="cards/index.html"><div class="header-nav__icon header-nav__icon_pink-light"><svg class="icon" width="24px" height="24px"><use href="#card"></use></svg></div><div class="header-nav__info"><span class="header-nav__name">Cards</span></div></a></li><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="multibanking/index.html"><div class="header-nav__icon header-nav__icon_pink-light"><svg class="icon" width="24px" height="24px"><use href="#match"></use></svg></div><div class="header-nav__info"><span class="header-nav__name">Multi-Banking</span></div></a></li></ul></li><li class="burger-menu__nav-item "><a class="link_inherit" data-inner-link="true" href="pricing/index.html">Pricing</a></li><li class="burger-menu__nav-item"><div class="burger-menu__nav-heading">Company<svg class="icon burger-menu__nav-arrow"><use href="#arrow-down-alt"></use></svg></div><ul class="burger-menu__submenu"><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="about/index.html"><span class="header-nav__name">About us</span></a></li><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="community/index.html"><span class="header-nav__name">Community</span></a></li><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="partnership/index.html"><span class="header-nav__name">Partnership</span></a></li><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="press/index.html"><span class="header-nav__name">Press</span></a></li><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="research/index.html"><span class="header-nav__name">Research</span></a></li></ul></li><li class="burger-menu__nav-item"><div class="burger-menu__nav-heading">Help<svg class="icon burger-menu__nav-arrow"><use href="#arrow-down-alt"></use></svg></div><ul class="burger-menu__submenu"><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="faq/index.html"><span class="header-nav__name">FAQ</span></a></li><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="contacts/index.html"><span class="header-nav__name">Contact us</span></a></li><li class="burger-menu__submenu-item "><a class="link_inherit" data-inner-link="true" href="legal-documents/index.html"><span class="header-nav__name">Legal documents</span></a></li><li class="burger-menu__submenu-item"><a href="https://help.finom.co/en/" class="link_inherit" target="_blank" rel="noopener noreferrer" data-target-action="true"><span class="header-nav__name">Help center</span></a></li></ul></li><li class="burger-menu__nav-item "><a class="link_inherit" data-inner-link="true" href="blog/index.html">Blog</a></li></ul><div class="burger-menu__actions burger-menu-actions"><a href="https://app.finom.co/en/signin/" class="button button_large burger-menu__button burger-menu-actions__item" id="target-action-header-sign-in" data-f-btn-signin="true">Sign In</a><div class="burger-menu-actions__item"><div class="dropdown dropdown_hover-drop language-dropdown dropdown_theme_arrow"><div class="language-dropdown__head"><span class="language-dropdown__left text text_md"><img src="http://finom.co/_next/static/media/flag-italiano.a87e28c1.svg" alt="" class="language-dropdown__icon-flag" loading="lazy" />EN</span><svg class="icon dropdown__arrow icon_sm"><use href="#chevron"></use></svg></div><div class="dropdown__drop"><p class="language-dropdown__heading caps language-dropdown__list-item text_xs color_grey">Language</p><ul class="dropdown__list language-dropdown__list_language"><li class="dropdown__item dropdown__item_active dropdown__item_disabled"><span class="language-dropdown__list-item text text_md">EN</span></li><li class="dropdown__item"><a data-locale="true" class="link link_inherit language-dropdown__list-item text text_md text_grey" data-test="language-dropdown__it" href="http://finom.co/it-it/">IT</a></li></ul><p class="language-dropdown__heading caps language-dropdown__list-item text_xs color_grey">Country</p><ul class="dropdown__list"><li class="dropdown__item dropdown__item_active dropdown__item_disabled"><span class="language-dropdown__list-item text text_md"><img src="http://finom.co/_next/static/media/flag-italiano.a87e28c1.svg" alt="" class="language-dropdown__icon-flag" loading="lazy" />Italia</span></li><li class="dropdown__item"><a data-locale="true" class="link link_inherit language-dropdown__list-item text text_md text_grey" data-test="country-dropdown__fr" href="http://finom.co/en-fr/"><img src="http://finom.co/_next/static/media/flag-français.81bf857e.svg" alt="" class="language-dropdown__icon-flag" loading="lazy" />France</a></li><li class="dropdown__item"><a data-locale="true" class="link link_inherit language-dropdown__list-item text text_md text_grey" data-test="country-dropdown__de" href="http://finom.co/en-de/"><img src="http://finom.co/_next/static/media/flag-deutschland.6b8fef14.svg" alt="" class="language-dropdown__icon-flag" loading="lazy" />Deutschland</a></li></ul><div class="dropdown__drop-arrow"></div></div></div></div></div><ul class="app-download margin-top-lg burger-menu__app-download"><li><a href="https://apps.apple.com/app/finom-business/id1483892148" class="image" rel="noopener noreferrer" target="_blank" data-test="app-store"><img src="http://finom.co/_next/static/media/app-download__apple.4f4133a0.svg" loading="lazy" alt="Download on the App Store" /></a></li><li><a href="https://play.google.com/store/apps/details?id=tech.pnlfin.finom" class="image" rel="noopener noreferrer" target="_blank" data-test="google-play"><img src="http://finom.co/_next/static/media/app-download__android.116748e7.svg" loading="lazy" alt="Download on the Play Store" /></a></li><li><a href="https://appgallery.huawei.com/app/C105769171" class="image" rel="noopener noreferrer" target="_blank" data-test="huawei-appGallery"><img src="http://finom.co/_next/static/media/app-download__huawei.044c1b76.svg" loading="lazy" alt="Download on the Huawei AppGallery" /></a></li></ul></div></aside>
						</div>
					</div>
				</div>
			</header>
	</div>
