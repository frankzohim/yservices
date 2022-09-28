@extends('layouts.master')
@section('title', __('Garde de nuit'))

@section('content')
<style>
	.content-wrap{position:relative;padding:40px 0;overflow:hidden}

    .margin-bottom-15px{
        margin-bottom: 0px;
    }

</style>
<section class="main-intro-all">

	  		<section>

                    <div class="container content-wrap">
                            <div class="row justify-content-center">

                                <div class="col-md-8" >
                                    <h2 class="heading heading__lvl1 stillforce-heading-red">Garde de <span style="color:#594EE6;">nuit</span></h2>
                                </div>
                                    
                            </div>
                            
                    </div>
			
	        </section>
	        <section class="fdb-block content-wrap" style="" >
                    <div class="container">
                        <div class="row ">
                                
                              
                        <div class="col-6 col-md-6 m-auto ml-lg-auto mr-lg-0 col-lg-6 pt-5 pt-lg-0">
                            <img alt="image" class="img-fluid" src="{{ asset("_next/static/media/garde-nuit.jpg") }}">
                        </div>
                        <div class="col-6 col-md-6 col-lg-6 col-xl-5">
                            <h2 class="text-primary text-gradient mb-0" style="font-family: Open Sans; font-weight:bold; font-size:36px;">Garde nuit ou présence de nuit Quelle est la différence ? </h2>
                            <p class="lead mb-5" >
                               En fonction des troubles et pathologies présentés par le senior, ou la personne en situation handicap  
                               il existe deux types d’assistance nocturne : la présence de nuit et la garde de nuit.
                            </p>
                           
                            <p class="lead mb-5">
                                Cette assistance s’étend généralement sur une plage horaire de 20h à 8h du matin. <br>
                                Par ailleurs , certains services d’aide à domicile ou les  Services de Soins Infirmiers à Domicile (SSIAD) proposent  éventuellement des  
                                gardes itinérantes de nuit ,des interventions de 15-30 minutes pour assurer la toilette, le change, le coucher et/ou le lever de la personne âgée.
                            </p>

                                <a href="{{ route('devis.form') }}" class="margin-top-default button button_w-m-full" style="margin-top:-15px; background-color:#DF034D" id="target-action-main-intro-all">
                                                        Demandez un devis
                                                    </a>
                        </div>
                        </div>
                    </div>
                </section>	




</section>

@endsection
