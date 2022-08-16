@extends('layouts.master')
@section('title', __('Formulaire - Devenir Partenaire'))

@section('content')
    <header>
        <div class="page-header min-vh-85">

            <br>
            <div class="container">
                <div class="row">

                    <div class="col-lg-6 d-flex justify-content-center flex-column">
                        <div class="card d-flex blur justify-content-center p-4 shadow-lg my-sm-0 my-sm-6 mt-8 mb-5">
                            <div class="text-center">
                                <h3 class="text-gradient text-primary">Devenir Partenaire</h3>
                                <p class="mb-0">

                                </p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">Merci. Votre message a été transmis à Youdom Care. Vous recevrez une
                                    réponse
                                    rapidement.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <img class="position-absolute fixed-top ms-auto w-50 h-100 z-index-0 d-none
                 d-sm-none d-md-block border-radius-section border-top-end-radius-0 border-top-start-radius-0
                     border-bottom-end-radius-0"
                    src="{{ asset('third/assets/img/curved-images/curved-11.jpg') }}" alt="image">
            </div>
    </header>
@endsection
