@component('mail::message')
# Introduction

<p style="font-size: 14px;">
    Un Nouveau Contact a été ajouté sur Youdom-care
  </p>

  p>l'utilisateur {{ $contact->name }} {{ $contact->username }}</p> à fait une demande de prestation sur les
  {{ $contact->type }}

  ##  Information D'utilisateur
  <p>Numero Telephone:{{ $contact->phone }}</p>
  <p>Code Postal:{{ $contact->postal_code }}</p>
  <p>Ville:{{ $contact->town}}</p>
  <p>Email:{{ $contact->email }}</p>
  <p>Message:{{ $contact->message }}</p>
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
