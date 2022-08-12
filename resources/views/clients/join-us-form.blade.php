@extends('layouts.master')
@section('title', __('Formulaire - Nous Rejoindre'))

@section('content')

    <section class="main-intro-all">

        <section>
            <div class="container py-4">
                <div class="row">
                <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
                    <h3 class="text-center">Remplissez pour postuler</h3>
                    <form role="form" id="contact-form" method="post" autocomplete="off">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-md-6">
                            
                           <div class="when">
                                       <select name="" id="" class="classic" aria-label="Default select example" style="width: 100%">
                                             <option value='' selected='selected' class='gf_placeholder' disabled>Je recherche un poste de : </option>
                                            <optgroup label='Auxiliaires'><option value='Auxiliaire de vie'>Auxiliaire de vie</option>
                                            <option value='Auxiliaire de vie avec la certification Croix-Rouge'>Auxiliaire de vie avec la certification Croix-Rouge</option>
                                            </optgroup>
                                            
                                            <optgroup label='En agence'><option value='Responsable de secteur'>Responsable de secteur</option><option value='Chargé∙e de recrutement'>Chargé∙e de recrutement</option><option value='Responsable d’agence'>Responsable d’agence</option><option value='Chargé∙e de clientèle'>Chargé∙e de clientèle</option></optgroup>
                                            
                                            <optgroup label='Au siège à Paris'><option value='Administration et Finance'>Administration et Finance</option><option value='Animation'>Animation</option><option value='Communication'>Communication</option><option value='Développement'>Développement</option><option value='Juridique'>Juridique</option><option value='Ressources Humaines'>Ressources Humaines</option></optgroup>
                                            
                                            <optgroup label='Autre'><option value='Autre poste'>Autre poste</option></optgroup>
                                       </select>
                            </div>
                        </div>
                        <div class="col-md-6 ps-2">

                           <div class="when">
                                        <select name="" id="" class="classic" aria-label="Default select example" style="width: 100%">
                                             <option value='' selected='selected'>Je suis disponible à partir de :</option><option value='Immédiatement'>Immédiatement</option><option value='Dans 1 mois'>Dans 1 mois</option><option value='Dans 2 mois'>Dans 2 mois</option><option value='Dans 3 mois'>Dans 3 mois</option><option value='Dans plus de 3 mois'>Dans plus de 3 mois</option>
                                       </select>
                            </div>
                        </div>
                        </div>


                        <div class="mb-4">
                        <label>Email Address</label>
                         <div class="when">
                                        <select name="" id="" class="classic" aria-label="Default select example" style="width: 100%">
                                             <option value='' selected='selected'>Je postule dans les agences suivantes :</option><option value='Immédiatement'>Immédiatement</option><option value='Dans 1 mois'>Dans 1 mois</option><option value='Dans 2 mois'>Dans 2 mois</option><option value='Dans 3 mois'>Dans 3 mois</option><option value='Dans plus de 3 mois'>Dans plus de 3 mois</option>
                                       </select>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                        <label>Your message</label>
                        <textarea name="message" class="form-control" id="message" rows="4"></textarea>
                        </div>
                        <div class="row">
                        <div class="col-md-12">
                            <div class="form-check form-switch mb-4">
                            <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                            <label class="form-check-label" for="flexSwitchCheckDefault">I agree to the <a href="javascript:;" class="text-dark"><u>Terms and Conditions</u></a>.</label>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn bg-gradient-dark w-100">Send Message</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            </div>
        </section>

    </section>
   
@endsection
