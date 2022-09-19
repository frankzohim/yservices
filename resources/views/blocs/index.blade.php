@extends('layouts.master')
@section('title', __('Blocs - Youdom Care'))

@section("content")

<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('assets/img/help.jpg') }}" class="d-block w-100" alt="...">
      </div>



    </div>
  </div>

  <div class="container mt-5">
        <h1 style="font-size:30px;">Les plus recents</h1>
        <div class="border-bottom"></div>

        <div class="row mt-5">

                <div class="col-lg-4 mt-3">
                    <img src="{{ asset('assets/img/help.jpg') }}" class="rounded float-start w-90" alt="...">

                </div>
                <div class="col-lg-4 mt-3">
                    <img src="{{ asset('assets/img/help.jpg') }}" class="rounded float-start w-90" alt="...">

                </div>
                <div class="col-lg-4 mt-3">
                    <img src="{{ asset('assets/img/help.jpg') }}" class="rounded float-start w-90" alt="...">

                </div>

        </div>



            <div class="container mt-5">

            </div>
            <h1 style="font-size:30px;">Tout les Articles</h1>
            <div class="border-bottom"></div>

  </div>
@endsection
