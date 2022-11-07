@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')
<style>

.color-text{
        color: #30005B;
    }
.color-orange{
        color:#D9644A;
    }

.color-grey{
	color:#585956;
}

</style>
<section class="main-intro-all">
<br>
<div class="d-flex justify-content-center" >
  <div class="section" style="">
    <div class="container content-wrap clearfix">
      <div class="heading-block topmargin-sm center">
        <h3><span class="text-xl md:text-5xl font-bold text-indigo-800 color-text" style="font-size:40px;"> 
          Nous  </span>
          <span class="text-yellow-500 color-orange" 
                    style="font-weight:700; font-size:40px; line-height:59.5px;"> 
            Rejoindre</span>
         </h3>
        
      </div>
    </div>
  </div>
</div>
<br>



 
	<section class="lp-banking-track-cashflow" style="">
					<div class="container">
						<div style="display: flex">
								<div style="flex: 1">
									 <div class=" d-flex  flex-column">
                                        <h1 class="color-orange font-bold">
                                          Vous souhaitez vous engager au service du bien-être <br> des personnes 
                                          âgées ou des personnes <br> en situation de handicap ?
                                        </h1>
                                        <br>
                                        <h1 class="mb-4 color-text font-bold">
                                          L’aide à domicile est un secteur qui recrute et <br> une profession d’avenir qui a du sens.
                                        </h1>
                                        <p class="lead pe-5 me-5" style="color:#374151; font-size:20px; font-family: 
                                        Montserrat, sans-serif;">
                                          Travailler chez YOUDOM-CARE c’est participer à une aventure humaine et 
                                          intégrer une équipe passionnée, avide d’aider les personnes 
                                          en perte d’autonomie.
                                          Mettez à profit vos compétences d'auxiliaires de vie au sein d'une 
                                          enseigne qui valorise ce métier. <br>
                                          De nombreux emplois sont à pourvoir !
                                        </p>
                                        
                                        <div class="mt-3 text-gray-700 font-semibold">
                                          <a href="{{ route('join-us') }}">
                                               <button  class="px-3 py-3 text-lg bg-yellow-500 
                                               font-bold text-white rounded-full" 
                                               style="background-color: #30005B"> 
                                               Nous Rejoindre Maintenant</button>
                                          </a>
                                         
                                        </div>
                                    </div>
								</div>
								<div style="flex:1">
                        <div class="">
                            <picture class="picture__image-container ">
                                <img src="{{  asset('_next/static/media/join-us1.png') }} " style="margin-left:-20%" width="100%" 
                                         alt="" 
                                        class="picture__image lp-banking-track-cashflow__picture" loading="lazy" />
                            </picture>
							          </div>
                  </div>
						</div>
					</div>
				</section>
        <br>
		
<!-- -------- END HEADER 1 w/ text and image on right ------- -->
  <section class="py-2 md:py-20">
	<div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
		<div class="flex flex-wrap items-center">

			<div class="w-full md:w-1/2 md:pr-20" style="">

				<h3>
					<span class="text-xl md:text-5xl font-bold text-indigo-800 color-text" style="font-size:36px;"> 
					  Rejoindre Youdom-care c’est 
					</span>
				</h3>
                <h3  class=" md:text-xl mt-2 text-gray-700" style="line-height: 1.5">
					 <ul class="mt-4 space-y-2 text-gray-700 list list_10px list_bullet-color_blue">
                <li class=" space-x-2 flex">
                  
                    <span>
                         Participer au développement d’une entreprise à taille humaine, où chaque personne a un rôle essentiel
					</span>
                </li>
                <li class=" space-x-2 flex">
                    
                    <span>
                         Participer à une aventure collective grâce à une ambiance coopérative et des valeurs fortes.                  
					</span>
                </li>
                <li class=" space-x-2 flex">
                   
                    <span>
                         Une vraie opportunité d’apprendre, d’acquérir des compétences en lien avec votre formation initiale
					</span>
                </li>
				
				 <li class=" space-x-2 flex">
                   
                    <span>
                         Découvrir le monde du maintien à domicile 
					</span>
                </li>
                               
            </ul>
			<div class="d-flex justify-content-start" >
        <div class="mt-3 mb-3 text-gray-700 font-semibold">
                      <a href="{{ route('join-us') }}">
                            <button  class="px-3 py-3 text-lg bg-yellow-500 
                                                    font-bold text-white rounded-full" 
                                                    style="background-color: #30005B"> 
                                                    Postuler
                </button>
                      </a>
                                              
                </div>

                
            
        </div>
		</h3>
      </div>
			

			<div class="w-full md:w-1/2 mt-2 md:mt-0" >
				<img data-animate="animate-right"  style="border-radius: 15px;" width="95%" 
										src="{{ asset('_next/static/media/aide-autonomie1.jpg') }}">
			</div>
			
		</div>               
	</div>
</section>

   <div class="container mt-sm-5">
    <div class="page-header min-vh-50 my-sm-3 mb-3 border-radius-xl" style="background-image: url('{{ asset('_next/static/media/home-business-tab-img04.jpg') }}');">
      <span class="mask bg-gradient-dark"></span>
      <div class="container">
        <div class="row">
          <div class="col-lg-6 ms-lg-5">
            <h4 class="text-white mb-0">Nous recrutons et formons nous-mêmes </h4>
            <h1 class="text-white">tous nos intervenants à domicile </h1>
            <p class="lead text-white opacity-8">Nos intervenants sont sélectionnés avec le plus grand soin grâce à un processus rigoureux et exigeant- Ils bénéficient d’une formation continue qui est au cœur du savoir-faire YOUDOM-CARE. Leur mission au quotidien ? Votre satisfaction !</p>
           <div class="mt-3 mb-3 text-gray-700 font-semibold">
                      <a href="{{ route('join-us') }}">
                            <button  class="px-3 py-3 text-lg bg-yellow-500 
                                                    font-bold text-white rounded-full" 
                                                    style="background-color: #30005B"> 
                                                    Postuler
                </button>
                      </a>
                                              
                </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


  






    @endsection
