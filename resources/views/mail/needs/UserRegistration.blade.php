@extends('mail.template')

@section('content')

<p>
    Mr(Mlle). {{ $user->name }},Suite a votre precedente demande de services à la personne
nous vous informons que votre compte à bien été créer avec succes

votre mot de passe est:{{ $password }}
</p>

@endsection
