@extends('layouts.master')
@section('title', __('Formulaire - Devenir Partenaire'))

@section('content')
    <header>
        <div class="page-header min-vh-85">
            <div>
                <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none
        d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0
        border-bottom-end-radius-0"
                    src="{{ asset('third/assets/img/curved-images/curved-11.jpg') }}" alt="image">
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 d-flex justify-content-center flex-column">
                        <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class="text-center">
                                <h3 class="text-gradient text-primary">Devenir Partenaire</h3>
                                <p class="mb-0">

                                </p>
                            </div>
                            <form id="contact-form" method="post" action="{{ route('partner_form.store') }}"
                                autocomplete="off">
                                @csrf
                                <div class="card-body pb-2">
                                    <div class="row justify-content-center">
                                        <h5 class="text-gradient text-primary" style="text-align: center;">A propos de
                                            vous</h5>


                                    </div>

                                    <div class="row">
                                        <div class="col-md-12{{ $errors->has('research') ? ' has-danger' : '' }}">
                                            <select name="research"
                                                class="form-control form-select{{ $errors->has('research') ? ' is-invalid' : '' }}"
                                                aria-label="Default select example" id="research"
                                                value="{{ old('research') }}">
                                                <option value="">
                                                    {{ __('Vous êtes') }}
                                                </option>


                                                <option value="À la recherche d’une création de franchise">
                                                    {{ __('À la recherche d’une création de franchise') }}
                                                </option>

                                                <option value="À la recherche d’une reprise ou d’un investissement">
                                                    {{ __('À la recherche d’une reprise ou d’un investissement') }}
                                                </option>

                                                <option value="Dans une autre situation">
                                                    {{ __('Dans une autre situation') }}
                                                </option>

                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <fieldset>
                                            <div class="col-md-12{{ $errors->has('civility') ? ' has-danger' : '' }}">
                                                <div
                                                    class="form-check form-check-inline{{ $errors->has('civility') ? ' is-invalid' : '' }}">
                                                    <input class="form-check-input" type="radio" name="civility"
                                                        id="civility" value="monsieur" checked>
                                                    <label class="form-check-label" for="civility" style="color:#1b138a;">
                                                        {{ __('Monsieur') }}
                                                    </label>
                                                </div>
                                                <div
                                                    class="form-check form-check-inline{{ $errors->has('civility') ? ' is-invalid' : '' }}">
                                                    <input class="form-check-input" type="radio" name="civility"
                                                        id="civility" value="madame">
                                                    <label class="form-check-label" for="civility" style="color:#1b138a;">
                                                        {{ __('Madame') }}
                                                    </label>
                                                </div>

                                            </div>
                                        </fieldset>
                                    </div>
                                    <br>
                                    <div class="row">

                                        <div class="col-md-6{{ $errors->has('name') ? ' has-danger' : '' }}">
                                            <div class="input-group mb-4">
                                                <input class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Name') }}" aria-label="Full Name" type="text"
                                                    value="{{ old('name') }}" name="name" required>
                                            </div>
                                            {{-- if ($errors->has('name'))
                                                <span class="invalid-feedback" style="display: block;" role="alert">
                                                    <strong>{{ $errors->first('name') }}</strong>
                                                </span>
                                                @endif --}}
                                        </div>
                                        <div class="col-md-6 ps-md-2{{ $errors->has('surname') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control{{ $errors->has('surname') ? ' is-invalid' : '' }}"
                                                    placeholder="Prénom" name="surname" required>
                                            </div>
                                        </div>
                                        {{-- if ($errors->has('suname'))
                                            <span class="invalid-feedback" style="display: block;" role="alert">
                                                <strong>{{ $errors->first('surname') }}</strong>
                                            </span>
                                            @endif --}}

                                    </div>

                                    <div class="row">

                                        <div class="col-md-6{{ $errors->has('phone') ? ' has-danger' : '' }}">
                                            <div class="input-group mb-4">
                                                <input class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Téléphone') }}" aria-label="Full Name"
                                                    type="tel" name="phone" required>
                                                {{-- @if ($errors->has('phone'))
                                                        <span class="invalid-feedback" style="display: block;"
                                                            role="alert">
                                                            <strong>{{ $errors->first('phone') }}</strong>
                                                        </span>
                                                    @endif --}}
                                            </div>
                                        </div>
                                        <div class="col-md-6 ps-md-2{{ $errors->has('email') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="email"
                                                    class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Email') }}" name="email"
                                                    value="{{ old('email') }}" required>
                                            </div>
                                            {{-- @if ($errors->has('email'))
                                                    <span class="invalid-feedback" style="display: block;" role="alert">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif --}}
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-12{{ $errors->has('adresse') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Adresse') }}" value="{{ old('adresse') }}"
                                                    name="adresse" required>
                                            </div>
                                        </div>

                                    </div>

                                    <br>

                                    <div class="row">

                                        <div class="col-md-6{{ $errors->has('postal_code') ? ' has-danger' : '' }}">
                                            <div class="input-group mb-4">
                                                <input
                                                    class="form-control{{ $errors->has('postal_code') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Code postal') }}" aria-label="Full Name"
                                                    name="postal_code" type="number" value="{{ old('postal_code') }}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 ps-md-2{{ $errors->has('city') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('ville') }}" value="{{ old('city') }}"
                                                    name="city" required>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-12{{ $errors->has('occupation') ? ' has-danger' : '' }}">
                                            <div class="input-group">
                                                <input type="text"
                                                    class="form-control{{ $errors->has('occupation') ? ' is-invalid' : '' }}"
                                                    placeholder="{{ __('Quelle profession exercez-vous actuellement ?') }} "
                                                    value="{{ old('occupation') }}" name="occupation" required>
                                            </div>
                                        </div>

                                    </div>

                                </div>


                        </div>

                    </div>

                    <div class="col-lg-6 d-flex justify-content-center flex-column" style="margin-top:-30px">

                        <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">


                            <div class="card-body pb-2">

                                <div class="row justify-content-center">
                                    <h5 class="text-gradient text-primary" style="text-align: center;">Comment avez
                                        vous connu Youdom CARE?</h5>
                                </div>

                                <div class="row">
                                    <div class="col-md-12{{ $errors->has('knowledge') ? ' has-danger' : '' }}">
                                        <select name="knowledge"
                                            class="form-control form-select{{ $errors->has('knowledge') ? ' is-invalid' : '' }}"
                                            aria-label="Default select example" id="knowledge"
                                            value="{{ old('knowledge') }}">

                                            <option value='Les Echos de la Franchise'>
                                                {{ __('Les Echos de la Franchise') }}
                                            <option value='Les Echos de la Franchise'>
                                                {{ __('Les Echos de la Franchise') }}
                                            </option>
                                            <option value='L’Observatoire de la Franchise'>
                                                {{ __('L’Observatoire de la
                                                                                                                                                        Franchise') }}
                                            </option>
                                            <option value='Toute la Franchise'>{{ __('Toute la Franchise') }}</option>
                                            <option value='Google / Site Internet'>{{ __('Google / Site Internet') }}
                                            </option>
                                            <option value='Radio'>{{ __('Radio') }}</option>
                                            <option value='Pub TV'>{{ __('Pub TV') }}</option>
                                            <option value='Réseaux sociaux'>{{ __('Réseaux sociaux') }}</option>
                                            <option value='Salons de la franchise'>{{ __('Salons de la franchise') }}
                                            </option>
                                            <option value='Fédération Française de la Franchise'>
                                                {{ __('Fédération Française
                                                                                                                                                        de la Franchise') }}
                                            </option>
                                            <option value='Presse spécialisée (Capital, Management, etc.)'>
                                                {{ __('Presse
                                                                                                                                                        spécialisée (Capital, Management, etc.)') }}
                                            </option>
                                            <option value='Affichage'>{{ __('Affichage') }}</option>
                                            <option value='Autre'>{{ __('Autre') }}</option>

                                        </select>
                                    </div>
                                </div>

                                <br>
                                <div class="row justify-content-center">
                                    <h5 class="text-gradient text-primary" style="text-align: center;">Votre Projet
                                    </h5>
                                </div>


                                <br>

                                <div class="row">

                                    <div class="col-md-12{{ $errors->has('town') ? ' has-danger' : '' }}">
                                        <div class="input-group">
                                            <input type="text"
                                                class="form-control{{ $errors->has('town') ? ' is-invalid' : '' }}"
                                                placeholder="{{ __('Dans quelle(s) villes souhaitez vous ouvrir une agence?') }}"
                                                required name="town" value="{{ old('town') }}">
                                        </div>
                                    </div>

                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-md-12{{ $errors->has('capital') ? ' has-danger' : '' }}">
                                        <select name="capital"
                                            class="form-control form-select{{ $errors->has('capital') ? ' is-invalid' : '' }}"
                                            aria-label="Default select example" id="job"
                                            value="{{ old('town') }}">

                                            <option value='' selected='selected' class='gf_placeholder'>
                                                {{ __('Quel
                                                                                                                                                        est votre apport personnel ? *') }}
                                            </option>
                                            <option value='Je n’ai pas d’apport personnel'>
                                                {{ __('Je n’ai pas d’apport
                                                                                                                                                        personnel') }}
                                            </option>
                                            <option value='Entre 10 000 et 20 000 €'>
                                                {{ __('Entre 10 000 et 20 000 €') }}</option>
                                            <option value='Entre 20 000 et 30 000 €'>
                                                {{ __('Entre 20 000 et 30 000 €') }}</option>
                                            <option value='Plus de 30 000€'>{{ __('Plus de 30 000€') }}</option>

                                        </select>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-md-12{{ $errors->has('description') ? ' has-danger' : '' }}">
                                        <textarea name="description" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                            id="message" rows="4" placeholder="{{ __('Parlez-nous de votre projet') }}"
                                            value="{{ old('description') }}" required></textarea>
                                    </div>
                                </div>
                                <br>

                                <div class="row">


                                    Je veux recevoir les actualités du réseau de franchise
                                </div>
                                <fieldset>
                                    <div class="col-md-6">

                                        <div class="col-md-6{{ $errors->has('news') ? ' has-danger' : '' }}">
                                            <div class="form-check form-check-inline">
                                                <input
                                                    class="form-check-input{{ $errors->has('news') ? ' is-invalid' : '' }}"
                                                    type="radio" name="news" id="news" value="oui" checked>
                                                <label class="form-check-label" for="news" style="color:#1b138a;">
                                                    {{ __('Oui') }}
                                                </label>
                                            </div>

                                            <div
                                                class="form-check form-check-inline{{ $errors->has('news') ? ' is-invalid' : '' }}">
                                                <input class="form-check-input" type="radio" name="news"
                                                    id="news" value="non">
                                                <label class="form-check-label" for="news" style="color:#1b138a;">
                                                    {{ __('Non') }}
                                                </label>
                                            </div>

                                        </div>
                                </fieldset>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-12 text-center">
                                    <button type="submit"
                                        class="btn bg-gradient-primary mt-3 mb-0">{{ __('Envoyer') }}</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </header>
    <!-- -------- END HEADER 8 w/ card over right bg image ------- -->



    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Valider ma demande";
            } else {
                document.getElementById("nextBtn").innerHTML = "Suivant";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                document.getElementById("join-us-form").submit();
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");

            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
    </script>


@endsection
