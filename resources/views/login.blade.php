<!DOCTYPE html>
<html lang="es_MX">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/normalize.css') }}">
</head>

<body class="body-login" onload="mueveReloj()">

    <main class="main-login">
        <div class="contenedor-main">

            <div class="card">
                <div class="titulo">
                    <h1>J.U.D OPERACION Y PRODUCCION</h1>
                </div>
                <div class="reloj">
                    <form name="form_reloj">
                        <input type="text" name="reloj" size="10">
                    </form>
                </div>
                <form action="{{route('logueo')}}" method="POST">
                    @csrf
                    @include('mensaje.mesagges')
                    <div class="datos-login">

                        <div class="dat">
                            <input type="text" placeholder="USUARIO:" name="usuario">
                        </div>
                        <div class="dat">
                            <input type="password" placeholder="CONTRASEÑA:" name="password">
                        </div>
                    </div>
                    <div class="boton-login">
                        <button>LOGIN</button>
                    </div>
                </form>
            </div>

        </div>
    </main>
    <script language="JavaScript">
        function mueveReloj() {
            momentoActual = new Date()
            hora = momentoActual.getHours()
            minuto = momentoActual.getMinutes()
            segundo = momentoActual.getSeconds()

            horaImprimible = hora + " : " + minuto + " : " + segundo

            document.form_reloj.reloj.value = horaImprimible

            setTimeout("mueveReloj()", 1000)
            setInterval("mueveReloj()", 1000)
        }
    </script>
</body>

</html>