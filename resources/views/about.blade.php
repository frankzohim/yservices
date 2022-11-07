@extends('layouts.master')
@section('title', __('A Propos de Nous'))
@section('content')
<style>

    .color-text{
        color: #30005B;
    }
    .color-orange{
        color:#D9644A;
    }
    .input-size{
      width:269px; 
      height:45px
    }

</style>

<section class="py-8 md:py-20">
	<div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
		<div class="flex flex-wrap items-center">
			<div class="w-full md:w-1/2 md:pr-20">
				<h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" style="line-height: 1.2">
					Qui sommes-nous?<br> 
					
				</h1>
				<br>
			
				<h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
					Spécialisé dans le service à la personne, l’aide et le maintien à domicile, Youdom care a pour 
					souhait principal de travailler en collaboration avec les personnes en besoin d’accompagnement 
					afin de répondre entièrement à leur perte d’autonomie en proposant des services étudiés et 
					personnalisés en fonction de chaque profil. 

				</h3>

				<h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
					Nos conseillers identifient pour vous ou vos proches des solutions aménagées pour 
					garantir la sécurité et le bien-être chez soi. 
					Nos services s’adaptent à vos besoins : services à domicile (ménage, téléassistance, garde de nuit…), 
					adaptation du logement, transport médicalisé, nous sommes à votre écoute !

				</h3>

				<h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
					Gage de qualité, notre raison d’être est de pouvoir vous accompagner et entretenir une relation de confiance dans 
					le respect de votre intégrité physique et morale. Vous pouvez compter sur nous !

				</h3>
										 
			   
			</div>
			<div class="w-full md:w-1/2 mt-2 md:mt-0">
				<img data-animate="animate-right" class="w-full "  style="border-radius: 10px; width:100%"
				src="{{ asset('_next/static/media/about/intro-1.jpg') }}">
				<span class="text-xl md:text-5xl font-bold color-orange" style="font-size: 18px"> 
					L’aide à domicile personnalisée pour les personnes âgées, 
					en situation d'handicap ou en perte d’autonomie 
				</span>
			</div>
		</div>               
	</div>
</section>

<section class="py-2 md:py-20">
	<div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
		<div class="flex flex-wrap items-center">
								 <div class="w-full md:w-1/2 mt-2 md:mt-0" >
				<img data-animate="animate-right"  style="border-radius: 15px;" width="95%" 
										src="{{ asset('_next/static/media/about/1.webp') }}">
			</div>
			<div class="w-full md:w-1/2 md:pr-20" style="text-align: center">
				
				
				<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">  
					 La construction de notre modèle innovant repose sur l’étude d’une conviction forte :
					<span class="color-text">le besoin d’un maintien du lien social </span>  
					permettant à la personne âgée ou handicapée, en perte d’autonomie, ayant fait le choix de rester vivre 
					à son domicile, de bénéficier d’un accompagnement en douceur tout en gardant le confort et la sérénité 
					du « bien vivre chez soi ».  <br> 
					Cette originalité repose sur une approche humaine et même simplifiée de l’aide à domicile où 
					l’intervenant est avant tout une sentinelle bienveillante qui prend en compte les besoins de 
					la personne aidée dans les différentes phases de la perte d’autonomie et de la vieillesse de 
					manière chaleureuse et positive.
				 </span>
									

				
										 
			   
			</div>
			
		</div>               
	</div>
</section>
<br>
<div class="d-flex justify-content-center">
	<h1  class=" text-xl md:text-5xl font-bold text-yellow-500 color-orange" style="line-height: 1.2">
		Des services à la personne pour tous
	</h1>
</div>
<br>

<section class="py-2 md:py-20">
	<div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
		<div class="flex flex-wrap items-center">

			<div class="w-full md:w-1/2 md:pr-20" style="">
				
				<h2 class="mt-4 text-indigo-800  text-lg md:text-2xl font-bold">
                    Notre mission 
                </h2>
                <h3  class=" md:text-xl mt-2 text-gray-700" style="line-height: 1.5">
					C’est d’accompagner les personnes en perte d'autonomie dans leurs tâches quotidiennes devenues compliquées à réaliser.
					C’est évaluer vos besoins et vous aider personnellement dans votre souhait de maintien à domicile. 
				   C’est de choisir vos intervenants uniques, adaptés à votre situation et à l’écoute de vos besoins ponctuels ou permanents d'aide à domicile. 
				   C’est également vous permettre de bénéficier d’une déduction d’impôts.				   

                </h3>
				<h3  class=" md:text-xl mt-2 text-gray-700" style="line-height: 1.5">
					Nos services d'aide à la personne s'adressent à tous, quels que soient vos besoins :			   
                </h3>
			</div>

			<div class="w-full md:w-1/2 mt-2 md:mt-0" >
				<img data-animate="animate-right"  style="border-radius: 15px;" width="95%" 
										src="{{ asset('_next/static/media/mission-about.PNG') }}">
			</div>
			
		</div>               
	</div>
</section>

<section class="py-1 md:py-20">

    <div class="max-w-7xl mx-auto px-1 animated-content">  
        <div class="mt-4 md:mt-12">
            <ul class="mt-4 space-y-2 text-gray-700 list list_10px list_bullet-color_blue">
                <li class=" space-x-2 flex">
                  
                    <span>
                         <strong>Perte d'autonomie   </strong>débutante ou confirmée chez la personne âgée.                    </span>
                </li>
                <li class=" space-x-2 flex">
                    
                    <span>
                         <strong>Sortie d'hospitalisation </strong>                   
					</span>
                </li>
                <li class=" space-x-2 flex">
                   
                    <span>
                         <strong>Situation de handicap </strong> 
					</span>
                </li>
                               
            </ul>
        </div>

    </div>
</section>

<section class="py-6 md:py-20">
	<div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
		<div class="flex flex-wrap items-center">
			<div class="w-full md:w-1/2 md:pr-20">
				<h1 data-animate="animate-left" class=" text-xl md:text-5xl font-bold text-indigo-800 color-text" style="line-height: 1.2">
					Pourquoi Choisir<br> 
					<span class="text-yellow-500 color-orange"> Youdom Care</span>
				</h1>
				<h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
				   La satisfaction de nos clients est au cœur de notre attention. 

										<ul class="margin-top-default list list_10px list_bullet-color_blue" 
										style="list-style:none;">
										<li>
											<h4 class="font-bold color-orange">GARANTIE</h4>
											<span 
											style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">Un(e) auxiliaire de vie unique et adapté à vos besoins
											C’est pourquoi, nous sélectionnons des hommes et des femmes professionnels, diplômés avec des références vérifiées pour un service
											sur-mesure et adapté à vos besoins.</span>
										</li>

										<li>
											<h4 class="font-bold color-orange">TRANQUILLITÉ D’ESPRIT</h4>
											<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">Fini les rendez-vous manqués ou les congés pour le suivi médical de votre proche.
											Vous pouvez désormais travailler en toute quiétude sachant que votre proche est  entre de bonnes mains.
											</span>
										</li>
									</ul>

				</h3>
										 
			   
			</div>
			<div class="w-full md:w-1/2 mt-2 md:mt-0">
				<img data-animate="animate-right" class="w-full "  style="border-radius: 10px; width:100%"
				src="{{ asset('_next/static/media/about/nurse-care-worker-with-older-man.webp') }}">
			</div>
		</div>               
	</div>
</section>

<section class="py-2 md:py-20" style="margin-top:-50px;">
	<div class="max-w-7xl mx-auto px-4 animated-content" id="demo-test">
		<div class="flex flex-wrap items-center">
			<div class="w-full md:w-1/2 md:pr-20">
				<h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >

										<ul class="margin-top-default list list_10px list_bullet-color_blue">
										<li>
											<h4 class="font-bold color-orange">PROFESSIONNALISME</h4>
											<span 
											style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
											Nos intervenants sont hautement qualifiés pour vous apporter un service de très 
											haute qualité. Professionnalisme, confidentialité et respect sont les valeurs fondamentales 
											de chaque service que nous offrons.</span>
										</li>

										<li>
											<h4 class="font-bold color-orange">UN SERVICE SUR MESURE</h4>
											<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
												Chez YOUDOM-CARE, nous savons que les soins complets aux personnes âgées 
												vont bien au-delà de la simple assistance aux besoins de base. 
												A cet effet, nous concevons un plan de soins adapté aux besoins de 
												chaque client.
											</span>
										</li>
										<li>
											<h4 class="font-bold color-orange">ÉCONOMIE</h4>
											<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
												CCrédit d’impôt de 50%* des sommes versé
											</span>
										</li>
										<li>
											<h4 class="font-bold color-orange">FORMATION</h4>
											<span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
												Formation continue de nos intervenants, auxiliaires de vie
											</span>
										</li>
									</ul>

				</h3>
			   
			</div>
			<div class="w-full md:w-1/2 mt-2 md:mt-0">
				<h3 data-animate="animate-left" class=" md:text-xl mt-4 md:mt-8 text-gray-700 " >
 
										 <ul class="margin-top-default list list_10px list_bullet-color_blue">
										 <li>
											 <h4 class="font-bold color-orange">PRIVILÈGES</h4>
											 <span 
											 style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
											 Un suivi d’exception au quotidien et un diagnostic renforcé qui font la différence !
											 </span>
										 </li>
 
										 <li>
											 <h4 class="font-bold color-orange" style="text-transform: uppercase;">Des intervenants fiables</h4>
											 <span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
												Nous vous garantissons toujours la même aide à domicile ou auxiliaire de vie, formée 
												et sélectionnée pour ses qualités humaines qui interviendra auprès de votre proche.
											 </span>
										 </li>
										 <li>
											 <h4 class="font-bold color-orange" style="text-transform: uppercase;">Ambiance familiale</h4>
											 <span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
												Nous traitons vos proches comme les membres de notre famille. Nous abordons tous 
												les aspects de la vie d’une personne âgée, malade, en situation d’handicap en nous 
												efforçant d’enrichir sa journée de toutes les manières possibles !
											 </span>
										 </li>
										 <li>
											 <h4 class="font-bold color-orange" style="text-transform: uppercase;">Coordination de soin</h4>
											 <span style="color:#374151; font-size:20px; font-family: Montserrat, sans-serif;">
												Coordination avec les intervenants médicaux et paramédicaux
											 </span>
										 </li>
									 </ul>
				 </h3>
			</div>
		</div>               
	</div>
</section>

@endsection
