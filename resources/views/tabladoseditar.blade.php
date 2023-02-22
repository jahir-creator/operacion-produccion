<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <div class="main-contenedor">
            <div class="formulario">
                <h2>EDITAR O GENERAR CORREO Y CONTRASEÑA DE {{$tabla->nombre}}</h2>
                <div class="formulario-datos">
                    <form action="{{url('tabladoseditar',$tabla->id)}}" method="post">
                        @csrf
                        @method('put')
                        <div class="datos">
                            <label for="">DENOMINACION</label>
                            <input type="text" value="{{$tabla->denominacion}}">
                        </div>
                        <div class="datos">
                            <label for="">NOMBRE</label>
                            <input type="text" value="{{$tabla->nombre}}">
                        </div>
                        <div class="datos">
                            <label for="">CORREO</label>
                            <input type="email" value="{{$tabla->correo}}" name="correo">
                        </div>
                        <div class="datos">
                            
                                <label for="">CONTRASEÑA</label>
                                <input type="text" value="{{$tabla->contrasena}}" name="pass">
                        </div>
                        <div class="boton-guardar">
                            <button type="submit">GUARDAR</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="generador">
                <h2>GENERADOR DE CONTRASEÑAS</h2>
                <div class="generador-contenedor">
                    <label for="pass-generado">GENERAR CONTRASEÑA</label>
                    <input type="text" name="pass-generado" value="{{$password}}">
                    <a href="{{route('tablados.password')}}">GENERAR</a>
                </div>
            </div>
        </div>
    </main>

</body>

</html>