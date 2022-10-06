@php
    $menus = [
        [
           'text' => 'Accueil',
           'link' => 'accueil',
           'sub' => 'none'
        ],
       [
           'text' => 'Nos Services',
           'link' => '#',
           'sub' => 'services'
        ],
        [
           'text' => 'A propos',
           'link' => 'a-propos',
           'sub' => 'none'
        ] 
        ,
        [
           'text' => 'Nos formations',
           'link' => 'formations',
           'sub' => 'formations'
        ],
        [
           'text' => 'Blog',
           'link' => 'blog',
           'sub' => 'none'
        ],       
    ];
@endphp

<nav class="fixed top-0 left-0 w-full z-40" id="navigation">

    <!-- mobile menu -->
    <div class="fixed top-0 left-0 z-50 min-h-screen bg-indigo-800 w-full jsdependant hidden overflow-auto" x-show="showMobileMenu" x-transition.duration.500ms>
        <header class="flex justify-between px-4 py-8">
            <div class="text-white text-3xl font-bold">
               Techwise Digital
            </div>
            <button class="text-white" x-on:click="showMobileMenu = false">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
        </header>
        <div class="">
            @foreach ($menus as $item)
                {{-- <a href="{{$item['link']}}" class="block px-4 py-4 text-white text-lg font-bold text-center"> --}}
                <a href="{{ url($item['link']) }}" x-on:click="toggleSubMenus('{{$item['sub']}}')" class="py-4 justify-center flex space-x-2 items-center font-bold text-white">
                    <span>
                        {{$item['text']}}
                    </span>

                    @if ($item['sub'] == 'services')
                        <i>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </i>
                    @endif
                </a>

                @if ($item['sub'] == 'services')
                    <ul class="mt-4 space-y-4 bg-primary py-4 text-white"  x-show="showSubMenus.services" x-transition.duration.500ms x-transition.scale.origin.top>
                        @foreach ( getContent('services') as $index => $item )
                            <li class="text-center" > 
                                <a href="{{ url( $item['slug'] ) }}" class="text-lg">
                                    {{$item['title']}} 
                                </a>
                            </li>  
                        @endforeach
                    </ul>
                @endif


            @endforeach
            <div class="px-4 py-4 text-white text-lg text-center">
                <a href="{{url('contact')}}" class="px-6 py-3  bg-white text-black rounded-full">
                    Contactez-nous
                </a>
            </div>
        </div>
    </div>
    <!-- End of mobile money -->

    <!-- Normal menu -->
    <div class="max-w-7xl mx-auto py-4 flex justify-between text-white">

        <div class="flex justify-between px-4 w-full md:w-auto">

            <div class="text-3xl font-bold">
                Techwise Digital
            </div>

            <button class="md:hidden" x-on:click="showMobileMenu = true">
                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path></svg>
            </button>

        </div>

        <div class="hidden md:flex items-center">

            @foreach ($menus as $item)
                {{-- <a href="{{url($item['link'])}}"> --}}

                <a href="{{ url($item['link']) }}" class="font-semibold flex items-center space-x-2 mr-4" x-on:click="toggleSubMenus('{{$item['sub']}}')">
                   
                    <span>
                        {{$item['text']}}
                    </span>

                    @if ($item['sub'] == 'services')
                        <i>
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </i>
                    @endif
                    
                </a>
            @endforeach

            <a href="{{url('contact')}}" class="px-4 py-2 bg-white text-primary font-bold rounded-full">
                Contactez-nous
            </a>

            <!-- sub services -->
            <div class="fixed top-[70px] left-0 z-20 w-full h-screen sub-container bg-primary" x-show="showSubMenus.services" x-transition.duration.500ms x-transition.scale.origin.top>
                <x-sub-services></x-sub-services>
            </div>
            <!-- end of subservices -->

        </div>
    </div>
    <!-- Normal menu -->

</nav>