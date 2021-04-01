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
    <div class="centered" id="bg">Empresa
      <h4><b>Sobre nós</b></h4> 
    </div>
</div>

<div class="w-container" style="margin-top:30px">
    <div class="row">
        <div class="col-md-7">
            <p id="text"> A Mister Green é uma empresa jovem, fundada em 2000, situada em Ota, Alenquer. Somos especializados na produção e comercialização de pedras decorativas naturais, pintadas e areias para diversos fins como decoração, jardins, lagos, aquários, pavimentos, resinas, construção civil. <br>
            Estamos presentes em diversas feiras por todo o país e além fronteiras, como Espanha. O nosso objetivo é demonstrar as potencialidades dos nossos produtos na decoração de espaços e na realização de diversas obras de construção civil.</p>
        </div>
        <div class="col-md-5 text-center" style="padding:30px">
            <img src="Jardim1.jpg">
        </div>
    </div>
</div>

<div class="w-container" id="feiras" style="background-color: #f0f0f0bd; height:300px; margin-top: 30px">
  <div class="row" style="margin-left: 20px; margin-right: 20px; margin-top: 30px ">
    <div class="col-md-4">
    <img src="expojardim.jpg"style="width:100%; margin-top: 40px ">
    <div class="cont">
      <h1 style="font-size:30px">Expojardim 2019</h1>
    </div>
    </div>
    <div class="col-md-4">
    <img src="expojardim.jpg"style="width:100%; margin-top: 40px ">
    <div class="cont">
      <h1 style="font-size:30px">Expojardim 2019</h1>
    </div>
    </div>  
    <div class="col-md-4">
    <img src="expojardim.jpg"style="width:100%; margin-top: 40px ">
    <div class="cont">
      <h1 style="font-size:30px">Expojardim 2019</h1>
    </div>
    </div>




  </div>
</div>

<p id="title">Porquê a Mister Green?</p>
<div class="row">
    
</div>





@endsection