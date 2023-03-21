<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NUEVO OTRO CORREO</title>
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
                    <a href="{{route('index')}}">PRINCIPAL</a>
                    <a href="{{route('tablados.index')}}">ACTUALIZAR E IMPRIMIR</a>
                    <a href="{{route('importar.tablauno')}}">SUBIR ARCHIVO</a>
                    <a href="{{route('otros.tabla')}}">REGRESAR</a>
                    <a href="{{route('logout')}}"><img src="{{ asset('imagenes/cerrar-sesion.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="main-contenedor-editar">

            <div class="formulario">
                <fieldset>
                    <legend>GENERAR NUEVO</legend>
                    <div class="formulario-datos">
                        <form action="{{route('otros.nuevocapturar')}}" method="post">
                            @csrf
                            <div class="datos">
                                <label for="">DENOMINACION</label>
                                <input type="text" placeholder="INGRESA UNA DENOMINACION" name="denominacion">
                            </div>
                            <div class="datos">
                                <label for="">NOMBRE</label>
                                <input type="text" placeholder="INGRESA UN NOMBRE" name="nombre">
                            </div>
                            <div class="datos">
                                <label for="">AREA</label>
                                <select name="area" id="">
                                    @foreach($areas as $area)
                                    <option value="{{$area->id}}">{{$area->area}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="datos">
                                <label for="">CORREO</label>
                                <input type="text" placeholder="INGRESA UN CORREO" name="correo" class="correo">
                            </div>
                            <div class="datos">
                                <label for="">CONTRASEÑA</label>
                                <input type="text" placeholder="INGRESA UNA CONTRASEÑA" name="contrasena" class="contrasena">
                            </div>
                            <div class="boton-guardar">
                                <input type="submit" value="REGISTRAR" class="sub">
                            </div>
                        </form>
                    </div>
                </fieldset>
            </div>


            <div class="generador">
            <fieldset>
                    <legend>GENERADOR DE CONTRASEÑAS</legend>
                <div class="generador-contenedor">
                    <label for="">GENERAR CONTRASEÑA</label>
                    <input type="text" name="pass-generado" value="{{$password}}">
                    <a href="{{route('otros.password')}}">GENERAR</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>