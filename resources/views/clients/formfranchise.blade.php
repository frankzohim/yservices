@extends('layouts.master')
@section('title', __('Youdom Services – Aide à domicile sur mesure en Europe'))

@section('content')

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color: #3868cd">
                    <h2 class="title">A propos de vous</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <select class="input--style-5" aria-label="Default select example">
                                                <option selected disabled value="">Vous etez?</option>
                                                <option value="1">À la recherche d’une création de franchise </option>
                                                <option value="2">À la recherche d’une reprise ou d’un investissement
                                                </option>
                                                <option value="3">À la recherche d’un Emploi</option>
                                                <option value="3">Dans une autre Stuation</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="p-t-15">
                                        <label class="radio-container">Madame
                                            <input type="radio" checked="checked" name="exist">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">Monsieur
                                            <input type="radio" name="exist">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="first_name"
                                                placeholder="Nom">

                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="last_name"
                                                placeholder="prenom">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company" placeholder="Adresse">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <select class="input--style-5" id="validationTooltip04" required>
                                                <option selected disabled value="">Pays</option>
                                                <option>France</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" id="validationCustom05"
                                                placeholder="code postale" required>

                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" id="validationTooltip03"
                                                placeholder="Ville" require>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="area_code"
                                                placeholder="Code pays">
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="phone"
                                                placeholder="Numero de telephone">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">

                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <div class="input-group">
                                                <input for="floatingTextarea" class="input--style-5" type="text"
                                                    placeholder="Profession">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-2">

                                        <div class="input-group-desc">
                                            <div class="rs-select2 js-select-simple select--no-search">
                                                <input class="input--style-5" type="date" id="bday"
                                                    name="bday" placeholder="Date de naissance">
                                                <span class="validity"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row ">

                            <div class="value">
                                <div class="row row-space">




                                        <div class="input-group-desc">
                                            <select class="input--style-5" aria-label="Default select example">
                                                <option selected disabled value="">Comment avez-vous connu Youdom
                                                    Services ?</option>
                                                <option value="1">Les Echos de la Franchise </option>
                                                <option value="2"> L’Observatoire de la Franchise</option>
                                                <option value="3">Toute la Franchise</option>
                                                <option value="4">Google / Site Internet</option>
                                                <option value="5">Radio </option>
                                                <option value="6"> pub TV</option>
                                                <option value="7">Réseaux sociaux</option>
                                                <option value="8"> Presse spécialisée (Capital, Management, etc.)
                                                </option>
                                                <option value="9">Affichage</option>
                                                <option value="10"> Autre</option>
                                            </select>
                                        </div>
                                    </div>

                            </div>
                        </div>

                        <div class="form-row">

                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="company"
                                        placeholder="Dans quel ville voulez vous ouvrir une agences?">
                                </div>
                            </div>
                        </div>

                        <div class="form-row ">

                            <div class="value">




                                        <div class="input-group-desc">
                                            <select class="input--style-5" aria-label="Default select example">
                                                <option disabled="disabled" selected="selected">Quel est votre apport
                                                    personnel ? *</option>
                                                <option value="1">Je n’ai pas d’apport personnel </option>
                                                <option value="2"> Entre 10 000 et 20 000 €</option>
                                                <option value="3">Entre 20 000 et 30 000 € </option>
                                                <option value="4">Plus de 30 000€</option>
                                            </select>
                                        </div>

                                </div>
                           
                        </div>


                        <div class="form-row p-t-20">
                            <label class="label label--block">Voulez vous recevoir les actualites sur Youdom?</label>
                            <div class="p-t-15">
                                <label class="radio-container ">Yes
                                    <input type="radio" checked="checked" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">No
                                    <input type="radio" name="exist">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit">Envoyer</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

    </body><!-- This templates was made by Colorlib (https://colorlib.com) -->

    </html>

@endsection
