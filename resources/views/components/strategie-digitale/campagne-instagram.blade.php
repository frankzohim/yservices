<section class="py-8 md:py-20">

    <div class="max-w-7xl mx-auto px-4 animated-content">
        
        <h1  class=" text-xl md:text-5xl font-bold text-yellow-500" style="line-height: 1.2">
            Campagnes instagram
        </h1>

        <!-- sous titre -->
        <div class="flex flex-wrap items-center mt-0 md:mt-8">
            <div class="w-full md:w-3/5 md:pr-20">
                <h2 class="mt-4 text-indigo-800  text-lg md:text-2xl font-bold">
                    S'appuyer sur les leaders d'opinion
                </h2>
                <h3  class=" md:text-xl mt-4 text-gray-700" style="line-height: 1.5">
                    Les influenceurs, dans la culture numérique et plus particulièrement du web et des plateformes de contenu et de réseautage social, sont des personnes qui, par leur statut, leur position ou leur exposition médiatique, sont capables d'être un relais d'opinion influençant les habitudes de consommation dans un but marketing.
                </h3>
            </div>
            <div class="w-full md:w-2/5 mt-8 md:mt-0">
                <img  class="w-full md:w-4/5 " src="{{asset('img/seo.svg')}}">
            </div>
        </div>   

        <!-- pourquoi -->
        <div class=" mt-4 md:mt-12">
           
            <h2 class="text-indigo-800  text-lg md:text-2xl font-bold" style="line-height: 1.4">
                Développer vos relations avec les leaders d'opinion
            </h2>

            <p class="mt-4 text-gray-700">
                Les campagnes d'influence sont des démarches qui consisteront dans la mise en relation avec des influenceurs (instagramers, youtubeur, blogueurs...) ciblés afin de leur présenter vos services ou votre produit qui pourraient intéresser leur audience.
            </p>

            
        </div>

        <!-- objectifs a ROI -->

        <div class="mt-4 md:mt-12 ">
           
            <h2 class="text-indigo-800  text-lg md:text-3xl font-bold" style="line-height: 1.4">
                L'importance des influenceurs dans notre stratégie
            </h2>

            <p class="mt-4 text-gray-700">
                Les missions d’un influenceur consistent à interagir, communiquer et échanger avec une communauté qu'il fédère. Cette cohésion est capitale car l'influenceur va tenir un rôle d'ambassadeur, de prescripteur de la marque, en relayant des messages auprès de sa communauté afin de faire la promotion de votre marque et améliorer sa visibilité.

            </p>

            <ul class="mt-4 space-y-2 text-gray-700">
                @php
                    $items = [
                        "88 % des internautes consultent les avis avant d’acheter et se déclarent influencés",
                        "Plus de 90% des marketeurs qui utilisent une stratégie de marketing d’influence pensent qu’elle est efficace.",
                        "Selon les professionnels du secteur, les trois principaux avantages du marketing d’affluence sont : la création de contenus originaux (87%), la stimulation du taux d’engagement (77%) et l’augmentation du trafic (56%).",
                        "L’influence des blogs dépasse les magazines papier dans certains domaines : 63,3% des femmes déclarent être influencées par des blogs pour l’achat de produits de beauté contre 26,4% par des magazines.",
                        "En moyenne, la mise en place d’un programme de marketing d’influence accroît de près de 15% les mentions de marque et augmente de près de 9% la vision positive de la marque."
                    ];
                @endphp
                @foreach ($items as $item)
                <li class=" space-x-2 flex">
                    <i>
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </i>
                    <span>
                         @php
                         echo $item;
                     @endphp
                    </span>
                </li>
                @endforeach
            </ul>
        </div>


        <div class="mt-4 md:mt-12">
           
            <h2 data-animate="animate-left" class="text-indigo-800  text-lg md:text-3xl font-bold" style="line-height: 1.4">
                Comment construire une relation stable et durable avec les influenceurs ?
            </h2>

            <p class="mt-4 text-gray-700">
                Les campagnes d'influence sont très différentes des relations presse. Car un influenceur (instagramers, youtubeur, blogueurs…) est avant tout un passionné qui écrit des articles pour partager et échanger avec son audience. Il choisit de partager une information uniquement s’il la trouve pertinente et intéressante pour son audience ou ses lecteurs d’après le principe de gift back. <br><br>

                Ainsi, il sera judicieux pour votre entreprise d’établir une véritable relation privilégiée avec un influenceur et non de lui envoyer de simples communiqués de presse.
            </p>
            <p class="mt-4 text-gray-700">
                Notre agence vous accompagne dans la mise en place de campagnes d'influence :
            </p>
            <ul class="mt-4 space-y-2 text-gray-700">
                @php
                    $items = [
                        "<strong>Identification  </strong>des influenceurs en fonction de votre localité.",
                        "<strong>Prise de contact </strong> personnalisée et suivi de la relation",
                        "<strong>Organisation </strong> d’événements en étroite collaboration avec l’influenceur",
                        "<strong>Mise en place </strong> de partenariats gagnant-gagnant",
                        "<strong>Suivi des publications </strong>, mesure des retombées et du ROI"
                    ];
                @endphp
                @foreach ($items as $item)
                <li class=" space-x-2 flex">
                    <i>
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </i>
                    <span>
                         @php
                         echo $item;
                     @endphp
                    </span>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="mt-4 md:mt-12">
           
            <h2 class="text-indigo-800 text-lg md:text-3xl font-bold" style="line-height: 1.4">
                Objectifs et importance d'une campagne d'influence
            </h2>

            <h3 class="text-indigo-800 text-lg md:text-xl font-bold mt-4" style="line-height: 1.4">
                Développer votre notoriété n’a jamais été aussi simple
            </h3>

            <p class="mt-4 text-gray-700">
                Nos influenceurs sélectionnés sur mesure pour vous généreront du trafic de leurs comptes média sociaux et leurs sites web afin d’améliorer votre visibilité auprès de votre audience cible (très bénéfique pour le référencement naturel)
            </p>
            <p class="mt-4 text-gray-700">
                Notre agence vous accompagne dans la mise en place de campagnes d'influence :
            </p>
            <ul class="mt-4 space-y-2 text-gray-700">
                @php
                    $items = [
                        "Crédibiliser et améliorer vos offres",
                        "Bénéficier de l’appui d’experts reconnus et de leur retour d’expérience",
                        "Générer de nouvelles ventes",
                        "Trouver de nouveaux clients grâce à la recommandation"
                    ];
                @endphp
                @foreach ($items as $item)
                <li class=" space-x-2 flex">
                    <i>
                     <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                    </i>
                    <span>
                         @php
                         echo $item;
                     @endphp
                    </span>
                </li>
                @endforeach
            </ul>
        </div>

    </div>
</section>