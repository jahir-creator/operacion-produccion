<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="tabla-alcaldia" >

    <h3>ALCALDIA</h3>
   
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
                    <tr>
                        <td>{{$tba->numero}}</td>
                        <td>{{$tba->denominacion}}</td>
                        <td>{{$tba->nombre}}</td>
                        <td>{{$tba->correo}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
</body>
</html>