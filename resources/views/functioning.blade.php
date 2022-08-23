@extends('layouts.master')
@section('title', __('Fonctionnement - Youdom Services'))

@section('content')

	<section class="py-5">
		<div class="container">
		  <div class="row">
			<div class="row text-center my-sm-5 mt-5">
			  <div class="col-lg-10 mx-auto">
				<h2 class="text-primary text-gradient mb-0" style="font-family: Open Sans; font-weight:bold; font-size:36px;">Notre fonctionnement </h2>

				<p class="lead" style="font-family: Open Sans; font-weight:400; font-size:20px; color:rgb(103,116,142)">
					Nous proposons des services à domicile sur mesure, assurés par des auxiliaires de vie professionnelles, 
					des aides-soignants (es) avec pour seul souci constant de rendre le quotidien des personnes âgées ou personnes en situation handicap 
					plus agréable et de faciliter leur maintien à domicile. </p>
			  </div>
		
			   <div class="col-lg-12 mx-auto" style="margin-top:10px">
						<h2 class="" style="font-family: Open Sans; font-weight:700; font-size:25px; color:rgb(89,78,230)">Comment fonctionne la mise en place d’une prestation d’aide à domicile chez YOUDOM-CARE </h2>
			  </div>

			</div>
		  </div>
		</div>
	</section>
	
	<section class="py-sm-7 py-5 position-relative" style="margin-top:-120px">
		<div class="container">
		  <div class="row">
			<div class="col-12 mx-auto">
			  <div class="row py-lg-7 py-5">
				<div class="col-lg-3 col-md-5 position-relative my-auto">
				  <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="{{ asset('_next/static/media/evaluation-des-besoins.png') }}" alt="bruce">
				</div>
				<div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
				  <div class="d-flex justify-content-between align-items-center mb-2">
					<h4 class="mb-0 heading heading__lvl1 stillforce-heading-red" style="font-family: Open Sans; font-weight:600; font-size:24px; color:rgb(52,71,103)"><span style="color:#594EE6;">Evaluation des besoins</span></h4>

				  </div>
				
				  <p class="text-lg mb-0" style="font-family: Open Sans; font-weight:400; font-size:18px; color:rgb(103,116,142)">
					-	Ecoute de la demande et explication des missions à réaliser <br>
					<span style="white-space: nowrap;">-	Rencontre au domicile avec les bénéficiaires pour identifier les besoins gratuitement</span>  <br>
					-	Présentation des aides financières et aide au montage des dossiers  <br>
					-	50 % de réduction d’impôt

					<br>
					<a href="{{ route('about') }}" class="text-info icon-move-right" 
					style="font-family: Open Sans; font-weight:700; font-size:18px; letter-spacing:-0.8px; line-height:46.8px; text-decoration:none;"> <span style="color:rgb(232,67,71)">Demander un devis 
					  <i class="fas fa-arrow-right text-sm ms-1"></i></span>
					</a>
				  </p>
				</div>
			  </div>
			</div>
		  </div>
		</div>
    </section>
	
	<section class="py-sm-7 py-5 position-relative" style="margin-top:-120px">
		<div class="container">
		  <div class="row">
			<div class="col-12 mx-auto">
			  <div class="row py-lg-7 py-5">
				
				<div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
				  <div class="d-flex justify-content-between align-items-center mb-2">
					<h4 class="mb-0" style="font-family: Open Sans; font-weight:600; font-size:24px; color:rgb(52,71,103)"><span style="color:#594EE6;">Elaboration d’un devis personnalisé</span></h4>

				  </div>
				
				  <p class="text-lg mb-0" style="font-family: Open Sans; font-weight:400; font-size:18px; color:rgb(103,116,142)">
					Nous déterminons ensemble la durée, la fréquence, les jours, les heures et le contenu des interventions.
					<br>
					<a href="{{ route('about') }}" class="text-info icon-move-right" 
					style="font-family: Open Sans; font-weight:700; font-size:18px; letter-spacing:-0.8px; line-height:46.8px; text-decoration:none;"> <span style="color:rgb(232,67,71)">Demander un devis 
					  <i class="fas fa-arrow-right text-sm ms-1"></i></span>
					</a>
				  </p>
				</div>
				
				<div class="col-lg-3 col-md-5 position-relative my-auto">
				  <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="{{ asset('_next/static/media/devis-personnalise.png') }}" alt="bruce">
				</div>
				
			  </div>
			</div>
		  </div>
		</div>
    </section>
	
	<section class="py-sm-7 py-5 position-relative" style="margin-top:-120px">
		<div class="container">
		  <div class="row">
			<div class="col-12 mx-auto">
			  <div class="row py-lg-7 py-5">
				
				<div class="col-lg-3 col-md-5 position-relative my-auto">
				  <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="{{ asset('_next/static/media/intervenant.png') }}" alt="bruce">
				</div>
				
				<div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
				  <div class="d-flex justify-content-between align-items-center mb-2">
					<h4 class="mb-0" style="font-family: Open Sans; font-weight:600; font-size:24px; color:rgb(52,71,103)"><span style="color:#594EE6;">Sélection d’un(e) intervenant (e)  qualifié(e) ,formé(e) et dédié(e) à vos attentes</span> </h4>

				  </div>
				
				  <p class="text-lg mb-0" style="font-family: Open Sans; font-weight:400; font-size:18px; color:rgb(103,116,142)">
					Afin d’établir une relation de confiance et offrir un service sur-mesure et stable, la même personne interviendra à chaque fois (sauf absence)
					<br>
				<a href="{{ route('about') }}" class="text-info icon-move-right" 
					style="font-family: Open Sans; font-weight:700; font-size:18px; letter-spacing:-0.8px; line-height:46.8px; text-decoration:none;"> <span style="color:rgb(232,67,71)">Demander un devis 
					  <i class="fas fa-arrow-right text-sm ms-1"></i></span>
					</a>
				  </p>
				</div>
				
				
				
			  </div>
			</div>
		  </div>
		</div>
    </section>
	
	<section class="py-sm-7 py-5 position-relative" style="margin-top:-120px">
		<div class="container">
		  <div class="row">
			<div class="col-12 mx-auto">
			  <div class="row py-lg-7 py-5">
				
				<div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
				  <div class="d-flex justify-content-between align-items-center mb-2">
					<h4 class="mb-0" style="font-family: Open Sans; font-weight:600; font-size:24px; color:rgb(52,71,103)"><span style="color:#594EE6;">Confiance & convivialité</span></h4>

				  </div>
				
				  <p class="text-lg mb-0" style="font-family: Open Sans; font-weight:400; font-size:18px; color:rgb(103,116,142)">
					Avant le début des prestations, rencontre et présentation au domicile  l’intervenant(e) sélectionné(e).
					<br>
					<a href="{{ route('about') }}" class="text-info icon-move-right" 
					style="font-family: Open Sans; font-weight:700; font-size:18px; letter-spacing:-0.8px; line-height:46.8px; text-decoration:none;"> <span style="color:rgb(232,67,71)">Demander un devis 
					  <i class="fas fa-arrow-right text-sm ms-1"></i></span>
					</a>
				  </p>
				</div>
				
				<div class="col-lg-3 col-md-5 position-relative my-auto">
				  <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="{{ asset('_next/static/media/confiance.png') }}" alt="bruce">
				</div>
				
			  </div>
			</div>
		  </div>
		</div>
    </section>
	
	<section class="py-sm-7 py-5 position-relative" style="margin-top:-120px">
		<div class="container">
		  <div class="row">
			<div class="col-12 mx-auto">
			  <div class="row py-lg-7 py-5">
				
				<div class="col-lg-3 col-md-5 position-relative my-auto">
				  <img class="img border-radius-lg max-width-200 w-100 position-relative z-index-2" src="{{ asset('_next/static/media/planning.png') }}" alt="bruce">
				</div>
				
				<div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
				  <div class="d-flex justify-content-between align-items-center mb-2">
					<h4 class="mb-0" style="font-family: Open Sans; font-weight:600; font-size:24px; color:rgb(52,71,103)"><span style="color:#594EE6;">Un planning qui s'adapte à l'évolution de vos besoins</span> </h4>

				  </div>
				
				  <p class="text-lg mb-0" style="font-family: Open Sans; font-weight:400; font-size:18px; color:rgb(103,116,142)">
					Le planning des interventions à votre domicile pourra s’adapter à l’évolution de vos besoins.
					<br>
					<a href="{{ route('about') }}" class="text-info icon-move-right" 
					style="font-family: Open Sans; font-weight:700; font-size:18px; letter-spacing:-0.8px; line-height:46.8px; text-decoration:none;"> <span style="color:rgb(232,67,71)">Demander un devis 
					  <i class="fas fa-arrow-right text-sm ms-1"></i></span>
					</a>
				  </p>
				</div>
				
				
				
			  </div>
			</div>
		  </div>
		</div>
    </section>
	
	<section class="py-sm-7 py-5 position-relative" style="margin-top:-120px">
		<div class="container">
		  <div class="row">
			<div class="col-12 mx-auto">
			  <div class="row py-lg-7 py-5">
				
				<div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
				  <div class="d-flex justify-content-between align-items-center mb-2">
					<h4 class="mb-0" style="font-family: Open Sans; font-weight:600; font-size:24px; color:rgb(52,71,103)">Suivi et contrôle qualité régulier</h4>

				  </div>
				
				  <p class="text-lg mb-0" style="font-family: Open Sans; font-weight:400; font-size:18px; color:rgb(103,116,142)">
					Afin de garantir un service conforme aux attentes de nos bénéficiaires, des enquêtes et des visites sont régulièrement réalisées. <br> <br>
Un interlocuteur unique, de la prise de contact à la fin de la durée du contrat, s’informer régulièrement de l’évolution des besoins de la personne aidée, âgées ou en 
situation de handicap <br> <br>
Ce qui signifie que nous pouvons, en cours de contrat, adapter la prestation initialement mise en place : organisation des interventions, tâches à réaliser, qualification du personnel, etc

					<br>
					<a href="{{ route('about') }}" class="text-info icon-move-right" 
					style="font-family: Open Sans; font-weight:700; font-size:18px; letter-spacing:-0.8px; line-height:46.8px; text-decoration:none;"> <span style="color:rgb(232,67,71)">Demander un devis 
					  <i class="fas fa-arrow-right text-sm ms-1"></i></span>
					</a>
				  </p>
				</div>
				
				<div class="col-lg-3 col-md-5 position-relative my-auto">
				  <img class="img border-radius-lg max-width-600 w-100 position-relative z-index-2" src="{{ asset('_next/static/media/controle.png') }}" alt="bruce">
				</div>
				
			  </div>
			</div>
		  </div>
		</div>
    </section>
	
	<section class="py-sm-7 py-5 position-relative" style="margin-top:-120px">
		<div class="container">
		  <div class="row">
			<div class="col-12 mx-auto">
			  <div class="row py-lg-7 py-5">
				
				<div class="col-lg-3 col-md-5 position-relative my-auto">
				  <img class="img border-radius-lg max-width-300 w-100 position-relative z-index-2" src="{{ asset('_next/static/media/rgpd-european-union.png') }}" alt="bruce">
				</div>
				
				<div class="col-lg-7 col-md-7 z-index-2 position-relative px-md-2 px-sm-5 mt-sm-0 mt-4">
				  <div class="d-flex justify-content-between align-items-center mb-2">
					<h4 class="mb-0" style="font-family: Open Sans; font-weight:600; font-size:24px; color:rgb(52,71,103)">La protection des données (RGPD) </h4>

				  </div>
				
				  <p class="text-lg mb-0" style="font-family: Open Sans; font-weight:400; font-size:18px; color:rgb(103,116,142)">
					Toutes les données concernant le ou la bénéficiaire font l’objet d’un traitement informatisé dans les conditions fixées par le règlement général de la protection des données(RGPD) <br><br>
Les données médicales sont soumises au secret professionnel, auquel est tenu l’ensemble du personnel

					<br>
					<a href="{{ route('about') }}" class="text-info icon-move-right" 
					style="font-family: Open Sans; font-weight:700; font-size:18px; letter-spacing:-0.8px; line-height:46.8px; text-decoration:none;"> <span style="color:rgb(232,67,71)">Demander un devis 
					  <i class="fas fa-arrow-right text-sm ms-1"></i></span>
					</a>
				  </p>
				</div>
				
				
				
			  </div>
			</div>
		  </div>
		</div>
    </section>

		
  


   
@endsection
