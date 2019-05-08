@extends('layouts.app')

@section('tab-title', 'Perfil de usuario')

@section('content')

<div class="title m-b-md">
        Perfil de Usuario
    </div>

     <div>
        <p> {{  $edad }} </p>
        <p> {{  $nombre }} </p>
    </div>

    <div class="alert alert-primary" role="alert">
    A simple primary alert—check it out!
  </div>

  <div class="alert alert-danger">
    
    Error alert

  </div>

  <span class="badge badge-primary">asdasd</span>
  <span class="badge badge-primary">asdasd</span>
  <span class="badge badge-primary">asdasd</span>

@endsection