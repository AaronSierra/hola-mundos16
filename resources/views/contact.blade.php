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

<body>
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
        <h1>contacto</h1>
        <p> SistematicCutex empresa liderada por cuatro jovenes emprendedores que busca ayudar a muchas familias en su camino ala industria</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d214040.75025393735!2d-74.13018597377452!3d4.563712755408255!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f99bfd2a459a9%3A0x352a5134b65e607b!2sMonserrate!5e0!3m2!1ses!2sco!4v1677007773534!5m2!1ses!2sco" width="900" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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