<section class="relative  md:bg-none h-[400px] overflow-hidden bg-cover" style="background-image: url({{asset($bgImg ?? '/img/strategie-digitale.jpg')}})">
    <div class="min-h-full w-full hero-bg pt-40">
        <div class="max-w-7xl mx-auto">
            {{$slot}}
        </div>              
    </div>
</section>