<section class="py-8 md:py-20 ">

    <div class="max-w-7xl mx-auto px-4 animated-content">

        <h1 data-animate="animate-left" class="animated-item text-xl md:text-5xl font-bold text-yellow-500" style="line-height: 1.2">
            Référencement 
            <span class=""> payant  </span><br> 
        </h1>

        <div class="flex flex-wrap items-center">
            <div class="w-full md:w-3/5 md:pr-20">
                <h3 data-animate="animate-left" class="animated-item md:text-xl mt-4 text-gray-700" style="line-height: 1.5">
                    Assurer rapidement sa visibilité dans les résultats des moteurs de recherche
                    Le référencement payant permet de positionner rapidement son site dans les premiers résultats des moteurs de recherche grâce aux annonces publicitaires
                </h3>
                <h3 data-animate="animate-left" class="animated-item md:text-xl mt-4 text-gray-700" style="line-height: 1.5">
                    Le référencement payant, aussi désigné par l’acronyme SEA, correspond aux publicités sur les moteurs de recherche. Elles apparaissent au-dessus des résultats naturels avec un encart jaune "annonce" ou à droite des résultats dans les moteurs de recherche comme Google, Yahoo ou Bing.
                </h3>
            </div>
            <div class="w-full md:w-2/5 mt-4 md:mt-0">
                <img data-animate="animate-right" class="w-full md:w-4/5 animated-item" src="{{asset('img/referencement-payant.svg')}}">
            </div>          
        </div>   

        
        <div class="mt-4 md:mt-12">
           
            <h2 data-animate="animate-left" class="text-indigo-800 animated-item text-lg md:text-3xl font-bold" style="line-height: 1.4">
                Pourquoi mettre en place une campage de  référencement payant ?
            </h2>

            <p class="mt-4 text-gray-700">
                Contrairement au référencement naturel qui a des résultats sur le long terme, le référencement payant permet d’acquérir très rapidement du trafic qualifié. <br><br>

                Pertinent en complément du référencement naturel, le référencement payant possède de nombreux avantages :
            </p>

            <ul class="mt-4 space-y-2 text-gray-700">
                @php
                    $items = [
                        "Visibilité immédiate sur des mots clés très concurrentiels",
                        "Ciblage précis permettant de toucher des visiteurs qualifiés",
                        "Mise en place rapide et résultats mesurables",
                        "Maîtrise du budget",
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

            <p class="mt-4 text-gray-700">
                Le référencement naturel est une démarche sur le long terme qui permet d’augmenter le trafic d’un site avec une audience de qualité.
            </p>

        </div>


        <!-- reference payant 2 -->
        <div class="mt-4 md:mt-12">
           
            <h2 data-animate="animate-left" class="text-indigo-800 animated-item text-lg md:text-3xl font-bold" style="line-height: 1.4">
                Objectifs et ROI d'une campagne de référencement payant
            </h2>
        
            <ul class="mt-4 space-y-2 text-gray-700">
                @php
                    $items = [
                        "Générer du chiffre d’affaires <br> Développer ses ventes avec une audience qualifiée",
                        "Améliorer sa visibilité <br> Se positionner instantanément en haut des résultats à côté des leaders du marché",
                        "COMMENT METTRE EN PLACE UNE CAMPAGNE DE RÉFÉRENCEMENT PAYANT ?",
                        "Le principe du référencement payant est simple : lorsqu’un internaute effectue une recherche sur un mot clé, les liens sponsorisés contenant ce mot clé apparaissent dans les résultats de recherche. La position d’une annonce dépend du budget alloué (système d'enchères généralement au coût par clic) ainsi que de la qualité et pertinence de l’annonce créée."
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
                Une campagne AdWords sur Google par exemple nécessite un travail de préparation minutieux qui vise à construire et paramétrer au mieux les annonces ainsi qu’un travail de suivi continu afin de les optimiser.

L’agence digitale vous accompagne dans la création, la mise en place et le suivi de vos campagnes de référencement payant.
            </p>
           
        </div>

    </div>
</section>