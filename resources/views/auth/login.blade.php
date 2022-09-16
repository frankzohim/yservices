@extends('layouts.master')
@section('title', __('Connexion'))

@section('content')
 <style>
   .page-header {
  padding: 0;
  position: relative;
  overflow: hidden;
  display: flex;
  align-items: center;
  background-size: cover;
  background-position: 50%;
}

.min-vh-100 {
  min-height: 100vh !important;
}

.page-header .container {
  z-index: 1;
}

.d-flex {
  display: flex !important;
}

.flex-column {
  flex-direction: column !important;
}

  .mx-lg-0 {
    margin-right: 0 !important;
    margin-left: 0 !important;
  }

  .card {
  box-shadow: 0 20px 27px 0 rgba(0, 0, 0, 0.05);
}

.card.card-plain {
  background-color: transparent;
  box-shadow: none;
}

.card>.card-header+.list-group,
.card>.list-group+.card-footer {
  border-top: 0;
}

.card-header {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  margin-bottom: 0;
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-bottom: var(--bs-card-border-width) solid var(--bs-card-border-color);
}

.card-header:first-child {
  border-radius: var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius) 0 0;
}

.card .card-header {
  padding: 1.5rem;
}

.pb-0 {
  padding-bottom: 0 !important;
}

.font-weight-bolder {
  font-weight: 700 !important;
  font-size:24px;
  color : #344767;
  font-family: Open, sans-serif;
}

.mb-0 {
  margin-bottom: 0 !important;
}

.card .card-body {
  font-family: "Open Sans";
  padding: 1.5rem;
}

.bg-gradient-primary {
  background-image: linear-gradient(310deg, #7928CA 0%, #FF0080 100%);
}

.form-check {
  display: block;
  min-height: 1.5rem;
  padding-left: 1.73em;
  margin-bottom: 0.125rem;
}

.form-switch {
  padding-left: 3rem;
}

.form-switch .form-check-input {
  width: 2.5rem;
  margin-left: -3rem;
  background-image: none;
  background-position: left center;
  border-radius: 2.5rem;
  transition: background-color 0.25s ease, border-color 0.25s ease, background-position 0.15s ease-in-out, opacity 0.15s ease-out, box-shadow 0.15s ease-in-out;
}

.form-switch .form-check-input:focus {
  background-image: none;
}

.form-switch .form-check-input:checked {
  background-position: right center;
  background-image: none;
}

.card>.card-header+.list-group,
.card>.list-group+.card-footer {
  border-top: 0;
}

.card-footer {
  padding: var(--bs-card-cap-padding-y) var(--bs-card-cap-padding-x);
  color: var(--bs-card-cap-color);
  background-color: var(--bs-card-cap-bg);
  border-top: var(--bs-card-border-width) solid var(--bs-card-border-color);
}

.card-footer:last-child {
  border-radius: 0 0 var(--bs-card-inner-border-radius) var(--bs-card-inner-border-radius);
}

.form-control {
  display: block;
  width: 100%;
  padding: 0.5rem 0.75rem;
  font-size: 0.875rem;
  font-weight: 400;
  line-height: 1.4rem;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #d2d6da;
  appearance: none;
  border-radius: 0.5rem;
  transition: box-shadow 0.15s ease, border-color 0.15s ease;
}

.form-control-lg {
  min-height: unset;
  padding: 0.75rem 0.75rem;
  font-size: 0.875rem;
  border-radius: 0.5rem;
}
  
 </style>
   
  
  <section>
    <div class="page-header min-vh-100">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column mx-lg-0 mx-auto">
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
            <div class="card card-plain">
              <div class="card-header pb-0 text-left">
                <h4 class="font-weight-bolder">Connexion</h4>
                <p class="mb-0" style="font-family: Open, sans-serif; font-size:16px; color:#67748E;">Entrez votre email et votre mot de passe pour vous connecter</p>
              </div>
              <div class="card-body">
                <form role="form"  method="POST" action="{{ route('login') }}">
                  @csrf
                  <div class="mb-3">
                    <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}" placeholder="Votre email" aria-label="Email" aria-describedby="email-addon" style="padding: 12px;" required>
                  </div>
                  <div class="mb-3">
                    <input type="password" class="form-control form-control-lg" id="password" name="password"  placeholder="Mot de passe" aria-label="Password" aria-describedby="password-addon" required>
                  </div>
                  <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" id="rememberMe">
                    <label class="form-check-label" for="rememberMe" style="color: #344767;">J'accepte les conditions d'utilisations</label>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0" style="font-weight:bold; font-size: 14px; font-family:sans-serif">
                      Connexion
                    </button>
                  </div>
                </form>
              </div>
              <div class="card-footer text-center pt-0 px-lg-2 px-1">
                <p class="mb-4 text-sm mx-auto" style="font-size:14px; color:#67748E; font-family:Open, sans-serif">
                  Pas de compte
                  <a href="{{ route('devis.create') }}" class="text-primary text-gradient font-weight-bold">Créer un compte</a>
                </p>
              </div>
            </div>
          </div>
          <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 end-0 text-center justify-content-center flex-column">
            <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center">
              <img src="{{ asset('_next/static/media/pattern-lines.svg') }}" alt="pattern-lines" class="position-absolute opacity-4 start-0">
              <div class="position-relative">
                <img class="max-width-500 w-100 position-relative z-index-2" src="{{ asset('_next/static/media/chat.png') }}">
              </div>
              <h4 class="mt-5 text-white font-weight-bolder"></h4>
              <p class="text-white"></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
@endsection