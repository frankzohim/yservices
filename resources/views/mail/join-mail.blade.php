@component('mail::message')
# Introduction

<p style="font-size: 14px;">
    Un Nouveau utilisateur a rejoins  Youdom-care
  </p>
  <p>l'utilisateur {{ $join->name }} {{ $join->username }}</p> à fait une demande de prestation sur les
  {{ $contact->type }}
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
