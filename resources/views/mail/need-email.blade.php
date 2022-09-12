@component('mail::message')
# Besoins

<p style="font-size: 14px;">
    Un Nouveau Besoin a été ajouté sur Youdom-care
  </p>

  <p>lutilisateur {{ $need->firstname }} {{ $need->lastname }}</p> à fait une demande de services :
        ###  Services
      -  {{ $need->services }}

 ##  Information D'utilisateur
 <p>Numero Telephone:{{ $need->phone }}</p>
 <p>Code Postal:{{ $need->postal }}</p>
 <p>Ville:{{ $need->town }}</p>
 <p>Email:{{ $need->email }}</p>

@component('mail::button', ['url' => 'youdom-care.com/admin/needs'])
Voir plus
@endcomponent

Thanks,<br>

@endcomponent
