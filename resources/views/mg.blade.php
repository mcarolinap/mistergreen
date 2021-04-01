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
  </div>
</div>

<div class="w-container">
  <img src="rio-limpo.jpg" style="width: 100%; height: 500px">
</div>

<div class="w-container" style="background-color: #f0f0f0bd;">
  <div class="row">
    <div class="col-md-6">
      <p id="text">Somos uma empresa formada por uma equipa dinâmica e criada com o objetivo de produzir e comercializar produtos de jardinagem. Assentando sobretudo a sua produção na transformação de pedras decorativas naturais, pintadas e areias, para uma aplicação nos mais variados fins, tais como decoração, jardins, lagos, aquários, pavimentos, resinas, construção civil, etc... <br>
      Os nossos técnicos encontram-se ao vosso inteiro dispor para qualquer aconselhamento que lhes pareça necessário.</p>
    </div>
  </div>
</div>

<p id="title">TOP VENDAS</p>
  <div class="row" id="cards">
    <div class="col-md-4">
      <div class="card">
        <img src="VermelhoParisROL.jpg" style="width:100%">
        <div class="container">
          <h4>Vermelho Paris</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="BrancoAlentejoROL.jpg" style="width:100%">
        <div class="cont">
          <h4>Branco Alentejo</h4>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="card">
        <img src="PretoCarapinhaROL.jpg" style="width:100%">
        <div class="cont">
          <h4>Preto Carapinha</h4>
        </div>
      </div>
    </div>
  </div>

@endsection