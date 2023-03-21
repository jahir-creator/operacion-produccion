<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR TABLA NUEVA</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
</head>

<body>
    <header>
    <header>
        <div class="contenedor-header">
            <div class="header-logo">
                <div class="titulo-header">
                    <h2>ALCALDIA DE IZTACALCO</h2>
                </div>
                <div class="nav-header">
                    <a href="{{route('index')}}">PRINCIPAL</a>
                    <a href="{{route('tablados.index')}}">ACTUALIZAR E IMPRIMIR</a>
                    <a href="{{route('otros.tabla')}}">OTROS CORREOS</a>
                    <a href="{{route('tablados.index')}}">REGRESAR</a>
                    <a href="{{route('logout')}}"><img src="{{ asset('imagenes/cerrar-sesion.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    </header>
    <main>
        <div class="main-contenedor-editar">
            <div class="formulario">
                <fieldset>
                    <legend>EDITAR O GENERAR CORREO Y CONTRASEÑA</legend>
                    <h2>{{$tabla->nombre}}</h2>
                    <div class="formulario-datos">
                        <form action="{{url('tabladoseditar',$tabla->id)}}" method="post">
                            @csrf
                            @method('put')
                            <div class="datos">
                                <label for="">DENOMINACION</label>
                                <input type="text" value="{{$tabla->denominacion}}" disabled="disabled">
                            </div>
                            <div class="datos">
                                <label for="">NOMBRE</label>
                                <input type="text" value="{{$tabla->nombre}}" name="nombre">
                            </div>
                            <div class="datos">
                                <label for="">CORREO</label>
                                <input type="email" value="{{$tabla->correo}}" name="correo" class="correo">
                            </div>
                            <div class="datos">

                                <label for="">CONTRASEÑA</label>
                                <input type="text" value="{{$tabla->contrasena}}" name="pass" class="contrasena">
                            </div>
                            <div class="boton-guardar">
                                <button type="submit">GUARDAR</button>
                            </div>
                        </form>
                    </div>
                </fieldset>
            </div>

            <div class="generador">
                <fieldset>
                    <legend>GENERADOR DE CONTRASEÑAS</legend>
                    <div class="generador-contenedor">
                       
                        <label for="pass-generado">GENERAR CONTRASEÑA</label>
                        <input type="text" name="pass-generado" value="{{$password}}">
                        <a href="{{route('tablados.password',$tabla->id)}}">GENERAR</a>
                        
                    </div>
                </fieldset>
            </div>
        </div>
    </main>

</body>

</html>