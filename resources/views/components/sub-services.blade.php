<div class="bg-primary" >
    <div class="max-w-7xl justify-center flex mx-auto w-full text-white">
        <div class="w-1/3">
            <div x-bind:class="{'animate-up': showSubMenus.services}">
                <h1 class="mt-8 text-2xl font-bold" >
                    Nos services
                    <div class="w-24 mt-4 border-b-2 border-white"> </div>
                </h1>
                <ul class="mt-4 space-y-4">
                    @foreach ( getContent('services') as $index => $item )
                        <li class="flex space-x-4" > 
                            <i class="">
                                @php
                                    echo filterServiceIcon($item['icon'],"w-8 h-8");
                                @endphp
                            </i>
                            <a href="{{ url( $item['slug'] ) }}" class="text-lg">
                                {{$item['title']}} 
                            </a>
                        </li>  
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="w-1/2 flex items-center">
            <img data-animate="animate-right"  class="w-full" x-bind:class="{'animate-right': showSubMenus.services}" src="{{asset('img/services.svg')}}">
        </div>
    </div>
</div>