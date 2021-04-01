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
      <h4><b>Tamanhos e Quantidades</b></h4> 
    </div>
</div>

<p id="text">Por favor selecione o calibre da pedra que pretende, a expessura da camada a construir, e indique o tamanho em metros quadrados da área a construir.</p>

<div class="w-container" style="background-color: #f0f0f0bd;">
  <div class="container">
    <form action="" id="text">
        <label for="calibre">Calibre da Pedra:</label>
        <select id="calibre" name="calibre">
            <option value="10/20">10/20</option>
            <option value="20/40">20/40</option>
            <option value="40/60">40/60</option>
            <option value="60/100">60/100</option>
            <option value="100/200">100/200</option>
        </select>
        <label for="expessura">Expessura da camada:</label>
        <select id="expessura" name="expessura">
            <option value="5">5 cm</option>
            <option value="7">7 cm</option>
            <option value="10">10 cm</option>
            <option value="12">12 cm</option>
            <option value="25">25 cm</option>
        </select>
        <label for="area">Área a construir (m2):</label>
        <input type="number" id="area" name="area" step="any">
        <input type="submit" value="Calcular">
    </form>
    <p id="text">Total de pedra em toneladas:</p>
  </div>
</div>

<p id="text">Peça já o seu orçamento! Contacte-nos para mais informações!</p>
</div>

<script>

var total=0;  
var calibre = document.getElementById("calibre");
var expessura = document.getElementById("expessura");
var area = document.getElementById("area");

function calculate() {
  total=expessura*area;
}

</script>

@endsection