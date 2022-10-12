
@extends('layouts.master')
@section('title', __('Nous Contacter'))

<link rel="stylesheet" href="{{ asset('assets/css/autocomplete.css') }}">
@section('content')
<style>

    .color-text{
        color: #5f00f5;
    }
    .color-orange{
        color:#F54749;
    }
    .input-size{
      width:269px; 
      height:45px
    }

</style>
<main class="relative" x-data="Main">

        <nav class="fixed top-0 left-0 w-full z-40" id="navigation">





</nav>
  <input id="navigation-bg-color" type="hidden" value="primary">
    <input id="disable-scroll-impact" type="hidden" value="disable">

    <div class="row w-full md:w-1/2 mx-auto py-4">

        @if (session('update_success'))
         <div class="alert alert-success alert-dismissible show" role="alert" style="color: white">
          <strong>Super !</strong> votre demande a été envoyé avec succès.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session('update_failure'))
        <div class="alert alert-danger alert-dismissible show"  role="alert" style="color: white">
          <strong>Désolé</strong> {{ session('update_failure') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
     
      @if ($errors->any())

        <div class="alert alert-danger alert-dismissible show" role="alert">
          <ul>
            @foreach ($errors->all() as $error)
                <li style="color: white">{{ $error }}</li>
            @endforeach
        </ul>
         
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close" ></button>
        </div>
      @endif
    </div>

    <section class="py-8 md:py-20">
        
        <div class="max-w-7xl px-4 mx-auto flex w-full flex-wrap">   
            
            <div class="w-full md:w-1/2 md:pr-20">
                <h1 class="main-title  md:text-left  text-3xl xl:text-4xl font-bold text-indigo-800" style="line-height: 1.3"> 
					Contactez-nous 
					<div class="w-48  border-b-4 mx-auto md:mx-0 border-yellow-500 mt-4"></div>
				</h1>
                <h2 class="text-yellow-500 font-bold mt-4 text-2xl md:text-4xl color-orange" > Un besoin, une question ? </h2>
                <h3 class="mt-4 mx-auto text-lg text-gray-700" >
                    Quel que soit votre besoin, notre priorité est de définir ensemble des objectifs précis et mesurables.
                    Pour toute question ou demande spécifique, vous pouvez remplir le formulaire ou nous téléphoner.  <br>
                    Ce sera un réel plaisir de vous répondre dans les meilleurs délais
                </h3>
                    <ul class="mt-4 space-y-4">

                         <li class="flex items-center space-x-2">
                             <i class="fas fa-phone text-sm"></i>
                            <span class="font-bold  text-indigo-900">
                                +33 6.87.26.38.65
                            </span>
                        </li>
                                                <li class="flex items-center space-x-2">
                           <i class="fas fa-envelope text-sm"></i>
                            <span class="font-bold  text-indigo-900">
                                contact@youdom-care.com
                            </span>
                        </li>
                  </ul>
                       <div class="mt-4">
                    <button type="button" class="btn btn-icon-only btn-link color-text btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                      <i class="fab fa-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link color-text btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                      <i class="fab fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link color-text btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                      <i class="fab fa-dribbble"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link color-text btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
            </div>
            
            <div class="w-full md:w-1/2 mx-auto relative" x-data="Contact">
                <img src="{{ asset('_next/static/media/blob1.svg') }}" class=" md:block text-yellow-300 absolute z-0 top-[-200px] left-[-150px]">
                
				<div class="p-4 md:p-12 shadow-xl relative bg-white rounded-lg">
                   
				<form  method="post"  action="{{ route('contact.store') }}">
					@csrf
                    <div x-show="!display.contactSuccess">
					
                        <div class="flex flex-wrap md:flex-nowrap md:space-x-2">
							 <div class="col-md-12 pe-2 mb-3">
								<fieldset>
									<legend class="  md:text-left  text-2xl  font-bold text-indigo-800">Type de Prestation *:</legend>
									 <div class="col-md-6 pe-2 mb-3">
										<input type="checkbox" id="music" name="type[]" value="Presse">
										<label for="music" style="color: black">Presse</label>
									  </div>
									<div class="col-md-6 pe-2 mb-3">
									  <input type="checkbox" id="music" name="type[]" value="Demande d’information">
									  <label for="music" style="color: black">Demande d’information</label>
									</div>
									<div class="col-md-6 pe-2 mb-3">
										<input type="checkbox" id="music" name="type[]" value="Offre de Bienvenue">
										<label for="music" style="color: black">Offre de Bienvenue</label>
									  </div>
									  <div class="col-md-6 pe-2 mb-3">
										<input type="checkbox" id="music" name="type[]" value="Partenariat">
										<label for="music" style="color: black">Partenariat</label>
									  </div>
									 <div class="col-md-6 pe-2 mb-3">
										<input type="checkbox" id="music" name="type[]" value="Recrutement">
										<label for="music" style="color: black">Recrutement</label>
									  </div>
                                      <div class="col-md-6 pe-2 mb-3">
									  <input type="checkbox" id="type" name="type[]" value="Souhaite être rappelé">
									  <label for="coding" style="color: black; white-space:nowrap;">&Ecirc;tre rappelé</label>
									</div>
									  
								  </fieldset>

							  </div>
						<div class="flex flex-wrap md:flex-nowrap " style="margin-left:2px">
							<div class="row">
						
								<div class="col-md-6">
									<div class="w-full mt-4">				   
										<input type="text" name="name" value="{{ old('name') }}" class="mt-2 block w-full border border-gray-300  px-4  rounded-md input-size" 
                    placeholder="Nom" required>
													   
									</div>
								</div>

								<div class="col-md-6">
									<div class="w-full mt-4">
										<input type="text" name="username" value="{{ old('username') }}"  class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md input-size" 
														placeholder="Prénom"  required>
														
									</div>
								</div>

							</div>
                        </div>
                           
                        </div>                        
                       
					   
                        <div class="flex flex-wrap md:flex-nowrap md:space-x-2">

                            <div class="row">
                               <div class="col-md-6">
										 <div class="w-full mt-4">
                                    <input type="email" name="email" class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md input-size" value="{{ old('email') }}"
                                    placeholder="Adresse email" required >
                                        </div>
								</div>

                                <div class="col-md-6">
										 <div class="w-full mt-4">
                                           
                                            <input type="tel" name="phone" placeholder="Numero de téléphone" class="mt-2 block w-full border border-gray-300  
                                            px-4 py-2 rounded-md input-size" value="{{ old('phone') }}" required>
                                            
                                        </div>
								</div>

                            </div>

                            
                           
                        </div>
						
						<div class="flex flex-wrap md:flex-nowrap md:space-x-2">

                            <div class="row">
                               <div class="col-md-12">
										 <div class="mt-4">
										  <input type="text" name="postal_code" id="postal_code" class="mt-4 block w-full border border-gray-300  px-4 py-2 rounded-md "  size="100px"
										  placeholder="Code postal" value="{{ old('postal_code') }}" required>
										</div>
								</div>

                               

                            </div>

                            
                           
                        </div>
                    
						
                        <div>

                            <textarea name="message" class="mt-4 block w-full border-gray-300 px-4 py-2 rounded-md"  placeholder="Préciser votre demande" rows="4" 
                            cols="4" required> {{ old('message') }}</textarea>
                            
                        </div>
                        <div class="mt-3 text-gray-700 font-semibold">
                            <button x-on:click="submitContact" class="px-8 py-3 text-lg bg-yellow-500 font-bold text-white rounded-full" style="background-color: #5f00f5"> Envoyer </button>
                        </div>
                    </div>   
				</form>					
                </div>
            </div>
        </div>
    </section>

        
        

    </main>

    <script src="{{ asset('assets/js/typeahead.js') }}"></script>
<script>
    var codes = @json($codes_array);

    autocomplete(document.getElementById("postal_code"), codes);
    
   
</script>
@endsection
