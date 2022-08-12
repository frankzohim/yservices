@extends('layouts.master')
@section('title', __('Inscription'))

@section('content')
    <section class="vh-100 " style="background-color: white;">
        <div class="container " style="margin-top:25px; ">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                        <!-- Validation Errors -->
				              <x-auth-validation-errors class="mb-4" :errors="$errors" />
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Ouvrir un compte</p>

                      <form class="mx-1 mx-md-4" method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="text" id="name" class="form-control" name="name" value="{{ old('name') }}" required autofocus placeholder="Votre Nom" required/>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="form-control" placeholder="Votre Email" required/>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="password" name="password" required autocomplete="new-password" class="form-control" placeholder="Mot de passe" required/>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="password_confirmation" name="password_confirmation" required autocomplete="new-password" class="form-control" placeholder="Confirmation du mot de passe"/>
                          </div>
                        </div>

                        <div class="d-flex flex-row align-items-center mb-4">
                            <div class="form-outline flex-fill mb-0">
                                    <select class="form-control form-select" aria-label="Default select example" title="agency"   name='agency_id'>
                                        <option disabled selected>{{ __('Sélectionner l\'agence la plus proche') }}</option>
                                        <option value="1">{{ __('Bouches-du-Rhône') }}</option>
                                        <option value="1">{{ __('Dordogne') }}</option>
                                        <option value="1">{{ __('Haute-Garonne') }}</option>
                                        <option value="1">{{ __('Ille-et-Vilaine') }}</option>
                                        <option value="1">{{ __('Indre-et-Loire') }}</option>
                                     </select>
                            </div>
                        </div>
                        <div class="form-check d-flex justify-content-center mb-5">
                          <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3c" />
                          <label class="form-check-label" for="form2Example3">
                            J'accepte <a href="#!">les conditions d'utilisations</a>
                          </label>
                        </div>

                        <div class="d-flex justify-content-center ">
                          <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 100px;padding-right:100px">Créer mon compte</button>
                        </div>

                        <div class="d-flex justify-content-center" style="margin-top:10px;">
                            <span style="margin-right: 20px; font-size:25px; font-weight:bold">Déjà Inscrit?</span>
                         <a href="{{ route('login') }}" class="btn btn-success">Connectez-vous</a>
                        </div>
                      </form>

                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                      <img src="{{ asset("_next/static/media/create_account.png") }}"
                        class="img-fluid" alt="Sample image" width="70%">

                    </div>
                  </div>
                </div>
              </div>
            </div>

      </section>
@endsection