<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPRIMIR DATOS</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
</head>

<body>
    <input type="hidden" value="{{auth()->user()->nombre}}">
    <header>
        <div class="contenedor-header">
            <div class="header-logo">
                <div class="titulo-header">
                    <h2>ALCALDIA DE IZTACALCO</h2>
                </div>
                <div class="nav-header">
                    <a href="{{route('index')}}">PRINCIPAL</a>
                    <a href="{{route('importar.tablauno')}}">SUBIR ARCHIVO</a>
                    <a href="{{route('logout')}}"><img src="{{ asset('imagenes/cerrar-sesion.png') }}" alt=""></a>
                </div>
            </div>
        </div>
    </header>
    <main>

        <div class="ventana" id="ayuda">
            <div class="cerrar">
                <a href="javascript:cerrar()">
                    <img src="{{ asset('imagenes/cancelar.png') }}" alt="cerrar">
                </a>
            </div>
            <h3>INFORMACION</h3>
            <div class="info">
                <p>1:- OFICINA DE LA ALCALDIA -:</p>
                <P>2:- DIRECCION GENERAL DE GOBIERNO Y DE GESTION INTEGRAL DE RIESGOS Y PROTECCION CIVIL -:</P>
                <P>3:- DIRECCION EJECUTIVA DE ASUNTOS JURIDICOS -:</P>
                <P>4:- DIRECCION GENERAL DE ADMINISTRACION -:</P>
                <P>5:- DIRECCION GENERAL DE OBRAS Y DESARROLLO URBANO -:</P>
                <P>6:- DIRECCION GENERAL DE SERVICIOS URBANOS :-</P>
                <P>7:- DIRECCION EJECUTIVA DE PLANEACION DEL DESARROLLO Y SUSTENTABILIDAD -:</P>
                <P>8:- DIRECCION GENERAL DE DESARROLLO SOCIAL -:</P>
                <P>9:- DIRECCION GENERAL DE PARTICIPACION CIUDADANA -:</P>
            </div>

        </div>
        <div class="main-contenedor">
            <div class="popup">
                <a href="javascript:abrir()">
                    <img src="{{ asset('imagenes/advertencia.png') }}" alt="cerrar">
                </a>
            </div>
            <div class="main-botones">
                <h2>EXPORTAR EN EXCEL</h2>
                <div class="boton-areas">
                    <a href="{{route('todos')}}">TODOS</a>
                    <!-- OFICINA DE LA ALCALDIA == 1 -->
                    <a href="{{route('alcaldia')}}">1</a>
                    <!-- DIRECCION GENERAL DE GOBIERNO Y DE GESTION INTEGRAL DE RIESGOS Y PROTECCION CIVIL == 2 -->
                    <a href="{{route('Dgggirpcivil')}}">2</a>
                    <!-- DIRECCION EJECUTIVA DE ASUNTOS JURIDICOS == 3 -->
                    <a href="{{route('Deajuridicos')}}">3</a>
                    <!-- DIRECCION GENERAL DE ADMINISTRACION == 4 -->
                    <a href="{{route('Dgadministracion')}}">4</a>
                    <!-- DIRECCION GENERAL DE OBRAS Y DESARROLLO URBANO == 5 -->
                    <a href="{{route('Dgodurbano')}}">5</a>
                    <!-- DIRECCION GENERAL DE SERVICIOS URBANOS == 6 -->
                    <a href="{{route('Dgsurbanos')}}">6</a>
                    <!-- DIRECCION EJECUTIVA DE PLANEACION DEL DESARROLLO Y SUSTENTABILIDAD == 7 -->
                    <a href="{{route('Depdsustentabilidad')}}">7</a>
                    <!-- DIRECCION GENERAL DE DESARROLLO SOCIAL == 8 -->
                    <a href="{{route('Dgdsocial')}}">8</a>
                    <!-- DIRECCION GENERAL DE PARTICIPACION CIUDADANA == 9 -->
                    <a href="{{route('Dgpciudadana')}}">9</a>
                </div>
            </div>

            <div class="tablas-botones">
                <h2>MOSTRAR DENOMINACIONES EN LA TABLA</h2>
                <div class="botones-grid">
                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="todos">TODOS</button>
                        </form>
                    </div>
                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="uno">1</button>
                        </form>
                    </div>

                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="dos">2</button>
                        </form>
                    </div>
                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="tres">3</button>
                        </form>
                    </div>
                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="cuatro">4</button>
                        </form>
                    </div>
                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="cinco">5</button>
                        </form>
                    </div>
                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="seis">6</button>
                        </form>
                    </div>
                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="siete">7</button>
                        </form>
                    </div>
                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="ocho">8</button>
                        </form>
                    </div>
                    <div class="azul">
                        <form action="" method="GET">
                            @csrf
                            <button type="submit" name="nueve">9</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="main-tabla">
                <h2>ACTUALIZAR E IMPRIMIR EN WORD</h2>
                <table class="tablados-table">
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>AREA</th>
                    <th>CORREO</th>
                    <th>CONTRASEÑA</th>
                    <th>IMPRIMIR</th>
                    <th>ACTUALIZAR</th>

                    @if(isset($_GET['todos']))
                    @foreach($tabla as $tbd)

                    <tr>
                        <form action="{{url('generaruno',$tbd->id)}}" method="get">
                            <td>{{$tbd->numero}}</td>
                            <input type="hidden" value="{{$tbd->numero}}" name="numero">
                            <td>{{$tbd->denominacion}}</td>
                            <input type="hidden" value="{{$tbd->denominacion}}" name="denominacion">
                            <td>{{$tbd->nombre}}</td>
                            <input type="hidden" value="{{$tbd->nombre}}" name="nombre">
                            <td>{{$tbd->area}}</td>
                            <td>{{$tbd->correo}}</td>
                            <input type="hidden" value="{{$tbd->correo}}" name="correo">
                            <td>{{$tbd->contrasena}}</td>
                            <input type="hidden" value="{{$tbd->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$tbd->id)}}" value="{{$tbd->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif
                    <!-- OFICINA DE LA ALCALDIA -->
                    @if(isset($_GET['uno']))
                    @foreach($uno as $dat)
                    <tr>
                        <form action="{{url('generaruno',$dat->id)}}" method="get">
                            <td>{{$dat->numero}}</td>
                            <input type="hidden" value="{{$dat->numero}}" name="numero">
                            <td>{{$dat->denominacion}}</td>
                            <input type="hidden" value="{{$dat->denominacion}}" name="denominacion">
                            <td>{{$dat->nombre}}</td>
                            <input type="hidden" value="{{$dat->nombre}}" name="nombre">
                            <td>{{$dat->area}}</td>
                            <td>{{$dat->correo}}</td>
                            <input type="hidden" value="{{$dat->correo}}" name="correo">
                            <td>{{$dat->contrasena}}</td>
                            <input type="hidden" value="{{$dat->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$dat->id)}}" value="{{$dat->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif
                    <!--DIRECCION GENERAL DE GOBIERNO Y DE GESTION INTEGRAL DE RIESGOS Y PROTECCION CIVIL 2-->
                    @if(isset($_GET['dos']))
                    @foreach($dos as $dat)
                    <tr>
                        <form action="{{url('generaruno',$dat->id)}}" method="get">
                            <td>{{$dat->numero}}</td>
                            <input type="hidden" value="{{$dat->numero}}" name="numero">
                            <td>{{$dat->denominacion}}</td>
                            <input type="hidden" value="{{$dat->denominacion}}" name="denominacion">
                            <td>{{$dat->nombre}}</td>
                            <input type="hidden" value="{{$dat->nombre}}" name="nombre">
                            <td>{{$dat->area}}</td>
                            <td>{{$dat->correo}}</td>
                            <input type="hidden" value="{{$dat->correo}}" name="correo">
                            <td>{{$dat->contrasena}}</td>
                            <input type="hidden" value="{{$dat->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$dat->id)}}" value="{{$dat->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif
                    <!-- DIRECCION EJECUTIVA DE ASUNTOS JURIDICOS 3 -->
                    @if(isset($_GET['tres']))
                    @foreach($tres as $dat)
                    <tr>
                        <form action="{{url('generaruno',$dat->id)}}" method="get">
                            <td>{{$dat->numero}}</td>
                            <input type="hidden" value="{{$dat->numero}}" name="numero">
                            <td>{{$dat->denominacion}}</td>
                            <input type="hidden" value="{{$dat->denominacion}}" name="denominacion">
                            <td>{{$dat->nombre}}</td>
                            <input type="hidden" value="{{$dat->nombre}}" name="nombre">
                            <td>{{$dat->area}}</td>
                            <td>{{$dat->correo}}</td>
                            <input type="hidden" value="{{$dat->correo}}" name="correo">
                            <td>{{$dat->contrasena}}</td>
                            <input type="hidden" value="{{$dat->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$dat->id)}}" value="{{$dat->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif
                    <!-- DIRECCION GENERAL DE ADMINISTRACION 4 -->
                    @if(isset($_GET['cuatro']))
                    @foreach($cuatro as $dat)
                    <tr>
                        <form action="{{url('generaruno',$dat->id)}}" method="get">
                            <td>{{$dat->numero}}</td>
                            <input type="hidden" value="{{$dat->numero}}" name="numero">
                            <td>{{$dat->denominacion}}</td>
                            <input type="hidden" value="{{$dat->denominacion}}" name="denominacion">
                            <td>{{$dat->nombre}}</td>
                            <input type="hidden" value="{{$dat->nombre}}" name="nombre">
                            <td>{{$dat->area}}</td>
                            <td>{{$dat->correo}}</td>
                            <input type="hidden" value="{{$dat->correo}}" name="correo">
                            <td>{{$dat->contrasena}}</td>
                            <input type="hidden" value="{{$dat->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$dat->id)}}" value="{{$dat->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif
                    <!--DIRECCION GENERAL DE OBRAS Y DESARROLLO URBANO 5 -->
                    @if(isset($_GET['cinco']))
                    @foreach($cinco as $dat)
                    <tr>
                        <form action="{{url('generaruno',$dat->id)}}" method="get">
                            <td>{{$dat->numero}}</td>
                            <input type="hidden" value="{{$dat->numero}}" name="numero">
                            <td>{{$dat->denominacion}}</td>
                            <input type="hidden" value="{{$dat->denominacion}}" name="denominacion">
                            <td>{{$dat->nombre}}</td>
                            <input type="hidden" value="{{$dat->nombre}}" name="nombre">
                            <td>{{$dat->area}}</td>
                            <td>{{$dat->correo}}</td>
                            <input type="hidden" value="{{$dat->correo}}" name="correo">
                            <td>{{$dat->contrasena}}</td>
                            <input type="hidden" value="{{$dat->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$dat->id)}}" value="{{$dat->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif
                    <!-- DIRECCION GENERAL DE SERVICIOS URBANOS 6 -->
                    @if(isset($_GET['seis']))
                    @foreach($seis as $dat)
                    <tr>
                        <form action="{{url('generaruno',$dat->id)}}" method="get">
                            <td>{{$dat->numero}}</td>
                            <input type="hidden" value="{{$dat->numero}}" name="numero">
                            <td>{{$dat->denominacion}}</td>
                            <input type="hidden" value="{{$dat->denominacion}}" name="denominacion">
                            <td>{{$dat->nombre}}</td>
                            <input type="hidden" value="{{$dat->nombre}}" name="nombre">
                            <td>{{$dat->area}}</td>
                            <td>{{$dat->correo}}</td>
                            <input type="hidden" value="{{$dat->correo}}" name="correo">
                            <td>{{$dat->contrasena}}</td>
                            <input type="hidden" value="{{$dat->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$dat->id)}}" value="{{$dat->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif
                    <!--*DIRECCION EJECUTIVA DE PLANEACION DEL DESARROLLO Y SUSTENTABILIDAD 7  -->
                    @if(isset($_GET['siete']))
                    @foreach($siete as $dat)
                    <tr>
                        <form action="{{url('generaruno',$dat->id)}}" method="get">
                            <td>{{$dat->numero}}</td>
                            <input type="hidden" value="{{$dat->numero}}" name="numero">
                            <td>{{$dat->denominacion}}</td>
                            <input type="hidden" value="{{$dat->denominacion}}" name="denominacion">
                            <td>{{$dat->nombre}}</td>
                            <input type="hidden" value="{{$dat->nombre}}" name="nombre">
                            <td>{{$dat->area}}</td>
                            <td>{{$dat->correo}}</td>
                            <input type="hidden" value="{{$dat->correo}}" name="correo">
                            <td>{{$dat->contrasena}}</td>
                            <input type="hidden" value="{{$dat->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$dat->id)}}" value="{{$dat->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif
                    <!--DIRECCION GENERAL DE DESARROLLO SOCIAL 8  -->
                    @if(isset($_GET['ocho']))
                    @foreach($ocho as $dat)
                    <tr>
                        <form action="{{url('generaruno',$dat->id)}}" method="get">
                            <td>{{$dat->numero}}</td>
                            <input type="hidden" value="{{$dat->numero}}" name="numero">
                            <td>{{$dat->denominacion}}</td>
                            <input type="hidden" value="{{$dat->denominacion}}" name="denominacion">
                            <td>{{$dat->nombre}}</td>
                            <input type="hidden" value="{{$dat->nombre}}" name="nombre">
                            <td>{{$dat->area}}</td>
                            <td>{{$dat->correo}}</td>
                            <input type="hidden" value="{{$dat->correo}}" name="correo">
                            <td>{{$dat->contrasena}}</td>
                            <input type="hidden" value="{{$dat->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$dat->id)}}" value="{{$dat->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif
                    <!-- DIRECCION GENERAL DE PARTICIPACION CIUDADANA 9 -->
                    @if(isset($_GET['nueve']))
                    @foreach($nueve as $dat)
                    <tr>
                        <form action="{{url('generaruno',$dat->id)}}" method="get">
                            <td>{{$dat->numero}}</td>
                            <input type="hidden" value="{{$dat->numero}}" name="numero">
                            <td>{{$dat->denominacion}}</td>
                            <input type="hidden" value="{{$dat->denominacion}}" name="denominacion">
                            <td>{{$dat->nombre}}</td>
                            <input type="hidden" value="{{$dat->nombre}}" name="nombre">
                            <td>{{$dat->area}}</td>
                            <td>{{$dat->correo}}</td>
                            <input type="hidden" value="{{$dat->correo}}" name="correo">
                            <td>{{$dat->contrasena}}</td>
                            <input type="hidden" value="{{$dat->contrasena}}" name="contrasena">
                            <td> <button type="submit">IMPRIMIR</button></td>

                            <td><a href="{{route('tablados.editar',$dat->id)}}" value="{{$dat->id}}">ACTUALIZAR</a></td>
                    </tr>
                    </form>
                    @endforeach

                    @endif



                </table>

            </div>

        </div>
    </main>
    <script>
        function abrir() {
            document.getElementById("ayuda").style.display = "block";
        }

        function cerrar() {
            document.getElementById("ayuda").style.display = "none";
        }
    </script>
</body>

</html>