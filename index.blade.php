@extends('layouts\plantilla1') 

@section('elementos')
<div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="/acua">Animales Acuaticos</a>
        <a class="nav-link" href="/terr">Animales terrestres</a>
         </div>
    </div>
  </div>
@endsection