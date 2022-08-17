@extends('layouts.master')
@section('title', __('Contact - Youdom Services'))

@section('content')

<section class="py-lg-7">
  <div class="container">
    <div class="row">
      
      @if (session('update_success'))
         <div class="alert alert-success alert-dismissible fade show" role="alert" style="color: white">
          <strong>Super !</strong> votre demande a été envoyé avec succès.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
     
      @if (session('update_failure'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if ($errors->any())
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="color: white">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      <div class="col">
        <div class="card overflow-hidden mb-5">
          <div class="row">
            <div class="col-lg-7">
              <form class="p-3" id="contact-form" method="post" action="{{ route('contact.store') }}">
                @csrf
                <div class="card-header px-4 py-sm-5 py-3" style="background-color: #1b138a; color:white">
                  <h2 style="color:white">Des Questions ?</h2>
                  <p class="lead"> Entrez en contact avec nous.</p>
                </div>
                <br>
                <div class="card-body pt-1">
                  <div class="row">
                    <div class="col-md-12 pe-2 mb-3">
                      <input class="form-control" placeholder="Nom complet" name="fullname" type="text" value="{{ old('fullname') }}" required autofocus>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <input class="form-control" placeholder="Email" name="email" type="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <input class="form-control" placeholder="Téléphone" name="phone" type="tel" value="{{ old('phone') }}" required>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <input class="form-control" placeholder="Sujet" name="subject" type="text" value="{{ old('subject') }}" required>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="form-group mb-0">
                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="Votre message..." required>{{ old('message') }}</textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 text-end ms-auto">
                      <button type="submit" class="btn btn-round bg-gradient-info mb-0">Envoyer</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('{{ asset('third/assets/img/curved-images/curved5.jpg') }}')">
              <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                <img src="{{ asset('third/assets/img/wave-1.svg') }}" class="h-100 ms-n5" alt="vertical-wave">
              </div>
              <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                <div class="mask bg-gradient-info opacity-9"></div>
                <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                  <h3 class="text-white">Coordonnées</h3>
                  <p class="text-white opacity-8 mb-4">Remplissez le formulaire et notre équipe vous répondra dans les 24 heures.</p>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-phone text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">(+33) 687 263 865</span>
                    </div>
                  </div>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-envelope text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">contact@youdom-care.com</span>
                    </div>
                  </div>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-map-marker-alt text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">60 rue Federico Garcia Lorca 93130 Paris, France</span>
                    </div>
                  </div>
                  <div class="mt-4">
                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Facebook">
                      <i class="fab fa-facebook"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Twitter">
                      <i class="fab fa-twitter"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Dribbble">
                      <i class="fab fa-dribbble"></i>
                    </button>
                    <button type="button" class="btn btn-icon-only btn-link text-white btn-lg mb-0" data-toggle="tooltip" data-placement="bottom" data-original-title="Log in with Instagram">
                      <i class="fab fa-instagram"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



  

  


    
@endsection