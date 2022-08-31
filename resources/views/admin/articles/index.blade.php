@extends('layouts.backoffice.app')
@section('title', __('Articles'))

@section('content')

<div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
    <div class="page-title-heading">
    <div class="page-title-icon">
    <i class="pe-7s-medal icon-gradient bg-tempting-azure"></i>
    </div>
    <div>Articles
    <div class="page-title-subheading">Listes Des Articles</div>
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
    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
    <thead>
        <tr>

            <th>Image</th>
            <th>titre</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
    </thead>
    <tbody>
        @foreach ($articles as $article  )
        <tr>
            <td><img src="{{ Storage::url($article->image_path) }}" alt="" style="width: 70px;" height="70px;"> </td>
            <td style="font-size: 15px; font-weight:bold;">{{ $article->title }}</td>
                @if($article->status==1)
                <td>Publié</td>
                @else
                <td>Non Publié</td>
                @endif
            <td><a href=""><i class="fa fa-trash-alt"></i></a>
                <a href="{{ route('articles.edit',$article->id) }}"><i class="fa fa-fw" aria-hidden="true" title="Editer"></i></a>
                <a href=""><i class="fa fa-fw" aria-hidden="true" title="visualiser"></i></a></td>
            </tr>
        @endforeach



    </tbody>
    <tfoot>
        <tr>

            <th>Image</th>
            <th>titre</th>
            <th>Status</th>
            <th>Action</th>
            </tr>
    </tfoot>
    </table>
    </div>
    </div>
    </div>


@endsection
