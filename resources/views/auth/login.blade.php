@extends('layouts.templalogin', ['class' => 'login-page', 'page' => 'Page de connexion', 'contentClass' => 'login-page', 'section' => 'auth'])


@section('content')

<div class="card-sigin">
    <div class="main-signup-header">

        <h2>Bienvenue de nouveau !</h2>
            <h5 class="font-weight-semibold mb-4">Continuer en tant qu'administrateur</h5>

        <form action="{{route('login')}}" method="POST">
            @csrf
            <div class="form-group">
                <label>{{__('Identifiant')}}</label>
                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{__('Entrer votre Identifiant')}}" name="email" type="text">

            </div>
            <div class="form-group">
                <label>{{__('Mot de passe')}}</label>
                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{__('Entrer votre mot de passe')}}" name="password" type="password">
            </div>
            <button class="btn btn-main-primary btn-block">Se connecter</button>

        </form>

    </div>
</div>
@endsection
