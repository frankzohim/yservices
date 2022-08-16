@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')

<section>
  <div class="container py-4">
    <div class="row">
      <div class="col-lg-7 mx-auto d-flex justify-content-center flex-column">
        <h3 class="text-center" style="color:#1b138a">Nous Contacter</h3>
        <form role="form" id="contact-form" method="post" autocomplete="off">
          <div class="card-body">
            <div class="row">
              <div class="col-md-6">
                <label style="color:#E84347">Nom</label>
                <div class="input-group mb-4">
                  <input class="form-control" placeholder="" aria-label="First Name..." type="text" >
                </div>
              </div>
              <div class="col-md-6 ps-2">
                <label style="color:#E84347">Prénom</label>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="" aria-label="Last Name..." >
                </div>
              </div>
            </div>
            <div class="mb-4">
              <label style="color:#E84347">Email</label>
              <div class="input-group">
                <input type="email" class="form-control" placeholder="" >
              </div>
            </div>
            <div class="form-group mb-4">
              <label style="color:#E84347">Votre message</label>
              <textarea name="message" class="form-control" id="message" rows="4"></textarea>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-check form-switch mb-4">
                  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault" checked="">
                  <label class="form-check-label" style="color:#1b138a" for="flexSwitchCheckDefault">J'accepte les <a href="javascript:;" class="text-dark">
				  <u style="color:#1b138a">Terms & Conditions</u></a>.
				  </label>
                </div>
              </div>
              <div class="col-md-12 text-center">
                <button type="submit" class="btn bg-gradient-primary mt-3 mb-0">Envoyer</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section class="py-lg-7">
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="card overflow-hidden mb-5">
          <div class="row">
            <div class="col-lg-7">
              <form class="p-3" id="contact-form" method="post">
                <div class="card-header px-4 py-sm-5 py-3">
                  <h2>Say Hi!</h2>
                  <p class="lead"> We'd like to talk with you.</p>
                </div>
                <div class="card-body pt-1">
                  <div class="row">
                    <div class="col-md-12 pe-2 mb-3">
                      <label>My name is</label>
                      <input class="form-control" placeholder="Full Name" type="text">
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <label>I'm looking for</label>
                      <input class="form-control" placeholder="What you love" type="text">
                    </div>
                    <div class="col-md-12 pe-2 mb-3">
                      <div class="form-group mb-0">
                        <label>Your message</label>
                        <textarea name="message" class="form-control" id="message" rows="6" placeholder="I want to say that..."></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 text-end ms-auto">
                      <button type="submit" class="btn btn-round bg-gradient-info mb-0">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <div class="col-lg-5 position-relative bg-cover px-0" style="background-image: url('../assets/img/curved-images/curved5.jpg')">
              <div class="position-absolute z-index-2 w-100 h-100 top-0 start-0 d-lg-block d-none">
                <img src="{{ asset('third/assets/img/wave-1.svg') }}" class="h-100 ms-n2" alt="vertical-wave">
              </div>
              <div class="z-index-2 text-center d-flex h-100 w-100 d-flex m-auto justify-content-center">
                <div class="mask bg-gradient-info opacity-9"></div>
                <div class="p-5 ps-sm-8 position-relative text-start my-auto z-index-2">
                  <h3 class="text-white">Contact Information</h3>
                  <p class="text-white opacity-8 mb-4">Fill up the form and our Team will get back to you within 24 hours.</p>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-phone text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">(+40) 772 100 200</span>
                    </div>
                  </div>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-envelope text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">hello@creative-tim.com</span>
                    </div>
                  </div>
                  <div class="d-flex p-2 text-white">
                    <div>
                      <i class="fas fa-map-marker-alt text-sm"></i>
                    </div>
                    <div class="ps-3">
                      <span class="text-sm opacity-8">Dyonisie Wolf Bucharest, RO 010458</span>
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