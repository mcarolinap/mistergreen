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
      <h4><b>Pedra Gravilha</b></h4> 
    </div>
</div>

<div class="container" id="pedras">
  <div class="row">
    <div class="col-md-4" style="padding-top: 30px">
      <img src="AmareloBrangancaGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Amarelo Bragança</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="AmareloLimaoGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Amarelo Limão</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="AmareloPanamaGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Amarelo Panamá</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="AmareloRibatejoGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Amarelo Ribatejo</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="BrancoAlentejoGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Branco Alentejo </a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="BrancoPirineusGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Branco Pirinéus</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="CinzentoLondresGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Cinzento Londres</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="CinzentoVianaGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Cinzento Viana</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="MarfimSTomeGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Marfim de São Tomé</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="PretoCarapinhaGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Preto Carapinha</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="RosaBrasilGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Rosa Brasil</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="RosaMaltaGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Rosa de Malta</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="SalmaoGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Salmão</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="VerdePanamaGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Verde Panamá</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px">
      <img src="VermelhoParisGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Vermelho Paris</a></b>
      </div>
      </div>
    </div>
    <div class="col-md-4" style="padding-top: 30px; padding-bottom: 30px">
      <img src="VulcanicaGRAV.jpg" class="image" id="img-pedras">
      <div class="overlay">
      <div class="label"><b><a class="label-link" href="{{route('quantidades')}}">Vulcânica</a></b>
      </div>
      </div>
    </div>
  </div>
</div>



@endsection