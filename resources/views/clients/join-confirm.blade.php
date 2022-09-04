@extends('layouts.master')
@section('title', __('Formulaire - Nous Rejoindre'))

@section('content')




        <!-- -------- START HEADER 8 w/ card over right bg image ------- -->
        <header>
            <div class="page-header min-vh-85">
            <div>
                <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0 border-bottom-end-radius-0" 
                src="{{ asset('third/assets/img/curved-images/curved8.jpg') }}" alt="image">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 d-flex justify-content-center flex-column">
                        <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                        <div class="text-center">
                            <h3 class="text-gradient text-primary">Rejoindre Youdom - CARE</h3>
                            
                        </div>
                        <form id="join-us-form" method="post" action="{{ route('join-confirm') }}" autocomplete="on">
                            <div class="card-body pb-2">
                           
								
								<p class="mb-0">
                            Votre demande a été soumise avec succès, nous vous reviendrons. <br>
								 <b>NB</b> : Lorsque vous intégrer la société, des indentifiants vous serons remis pour accèder à votre interface vous permettant de :
            <ul style="list-style: circle">
              <li>Consulter ou modifier vos information</li>
              <li>Consulter ou télécharger vos fiches de paie</li>
            </ul>
                            </p>
								
								<!-- unchange blocks for buttons -->
								<div class="row">
									<div class="col-md-12 text-center">
										
									<a href="{{ route('homepage') }}" >
                                        <button type="button" class="btn btn-primary mt-3 mb-0" style="background-color: #1b138a">
                                            Retourner à l'accueil
                                        </button></a>	
									</div>
								</div>
								
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </header>
        <!-- -------- END HEADER 8 w/ card over right bg image ------- -->

@endsection
