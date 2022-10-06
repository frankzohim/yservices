@extends('layouts.backoffice.app')
@section('title', __('Listes Des Intervenants'))

<style>
    .choose:hover .choosebody:hover{
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
    </div> <div class="main-card mb-3 card" style="height: 100%;">
    <div class="card-body" >
        <form action="{{ route('planifications.store') }}" method="post">
            @csrf
        {{--  <a class="mb-2 mr-2 btn btn-primary flex justify-end" href="{{ route('need.create') }}">Creer</a>  --}}

        <h1 class="text-center">Choisir une planification</h1>

        <table class="table table-bordered">
            <thead>
                <tr>
                  <th></th>
                  <th>Lundi</th>
                  <th>Mardi</th>
                  <th>Mercredi</th>
                  <th>Jeudi</th>
                  <th>Vendredi</th>
                  <th>Samedi</th>
                  <th>Dimanche</th>
                  <th class="allDays">Tous les jours</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th id="morning">Matin</th>
                  <td class="inJourney everyday whole all" data-time="Lundi - Matin"></td>
                  <td class="inJourney everyday whole all" data-time="Mardi - Matin"></td>
                  <td class="inJourney everyday whole all" data-time="Mercredi - Matin"></td>
                  <td class="inJourney everyday whole all" data-time="Jeudi - Matin"></td>
                  <td class="inJourney everyday whole all" data-time="Vendredi - Matin"></td>
                  <td class="inJourney everyday whole all" data-time="Samedi - Matin"></td>
                  <td class="inJourney everyday whole all" data-time="Dimanche - Matin"></td>
                  <td class="allDays whole all" data-time="Tout les jours-Matin"></td>
                </tr>
                <tr>
                  <th id="midday">Midi</th>
                  <td class="inJourney everyday whole all" data-time="Lundi - Midi"></td>
                  <td class="inJourney everyday whole all" data-time="Mardi - Midi"></td>
                  <td class="inJourney everyday whole all" data-time="Mercredi - Midi"></td>
                  <td class="inJourney everyday whole all" data-time="Jeudi - Midi"></td>
                  <td class="inJourney everyday whole all" data-time="Vendredi - Midi"></td>
                  <td class="inJourney everyday whole all" data-time="Samedi - Midi"></td>
                  <td class="inJourney everyday whole all" data-time="Dimanche - Midi"></td>
                  <td class="allDays whole all" data-time="Tout les jours-Midi"></td>
                </tr>
                <tr>
                  <th id="afternoon">Après-Midi</th>
                  <td class="inJourney everyday whole all" data-time="Lundi - Après-midi"></td>
                  <td class="inJourney everyday whole all" data-time="Mardi - Après-midi"></td>
                  <td class="inJourney everyday whole all" data-time="Mercredi - Après-midi"></td>
                  <td class="inJourney everyday whole all" data-time="Jeudi - Après-midi"></td>
                  <td class="inJourney everyday whole all" data-time="Vendredi - Après-midi"></td>
                  <td class="inJourney everyday whole all" data-time="Samedi - Après-midi"></td>
                  <td class="inJourney everyday whole all" data-time="Dimanche - Après-midi"></td>
                  <td class="allDays whole all" data-time="Tout les jours-Apres-Midi"></td>
                </tr>
                <tr>
                  <th id="night">Soir</th>
                  <td class="inJourney everyday whole all" data-time="Lundi - Soir"></td>
                  <td class="inJourney everyday whole all" data-time="Mardi - Soir"></td>
                  <td class="inJourney everyday whole all" data-time="Mercredi - Soir"></td>
                  <td class="inJourney everyday whole all" data-time="Jeudi - Soir"></td>
                  <td class="inJourney everyday whole all" data-time="Vendredi - Soir"></td>
                  <td class="inJourney everyday whole all" data-time="Samedi - Soir"></td>
                  <td class="inJourney everyday whole all" data-time="Dimanche - Soir"></td>
                  <td class="allDays whole all" data-time="Tout les jours-Soir"></td>
                </tr>
                <tr>
                  <th>Journée entière (8h > 20h)</th>
                  <td class="allJourney everyday whole all" data-time="Lundi - Journée"></td>
                  <td class="allJourney everyday whole all" data-time="Mardi - Journée"></td>
                  <td class="allJourney everyday whole all" data-time="Mercredi - Journée"></td>
                  <td class="allJourney everyday whole all" data-time="Jeudi - Journée"></td>
<td class="allJourney everyday whole all" data-time="Vendredi - Journée"></td>
<td class="allJourney everyday whole all" data-time="Samedi - Journée"></td>
<td class="allJourney everyday whole all" data-time="Dimanche - Journée"></td>
<td id="wholeday" class="all" data-time="Tout les jours-Journée "></td>
</tr>
<tr>
<th>Nuit (20h > 8h)</th>
<td class="night everyday all" data-time="Lundi - Nuit"></td>
<td class="night everyday all" data-time="Mardi - Nuit"></td>
<td class="night everyday all" data-time="Mercredi - Nuit"></td>
<td class="night everyday all" data-time="Jeudi - Nuit"></td>
<td class="night everyday all" data-time="Vendredi - Nuit"></td>
<td class="night everyday all" data-time="Samedi - Nuit"></td>
<td class="night everyday all" data-time="Dimanche - Nuit"></td>
<td class="allDays all" data-time="Tout les jours-Nuit"></td>
</tr>
<tr>
<th>24h/24</th>
<td class="allDay all" data-time="lundi-24/24"></td>
<td class="allDay all" data-time="mardi-24/24"></td>
<td class="allDay all" data-time="mercredi-24/24"></td>
<td class="allDay all" data-time="jeudi-24/24"></td>
<td class="allDay all" data-time="vendredi-24/24"></td>
<td class="allDay all" data-time="samedi-24/24"></td>
<td class="allDay all" data-time="dimanche-24/24"></td>
<td id="wholeAll"  data-time="Tout les jours"></td>
</tr>
</tbody>
          </table>
          <input type="hidden" name="data_times" id ="dataTimes" value="" >
          <input type="hidden" name="intervenant_id" value="{{ $intervenant_id }}">
          <input type="hidden" name="customer_id" value="{{ $customer_id }}">
        </div>
    <button type="submit" class="btn btn-success"><i class="fa fa-sign-in"></i>Enregistrer</button>

</form>
    </div>
    </div>


<script src="{{ asset('assets/js/planification.js') }}"></script>
@endsection

