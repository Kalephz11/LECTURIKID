<?php
// Cuando el niño escribe su nombre y presiona ingresar
if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $nombre = urlencode($_POST['nombre']);
    header("Location: niveles.php?nombre=$nombre");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>LectuKid</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background-image: url('IMAGENES/FONDO1.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            justify-content: center;
            align-items: center;

            height: 100vh;
        }

        .contenedor {
            background: rgba(255, 255, 255, 0.8);
            padding: 40px;
            border-radius: 20px;
            text-align: center;
            width: 400px;
            box-shadow: 0px 4px 10px rgba(0,0,0,0.2);
        }

        h1 {
            color: #008CFF;
            font-size: 32px;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 90%;
            padding: 12px;
            border: 2px solid #008CFF;
            border-radius: 10px;
            font-size: 18px;
            text-align: center;
            outline: none;
        }

        button {
            margin-top: 20px;
            padding: 12px 30px;
            background: #008CFF;
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 18px;
            cursor: pointer;
            opacity: 0.4;
            transition: 0.3s;
        }

        button:enabled {
            opacity: 1;
            cursor: pointer;
        }

        #salir {
            position: absolute;
            top: 20px;
            left: 20px;
            background: red;
            padding: 10px 20px;
            color: white;
            border-radius: 10px;
            border: none;
            font-size: 16px;
            cursor: pointer;
        }

    </style>
</head>
<body>

    <button id="salir" onclick="window.location.href='salir.php'">Salir</button>

    <div class="contenedor">
        <h1>¡Es Hora de divertirnos Leyendo!</h1>

        <form method="POST">
            <input 
                type="text" 
                placeholder="Escribe tu nombre aquí"
                id="nombre"
                name="nombre"
                onkeyup="habilitarBoton()"
            >

            <button id="btnIngresar" disabled>Ingresar</button>
        </form>
    </div>

    <script>
        function habilitarBoton() {
            const nombre = document.getElementById("nombre").value.trim();
            const btn = document.getElementById("btnIngresar");

            btn.disabled = nombre.length === 0;
        }
    </script>

</body>
</html>
