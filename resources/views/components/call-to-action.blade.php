<section class="py-8 md:py-20">
    <div class="max-w-7xl mx-auto rounded-md bg-primary p-4 md:p-8">
        <div class="flex justify-center items-center">
            <div class="w-full md:w-3/5 text-white">
                <h1 class="text-xl md:text-4xl font-bold">
                    {{ $title ?? 'Vous avez un projet digitale ?' }}
                </h1>
                <h3 class="mt-4 text md:text-2xl">
                    @php 
                    echo $subtitle ?? "Contactez-nous, notre equipe d'experts vous accompagne  <br> dans la réalisation de votre projet.";  
                    @endphp
                </h3>
                <div class="mt-8">
                    <button class="px-8 py-3 bg-white text-primary text-lg  font-bold rounded-full text-white">
                        Contactez-nous
                    </button>
                </div>
            </div>
            <div class="hidden md:block w-2/5">
                <img data-animate="animate-right" class="md:w-4/5 animated-item" src="{{asset('img/contactez-nous.svg')}}">
            </div>
        </div>
    </div>
</section>