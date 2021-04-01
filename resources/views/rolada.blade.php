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


<div class="col-md-auto">
  <div class="row" style="margin:30px">
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="AmareloHondurasROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Amarelo Honduras</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="AmareloLimaoROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Amarelo Limão</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="AmareloRibatejoROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Amarelo Ribatejo</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin:30px">
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="BrancoAlentejoROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Branco Alentejo</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="BrancoPirineusROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Branco Pirinéus</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="CastanhoHondurasROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Castanho Honduras</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin:30px">
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="CinzentoLondresROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Cinzento Londres</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="CinzentoVianaROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Cinzento Viana</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="PretoCarapinhaROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Preto Carapinha</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin:30px">
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="RosaBrasilROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Rosa Brasil</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="RosaDeMaltaROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Rosa de Malta</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="SalmaoROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Salmão</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row" style="margin:30px">
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="SeixoROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Seixo</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="VerdePeruROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Verde Perú</p></a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="image">
        <img class="image_img" src="VermelhoParisROL.jpg">
        <div class="image_overlay">
          <div class="image_title">
            <a class="link" href="{{route ('quantidades')}}"><p class="image_description">Vermelho Paris</p></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection