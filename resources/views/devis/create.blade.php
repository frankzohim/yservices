@extends('layouts.master')
@section('title', __('Demande de devis-Youdom Care'))

@section('content')

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

      <div class="card text-center">
        <div class="card-header">
          <p>Contactez-nous pour une demande de devis personnalisé</p>
          <span>Complétez ce formulaire et un conseiller vous rappelle immédiatement pour étudier ensemble votre besoin. </span>
        </div>
        <div class="card-body">
          <form action="{{ route('devis.send') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="" style="color: black">votre civilité:</label>
              <input type="radio" class="btn-check" name="civility" id="option2" value="Mr" autocomplete="off">
            <label class="btn btn-primary" for="option2">Monsieur</label>



            <input type="radio" class="btn-check" name="civility" id="option4" value="Mme" autocomplete="off">
            <label class="btn btn-primary" for="option4">Madame</label>
            </div>


          <div class="row g-0 text-center mb-3">
            <div class="col-sm-6 col-md-6">
              <input class="form-control" type="text" placeholder="Votre nom" aria-label="default input example" name="nom">

            </div>
            <div class="col-6 col-md-6" >
              <input class="form-control" type="text" placeholder="Votre prenom" aria-label="default input example" name="prenom">
            </div>
          </div>
          <div class="mb-3">

            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" votre email" name="email">

          </div>

          <div class="row g-0 text-center mb-3">
            <div class="col-sm-6 col-md-6">
              <input class="form-control" type="text" placeholder="Numero de telephone" aria-label="default input example" name="numero">

            </div>
            <div class="col-6 col-md-6" >
              <input class="form-control" type="text" placeholder="Code Postal ou ville" aria-label="default input example" name="code_postal">
            </div>
          </div>
          <div class="mb-3 text-start">
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">

              <span style="font-size:15px">

Je souhaite recevoir des communications sur les offres de Youdom Care</span>

          </div>
          <div class="d-grid gap-2 col-6 mx-auto">
            <button class="btn btn-primary" type="button">Demandez un devis</button>

          </div>
          </form>




        </div>
        <div class="card-footer text-muted">
          Youdom Care vous informe que vos données seront traitées afin de répondre à votre demande de devis et vous envoyer des offres liées à celle-ci. Conformément à la loi « Informatique et libertés » du 6 janvier 1978 modifiée, vous bénéficiez d’un droit d’accès, rectification, suppression, portabilité et limitation du traitement vous concernant. Pour de plus amples informations et exercer vos droits, vous pouvez nous contactez à l’adresse contact@youdom-care.com ou consulter notre politique de confidentialité.
        </div>
      </div>
    </div>
  </div>
</section>









@endsection

