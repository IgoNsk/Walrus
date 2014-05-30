@extends('layouts.simple')

@section('content')
  {{ HTML::style('/css/signin.css') }}
  <div class="form-signin">
      <h2 class="form-signin-heading">Авторизация</h2>
    @include('auth._form')
  </div>
@stop
