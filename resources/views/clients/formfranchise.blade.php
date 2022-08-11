@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')

<section class="lp-banking-track-cashflow">
    <div class="container">
        <div class="lp-banking-track-cashflow__body section-body section-body_margin-top padding-top-sm padding-bottom-sm section-body_card_margin-top">

            <div class="lp-banking-track-cashflow__content">
                <h1 class="heading heading__lvl1 stillforce-heading-blue color_blue-3" style="">A Propos de vous </h1>
            </div>
        </div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Vous etes ?*</option>
            <option value="1">À la recherche d’une création de franchise </option>
            <option value="2">À la recherche d’une reprise ou d’un investissement</option>
            <option value="3">À la recherche d’un Emploi</option>
            <option value="3">Dans une autre Stuation</option>
        </select>

          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
            <label class="form-check-label" for="flexRadioDefault1">
             Madame
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
            <label class="form-check-label" for="flexRadioDefault2">
              Monsieur
            </label>
        </div>

    <form class="row g-3 needs-validation form-check" novalidate>
        <div class="row g-3">
        <div class="col-md-6 position-relative">
          <label for="validationTooltip01" class="form-label">Nom</label>
          <input type="text" class="form-control" id="validationTooltip01" value="Mark" required>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        <div class="col-md-4 position-relative">
          <label for="validationTooltip02" class="form-label">prenom</label>
          <input type="text" class="form-control" id="validationTooltip02" value="Otto" required>
          <div class="valid-tooltip">
            Looks good!
          </div>
        </div>
        </div>

        <div class="row">
            <div class="col-12">
            <label for="inputAddress" class="form-label">Addresse</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
          </div>

        <div class="col-md-6 position-relative">
          <label for="validationTooltip03" class="form-label">City</label>
          <input type="text" class="form-control" id="validationTooltip03" required>
          <div class="invalid-tooltip">
            Please provide a valid city.
          </div>
        </div>
        <div class="col-md-3 position-relative">
          <label for="validationTooltip04" class="form-label">State</label>
          <select class="form-select" id="validationTooltip04" required>
            <option selected disabled value="">Choose...</option>
            <option>...</option>
          </select>
          <div class="invalid-tooltip">
            Please select a valid state.
          </div>
        </div>
        <div class="col-md-3">
            <label for="validationCustom05" class="form-label">Code Postale</label>
            <input type="text" class="form-control" id="validationCustom05" required>
            <div class="invalid-feedback">
              Please provide a valid zip.
            </div>
          </div>
        </div>



          <div class="row ">
            <div class="col-md-6 position-relative">
            <label for="phone" class="form-label">Telephone</label>
            <input type="tel" class="form-control" id="phone" placeholder="+09999999">
          </div>

          <div class="col-md-6 position-relative">
            <label for="inputEmail3" class="form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" class="form-control" id="inputEmail3">
            </div>
          </div>
          </div>

          <div class="col-12">
            <label for="floatingTextarea">Quelle profession exercez-vous actuellement ? *    </label>
            <textarea class="form-control" placeholder="Votre profession" id="floatingTextarea"></textarea>

          </div>


            {{-- <h4 class="  color_blue-3 position-relative">Veuillez saisir votre date de naissance :</h4> --}}
            <div class="col-md-4 position-relative">
                <label for="bday"><h4 class="  color_blue-3 ">Veuillez saisir votre date de naissance : </h4></label>
                <input type="date" id="bday" name="bday">
                <span class="validity"></span>
            </div>

         <div class="position-center" style="text-align: center">
            <h2 class="  color_blue-10 " style="color: rgb(249, 164, 7)" >Comment avez-vous connu Youdom Services ?</h2>
            <select class="form-select" aria-label="Default select example">
                <option value="1">Les Echos de la Franchise </option>
                <option value="2"> L’Observatoire de la Franchise</option>
                <option value="3">Toute la Franchise</option>
                <option value="4">Google / Site Internet</option>
                <option value="5">Radio </option>
                <option value="6"> pub TV</option>
                <option value="7">Réseaux sociaux</option>
                <option value="8"> Presse spécialisée (Capital, Management, etc.)</option>
                <option value="9">Affichage</option>
                <option value="10"> Autre</option>
              </select>
            </div>

            <div class=" position-center" style="text-align: center">
                <div class="col-12">
                    <label for="inputAddress" class="form-label" style="color: rgb(249, 164, 7)"><h2> quelle(s) villes souhaitez-vous ouvrir une agence Youdom Services? *</h2></label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                </div>

                <div class="position-center" style="text-align: center">
                <select class="form-select" aria-label="Default select example">
                    <option selected>Quel est votre apport personnel ? *</option>
                    <option value="1">Je n’ai pas d’apport personnel </option>
                    <option value="2"> Entre 10 000 et 20 000 €</option>
                    <option value="3">Entre 20 000 et 30 000 € </option>
                    <option value="4">Plus de 30 000€</option>
                </select>
                </div>

                <div class="position-center" style="text-align: center">


                    </div>



                  <div class="col-12">
                    <label for="floatingTextarea">Racontez-nous votre projet * </label>
                    <textarea class="form-control" placeholder="Racontez-nous votre projet" id="floatingTextarea"></textarea>

                  </div>
                  <button class="button  button_w-m-full color_blue-3 " type="submit">Submit form</button>
      </form>






</section>

@endsection
