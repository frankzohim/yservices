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




    
@endsection