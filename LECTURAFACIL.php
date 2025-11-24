<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lectura - Nivel Fácil</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background-image: url('IMAGENES/LECTURAFACIL.png');
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
            text-align: center;
        }

        .lectura-container {
            width: 80%;
            max-width: 850px;
            background: rgba(255, 255, 255, 0.92);
            padding: 30px;
            border-radius: 25px;
            border: 3px solid #008CFF;
            margin-bottom: 40px;
            line-height: 1.5;
            font-size: 18px;
            text-align: justify;
        }

        .pregunta {
            background: rgba(255, 255, 255, 0.9);
            padding: 20px;
            width: 80%;
            max-width: 850px;
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

        .mensaje {
            margin-top: 10px;
            font-size: 18px;
            font-weight: bold;
        }

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

        #nueva {
            background: #008CFF;
            color: white;
            padding: 12px 25px;
            border-radius: 12px;
            border: none;
            cursor: pointer;
            margin-bottom: 40px;
            font-size: 18px;
            font-weight: bold;
        }

        #nueva:hover {
            background: #006FCC;
        }
    </style>

</head>

<body>

<button id="salir" onclick="window.location.href='facil.php'">← Volver</button>

<h1>Lectura del día</h1>

<?php
// LECTURAS Y PREGUNTAS
$lecturas = [

    // ---------------------- LECTURA 1 ----------------------
    [
        "texto" => "Lucas era un niño muy curioso que vivía en un pequeño pueblo rodeado de montañas azules. Cada mañana, al despertar, escuchaba el canto de los pájaros que anunciaban un nuevo día lleno de aventuras. Le encantaba explorar los caminos del bosque, donde había árboles gigantes, flores brillantes y un río que corría como si contara historias secretas. Un día, mientras caminaba por un sendero desconocido, encontró una piedra que brillaba con una luz dorada. Lucas la tomó en sus manos y sintió un calor muy suave. De pronto, un pequeño colibrí apareció y comenzó a volar a su alrededor. El colibrí parecía querer llevarlo a algún lugar. Lucas lo siguió y llegó hasta una cueva escondida detrás de un viejo roble. Dentro, descubrió un cofre lleno de objetos antiguos y una nota que decía: 'Este tesoro pertenece a quien siga su corazón'. Lucas entendió entonces que la verdadera aventura no era encontrar tesoros, sino vivir cada día con ilusión y valentía.",
        "preguntas" => [
            [
                "p" => "¿Dónde vivía Lucas?",
                "op" => ["En un pueblo rodeado de montañas", "En una ciudad grande", "En una isla lejana", "En una casa flotante"],
                "c" => 0
            ],
            [
                "p" => "¿Qué encontró Lucas en el sendero?",
                "op" => ["Una piedra dorada", "Un mapa antiguo", "Un libro mágico", "Un anillo brillante"],
                "c" => 0
            ],
            [
                "p" => "¿Quién apareció después?",
                "op" => ["Un colibrí", "Un perro", "Un gato", "Un búho"],
                "c" => 0
            ],
            [
                "p" => "¿Qué decía la nota?",
                "op" => ["Que el tesoro pertenece a quien siga su corazón", "Que vuelva mañana", "Que la cueva está cerrada", "Que debe pedir permiso"],
                "c" => 0
            ]
        ]
    ],

    // ---------------------- LECTURA 2 ----------------------
    [
        "texto" => "Mariana era una niña que adoraba el mar. Vivía cerca de la playa y cada tarde se sentaba en la arena a ver cómo las olas iban y venían sin descanso. Un día encontró una caracola gigante, más grande que cualquiera que hubiera visto antes. Al acercarla a su oído, no escuchó el sonido del mar como esperaba, sino una voz suave que decía su nombre. Sorprendida, volvió a escuchar, y la voz le pidió ayuda. Decía que una pequeña tortuga había quedado atrapada en unas redes más allá de las rocas grandes. Sin pensarlo, Mariana corrió hacia el lugar y encontró a la tortuga luchando por salir. Con cuidado, cortó la red y la liberó. La tortuga, agradecida, la miró un momento y se alejó feliz hacia el agua. Cuando Mariana volvió por la caracola, esta ya no estaba, como si hubiera desaparecido. Ese día entendió que el mar siempre escucha y que ayudar a los demás hace que el mundo sea más hermoso.",
        "preguntas" => [
            [
                "p" => "¿Qué encontró Mariana en la playa?",
                "op" => ["Una caracola gigante", "Un barco pequeño", "Una mochila", "Un pescado"],
                "c" => 0
            ],
            [
                "p" => "¿Qué escuchó dentro de la caracola?",
                "op" => ["Una voz", "El sonido del mar", "Música", "Nada"],
                "c" => 0
            ],
            [
                "p" => "¿Qué estaba atrapado en una red?",
                "op" => ["Una tortuga", "Un pez", "Un cangrejo", "Un pájaro"],
                "c" => 0
            ],
            [
                "p" => "¿Qué le enseñó la experiencia a Mariana?",
                "op" => ["Que ayudar hace el mundo más hermoso", "Que el mar asusta", "Que no debe correr", "Que la caracola era mágica"],
                "c" => 0
            ]
        ]
    ],

    // ---------------------- LECTURA 3 ----------------------
    [
        "texto" => "Tomás vivía en una casa rodeada de árboles frutales. Todos los días recogía manzanas para llevarlas a su abuela, quien hacía los pasteles más deliciosos del pueblo. Un día, mientras caminaba, escuchó un ruido extraño detrás de un arbusto. Al acercarse, encontró a un zorrito bebé que estaba herido en una patita. Tomás lo cargó con cuidado y lo llevó a casa. Con la ayuda de su abuela, limpiaron la herida, le pusieron una venda y le dieron agua. Durante varios días, el zorrito se quedó con ellos mientras recuperaba fuerzas. Tomás lo llamaba Copito por su color rojizo claro. Cuando Copito estuvo sano, Tomás lo llevó de vuelta al bosque. Aunque le dolía decir adiós, sabía que ese era su hogar. Copito dio unos pasos, luego volvió y se frotó en su pierna, como diciendo gracias. Tomás sonrió y entendió que hacer el bien siempre regresa de alguna manera.",
        "preguntas" => [
            [
                "p" => "¿Qué recogía Tomás todos los días?",
                "op" => ["Manzanas", "Naranjas", "Peras", "Uvas"],
                "c" => 0
            ],
            [
                "p" => "¿Qué encontró detrás del arbusto?",
                "op" => ["Un zorrito herido", "Un pájaro", "Un gato", "Un perro"],
                "c" => 0
            ],
            [
                "p" => "¿Cómo llamó Tomás al zorrito?",
                "op" => ["Copito", "Rojo", "Tigre", "Chispa"],
                "c" => 0
            ],
            [
                "p" => "¿Qué aprendió Tomás?",
                "op" => ["Que hacer el bien regresa", "Que el bosque es peligroso", "Que no debe recoger frutas", "Que los zorros hablan"],
                "c" => 0
            ]
        ]
    ],

    // ---------------------- LECTURA 4 ----------------------
    [
        "texto" => "Andrea tenía una bicicleta azul que adoraba. Cada tarde salía a pasear por el parque lleno de flores y caminos largos. Un día encontró un cartel que decía: 'Carrera amistosa este sábado'. Emocionada, decidió participar, aunque nunca había competido antes. Practicó toda la semana, pedaleando más rápido cada día. Cuando llegó el sábado, había muchos niños con bicicletas de todos los colores. La carrera comenzó y Andrea se sintió nerviosa, pero recordó que lo importante era divertirse. Durante la competencia, uno de los niños cayó y no podía levantarse. Andrea frenó, bajó de su bici y lo ayudó. Aunque perdió tiempo, no le importó. Al llegar a la meta, los demás niños y padres aplaudieron su gesto. El organizador le entregó una medalla especial por compañerismo. Andrea sonrió feliz, comprendiendo que ganar no siempre significa llegar primero.",
        "preguntas" => [
            [
                "p" => "¿Qué tenía Andrea?",
                "op" => ["Una bicicleta azul", "Un patín", "Una cometa", "Un balón"],
                "c" => 0
            ],
            [
                "p" => "¿Dónde vio el cartel?",
                "op" => ["En el parque", "En su casa", "En la escuela", "En la tienda"],
                "c" => 0
            ],
            [
                "p" => "¿Qué hizo cuando un niño cayó?",
                "op" => ["Lo ayudó", "Siguió rápido", "Se asustó", "Llamó a un adulto"],
                "c" => 0
            ],
            [
                "p" => "¿Qué aprendió Andrea?",
                "op" => ["Que ganar no es llegar primero", "Que debe pedalear más", "Que no le gusta competir", "Que quiere otra bici"],
                "c" => 0
            ]
        ]
    ],

    // ---------------------- LECTURA 5 ----------------------
    [
        "texto" => "En un pequeño pueblo vivía Sofía, una niña que amaba las estrellas. Cada noche salía al patio con una manta, se acostaba boca arriba y miraba el cielo lleno de luces brillantes. Le encantaba imaginar que eran pequeñas ventanas hacia otros mundos. Un día, su abuelo le regaló un telescopio antiguo que él usó cuando era joven. Sofía estaba emocionadísima y pasó horas mirando planetas, lunas y constelaciones. Una noche vio una estrella fugaz cruzando el cielo y pidió un deseo: quería descubrir algo que nadie hubiera visto antes. Días después, mientras observaba el cielo, vio una luz que parpadeaba diferente. Tomó notas y dibujó su forma. Su abuelo la ayudó a enviar la información a un centro astronómico. Semanas después recibieron una carta: ¡Sofía había descubierto una nueva estrella! Aunque era pequeña, brillaba con intensidad. Sofía comprendió que los sueños se cumplen cuando se mira al cielo con curiosidad y corazón.",
        "preguntas" => [
            [
                "p" => "¿Qué amaba Sofía?",
                "op" => ["Las estrellas", "Los animales", "Los coches", "Las montañas"],
                "c" => 0
            ],
            [
                "p" => "¿Qué le regaló su abuelo?",
                "op" => ["Un telescopio", "Un libro", "Una bicicleta", "Un mapa"],
                "c" => 0
            ],
            [
                "p" => "¿Qué vio Sofía en el cielo?",
                "op" => ["Una estrella fugaz", "Un avión", "Un globo", "Un cometa enorme"],
                "c" => 0
            ],
            [
                "p" => "¿Qué descubrió Sofía?",
                "op" => ["Una nueva estrella", "Un planeta rojo", "Una nave espacial", "Un meteorito"],
                "c" => 0
            ]
        ]
    ]

];

// SELECCIONAR LECTURA ALEATORIA
$lectura = $lecturas[array_rand($lecturas)];

?>

<!-- MOSTRAR LECTURA -->
<div class="lectura-container">
    <?php echo nl2br($lectura["texto"]); ?>
</div>

<?php
$preguntas = $lectura["preguntas"];
$contador = 1;

foreach ($preguntas as $pregunta) {
    echo "<div class='pregunta'>";
    echo "<h2>$contador. {$pregunta['p']}</h2>";

    foreach ($pregunta["op"] as $i => $opcion) {
        $id = "p{$contador}_$i";
        $correcta = $pregunta["c"];

        echo "<div id='$id' class='opcion p$contador' onclick=\"responder($contador, '$id', 'p{$contador}_$correcta')\">$opcion</div>";
    }

    echo "<div id='mensaje$contador' class='mensaje'></div>";
    echo "</div>";

    $contador++;
}
?>

<button id="nueva" onclick="location.reload()">🔄 Nueva lectura</button>

<script>
function responder(preguntaId, opcion, correcta) {
    let mensaje = document.getElementById("mensaje" + preguntaId);

    if (opcion === correcta) {
        mensaje.innerHTML = "🎉 ¡Muy bien! ¡Respuesta correcta!";
        mensaje.style.color = "#00b44e";

        document.querySelectorAll(".p" + preguntaId).forEach(btn => {
            btn.classList.add("correcta");
            btn.style.pointerEvents = "none";
        });

    } else {
        mensaje.innerHTML = "❌ Esa no es, intenta otra.";
        mensaje.style.color = "red";

        let btnIncorrecto = document.getElementById(opcion);
        btnIncorrecto.classList.add("incorrecta");
        btnIncorrecto.style.pointerEvents = "none";
    }
}
</script>

</body>
</html>
