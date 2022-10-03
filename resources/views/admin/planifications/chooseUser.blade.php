@extends('layouts.backoffice.app')
@section('title', __('Listes Des Intervenants'))

<style>
    .choose:hover{
        background-color: blue;
        color:white;
    }
    .choose{
        background-color: white;
    }


</style>

@section('content')

<div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
    <div class="page-title-heading">
    <div class="page-title-icon">
    <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
    </div>
    <div>Planification
    <div class="page-title-subheading">Liste des utilisateurs </div>
    </div>
    </div>
    <div class="page-title-actions">
    <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
    <i class="fa fa-star"></i>
    </button>
    <div class="d-inline-block dropdown">
    <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
    <span class="btn-icon-wrapper pr-2 opacity-7">
    <i class="fa fa-business-time fa-w-20"></i>
    </span>
    Buttons
    </button>
    <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
    <ul class="nav flex-column">
    <li class="nav-item">
    <a class="nav-link">
    <i class="nav-link-icon lnr-inbox"></i>
    <span> Inbox</span>
    <div class="ml-auto badge badge-pill badge-secondary">86</div>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link">
    <i class="nav-link-icon lnr-book"></i>
    <span> Book</span>
    <div class="ml-auto badge badge-pill badge-danger">5</div>
    </a>
    </li>
    <li class="nav-item">
    <a class="nav-link">
    <i class="nav-link-icon lnr-picture"></i>
     <span> Picture</span>
    </a>
    </li>
    <li class="nav-item">
    <a disabled="" class="nav-link disabled">
    <i class="nav-link-icon lnr-file-empty"></i>
    <span> File Disabled</span>
    </a>
    </li>
    </ul>
    </div>
    </div>
    </div> </div>
    </div> <div class="main-card mb-3 card">
    <div class="card-body">

        {{--  <a class="mb-2 mr-2 btn btn-primary flex justify-end" href="{{ route('need.create') }}">Creer</a>  --}}

        <h1 class="text-center">Choisir un intervenant</h1>

        <div class="container text-center">
            <div class="row g-2">

                @forelse ($intervenants as $intervenant)
                    <div class="col-4 mt-3">
                        <div class="card choose" style="width: 18rem;height:10rem;cursor: pointer;">

                            <div class="card-body choose">
                                <img style="width:30%" src="{{ asset('assets/backoffice/assets/images/user.png') }}" alt="">
                                <div>
                                    <h2 class="mt-3 color-white">{{ $intervenant->name }}</h2>
                                    <h5 class="mt-3 color-white">{{ $intervenant->email }}</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div>
                        <p>Aucun Intervenant n'est disponile</p>
                        <a href="{{ route('demandes.index') }}"><button class="mb-2 mr-2 btn btn-primary"><i class="fa fa-fw" aria-hidden="true" title="Copy to use upload"></i>Ajouter un intervenant</button></a>
                    </div>
                @endforelse

            </div>
          </div>


    </div>
    </div>
    </div>



@endsection
