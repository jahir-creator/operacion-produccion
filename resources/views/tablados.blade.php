<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMPRIMIR DATOS</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
</head>

<body>
    <header>
        <div class="contenedor-header">
            <div class="header-logo">

            </div>
        </div>
    </header>
    <main>

        <div class="main-contenedor">
            <div class="main-botones">
                <div class="boton-areas">
                    <a href="{{route('todos')}}">TODOS</a>
                    <a href="{{route('alcaldia')}}">OFICINA DE LA ALCALDIA</a>
                    <button>DIRECCION GENERAL DE GOBIERNO Y DE GESTION INTEGRAL DE RIESGOS Y PROTECCION CIVIL</button>
                    <button>DIRECCION EJECUTIVA DE ASUNTOS JURIDICOS</button>
                    <button>DIRECCION GENERAL DE ADMINISTRACION</button>
                    <button>DIRECCION GENERAL DE OBRAS Y DESARROLLO URBANO</button>
                    <button>DIRECCION GENERAL DE SERVICIOS URBANOS</button>
                    <button>DIRECCION EJECUTIVA DE PLANEACION DEL DESARROLLO Y SUSTENTABILIDAD</button>
                    <button>DIRECCION GENERAL DE DESARROLLO SOCIAL</button>
                    <button>DIRECCION GENERAL DE PARTICIPACION CIUDADANA</button>
                </div>
            </div>
            <div class="main-tabla">
                
                <table>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>AREA</th>
                    <th>CORREO</th>
                    <th>CONTRASEÑA</th>
                    <th>IMPRIMIR</th>
                    <th>ACTUALIZAR</th>
                    
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
                       <td> <button type="submit">GUARDAR</button></td>
                    
                        <td><a href="{{route('tablados.editar',$tbd->id)}}" value="{{$tbd->id}}">ACTUALIZAR</a></td>
                    </tr>
                   
                    </form>
                    @endforeach
                    
                </table>
            </div>

      


           
        </div>
    </main>
   
</body>

</html>