
<footer  id="footer" class="">
    <div class="flex flex-wrap max-w-7xl px-4 mx-auto py-12 text-gray-700">
        <div class="w-full md:w-1/4">
            <div>
                <h1 class="text-3xl font-bold text-primary"> Techwise Digital </h1>
                <p class="mt-6">
                    Partenaire de votre croissance digitale : notre équipe d’experts vous accompagne dans la définition de votre stratégie digitale d’acquisition et d’optimisation de votre visibilite pour plus de résultats.
                </p>
            </div>
        </div>
        <div class="mt-8 md:mt-0 w-full md:w-1/4 md:pl-12">
            <div>
                <h1 class=" font-bold text-xl text-primary">
                    Agence
                </h1>
                <ul class="mt-4 space-y-2">
                    @foreach (getContent('services') as $item)
                    <li>
                        <a class="hover:font-bold hover:text-yellow-500" href="{{$item['slug']}}">
                            {{$item['title']}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="mt-8 md:mt-0 w-full md:w-1/4">
            <div>
                <h1 class="font-bold text-xl text-primary">
                    Nos spécialités
                </h1>
                <ul class="mt-4 text space-y-2">
                    @foreach (getContent('specialites') as $item)
                    <li class="flex space-x-2 items-center">
                        <a href="{{url($item['link'])}}" class="hover:font-bold hover:text-yellow-500"> 
                            @php
                                echo $item['text'];                                
                            @endphp    
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="mt-8 md:mt-0 w-full md:w-1/4">
            <div>
                <h1 class="font-bold text-xl text-primary">
                    Contactez-nous
                </h1>
                <ul class="mt-4 space-y-2">
                    @foreach (getContent('contact-info') as $item)
                    <li class="flex space-x-2 items-center">
                        <i>
                            @php
                                echo $item['icon'];
                            @endphp
                        </i>
                        <a href=""> 
                            @php
                                echo $item['text'];                                
                            @endphp    
                        </a>
                    </li>
                    @endforeach
                </ul>
                <div class="flex space-x-2 mt-4">
                    <a href="https://facebook.com/" class="flex space-x-2">
                        <svg class="w-8 h-8" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" viewBox="0 0 24 24" fill="currentColor" width="24px" height="24px"><rect fill="currentColor" /><path d="M22,12c0-5.52-4.48-10-10-10S2,6.48,2,12c0,4.84,3.44,8.87,8,9.8V15H8v-3h2V9.5C10,7.57,11.57,6,13.5,6H16v3h-2 c-0.55,0-1,0.45-1,1v2h3v3h-3v6.95C18.05,21.45,22,17.19,22,12z"/></svg> 
                    </a>                   
                    <a href="https://instagram.com/" class="flex space-x-2 items-center"> 
                        <svg class="w-8 h-8" aria-hidden="true" focusable="false"  role="img" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224,202.66A53.34,53.34,0,1,0,277.36,256,53.38,53.38,0,0,0,224,202.66Zm124.71-41a54,54,0,0,0-30.41-30.41c-21-8.29-71-6.43-94.3-6.43s-73.25-1.93-94.31,6.43a54,54,0,0,0-30.41,30.41c-8.28,21-6.43,71.05-6.43,94.33S91,329.26,99.32,350.33a54,54,0,0,0,30.41,30.41c21,8.29,71,6.43,94.31,6.43s73.24,1.93,94.3-6.43a54,54,0,0,0,30.41-30.41c8.35-21,6.43-71.05,6.43-94.33S357.1,182.74,348.75,161.67ZM224,338a82,82,0,1,1,82-82A81.9,81.9,0,0,1,224,338Zm85.38-148.3a19.14,19.14,0,1,1,19.13-19.14A19.1,19.1,0,0,1,309.42,189.74ZM400,32H48A48,48,0,0,0,0,80V432a48,48,0,0,0,48,48H400a48,48,0,0,0,48-48V80A48,48,0,0,0,400,32ZM382.88,322c-1.29,25.63-7.14,48.34-25.85,67s-41.4,24.63-67,25.85c-26.41,1.49-105.59,1.49-132,0-25.63-1.29-48.26-7.15-67-25.85s-24.63-41.42-25.85-67c-1.49-26.42-1.49-105.61,0-132,1.29-25.63,7.07-48.34,25.85-67s41.47-24.56,67-25.78c26.41-1.49,105.59-1.49,132,0,25.63,1.29,48.33,7.15,67,25.85s24.63,41.42,25.85,67.05C384.37,216.44,384.37,295.56,382.88,322Z"></path>
                        </svg>
                     </a>
                    <a href="https://www.youtube.com/" class="flex space-x-2 items-center"> 
                        <svg class="w-8 h-8" aria-hidden="true" focusable="false"  role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div> 

    <div class="border-t border-white/20 py-4 bg-gray-100 text-gray-700 ">
        <div class="max-w-7xl md:items-center  md:flex md:justify-between mx-auto px-4">
            <div class="md:flex md:space-x-2">
                <a href="{{url('mentions-legales')}}" class="block hover:font-bold"> Mentions legales</a>
                <a class="hidden md:inline-block">-</a>
                <a href="{{url('politique-de-confidentialite')}}" class="block hover:font-bold"> Politique de confidentialite</a>
            </div>
            <div class="mt-8 md:mt-0">
                Copyright © 2021 Techwise Digital
            </div>
        </div>
    </div>

</footer>
