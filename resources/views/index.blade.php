<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="{{ url('css/materialize.css') }}">
</head>

<body></body>

<nav class=" blue-grey darken-4">
  <div class="container">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo">SistematicCutex</a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="{{route('index')}}">inicio</a></li>
        <li><a href="{{route('about')}}">acerca de</a></li>
        <li><a href="{{route('contact')}}">contacto</a></li>

      </ul>
    </div>
</nav>

<ul class="sidenav" id="mobile-demo">
  <li><a href="{{route('index')}}">inicio</a></li>
  <li><a href="{{route('about')}}">acerca de</a></li>
  <li><a href="{{route('contact')}}">contacto</a></li>

</ul>
<div class="container">
  <h1>inicio</h1>
</div>
<div class="container">
  <div class="row">
    <div class="col l4">
      <div class="card">
        <div class="card-image">
          <img src="{{url('img/card-index-1.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>
            I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
        </div>

      </div>
    </div>
    <div class="col l4 s6">
      <div class="card">
        <div class="card-image">
          <img src="{{url('img/card-index-2.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>
            I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
        </div>

      </div>

    </div>
    <div class="col l4 s6">
      <div class="card">
        <div class="card-image">
          <img src="{{url('img/card-index-3.jpg')}}">
          <span class="card-title">Card Title</span>
        </div>
        <div class="card-content">
          <p>
            I am a very simple card. I am good at containing small bits of information.
            I am convenient because I require little markup to use effectively.</p>
        </div>
      </div>








      <script src="https://code.jquery.com/jquery-3.6.3.js"></script>
      <script src="{{ url('js/materialize.js') }}"></script>


      <script>
        $(document).ready(function() {
          $('.sidenav').sidenav();
        });
      </script>

      </body>

</html>