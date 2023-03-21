<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERACION Y PRODUCION IMPORTAR</title>
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
                    <a href="{{route('otros.tabla')}}">OTROS CORREOS</a>
                    <a href="{{route('logout')}}"><img src="{{ asset('imagenes/cerrar-sesion.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="contenedor-file">
            <div>
                <form action="{{url('importar/importar')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="documento" class="documento">
                    <button type="submit">Importar</button>
                </form>
            </div>
            <div class="limpiar">
                <a href="{{route('tablauno.limpiar')}}">limpiar</a>
            </div>
        </div>

        <div class="tablas">
            <div class="contenedor-tablas-flex">
                <div class="contenedor-uno">
                    <h2>TABLA NUEVA</h2>
                    <table class="tabla-uno">
                        <thead>
                            <tr>
                                <th>NUMERO</th>
                                <th>DENOMINACION</th>
                                <th>NOMBRE</th>
                                <th>AREA</th>
                                <th>ACTUALIZAR</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tablados as $tbd)
                            @foreach($tablaunos as $tbu)

                            @if($tbd->numero === $tbu->numero)
                            <form action="{{url('importar/update',$tbu->id)}}" method="post">
                                @csrf
                                @method('put')
                                @if($tbd->numero !== $tbu->numero || $tbd->nombre != $tbu->nombre || $tbd->denominacion != $tbu->denominacion || $tbd->area != $tbu->area)
                                <tr>
                                    <td style="color: red;">{{$tbu->numero}}</td>
                                    <td style="color: red;">{{$tbu->denominacion}}</td>
                                    <td style="color: red;">{{$tbu->nombre}}</td>
                                    <td style="color: red;">{{$tbu->area}}</td>
                                    <td style="color: red;"><button type="submit">ACTUALIZAR</button></td>
                                    <input type="hidden" value="{{$tbu->numero}}" name="numero">
                                    <input type="hidden" value="{{$tbu->denominacion}}" name="denominacion">
                                    <input type="hidden" value="{{$tbu->nombre}}" name="nombre">
                                    <input type="hidden" value="{{$tbu->id_area}}" name="area">
                                </tr>

                                @endif
                                @endif
                            </form>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>

                </div>



                <div class="contenedor-dos">
                    <h2>TABLA VIEJA</h2>
                    <table class="tabla-uno">
                        <thead>
                            <tr>
                                <th>NUMERO</th>
                                <th>DENOMINACION</th>
                                <th>NOMBRE</th>
                                <th>AREA</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tablaunos as $tbu)
                            @foreach($tablados as $tbd)

                            <!-- cehchar el id por que no va a concordar con la tabla dos para comparar o eliminarlo -->
                            @if($tbd->numero === $tbu->numero)
                            @if($tbd->numero !== $tbu->numero || $tbd->nombre !== $tbu->nombre || $tbd->denominacion !== $tbu->denominacion || $tbd->area !== $tbu->area)
                            <tr>
                                <td style="color: red;">{{$tbd->numero}}</td>
                                <td style="color: red;">{{$tbd->denominacion}}</td>
                                <td style="color: red;">{{$tbd->nombre}}</td>
                                <td style="color: red;">{{$tbd->area}}</td>
                                @endif
                                @endif
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </main>
</body>

</html>