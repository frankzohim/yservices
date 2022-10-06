<section class="py-8 md:py-20 bg-gray-100">

    <div class="max-w-7xl mx-auto px-4 animated-content" id="referencement-naturel">

        <h1 data-animate="animate-left" class="animated-item text-xl md:text-5xl font-bold text-yellow-600" style="line-height: 1.2">
            Référencement 
            <span class=""> naturel  </span><br> 
        </h1>

        <div class="flex flex-wrap items-center mt-0 md:mt-8">
            <div class="w-full md:w-3/5 md:pr-20">
                <h2 data-animate="animate-left" class="mt-4 text-indigo-800 animated-item md:text-xl font-bold">
                    Positionner son site durablement dans les premiers résultats des moteurs de recherche
                </h2>
                <h3 data-animate="animate-left" class="animated-item md:text-xl mt-4 text-gray-700" style="line-height: 1.5">
                    Le référencement naturel, ou SEO, a pour objectif de positionner votre site dans les premiers résultats des moteurs de recherche. S'appuyant sur des techniques bien rodées et en conformité avec les préconisations des moteurs de recherche, nous assurons la visibilité de votre site sur le long-terme.
                </h3>
                <h2 data-animate="animate-left" class="mt-4 md:mt-8 text-indigo-800 animated-item md:text-xl font-bold">
                    Améliorer sa visibilité dans les résultats des moteurs de recherche
                </h2>
                <h3 data-animate="animate-left" class="animated-item md:text-xl mt-4 text-gray-700" style="line-height: 1.5">
                    Le référencement naturel, aussi désigné par l’acronyme SEO, est la démarche qui consiste à améliorer et consolider la position d’une entreprise dans les résultats des moteurs de recherche
                </h3>
            </div>
            <div class="w-full md:w-2/5 mt-4 md:mt-8">
                <img data-animate="animate-right" class="w-full md:w-4/5 animated-item" src="{{asset('img/referencement-naturel.svg')}}">
            </div>
          
        </div>   
        
        <div class="mt-4 md:mt-12 text-gray-700 rounded-lg">
           
            <h2 data-animate="animate-left" class="animated-item text-lg md:text-3xl text-indigo-800 font-bold" style="line-height: 1.4">
                Pourquoi intégrer le référencement naturel <span class=""> dans sa stratégie ?</span>
            </h2>

            <p class="mt-4 text-gray-700">
                Les moteurs de recherche sont la plus importante source de visites d’un site internet. Un site internet, aussi performant et ergonomique soit-il, n’atteindra pas ses objectifs de ROI si les internautes ciblés ne le trouvent pas :
            </p>

            <ul class="mt-4 space-y-2">
                @php
                    $items = [
                        " <strong class='text-yellow-500'>85 % </strong> des internautes consultent uniquement la première page des résultats sur Google",
                        "<strong class='text-yellow-500'>42 % </strong>  des internautes cliquent sur le premier résultat",
                        "<strong class='text-yellow-500'>73 % </strong>  des internautes ne dépassent pas le 5ème résultat"
                    ]
                @endphp
                @foreach ($items as $item)
                <li class=" space-x-2 flex">
                    <i class="text-yellow-500">
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

            <h2 data-animate="animate-left" class="mt-8  animated-item text-lg md:text-3xl text-indigo-800 font-bold" style="line-height: 1.4">
                Objectifs et ROI d'une stratégie de   <span class=""> 
                Référencement naturel efficace
                </span>
            </h2>


            <ul class="mt-8 space-y-2">
                @php
                    $items = [
                        "Améliorer sa <span class='text-yellow-500 font-bold'>visibilité </span> durablement",
                        "Générer du <span class='text-yellow-500 font-bold'>trafic de qualité  </span> avec  un coût d’acquisition faible",
                        "Augmenter son <span class='text-yellow-500 font-bold'>chiffre d’affaires </span> et ses conversions"
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


        <div class="mt-4 md:mt-12  rounded-lg">
           
            <h2 data-animate="animate-left" class="animated-item text-lg md:text-3xl text-indigo-800 font-bold" style="line-height: 1.4">
                Comment ameliorer son <span class=""> référencement naturel ?</span>
            </h2>

            <p class="mt-4 text-gray-700">
                Le principe des moteurs de recherche est simple : pour une requête x, les moteurs de recherche comme Google ou Bing cherchent à donner en priorité le résultat le plus pertinent et le plus populaire.
                <br><br>
                Qu’est-ce qu’un site pertinent et populaire ?
            </p>

            <ul class="mt-4 space-y-2">
                @php
                    $items = [
                        "Un site sur lequel les internautes restent longtemps et visitent plusieurs pages (contenu de qualité, ergonomie et choix des mots clés pertinents)",
                        "Un site dont les internautes et d’autres sites référents parlent (les internautes en parlent sur les réseaux sociaux et d’autres sites reconnus de la même thématique font des liens vers le site)",
                        "Un site qui répond aux exigences des moteurs de recherche (code, contenu et balises optimisés selon les critères des moteurs de recherche)"
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