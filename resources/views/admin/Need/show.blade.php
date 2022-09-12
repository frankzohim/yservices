@extends('layouts.backoffice.app')
@section('title', __('Besoins'))

@section('content')


<link rel="stylesheet" href="show_style.css">

<div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
    <div class="page-title-heading">
    <div class="page-title-icon">
    <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
    </div>
    <div>Utilisateur
    <div class="page-title-subheading">Infos utilisateurs</div>
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
    </div>

<section class="vh-100 w-full" style="background-color: #f4f5f7;">
    <div class="container py-90 h-900">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-lg-full mb-full mb-lg-full w-full">
          <div class="card mb-3 w-full" style="border-radius: .5rem;">
            <div class="row g-0">
              <div class="col-md-4 gradient-custom text-center text-white"
                style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                <img src="https://t3.ftcdn.net/jpg/05/25/04/96/240_F_525049616_gOI1oJ9TV4O2D9FPnZmqZRzIdCovDeNU.jpg" alt="Avatar" class="img-fluid my-5" style="width: 280px;" >
                {{--  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava1-bg.webp"  --}}
                  />
                <h5>Marie Horwitz</h5>
                <p>Web Designer</p>
                <i class="far fa-edit mb-5"></i>
              </div>
              <div class="col-md-8">
                <div class="card-body p-4">
                    <h6>Information</h6>
                    <hr class="mt-0 mb-4">
                    <div class="row pt-1">



                        <div class="col-6 mb-3">
                            <h6>Nom & Prenom</h6>
                            <p class="text-muted">{{ $need->firstname }}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Prenom</h6>
                            <p class="text-muted">{{ $need->lastname }}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Email</h6>
                            <p class="text-muted">{{ $need->email }}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Phone</h6>
                            <p class="text-muted">{{ $need->phone }}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Service souhaite</h6>
                            <p class="text-muted">{{ $need->services }}</p>
                        </div>
                        <div class="col-6 mb-3">
                            <h6>Date de debut</h6>
                            <p class="text-muted">{{ $need->start_at  }}</p>
                        </div>
                  </div>
                  <h6>Localisations</h6>
                  <hr class="mt-0 mb-4">
                  <div class="row pt-1">
                    <div class="col-6 mb-3">
                      <h6>Adresse</h6>
                      <p class="text-muted">{{ $need->address }}</p>
                    </div>
                    <div class="col-6 mb-3">
                      <h6>Code Postal</h6>
                      <p class="text-muted">{{ $need->postal_code }}</p>
                    </div>
                    <div class="col-6 mb-3">
                        <h6>town</h6>
                        <p class="text-muted">{{ $need->town }}</p>
                      </div>
                  </div>



                  <div class="d-flex justify-content-start">
                    <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                    <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                    <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
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
