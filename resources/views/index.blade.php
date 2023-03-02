<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
</head>

<body>
    <header>
        <div class="contenedor-header">
            <div class="header-logo">
                <div class="titulo-header">
                    <h2>ALCALDIA DE IZTACALCO</h2>
                </div>
                <div class="nav-header">
                    <a href="{{route('logout')}}"><img src="{{ asset('imagenes/cerrar-sesion.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    <main class="main-inde">

        <h1>JUD OPERACION Y PRODUCCION</h1>
        <div class="main-card">

            <div class="card-index">
                <div class="card-flex">
                    <a href="{{route('importar.tablauno')}}">
                        <div class="separar">
                            <div class="titulo">
                                <h3>SUBIR ARCHIVO</h3>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('imagenes/cargar.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <div class="card-index">
                <div class="card-flex">
                    <a href="{{route('tablados.index')}}">
                        <div class="separar">
                            <div class="titulo">
                                <h3>ACTUALIZAR</h3>
                            </div>
                            <div class="icon">
                                <img src="{{ asset('imagenes/sincronizar.png') }}" alt="">
                            </div>
                        </div>
                    </a>
                </div>
            </div>


        </div>

    </main>
</body>

</html>