@extends('footer')

@section('content')

<div id="app">
  <div class="bg-img">
      <nav class="navbar navbar-expand-lg navbar-light py-1">
      <a class="navbar-brand" href="{{route('mg')}}"><img id="logo" src="Logo MG.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="{{route('sobre')}}">Empresa</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Produtos</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <a class="dropdown-item">Pedras</a>
          <ul class="dropdown">
            <a class="dropdown-item" href="{{route('rolada')}}">Roladas</a>
            <a class="dropdown-item" href="{{route('gravilha')}}">Gravilhas</a>
          </ul>
          <a class="dropdown-item" href="{{route('areias')}}">Areias</a>
          <a class="dropdown-item" href="">Blocos de Betão para muros</a>
          <a class="dropdown-item" href="">Travessas de caminhos de ferro usadas</a>
          <a class="dropdown-item" href="">Gabiões Autoportantes</a>
        </div>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('galeria')}}">Galeria</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="">Contactos</a>
        </li>
      </ul>
    </div>
    </nav> 
    <div class="centered" id="bg">Produtos
      <h4><b>Areias</b></h4> 
    </div>
</div>




@endsection