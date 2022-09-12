@extends('layouts.master')
@section('title', __('Demande de devis-Youdom Care'))

@section('content')
<link rel="stylesheet" href="{{ asset('assets/css/autocomplete.css') }}">
<style>

.bg-image {
  
  /* Add the blur effect */
  filter: blur(8px);
  -webkit-filter: blur(8px);
  
  /* Full height */
  height: 100%; 
  
  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

::placeholder {
  color: red;
  opacity: 1; /* Firefox */
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */
  color: pink;
  font-size: 17px;
}

::-moz-placeholder { /* Firefox 19+ */
  color: red;
  font-size: 17px;
}

</style>
<section class="py-lg-7">
  <div class="container">
    <div class="row">

      @if (session('update_success'))
         <div class="alert alert-success alert-dismissible show" role="alert" style="color: white">
          <strong>Super !</strong> votre demande a été envoyé avec succès.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif

      @if (session('update_failure'))
        <div class="alert alert-danger alert-dismissible show"  role="alert">
          <strong>Holy guacamole!</strong> You should check in on some of those fields below.
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

      <div class="col">
        <div class="card overflow-hidden mb-5">
          <div class="row">
            <div class="col-lg-7">
              <form class="p-3" id="contact-form" method="post" autocomplete="off" action="{{ route('devis.send') }}">
                @csrf
                <div class="card-header px-4 py-sm-5 py-3" 
                style="background-color:#DF034D; font-size:27px; font-weight:bold; color:white">
                  <h2 style="color:white">Contactez-nous pour une demande de devis personnalisé</h2>
     
                  <p class="lead">Complétez ce formulaire et un conseiller vous rappelle immédiatement pour étudier ensemble votre besoin</p>
                  <p class="lead"> *Champs obligatoires </p>
                </div>
                <br>
                <div class="card-body pt-1">
                  <div class="row">
                    <div class="col-md-12 pe-2 mb-3">

                        <label for="" style="color:#DF034D; font-size:20px;">Civilité *</label>
                        <br>
                        <input type="radio" class="btn-check"   name="civility" id="option2" value="Mr" checked autocomplete="off">
                        <label class="btn btn-primary" style="background-color:#1b138a" for="option2">Monsieur</label>
            
            
            
                        <input type="radio" class="btn-check" name="civility" id="option4" value="Mme" autocomplete="off">
                        <label class="btn btn-primary" style="background-color:#1b138a" for="option4">Madame</label>
                      </div>
                    <div class="col-md-6 pe-2 mb-3">
                      <input class="form-control" placeholder="Nom*" name="nom" type="text" value="{{ old('nom') }}" required>

                    </div>
                    <div class="col-md-6 pe-2 mb-3">
                        <input class="form-control" placeholder="Prenom*" 
                        style="::-webkit-input-placeholder{color: pink;}
                          " name="prenom" type="text" value="{{ old('prenom') }}" required >

                      </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <input class="form-control" placeholder="Email*" name="email" type="email" value="{{ old('email') }}" required>
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                        <input class="form-control" placeholder="Code Postal*" id="postal_code" name="code_postal" type="text" value="{{ old('code_postal') }}" required >

                      </div>

                    <div class="col-md-12 pe-2 mb-3">
                      <input class="form-control" placeholder="Téléphone*" name="numero" type="tel" value="{{ old('numero') }}" required>
                    </div>

                    <div class="col-md-12 pe-2 mb-3">

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 text-end ms-auto">
                      <button style="background-color: #1b138a;" type="submit" class="btn btn-round bg-gradient-info mb-0">OBTENIR UN DEVIS</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-5 position-relative bg-cover px-0 e" style="background-image: url('{{ asset('third/assets/img/curved-images/curved11-modified.jpg') }}')">
              <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                <img src="{{ asset('third/assets/img/wave-1.svg') }}" class="h-100 ms-n5" alt="vertical-wave">
              </div>
              <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-5 justify-content-center">
                <div class="mask  bg-imag opacity-9"></div>
                <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                  <h3 class="text-white" style="font-weight: bold; font-size:20px">Youdom Care vous accompagne et accompagne vos proches</h3>
                  <h6 class="text-white" style="font-size: 16px;">Vous ou l’un de vos proches rencontrez 
                    des difficultés pour accomplir les gestes et les tâches du quotidien? Chez Youdom Care, nous faisons bien plus que du simple maintien à domicile. Nos auxiliaires de vie sont formés afin d’accompagner les personnes âgées qui en ressentent le besoin.</h6>
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
                      <span class="text-sm opacity-8">61 rue de Lyon 75012 Paris</span>
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





<script src="{{ asset('assets/js/typeahead.js') }}"></script>
<script>
    var codes = @json($codes_array);

    autocomplete(document.getElementById("postal_code"), codes);
    
   
</script>



@endsection

