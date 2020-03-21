@extends('layouts.card')

@section('page', 'login')
@section('title', 'Login')

@section('content')
    <div class="box-container-gray">
        <div class="box">
            <div class="box-header">
                <div class="box-logo">
                    <i class="fa fa-graduation-cap fa-3x" aria-hidden="true"></i>
                </div>
                <h1>{{ config('app.name') }}</h1>
                <small>Login</small>
            </div>
            <div class="box-content">
                <form>
                    <div class="form-group">
                        <label for="user">E-Mail / Benutzername</label>
                        <input id="user" type="text" placeholder="max@mustermann.de">
                    </div>
                    <div class="form-group">
                        <label for="password">Passwort</label>
                        <input id="password" type="password" placeholder="********">
                    </div>
                    <button type="submit">Einloggen</button>
                </form>
            </div>
            <div class="box-footer">
                <a href="{{ route('passwordForgot') }}"">Passwort vergessen</a>
            </div>
        </div>
    </div>
@endsection