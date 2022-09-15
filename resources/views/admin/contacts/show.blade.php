@extends('layouts.backoffice.app')
@section('title', __('Listes Des besoins'))

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
                            <h6>Nom</h6>
                            <p class="text-muted">{{ $contact->name }} </p> </div>
                            <div class="col-6 mb-3">
                                <h6>Prenom</h6>
                                <p class="text-muted">{{ $contact->username }} </p>
                            </div><div class="col-6 mb-3">
                                <h6>Phone</h6>
                                <p class="text-muted">{{ $contact->phone }}</p>
                                </div>
                            <div class="col-6 mb-3">
                            <h6>email</h6>
                            <p class="text-muted">{{ $contact->email }}</p>
                            </div>
                        <div class="col-6 mb-3">
                            <h6>type </h6>
                            <p class="text-muted">{{ $contact->type }}</p>
                        </div>

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
