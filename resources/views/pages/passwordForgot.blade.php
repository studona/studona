@extends('layouts.card')

@section('page', 'passwordForgot')
@section('title', 'Passwort vergessen')

@section('content')
    <div class="box-container-gray">
        <div class="box">
            <div class="box-header">
                <div class="box-logo">
                    <i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i>
                </div>
                <h1>{{ config('app.name') }}</h1>
                <small>Passwort vergessen</small>
            </div>
            <div class="box-content">
                <form>
                    <div class="form-group">
                        <label for="user">E-Mail / Benutzername</label>
                        <input id="user" type="text" placeholder="max@mustermann.de">
                    </div>
                    <button type="submit">Passwort zurücksetzen</button>
                </form>
            </div>
            <div class="box-footer">
                <a href="{{ route('login') }}">Einloggen</a>
            </div>
        </div>
    </div>
@endsection