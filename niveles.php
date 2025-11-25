<!DOCTYPE html> 
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Niveles - LectuKid</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background-image: url('IMAGENES/NIVELES.png');
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
            background: rgba(255, 255, 255, 0.85);
            padding: 20px 40px;
            border-radius: 20px;
            margin-bottom: 40px;
            font-size: 36px;
            font-weight: 900;
            text-align: center;
            letter-spacing: 1px;
            text-transform: uppercase;
        }

        /* CONTENEDOR DE BOTONES */
        .contenedor-botones {
            display: flex;
            gap: 40px;
        }

        /* BOTONES DE NIVEL */
        .nivel-btn {
            width: 230px;
            height: 230px;
            border-radius: 25px;
            border: none;
            cursor: pointer;
            text-align: center;
            font-size: 22px;
            font-weight: bold;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            background-color: transparent;
            position: relative;
            overflow: hidden;
            transition: 0.3s ease-in-out;
        }

        /* IMÁGENES (AGRANDADAS) */
        .nivel-btn img {
            width: 160px;
            height: 160px;
            transition: 0.3s;
        }

        /* CAPA DE COLOR AL PASAR */
        .nivel-btn::after {
            content: attr(data-texto);
            position: absolute;
            bottom: 0;
            width: 100%;
            height: 100%;
            color: white;
            font-size: 26px;
            font-weight: bold;
            display: flex;
            justify-content: center;
            align-items: center;

            opacity: 0;
            transition: 0.3s;
        }

        .nivel-btn:hover::after {
            opacity: 1;
        }

        /* COLORES DE CADA NIVEL */
        .verde:hover::after { background: rgba(57, 183, 0, 0.9); }
        .amarillo:hover::after { background: rgba(255, 195, 0, 0.9); }
        .rojo:hover::after { background: rgba(255, 59, 59, 0.9); }

        /* EFECTO AL PASAR */
        .nivel-btn:hover img {
            transform: scale(0.8);
            opacity: 0.4;
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

    <button id="salir" onclick="window.location.href='index.php'">SALIR</button>

    <h1>ELIGE EL NIVEL QUE VAMOS A LOGRAR</h1>

    <div class="contenedor-botones">

        <!-- NIVEL FÁCIL (CORREGIDO: REDIRIGE) -->
        <button class="nivel-btn verde" data-texto="FÁCIL" onclick="window.location.href='facil.php'">
            <img src="IMAGENES/FACIL.png" alt="Inicio">
        </button>

        <!-- NIVEL MEDIO -->
        <button class="nivel-btn amarillo" data-texto="MEDIO" onclick="alert('Nivel: Medio')">
            <img src="IMAGENES/MEDIO.png" alt="Medio">
        </button>

        <!-- NIVEL DIFÍCIL -->
        <button class="nivel-btn rojo" data-texto="DIFÍCIL" onclick="alert('Nivel: Difícil')">
            <img src="IMAGENES/DIFICIL.png" alt="Difícil">
        </button>

    </div>

</body>
</html>
