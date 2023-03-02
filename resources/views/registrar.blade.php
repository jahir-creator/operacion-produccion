<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrar</title>
</head>
<body>
    <main>
        <div>
           <form action="{{route('registrar.register')}}" method="POST">
            @csrf
            <label for="">NOMBRE</label>
            <input type="text" name="nombre">
            </div>
            <div>
            <label for="">USUARIO</label>
            <input type="text" name="usuario">
            </div>
            <div>
            <label for="">CONTRASEÑA</label>
            <input type="password" name="password">
            </div>
            <div>
            <input type="submit" value="REGISTRAR">
           
            </div>
            </form>
        </div>
    </main>
</body>
</html>