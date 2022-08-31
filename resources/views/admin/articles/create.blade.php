@extends('layouts.backoffice.app')

@section('title','Creer un article')

@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
    <div class="page-title-wrapper">
    <div class="page-title-heading">
    <div class="page-title-icon">
    <i class="pe-7s-graph text-success"></i>
    </div>
    <div>Creer un article
    <div class="page-title-subheading">Informer les  utilisateurs Youdom-care   en partageant des articles de vos activités.</div>
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
    <div class="tab-content">
    <div class="tab-pane tabs-animation fade show active" id="tab-content-1" role="tabpanel">
    <div class="main-card mb-3 card">
    <div class="card-body">
    <h5 class="card-title"></h5>

    <form method="POST" enctype="multipart/form-data"  action="{{ route('articles.store') }}" >
        @csrf


        <div class="position-relative row form-group">

            <div class="col-sm-10">
                <input name="title" id="exampleEmail" placeholder="Ajouter un titre" type="text" class="form-control" style="text-align: center;font-size:18px;font-weight:bold;color:black">
            </div>
        </div>

        <div class="position-relative row form-group mt-5">
            <label for="exampleEmail" class="col-sm-2 col-form-label">Meta description</label>
            <div class="col-sm-10">
                <input name="meta_description" id="exampleEmail" placeholder="inserer des meta description pour votre article" type="text" class="form-control">
            </div>
        </div>
        <div class="position-relative row form-group mt-3">
            <label for="exampleEmail" class="col-sm-2 col-form-label">Meta Keywords</label>
            <div class="col-sm-10">
                <input name="keywords" id="exampleEmail" placeholder="inserer des meta keywords pour votre article" type="text" class="form-control">
            </div>
        </div>
        <div class="position-relative row form-group">
            <label for="exampleText" class="col-sm-2 col-form-label">Contenue</label>
            <div class="col-sm-10">
                <textarea name="contenue" id="exampleText" class="form-control"></textarea>
            </div>
        </div>

        <div class="position-relative row form-group">
            <label for="exampleFile" class="col-sm-2 col-form-label">Image mis en avant</label>
            <div class="col-sm-10">
            <input name="image_path" id="exampleFile" type="file" class="form-control-file">
            <small class="form-text text-muted">Selectionnez une image mis en avant pour votre article.
            </small>
            </div>
            </div>

            <div class="position-relative row form-group">
                <label for="exampleSelect" class="col-sm-2 col-form-label">Status</label>
                <div class="col-sm-10">
                <select name="status" id="exampleSelect" class="form-control">
                    <option value="0">Non Publié</option>
                    <option value="1">Publié</option>

                </select>

                </div>
                </div>
            <div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>

            </div>



        </form>


    </div>
    </div>
    <div class="main-card mb-3 card">
    <div class="card-body">

    <div>

    </div>
    </div>
    </div>
    </div>
    </div>

    @endsection
