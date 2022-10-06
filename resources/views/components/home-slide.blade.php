<section class="hero min-h-screen">
    <div class="min-h-full w-full relative overflow-hidden">
          <div class="owl-carousel min-h-full w-full home-slide-carousel relative">

              @foreach (getContent("slides") as $index => $item)
                <div class="relative min-h-screen w-full">
                  <div class="min-h-screen w-full flex items-center absolute top-0 left-0 z-20 pt-16 {{$item['hero-class']}}">

                      <div class="max-w-7xl mx-auto px-4 md:ml-8">
                          <div class="w-full md:w-3/4">
                              <h2 class="main-title text-center md:text-left px-4 text-2xl md:text-4xl mt-4 text-white font-bold" style="line-height: 1.3"> 
                                  {{$item['title']}}
                              </h2>
                              <h3 class="main-subtitle text-center md:text-left px-4 mt-5 text-lg md:text-xl text-white " >
                                  @php
                                      echo $item['subtitle']
                                  @endphp
                              </h3>
                              <div class="flex flex-col-reverse  px-8 md:px-4 md:flex-row md:space-x-4 mt-8">
                                  <a href="{{url('contactez-nous')}}" class="animate-up animate-duration-3 rounded-full md:px-8 py-3 text-xl text-vert bg-white font-bold  text-center text-primary">
                                      Contactez-nous
                                  </a>
                              </div>
                          </div>
                      </div>  
                  </div>

                  <video autoplay muted loop class="hidden md:block md:absolute z-10 min-h-full min-w-full top-0 left-0">
                      <source src="{{asset('video/bg.mp4')}}" type="video/mp4">
                  </video>

                </div>
              @endforeach
          </div>
    </div>
</section>
