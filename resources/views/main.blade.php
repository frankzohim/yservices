
@extends('layouts.master')
@section('title', __('Nous Contacter'))
@section('content')
<style>

    .color-text{
        color: #5f00f5;
    }
    .color-orange{
        color:#F54749;
    }

</style>
<main class="relative" x-data="Main">

        <nav class="fixed top-0 left-0 w-full z-40" id="navigation">





</nav>
  <input id="navigation-bg-color" type="hidden" value="primary">
    <input id="disable-scroll-impact" type="hidden" value="disable">



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
                <img src="http://techwise.fr/img/blob.svg" class=" md:block text-yellow-300 absolute z-0 top-[-200px] left-[-150px]">
                <div class="p-4 md:p-12 shadow-xl relative bg-white rounded-lg">
                    <article x-show="display.contactSuccess" x-transition.duration.500ms >
                        <div class="bg-primary p-4 rounded-md text-white">
                            <i class="flex justify-center">
                                <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                            </i>
                            <p class="text-center mt-4 font-semibold">
                                Merci !<br>
                                Votre demande a bien été recu. Nous allons vous repondre dans les meilleurs délais
                            </p>
                        </div>
                    </article>
                    <div x-show="!display.contactSuccess">
                        <div class="flex flex-wrap md:flex-nowrap md:space-x-2">

                            <div class="row">
                               <div class="col-md-6">
										 <div class="w-full mt-4">
                                            <input x-model="contact.nom" class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md" placeholder="Nom">
                                            <small class="text-red-500" x-show="hasError('contact','nom')" x-text="errors.contact.nom"></small>
                                         </div>
								</div>

                                <div class="col-md-6">
										 <div class="w-full mt-4">
                                            <input x-model="contact.prenom"  class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md" placeholder="Prénom">
                                            <small class="text-red-500" x-show="hasError('contact','prenom')" x-text="errors.contact.prenom"></small>
                                        </div>
								</div>

                            </div>
                           
                           
                        </div>                        
                       
                        <div class="flex flex-wrap md:flex-nowrap md:space-x-2">

                            <div class="row">
                               <div class="col-md-6">
										 <div class="w-full mt-4">
                                            <input x-model="contact.email" class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md" placeholder="Adresse email">
                                            <small class="text-red-500" x-show="hasError('contact','email')" x-text="errors.contact.email"></small>
                                        </div>
								</div>

                                <div class="col-md-6">
										 <div class="w-full mt-4">
                                            <input x-model="contact.telephone" class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md" placeholder="Numero de téléphone">
                                            <small class="text-red-500" x-show="hasError('contact','telephone')" x-text="errors.contact.telephone"></small>
                                        </div>
								</div>

                            </div>

                            
                           
                        </div>
						
						<div class="flex flex-wrap md:flex-nowrap md:space-x-2">

                            <div class="row">
                               <div class="col-md-6">
										 <div class="w-full mt-4">
											<input x-model="contact.code_postal" class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md" placeholder="Code postal">
										</div>
								</div>

                                <div class="col-md-6">
										 <div class="w-full mt-4">
                                             <input x-model="contact.adresse" class="mt-2 block w-full border border-gray-300  px-4 py-2 rounded-md" placeholder="Adresse">
                                           
                                        </div>
								</div>

                            </div>

                            
                           
                        </div>
                    
						
                        <div>
                            <textarea x-model="contact.message" class="mt-4 block w-full border-gray-300 px-4 py-2 rounded-md"  placeholder="Préciser votre demande" rows="4" cols="4"></textarea>
                            <small 
                            class="text-red-500" 
                            x-show="hasError('contact','message')" 
                            x-text="errors.contact.message"
                            ></small>
                        </div>
                        <div class="mt-3 text-gray-700 font-semibold">
                            <button x-on:click="submitContact" class="px-8 py-3 text-lg bg-yellow-500 font-bold text-white rounded-full" style="background-color: #5f00f5"> Envoyer </button>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

        
        

    </main>
@endsection
