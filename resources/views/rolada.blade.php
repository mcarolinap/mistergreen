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
      <h4><b>Pedra Rolada</b></h4> 
    </div>
</div>

<div class="container" id="pedras">
  <div class="row">
    <div class="col-md-4">
      <img src="AmareloHondurasROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Amarelo Honduras</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="AmareloLimaoROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Amarelo Limão</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="AmareloRibatejoROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Amarelo Ribatejo</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="BrancoAlentejoROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Branco Alentejo</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="BrancoPirineusROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Branco Pirinéus</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="CastanhoHondurasROL.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Castanho Honduras</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="CinzentoLondresROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Cinzento Londres</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="CinzentoVianaROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Cinzento Viana</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="PretoCarapinhaROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Preto Carapinha</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="RosaBrasilROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Rosa Brasil</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="RosaDeMaltaROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Rosa de Malta</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="SalmaoROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Salmão</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="SeixoROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Seixo</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="VerdePeruROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Verde Perú</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4">
      <img src="VermelhoParisROL.jpg" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Vermelho Paris</a></b>
      </div>
      </div>
    </div>
  </div>
</div>



@endsection