<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Video - Nivel Fácil</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background-image: url('IMAGENES/VIDEOFACIL.png');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;

            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 40px;
        }

        h1 {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px 40px;
            border-radius: 20px;
            font-size: 32px;
            font-weight: bold;
            color: #008CFF;
            margin-bottom: 30px;
            text-transform: uppercase;
        }

        /* VIDEO */
        .video-container {
            background: rgba(255, 255, 255, 0.85);
            padding: 20px;
            border-radius: 20px;
            border: 3px solid #008CFF;
            margin-bottom: 40px;
        }

        iframe {
            width: 600px;
            height: 340px;
            border-radius: 15px;
            border: none;
        }

        /* PREGUNTAS */
        .pregunta {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            width: 650px;
            border-radius: 20px;
            margin-bottom: 30px;
            border: 2px solid #008CFF;
        }

        .pregunta h2 {
            font-size: 20px;
            color: #008CFF;
            margin-bottom: 15px;
        }

        .opcion {
            display: block;
            background: white;
            padding: 12px;
            border-radius: 10px;
            border: 2px solid #008CFF;
            margin-bottom: 10px;
            cursor: pointer;
            font-size: 18px;
            transition: 0.3s;
        }

        .opcion:hover {
            background: #E5F3FF;
        }

        .incorrecta {
            background: #ffb3b3 !important;
            border-color: red !important;
            cursor: not-allowed !important;
        }

        .correcta {
            background: #b3ffcc !important;
            border-color: #00b44e !important;
        }

        /* MENSAJE */
        .mensaje {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
            color: #008CFF;
        }

        /* BOTÓN VOLVER */
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

    <script>
        function responder(preguntaId, opcion, correcta) {
            let mensaje = document.getElementById("mensaje" + preguntaId);

            if (opcion === correcta) {
                mensaje.innerHTML = "🎉 ¡Muy bien! ¡Respuesta correcta!";
                mensaje.style.color = "#00b44e";

                // Deshabilitar todas las opciones
                document.querySelectorAll(".p" + preguntaId).forEach(btn => {
                    btn.classList.add("correcta");
                    btn.style.pointerEvents = "none";
                });

            } else {
                mensaje.innerHTML = "❌ Ups... ¡Intenta otra!";
                mensaje.style.color = "red";

                // Solo bloquear la incorrecta
                let btnIncorrecto = document.getElementById(opcion);
                btnIncorrecto.classList.add("incorrecta");
                btnIncorrecto.style.pointerEvents = "none";
            }
        }
    </script>
</head>

<body>

    <button id="salir" onclick="window.location.href='facil.php'">← Volver</button>

    <h1>Aprendamos con este video</h1>

    <!-- VIDEO (YouTube) -->
    <div class="video-container">
        <iframe 
            src="https://www.youtube.com/embed/H3pLvj318ks?si=0mPTN1U_jJm2QXW8"
            allowfullscreen>
        </iframe>
    </div>

    <!-- PREGUNTA 1 -->
    <div class="pregunta">
        <h2>1. ¿De qué trata el video?</h2>

        <div id="p1a" class="opcion p1" onclick="responder(1, 'p1a', 'p1c')">De animales</div>
        <div id="p1b" class="opcion p1" onclick="responder(1, 'p1b', 'p1c')">De carros</div>
        <div id="p1c" class="opcion p1" onclick="responder(1, 'p1c', 'p1c')">De una aventura</div>

        <div id="mensaje1" class="mensaje"></div>
    </div>

    <!-- PREGUNTA 2 -->
    <div class="pregunta">
        <h2>2. ¿Qué personaje aparece?</h2>

        <div id="p2a" class="opcion p2" onclick="responder(2, 'p2a', 'p2b')">Un robot</div>
        <div id="p2b" class="opcion p2" onclick="responder(2, 'p2b', 'p2b')">Un niño</div>
        <div id="p2c" class="opcion p2" onclick="responder(2, 'p2c', 'p2b')">Un perro</div>

        <div id="mensaje2" class="mensaje"></div>
    </div>

    <!-- PREGUNTA 3 -->
    <div class="pregunta">
        <h2>3. ¿Cómo termina la historia?</h2>

        <div id="p3a" class="opcion p3" onclick="responder(3, 'p3a', 'p3c')">Se pierde</div>
        <div id="p3b" class="opcion p3" onclick="responder(3, 'p3b', 'p3c')">Se cae</div>
        <div id="p3c" class="opcion p3" onclick="responder(3, 'p3c', 'p3c')">Llega a casa feliz</div>

        <div id="mensaje3" class="mensaje"></div>
    </div>

</body>
</html>
