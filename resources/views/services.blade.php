@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')

<div class="container my-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text" >

    <div class="row pr-lg-5">
      <div class="col-md-7 mb-4">

        <div class="view">
          <img src="{{ asset('_next/static/media/service.png') }}" width="" class="img-fluid" alt="smaple image">
        </div>

      </div>
      <div class="col-md-5 d-flex align-items-center" style="margin-top:20%">
        <div>

          <h3 class="font-weight-bold mb-4" style="font-weight:700; color:#1b138a">Nos services d'aide à domicile</h3>

        	<p style=" font-size:25px">Découvrez nos services de maintien à domicile adaptés à vos besoins et sur-mesure.
                Un accompagnement 24h/24 et 7J/7.</p>

        	<a href="{{ route('login') }}"><button type="button" class="btn btn-primary btn-rounded mx-0">FAITES VOTRE DEMANDE</button></a>

        </div>
      </div>
    </div>

  </section>
  <!--Section: Content-->


</div>

	<section class="main-why-we" id="main-why-we">

		<div class="container">
			
			<div class="padding-bottom-sm section-body undefined">
				
				<h2 class="heading heading__lvl1 ta-c">Les différents services d'aide à domicile</h2>
				<ul class="margin-top-default main-why-we-list">
								<li><div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card">
									
									<h3 class="margin-top-sm heading heading__lvl2">Aide à l’autonomie/geste du quotidien
</h3>
									<ul class="margin-top-sm list list_star">
										<li class="text">Aide au lever et au coucher</li>
										<li class="text">Aide à la toilette, coiffure, maquillage, habillage</li>
										<li class="text">Aide-ménagère</li>
									</ul>
								</div></li>
								
								<li>
									<div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card">
										<h3 class="margin-top-sm heading heading__lvl2">Gardes non médicalisées/Présence de nuit</h3>
										<ul class="margin-top-sm list list_star">
											<li class="text">Présence de nuits pour personnes âgées </li>
											<li class="text">Garde de nuit pour personnes âgées et personnes en situation d’handicap</li>
											<li class="text">Présence de nuits auprès des enfants malades </li>
											
										</ul>
										<div id="wrapper5">
											<ul class="margin-top-sm list list_star" style="">
												<li class="text">Garde de jour</li>
												<li class="text">Retour à domicile après une hospitalisation</li>
												<li class="text">Garde 24h sur 24</li>
											</ul>
										</div>
                          
                          <a href="javascript:void(0)"  id="bt5">voir plus</a>
									</div>
								</li>
								
								<li>
									<div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card">

										<h3 class="margin-top-sm heading heading__lvl2">Service handicap</h3>
										<ul class="margin-top-sm list list_star">
											<li class="text">Aide à domicile - personnes handicapées</li>
											<li class="text">Entretien du lieu de vie - personnes handicapées</li>
											<li class="text">Aide à la vie sociale - personnes handicapées</li>
											<li class="text">Garde de jour et ou de nuit - personnes handicapées</li>
										</ul>
									</div>
								</li>
								
								<li>
									<div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card">
									<h3 class="margin-top-sm heading heading__lvl2">Accompagnements</h3>
										<ul class="margin-top-sm list list_star">
											<li class="text">Accompagnements aux courses</li>
											<li class="text">Accompagnement culturel </li>
											<li class="text">Compagnies et stimulation </li>
											<li class="text">Promenades et loisirs </li>
											
										</ul>
										
										<div id="wrapper6">
											<ul class="margin-top-sm list list_star">
												<li class="text">Aide à la mobilité</li>
												<li class="text">Sorties véhiculées</li>
												<li class="text">Lecture, discussion</li>
												<li class="text">Rendez-vous médicaux</li>
											</ul>
										</div>
                          
										<a href="javascript:void(0)"  id="bt6">voir plus</a>
                    
									</div>
								</li>
								
								
								
								<li>
									<div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card">
										<h3 class="margin-top-sm heading heading__lvl2">Retour d’hospitalisation</h3>
										<ul class="margin-top-sm list list_star">
											<li class="text">Retour au domicile</li>
											<li class="text">Aide au quotidien</li>
										</ul>
									</div>
								</li>
								
							
								<li>
									<div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card">
									<h3 class="margin-top-sm heading heading__lvl2">Aide aux repas</h3>
									<ul class="margin-top-sm list list_star">
										<li class="text">Courses </li>
										<li class="text">Préparation des repas</li>
										
									</ul>
									<div id="wrapper2">
											<ul class="margin-top-sm list list_star">
												<li class="text">Aide à la prise des repas</li>
												<li class="text">Prise de médicament</li>
												<li class="text">Alimentation-Surveillance des régimes</li>
											</ul>
										</div>
                          
										<a href="javascript:void(0)"  id="bt2">voir plus</a>
									</div>
								</li>
								
								<li>
									<div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card">
										<h3 class="margin-top-sm heading heading__lvl2">Aide-ménagère</h3>
										<ul class="margin-top-sm list list_star">
											<li class="text">Ménage</li>
											<li class="text">Lessive- repassage</li>
											<li class="text">Entretien du logement </li>
										</ul>
									</div>
								</li>
								
								<li>
									<div class="padding-top-xs padding-bottom-sm main-why-we__card main-why-we-card">
									<h3 class="margin-top-sm heading heading__lvl2">Assistance administrative</h3>
									<ul class="margin-top-sm list list_star">
										<li class="text">Gestion du courrier </li>
										<li class="text">Classement des documents</li>
										<li class="text">Prise de rendez-vous</li>
										
									</ul>
									<div id="wrapper3">
											<ul class="margin-top-sm list list_star">
												<li class="text">Démarches administratives</li>
										<li class="text">Loyer , factures </li>
											</ul>
										</div>
                          
										<a href="javascript:void(0)"  id="bt3">voir plus</a>
									</div>
									</div>
								</li>
								
								
				</ul>
			</div>
		</div>

	</section>
				




@endsection
