<section class="py-8 md:py-20 bg-gray-100">

    <div class="max-w-7xl mx-auto px-4 animated-content">
        
        <h1 data-animate="animate-left" class="animated-item text-xl md:text-5xl font-bold text-yellow-500" style="line-height: 1.2">
            Campagnes display  
        </h1>

        <!-- sous titre -->
        <div class="flex flex-wrap items-center mt-0 md:mt-8">
            <div class="w-full md:w-3/5 md:pr-20">
                <h2 data-animate="animate-left" class="mt-4 text-indigo-800 animated-item text-lg md:text-3xl font-bold">
                    Une visibilité importante et efficace
                </h2>
                <h3 data-animate="animate-left" class="animated-item md:text-xl mt-4 text-gray-700" style="line-height: 1.5">
                    Le display correspond à l’achat d’espaces publicitaires et à la diffusion de publicités sur internet utilisant des éléments graphiques comme des bannières, un habillage complet ou des vidéos.
                </h3>
            </div>
            <div class="w-full md:w-2/5">
                <img data-animate="animate-right" class="w-full md:w-5/6 animated-item" src="{{asset('img/campagnes-display.svg')}}">
            </div>
        </div>   

        <!-- pourquoi -->
        <div class=" mt-4 md:mt-12">
           
            <h2 data-animate="animate-left" class="text-indigo-800 animated-item text-lg md:text-3xl font-bold" style="line-height: 1.4">
                Pourquoi lancer une campagne display ?
            </h2>

            <p class="mt-4 text-gray-700">
                Contrairement au réseau de recherche qui permet d’acheter des liens sponsorisés dans les pages des résultats de recherche, le display offre la possibilité de faire de la publicité en ligne directement sur un grand nombre de sites thématiques. <br><br>
                Complémentaire du référencement, le display a de nombreux avantages :
            </p>

            <ul class="mt-4 space-y-2 text-gray-700">
                @php
                    $items = [
                        "Visibilité très importante",
                        "Ciblage de sites à la thématique et à l’audience similaire (ciblage contextuel et ciblage par emplacement)",
                        "Diffusion d’annonces aux formats attractifs et interactifs",
                        "Possibilité de diffuser des annonces uniquement à des internautes ayant déjà visité un site (remarketing)."
                    ]
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

        <!-- objectifs a ROI -->

        <div class="mt-4 md:mt-12 ">
           
            <h2 data-animate="animate-left" class="text-indigo-800 animated-item text-lg md:text-3xl font-bold" style="line-height: 1.4">
                Objectifs et ROI d'une campagne display
            </h2>

            <p class="mt-4 text-gray-700">
                Le principe des moteurs de recherche est simple : pour une requête x, les moteurs de recherche comme Google ou Bing cherchent à donner en priorité le résultat le plus pertinent et le plus populaire.
                <br><br>
                Qu’est-ce qu’un site pertinent et populaire ?
            </p>

            <ul class="mt-4 space-y-2 text-gray-700">
                @php
                    $items = [
                        "<strong>Garantir sa visibilité </strong> <br>S’assurer d’une visibilité très importante instantanément sur un grand nombre de sites",
                        "<strong>Générer du chiffre d’affaires</strong> <br>Développer ses ventes avec une audience qualifiée et un budget maîtrisé",
                        "<strong>Améliorer son taux de conversion</strong> <br>
                        Le taux de conversion d’une campagne display optimisée est élevé, en particulier pour les campagnes de remarketing (les annonces sont diffusées uniquement aux internautes ayant déjà visité votre"
                    ]
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
            <p class="mt-4 text-gray-700">
                L’agence digitale vous accompagne dans l’optimisation de votre référencement naturel afin d'améliorer vos positions dans les résultats des moteurs de recherche.
            </p>
        </div>
    </div>
</section>

<section class="py-8 md:py-20">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
            <div class="md:pr-20">
                <h1 data-animate="animate-left" class="animated-item text-xl md:text-4xl font-bold text-indigo-800" style="line-height: 1.3">
                    Comment mettre en place une campagne display ?
                </h1>
                <p data-animate="animate-left" class="animated-item md:text-lg   mt-4 md:mt-8 text-gray-700" style="line-height: 1.5">
                    Le fonctionnement du réseau display est similaire à celui des liens sponsorisés et permet d’aller encore plus loin dans le ciblage. En effet, il permet de capter des visiteurs ciblés d’un site tiers grâce à des annonces en rapport avec le contenu affiché sur la page. <br><br>
Par défaut, les sites sur lesquels apparaît une annonce sont sélectionnés automatiquement en fonction de leur contenu et des mots clés de l’annonce. Cependant, il est possible d’aller beaucoup plus loin dans les paramétrages pour mieux cibler ses annonces.
                </p>
            </div>
        </div>               
    </div>
</section>

<section class="">
    <div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
        <div class="flex flex-wrap items-center">
            <div class="md:pr-20">
                <h1 data-animate="animate-left" class="animated-item text-xl md:text-3xl font-bold text-indigo-800" style="line-height: 1.3">
                    Générer du trafic qualifié sur ses supports digitaux et en magasin
                </h1>
                <p data-animate="animate-left" class="animated-item md:text-lg   mt-4 md:mt-8 text-gray-700" style="line-height: 1.5">
                   L'acquisition doit donc être pensée et intégrée dans une stratégie cross-canal permettant d'intégrer les actions digitales aux actions offlines dans une logique drive-to-store, et inversement. <br><br>
                    Pour ce faire, l'agence digitale  s'appuie sur :
                </p>
                <ul class="space-y-2 text-justify mt-4 text-gray-700">
                    @php
                        $items = [
                            "Un lien entre toutes les actions pour mutualiser et analyser toutes les données récoltées",
                            "Une optimisation des actions pour maîtriser et diminuer le coût d’acquisition client",
                            "Une analyse et un suivi précis des résultats"
                        ];
                    @endphp     
                    @foreach ($items as $item)
                        <li class="text-gray-700 text-lg space-x-2 flex">
                            <i>
                             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
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
    </div>
</section>
