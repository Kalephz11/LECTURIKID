<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nivel Fácil - LectuKid</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;

            background-image: url('IMAGENES/FONDOFACIL2.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            height: 100vh;
        }

        /* TÍTULO */
        h1 {
            color: #008CFF;
            background: rgba(255, 255, 255, 0.9);
            padding: 20px 50px;
            border-radius: 20px;
            margin-bottom: 40px;
            font-size: 34px;
            font-weight: 900;
            text-transform: uppercase;
            text-align: center;
            letter-spacing: 1px;
        }

        /* CONTENEDOR DE OPCIONES */
        .contenedor-opciones {
            display: flex;
            gap: 40px;
        }

        /* BOTONES */
        .opcion-btn {
            width: 220px;
            height: 220px;
            background: rgba(255, 255, 255, 0.9);
            border-radius: 25px;
            border: 3px solid #008CFF;
            font-size: 26px;
            font-weight: bold;
            cursor: pointer;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;

            transition: 0.3s;
            color: #008CFF;
        }

        .opcion-btn:hover {
            background: #008CFF;
            color: white;
            transform: scale(1.07);
        }

        /* BOTÓN SALIR */
        #salir {
            position: absolute;
            top: 20px;
            left: 20px;
            background: red;
            padding: 12px 28px;
            color: white;
            border-radius: 12px;
            border: none;
            font-size: 16px;
            cursor: pointer;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <!-- SALIR -->
    <button id="salir" onclick="window.location.href='niveles.php'">← Volver</button>

    <!-- TÍTULO -->
    <h1>Elige cómo quieres aprender</h1>

    <div class="contenedor-opciones">

        <!-- VIDEO -->
        <button class="opcion-btn" onclick="window.location.href='VIDEOFACIL.php'">
            VIDEO
        </button>

        <!-- LECTURA -->
        <button class="opcion-btn" onclick="window.location.href='LECTURAFACIL.php'">
            LECTURA
        </button>

    </div>

</body>
</html>
