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
    @if($articlesCount >= 3)
        <h1 style="font-size:30px;">Les plus recents</h1>
        <div class="border-bottom"></div>

        <div class="row mt-5">

            @foreach ($articleRecents as $article)
                <div class="col-lg-4 mt-3">
                    <img src="{{ asset('assets/img/help.jpg') }}" class="rounded float-start w-90" alt="..." style="margin-bottom: 25px">
                    <div class="text-center">
                        {{ $article->title}}
                    </div>
                </div>
            @endforeach
        </div>
    @endif






            <div class="container mt-5">

            </div>
            @if($articlesCount > 0)
                <h1 style="font-size:30px;">Tout les Articles</h1>
            @endif

            <div class="border-bottom"></div>
            <div class="row mt-5">
            @forelse ($articles as $article)

                    <div class="col-lg-4 mt-3">
                        <img src="{{ Storage::url($article->image_path) }}" class="rounded float-start w-90" alt="..." style="margin-bottom: 25px">
                        <div class="text-center">
                            {{ $article->title}}
                        </div>
                    </div>

            @empty
                <div class="text-center mt-5" style="color:gray">Aucun Article disponible</div>
            @endforelse
        </div>

  </div>
@endsection
