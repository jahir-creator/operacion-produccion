<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="tabla-alcaldia">
        <div class="">
        <h3> OFICINA DE LA ALCALDIA</h3>
        <table>
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tablados as $tba)
                @if($tba->id_area === 1 )
                <tr>
                    <td>{{$tba->numero}}</td>
                    <td>{{$tba->denominacion}}</td>
                    <td>{{$tba->nombre}}</td>
                    <td>{{$tba->correo}}</td>
                </tr>
                @endif
                @endforeach

            </tbody>
        </table>
        </div>
        <div>
        <h3>DIRECCION GENERAL DE GOBIERNO Y DE GESTION INTEGRAL DE RIESGOS Y PROTECCION CIVIL</h3>
        <table>
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tablados as $tba)
                @if($tba->id_area === 2 )
                <tr>
                    <td>{{$tba->numero}}</td>
                    <td>{{$tba->denominacion}}</td>
                    <td>{{$tba->nombre}}</td>
                    <td>{{$tba->correo}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
        </div>

        <h3>DIRECCION EJECUTIVA DE ASUNTOS JURIDICOS</h3>
        <table>
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tablados as $tba)
                @if($tba->id_area === 3 )
                <tr>
                    <td>{{$tba->numero}}</td>
                    <td>{{$tba->denominacion}}</td>
                    <td>{{$tba->nombre}}</td>
                    <td>{{$tba->correo}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

        <h3>DIRECCION GENERAL DE ADMINISTRACION</h3>
        <table>
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tablados as $tba)
                @if($tba->id_area === 4 )
                <tr>
                    <td>{{$tba->numero}}</td>
                    <td>{{$tba->denominacion}}</td>
                    <td>{{$tba->nombre}}</td>
                    <td>{{$tba->correo}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

        <h3>DIRECCION GENERAL DE OBRAS Y DESARROLLO URBANO</h3>
        <table>
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tablados as $tba)
                @if($tba->id_area === 5 )
                <tr>
                    <td>{{$tba->numero}}</td>
                    <td>{{$tba->denominacion}}</td>
                    <td>{{$tba->nombre}}</td>
                    <td>{{$tba->correo}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

        <h3>DIRECCION GENERAL DE SERVICIOS URBANOS</h3>
        <table>
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tablados as $tba)
                @if($tba->id_area === 6 )
                <tr>
                    <td>{{$tba->numero}}</td>
                    <td>{{$tba->denominacion}}</td>
                    <td>{{$tba->nombre}}</td>
                    <td>{{$tba->correo}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

        <h3>DIRECCION EJECUTIVA DE PLANEACION DEL DESARROLLO Y SUSTENTABILIDAD</h3>
        <table>
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tablados as $tba)
                @if($tba->id_area === 7 )
                <tr>
                    <td>{{$tba->numero}}</td>
                    <td>{{$tba->denominacion}}</td>
                    <td>{{$tba->nombre}}</td>
                    <td>{{$tba->correo}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

        <h3>DIRECCION GENERAL DE DESARROLLO SOCIAL</h3>
        <table>
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tablados as $tba)
                @if($tba->id_area === 8 )
                <tr>
                    <td>{{$tba->numero}}</td>
                    <td>{{$tba->denominacion}}</td>
                    <td>{{$tba->nombre}}</td>
                    <td>{{$tba->correo}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>

        <h3>DIRECCION GENERAL DE PARTICIPACION CIUDADANA</h3>
        <table>
            <thead>
                <tr>
                    <th>NUMERO</th>
                    <th>DENOMINACION</th>
                    <th>NOMBRE</th>
                    <th>CORREO</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tablados as $tba)
                @if($tba->id_area === 9 )
                <tr>
                    <td>{{$tba->numero}}</td>
                    <td>{{$tba->denominacion}}</td>
                    <td>{{$tba->nombre}}</td>
                    <td>{{$tba->correo}}</td>
                </tr>
                @endif
                @endforeach
            </tbody>
        </table>
    </div>
</body>

</html>