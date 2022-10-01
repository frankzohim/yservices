@extends('mail.template')

@section('content')

<p>
    Mr(Mlle). {{ $user->name }},Suite a votre precedente demande
nous vous informons que votre compte à bien été créer avec succes

votre mot de passe est:{{ $password }}
</p>

@endsection
