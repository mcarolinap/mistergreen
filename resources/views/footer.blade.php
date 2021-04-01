<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Mister Green</title>
    <link href="{{asset('css/mg.css')}}" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" ></script>
</head>
<body>

<main>
    @yield('content')
</main>
<div class="w-container" style="background-color: #f0f0f0bd;">
  <div class="row" id="links">
    <div class="col-md-6 text-center" style="margin-top:20px">
      <p>LINKS</p>
        <div class="col-md-6" style="margin:auto; text-align: justify">
          <a class="links" href="{{route ('mg')}}"><img class="icons" src="pedras.png">Home<br></a>
          <a class="links" href="{{route ('sobre')}}"><img class="icons" src="pedras.png">Empresa<br></a>
          <a class="links" href=""><img class="icons" src="pedras.png">Produtos<br></a>
          <a class="links" href="{{route ('galeria')}}"><img class="icons" src="pedras.png">Galeria<br></a>
          <a class="links" href="{{route ('contactos')}}"><img class="icons" src="pedras.png">Contactos<br></a>
        </div>
    </div>
    <div class="col-md-6 text-center" style="margin-top:20px">
      <p>PRODUTOS</p>
      <div class="col-md-6" style="margin:auto; text-align: justify">
          <a class="links" href="{{ route ('rolada')}}"><img class="icons" src="pedras.png">Roladas<br></a>
          <a class="links" href="{{route ('gravilha')}}"><img class="icons" src="pedras.png">Gravilha<br></a>
          <a class="links" href="{{route ('areias')}}"><img class="icons" src="pedras.png">Areias<br></a>
          <a class="links" href=""><img class="icons" src="pedras.png">Blocos de Betão<br></a>
          <a class="links" href=""><img class="icons" src="pedras.png">Travessas de caminhos de ferro<br></a>
          <a class="links" href=""><img class="icons" src="pedras.png">Gabiões Autoportantes<br></a>
        </div>
    </div>
  </div>
</div>
<footer class="footer" id="background-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-auto col-sm-12 text-center" style="text-align:right" >
                    <p style="font-size:15px">Copyright &copy; 2020 Mister Green - All rights reserved</p> 
                </div>
                <div class="col-md-auto col-sm-12 ml-md-auto text-center">
                    <div class="my-3">
                        <a href="" target="_blank"><img class="m-1 social-icon hvr-grow" style="width:20px;" src="facebook.svg"></a>
                        <a href="" target="_blank"><img class="m-1 social-icon hvr-grow" style="width:20px;" src="email.svg"></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</div>
</body>

</html>










