<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTROS CORREOS</title>
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
                    <a href="{{route('importar.tablauno')}}">SUBIR ARCHIVO</a>
                    <a href="{{route('tablados.index')}}">ACTUALIZAR E IMPRIMIR</a>
                    <a href="{{route('logout')}}"><img src="{{ asset('imagenes/cerrar-sesion.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    <main>

        <div class="tabla-otros">
            <div class="contenedor-tabla-otros">

                <div class="contenedor-titulo">
                    <h2>TABLA OTROS CORREOS</h2>
                    <div class="boton-nuevo">
                        <a href="{{route('otros.nuevocapturar')}}">NUEVO</a>
                    </div>
                </div>
                <table class="table-otros">
                    <thead>
                        <tr>
                            <th>NUMERO</th>
                            <th>DENOMINACION</th>
                            <th>NOMBRE</th>
                            <th>AREA</th>
                            <th>CORREO</th>
                            <th>CONTRASEÑA</th>
                            <th>EDITAR</th>
                            <th>IMPRIMIR</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach($datos as $dato)

                        <tr>
                            <form action="{{url('generarotros',$dato->id)}}" method="get">
                                <td>{{$dato->id}}</td>
                                <td>{{$dato->denominacion}}</td>
                                <input type="hidden" value="{{$dato->denominacion}}" name="denominacion">
                                <td>{{$dato->nombre}}</td>
                                <input type="hidden" value="{{$dato->nombre}}" name="nombre">
                                <td>{{$dato->area}}</td>
                                <td>{{$dato->correo}}</td>
                                <input type="hidden" value="{{$dato->correo}}" name="correo">
                                <td>{{$dato->contrasena}}</td>
                                <input type="hidden" value="{{$dato->contrasena}}" name="contrasena">
                                <td><a href="{{route('otros.editar',$dato->id)}}">EDITAR</a></td>
                                <td> <button type="submit">IMPRIMIR</button></td>
                        </tr>
                        </form>
                        @endforeach

                    </tbody>
                </table>


            </div>
        </div>
    </main>
</body>

</html>