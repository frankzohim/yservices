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

<div class="container my-5 p-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text">

    <!-- Section heading -->
    <h2 class="text-center font-weight-bold mb-4 pb-2  " style="color:#594EE6; font-weight:700; " >Youdom Care propose une aide à domicile complète pour les personnes âgées, les handicapés et 
        les perosnnes en perte d’autonomie.</h2>
    <!-- Section description -->
    <p class="text-center lead grey-text mx-auto mb-5">La mission de Youdom-Care ? Accompagner les particuliers en perte d'autonomie dans leurs besoins de personne: 
 Youdom-Care accompagne pour le maintien à domicile d'une personne âgée, en perte d'autonomie ou en situation de handicap et vous permet une déduction d'impôt.
</p>

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4">

        <!-- Grid row -->
        <div class="row mb-3" style="background-color: white;">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-flag-checkered deep-purple-text"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10" >
            <h5 class="font-weight-bold mb-3" style="background-color: white; white-space:nowrap;">Aide à l’autonomie / Geste du quotidien</h5>
            <ul class="margin-top-sm list list_star">
				 <a href="" class="link_inherit"><li class="text">Aide au lever et au coucher</li></a>	
				 <a href="" class="link_inherit"><li class="text">Aide à la toilette, coiffure, maquillage, habillage</li></a>
				 <a href="" class="link_inherit"><li class="text">Aide-ménagère</li></a>
			</ul>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row mb-3" style="background-color: white;">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-flask deep-purple-text"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10" >
            <h5 class="font-weight-bold mb-3" style="background-color: white; white-space:nowrap;">Gardes non médicalisées / Présence de nuit</h5>
            <ul class="margin-top-sm list list_star">
				 <a href="" class="link_inherit"><li class="text">Présence de nuit pour personnes âgées </li></a>	
				 <a href="" class="link_inherit"><li class="text">Garde de nuit pour personnes âgées et personnes en situation d’handicap</li></a>
				 <a href="" class="link_inherit"><li class="text">Présence de nuit auprès des enfants malades </li></a>
				 <a href="" class="link_inherit"><li class="text">Garde de jour </li></a>
				 <a href="" class="link_inherit"><li class="text">Retour à domicile après une hospitalisation </li></a>
				 <a href="" class="link_inherit"><li class="text">Garde 24h sur 24 </li></a>
			</ul>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

    

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 text-center">
        <img class="img-fluid" src="{{ asset('_next/static/media/service-middle.png') }}"
          alt="Sample image">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4" >

            <!-- Grid row -->
        <div class="row mb-md-0 mb-3" style="background-color: white;">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-glass-martini deep-purple-text"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="background-color: white;">Service handicap</h5>
            <ul class="margin-top-sm list list_star">
				 <a href="" class="link_inherit"><li class="text">Aide à domicile - personnes handicapées</li></a>	
				 <a href="" class="link_inherit"><li class="text">Entretien du lieu de vie - personnes handicapées</li></a>
				 <a href="" class="link_inherit"><li class="text">Aide à la vie sociale - personnes handicapées</li></a>
				 <a href="" class="link_inherit"><li class="text">Garde de jour et ou de nuit - personnes handicapées</li></a>
			</ul>
          </div>
          <!-- Grid column -->

        </div>
        <br>
        <!-- Grid row -->

           <!-- Grid row -->
        <div class="row mb-md-0 mb-3" style="background-color: white;">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-glass-martini deep-purple-text"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="background-color: white;">Accompagnements</h5>
            <ul class="margin-top-sm list list_star">
				 <a href="" class="link_inherit"><li class="text">Accompagnements aux courses</li></a>	
				 <a href="" class="link_inherit"><li class="text">Accompagnement culturelle </li></a>
				 <a href="" class="link_inherit"><li class="text">Compagnies et stimulation</li></a>
				 <a href="" class="link_inherit"><li class="text">Promenades et loisirs</li></a>
				 <a href="" class="link_inherit"><li class="text">Aide à la mobilité</li></a>
				 <a href="" class="link_inherit"><li class="text">Sorties véhiculées</li></a>
				 <a href="" class="link_inherit"><li class="text">Lecture, discussion</li></a>
				 <a href="" class="link_inherit"><li class="text">RDV médicaux</li></a>
			</ul>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>


<div class="container my-5 p-5 z-depth-1">


  <!--Section: Content-->
  <section class="dark-grey-text">

    
    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4">


        <!-- Grid row -->
        <div class="row mb-3" style="background-color: white;">

          <!-- Grid column -->
          <div class="col-2">
            <i class="far fa-2x fa-heart deep-purple-text"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="background-color: white;">Retour d’hospitalisation</h5>
            <ul class="margin-top-sm list list_star">
				 <a href="" class="link_inherit"><li class="text">Retour au domicile</li></a>	
				 <a href="" class="link_inherit"><li class="text">Aide au quotidien</li></a>
			</ul>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

         <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-magic deep-purple-text"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold ">Assistance administrative</h5>
            <ul class="margin-top-sm list list_star">
				 <a href="" class="link_inherit"><li class="text">Gestion du courrier</li></a>	
				 <a href="" class="link_inherit"><li class="text">Classement des documents</li></a>
				 <a href="" class="link_inherit"><li class="text">Prise de rendez-vous</li></a>
				 <a href="" class="link_inherit"><li class="text">Démarches administratives</li></a>
				 <a href="" class="link_inherit"><li class="text">Loyer , factures </li></a>
			</ul>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 text-center">
        <img class="img-fluid" src="{{ asset('_next/static/media/service-middle-1.png') }}"
          alt="Sample image">
      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4" >

        

        <!-- Grid row -->
        <div class="row mb-3" style="background-color: white;">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-bolt deep-purple-text"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold mb-3" style="background-color: white;">Aide aux repas</h5>
           <ul class="margin-top-sm list list_star">
				 <a href="" class="link_inherit"><li class="text">Courses</li></a>	
				 <a href="" class="link_inherit"><li class="text">Préparation des repas</li></a>
				 <a href="" class="link_inherit"><li class="text">Aide à la prise des repas</li></a>
				 <a href="" class="link_inherit"><li class="text">Prise de médicament</li></a>
				 <a href="" class="link_inherit"><li class="text">Alimentation-Surveillance des régimes</li></a>
			</ul>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <!-- Grid row -->
        <div class="row">

          <!-- Grid column -->
          <div class="col-2">
            <i class="fas fa-2x fa-magic deep-purple-text"></i>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-10">
            <h5 class="font-weight-bold ">Aide-ménagère</h5>
           <ul class="margin-top-sm list list_star">
				 <a href="" class="link_inherit"><li class="text">Ménage</li></a>	
				 <a href="" class="link_inherit"><li class="text">Lessive- repassage</li></a>
				 <a href="" class="link_inherit"><li class="text">Entretien du logement </li></a>
			</ul>
          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->


        

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </section>
  <!--Section: Content-->


</div>





    
@endsection