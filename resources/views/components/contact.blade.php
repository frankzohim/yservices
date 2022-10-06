@php
    $contact_inputs = [
										[
											'name' => 'nom',
											'placeholder' => 'Nom'
										],
								
										[
											'name' => 'email',
											'placeholder' => 'Email'
										],
										[
											'name' => 'telephone',
											'placeholder' => 'Numero de téléphone'
										],
									];
@endphp

@php 
$precommande_inputs = [
    [
        'name' => 'nom',
        'placeholder' => 'Nom'
    ],
    [
        'name' => 'email',
        'placeholder' => 'Email'
    ],
    [
        'name' => 'telephone',
        'placeholder' => 'Numero de téléphone'
    ],
];
@endphp

<section x-data="Contact" class="jsdependant hidden" x-on:precommande.window="openPrecommande($event)">


<!-- contact -->
<div class="fixed z-40  bottom-[2rem] right-[1rem]" >
    <div x-show="modals.chat" x-transition.duration.500ms class="bg-white rounded-t-lg relative top-0 left-0 w-full md:w-[300px]">
                        <div class="bg-primary p-2 rounded-t-lg">
                            <ul>
                                <li class="flex space-x-2 items-center">
                                    <i class="text-primary w-5 h-5 flex items-center justify-center rounded-full bg-white">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                    </i>
                                    <span class="text-sm text-white">contact@techwise.com</span>
                                </li>
                            </ul>
                        </div>
                        <div class="p-4">
                        <article x-show="!display.contactSuccess">

                                @foreach ($contact_inputs as $input)
                                    <div class="mt-2">
                                        <input 
                                            class="nice-contact-input"
                                            x-bind:class="{'nice-input-error': hasError('contact','{{ $input['name']}}')}" x-model="contact.{{$input['name']}}" 
                                            placeholder="{{$input['placeholder']}}" />
                                        <small 
                                            class="text-red-500" 
                                            x-show="hasError('contact','{{$input['name']}}')" 
                                            x-text="errors.contact.{{$input['name']}}"
                                            ></small>
                                    </div>
                                @endforeach
                               

                                    <div class="mt-4">
                                        <textarea rows="3" x-bind:class="{'nice-textarea-error': hasError('contact','message')}" x-model="contact.message" class="nice-contact-textarea text-gray-700" placeholder="Message">Votre Message</textarea>
                                        <small 
											class="text-red-500" 
											x-show="hasError('contact','message')" 
											x-text="errors.contact.message"
											></small>
                                    </div>
                                
								<button x-on:click="submitContact" class="mt-6  rounded-md font-semibold block w-full bg-primary text-white  py-2">
                                    <div x-show="loading.contact" class="items-center inline-flex  space-x-2 text-sm">
                                        <i class="block loader"></i>
                                        <span> Envoie en cours...</span>
                                    </div>
                                    <span x-show="!loading.contact">  
                                        Envoyer
                                    </span>
								</button>
							</article>
                            <article x-show="display.contactSuccess" x-transition.duration.500ms >
                                <div class="bg-green-600 p-4 rounded-md text-white">
                                    <i class="flex justify-center">
                                    <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                    </i>
                                    <p class="text-center mt-4 font-semibold">
                                        Merci !<br>
                                        Votre message a bien été recu. Nous allons vous repondre au plus vite.  
                                    </p>
                                </div>
                            </article>
                        </div>
                            
					</div>
                                        <div class="flex justify-end">
                                            <div class="flex">
                                                <div class="flex items-center" x-show="!modals.chat">
                                                    <button x-on:click="modals.chat = true" class="hidden md:inline text-white rounded-full rounded-r-none bg-primary px-4 -mr-2 py-2 shadow-xl">Contactez-nous</button>
                                                    <button x-on:click="modals.chat = true" class="shadow-xl text-white bg-primary rounded-full w-12 h-12 md:w-16 md:h-16  flex items-center justify-center">
                                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                                                    </button>
                                                </div>
                                                <button x-show="modals.chat" x-on:click="modals.chat = false" class="shadow-xl  rounded-full w-12 h-12 md:w-16 md:h-16 text-white bg-primary flex items-center justify-center">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                                                </button>
                                            </div>
                                        </div>
   
</div><!-- contact -->

</section>


