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
    <div class="centered" id="bg">Galeria
      <h4><b>Exemplos Decorativos</b></h4> 
    </div> 
</div>

<p id="text" style="text-align:center">Alguns exemplos decorativos com os nossos produtos, que podem servir de inspiração para o seu projeto!</p>

<div class="slideshow">
  <div class="slider">
    <div class="slides">
      <input type="radio" name="radio-btn" id="radio1">
      <input type="radio" name="radio-btn" id="radio2">
      <input type="radio" name="radio-btn" id="radio3">
      <input type="radio" name="radio-btn" id="radio4">
      <input type="radio" name="radio-btn" id="radio5">
      <input type="radio" name="radio-btn" id="radio6">
      <input type="radio" name="radio-btn" id="radio7">
      <input type="radio" name="radio-btn" id="radio8">
      
      <div class="slide first">
        <img src="Jardim1.jpg" alt="">
      </div>
      <div class="slide">
        <img src="Jardim2.jpg" alt="">
      </div>
      <div class="slide">
        <img src="Jardim3.jpg" alt="">
      </div>
      <div class="slide">
        <img src="Jardim4.jpg" alt="">
      </div>
      <div class="slide">
        <img src="Jardim5.jpg" alt="">
      </div>
      <div class="slide">
        <img src="Jardim6.jpg" alt="">
      </div>
      <div class="slide">
        <img src="Jardim7.jpg" alt="">
      </div>
      <div class="slide">
        <img src="Jardim8.jpg" alt="">
      </div>

      <div class="navigation-auto">
        <div class="auto-btn1"></div>
        <div class="auto-btn2"></div>
        <div class="auto-btn3"></div>
        <div class="auto-btn4"></div>
        <div class="auto-btn5"></div>
        <div class="auto-btn6"></div>
        <div class="auto-btn7"></div>
        <div class="auto-btn8"></div>
      </div>
    </div>

    <div class="navigation-manual">
      <label for="radio1" class="manual-btn"></label>
      <label for="radio2" class="manual-btn"></label>
      <label for="radio3" class="manual-btn"></label>
      <label for="radio4" class="manual-btn"></label>
      <label for="radio5" class="manual-btn"></label>
      <label for="radio6" class="manual-btn"></label>
      <label for="radio7" class="manual-btn"></label>
      <label for="radio8" class="manual-btn"></label>
    </div>
  </div>
</div>

<script>
  var counter = 1;
  setInterval(function(){
    document.getElementById("radio" + counter).checked = true;
    counter++;
    if(counter > 8){
      counter=1;
    }
  }, 4000);

</script>


@endsection