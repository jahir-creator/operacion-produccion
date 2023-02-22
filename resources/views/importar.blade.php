<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OPERACION Y PRODUCION IMPORTAR</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
</head>

<body>
    <main>
        <div>
            <form action="{{url('importar/importar')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" name="documento">
                <button type="submit">Importar</button>
            </form>
        </div>
        <div class="limpiar">
                        <a href="{{route('tablauno.limpiar')}}">limpiar</a>
                    </div>
        <div class="tablas">
            <div class="contenedor-tablas-flex">
                <div class="contenedor-uno">


                    <h2>TABLA NUEVA</h2>
                    <table class="tabla-uno">

                        <th>NUMERO</th>
                        <th>DENOMINACION</th>
                        <th>NOMBRE</th>
                        <th>AREA</th>
                        <th>ACTUALIZAR</th>

                        @foreach($tablados as $tbd)
                        @foreach($tablaunos as $tbu)

                        <tr>
                            @if($tbd->numero === $tbu->numero)
                            <form action="{{url('importar/update',$tbu->id)}}" method="post">
                                @csrf
                                @method('put')
                                @if($tbd->numero === $tbu->numero && $tbd->nombre === $tbu->nombre && $tbd->denominacion === $tbu->denominacion && $tbd->area === $tbu->area)
                                <td>{{$tbu->numero}}</td>
                                <td>{{$tbu->denominacion}}</td>
                                <td>{{$tbu->nombre}}</td>
                                <td>{{$tbu->area}}</td>
                                @else
                                <td style="color: red;">{{$tbu->numero}}</td>
                                <input type="hidden" value="{{$tbu->numero}}" name="numero">
                                <td style="color: red;">{{$tbu->denominacion}}</td>
                                <input type="hidden" value="{{$tbu->denominacion}}" name="denominacion">
                                <td style="color: red;">{{$tbu->nombre}}</td>
                                <input type="hidden" value="{{$tbu->nombre}}" name="nombre">
                                <td style="color: red;">{{$tbu->area}}</td>
                                <input type="hidden" value="{{$tbu->id_area}}" name="area">
                                <td style="color: red;"><button type="submit">ACTUALIZAR</button></td>
                                @endif
                                @endif
                            </form>
                        </tr>
                        @endforeach
                        @endforeach
                    </table>
                </div>



                <div class="contenedor-dos">
                    <h2>TABLA VIEJA</h2>
                    <table class="tabla-uno">

                        <th>NUMERO</th>
                        <th>DENOMINACION</th>
                        <th>NOMBRE</th>
                        <th>AREA</th>

                        @foreach($tablaunos as $tbu)
                        @foreach($tablados as $tbd)
                        <tr>
                            <!-- cehchar el id por que no va a concordar con la tabla dos para comparar o eliminarlo -->
                            @if($tbd->numero === $tbu->numero)
                            @if($tbd->numero === $tbu->numero && $tbd->nombre === $tbu->nombre && $tbd->denominacion === $tbu->denominacion && $tbd->area === $tbu->area)
                            <td>{{$tbd->numero}}</td>
                            <td>{{$tbd->denominacion}}</td>
                            <td>{{$tbd->nombre}}</td>
                            <td>{{$tbd->area}}</td>
                            @else
                            <td style="color: red;">{{$tbd->numero}}</td>
                            <td style="color: red;">{{$tbd->denominacion}}</td>
                            <td style="color: red;">{{$tbd->nombre}}</td>
                            <td style="color: red;">{{$tbd->area}}</td>
                            @endif
                            @endif
                        </tr>
                        @endforeach
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>