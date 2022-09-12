@extends('layouts.backoffice.app')
@section('title', __('Listes Des besoins'))

@section('content')

<div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
    <div class="page-title-heading">
    <div class="page-title-icon">
    <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
    </div>
    <div>Besoins
    <div class="page-title-subheading">Listes Des besoins </div>
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
        <button class="mb-2 mr-2 btn btn-primary"><i class="fa fa-fw" aria-hidden="true" title="Copy to use upload"></i> Excel</button>
        {{--  <a class="mb-2 mr-2 btn btn-primary flex justify-end" href="{{ route('need.create') }}">Creer</a>  --}}

    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
    <thead>
    <tr>

    <th>Nom Complet</th>
    <th>Email</th>
     <th>Services souhaités</th>

     <th>Date debut</th>
    <th>Telephone</th>
    <th>Adresse</th>
    <th>Code Postal</th>
    <th>town</th>
    <th>Action</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($needs as $need  )
        <tr>
            <td>{{ $need->firstname }} {{ $need->lastname }}</td>
            <td>{{ $need->email }}</td>
            <td>{{ $need->services }}</td>

            <td>{{ $need->start_at }}</td>
            <td>{{ $need->phone }}</td>
            <td>{{ $need->address }}</td>
            <td>{{ $need->postal_code }}</td>
            <td>{{ $need->town }}</td>
            <td style="display:flex;">
               <a href="{{ route('need.show', $need->id) }}" class="btn-blue"><i class="fa fa-fw" aria-hidden="true" title="visualiser"></i></a>
               <form method="POST" action="{{ route('need.destroy', $need->id) }}" onsubmit="return confirm('Are you sure?')">
                @csrf
                @method('delete')
                <button type="submit"> ggf</button>

               </form>
            </td>
            </tr>
        @endforeach



    </tbody>
    <tfoot>
        <tr>

            <th>Nom Complet</th>
            <th>Email</th>
             <th>Services souhaités</th>

             <th>Date debut</th>
            <th>Telephone</th>
            <th>Adresse</th>
            <th>Code Postal</th>
            <th>town</th>
            <th>Action</th>
            </tr>
    </tfoot>
    </table>
    </div>
    </div>
    </div>


@endsection
