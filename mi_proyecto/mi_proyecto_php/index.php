<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación de Salud Corporal</title>
    <!-- Incluir Bootstrap desde un CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        body {
            background-color: #edf7f7;  /* Establece el color de fondo del cuerpo de la página */
            font-family: 'Poppins', sans-serif;  /* Cambia la fuente a Poppins */
            margin: 0;  /* Elimina los márgenes predeterminados */
            padding: 0;  /* Elimina el relleno predeterminado */
            display: flex;  /* Usa flexbox */
            flex-direction: column;  /* Organiza los elementos en columna */
            min-height: 100vh;  /* Asegura que el cuerpo tenga una altura mínima de 100% de la ventana */
        }

        /* Primer recuadro (portada) */
        .hero-section {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 100px 80px;
            background-color: #edf7f7;
            border-radius: 20px;  /* Bordes más redondeados */
            /* box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);*/
            
            margin: 80px 20px;
            flex: 0 1 auto;
            position: relative;
            height: 300px; /* Asegura que haya suficiente altura para que el mini bloque se posicione */
        }

        /* Cuadro "Análisis con IA Avanzada" */
        .ai-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: linear-gradient(90deg, #02c2a5ff, #00c566ff);
            color: white;
            font-family: 'Poppins', sans-serif;
            font-size: 0.95rem;
            font-weight: 600;
            padding: 10px 18px;
            border-radius: 15px;
            margin-top: 12px;
            margin-bottom: 18px;
            box-shadow: 0 4px 10px rgba(0, 197, 102, 0.3);
            letter-spacing: 0.3px;
            transition: all 0.3s ease;
        }

        .ai-badge i {
            font-size: 1.1rem;
        }

        .ai-badge:hover {
            box-shadow: 0 6px 14px rgba(2, 194, 165, 0.4);
        }


        .hero-content h1 {
            font-family: 'Poppins', sans-serif;
            font-size: 50px;
            color: #00201fff;
        }

        .green-blue-blur {
            font-family: 'Poppins', sans-serif;
            font-size: 3.5rem;
            background-image: linear-gradient(to right, #02c2a5ff, #00c566ff); /* Gradiente de verde a azul */
            -webkit-background-clip: text; /* Clipa el fondo al texto */
            color: transparent; /* Hace el texto transparente para mostrar solo el gradiente */
            filter: blur(0px); /* Aplica el efecto de difuminado */
            transition: filter 0.5s ease; /* Suaviza el cambio de difuminado */
        }

        .green-blue-blur:hover {
            filter: blur(0px); /* Elimina el difuminado al pasar el cursor */
        }
        .hero-content {
            max-width: 650px;
        }

        /* Descripción más pequeña */
        .hero-description {
            font-size: 16px; /* más pequeño que el anterior */
            color: #6c757d;
            line-height: 1.6;
            margin-bottom: 18px;
        }

        /* Línea de características */
        .hero-features {
            display: flex;
            gap: 24px; /* separación entre frases */
            font-family: 'Poppins', sans-serif;
            font-size: 0.85rem;
            font-weight: 500;
            color: #343a40;
            margin-top: 10px;
        }

        /* Cada punto de color (viñeta) */
        .hero-features .dot {
            display: inline-block;
            width: 8px;
            height: 8px;
            background: linear-gradient(90deg, #02c2a5ff, #00c566ff);
            border-radius: 50%;
            margin-right: 8px;
            vertical-align: middle;
        }
        
        /*Letra Titulo*/ 
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: bold;
            color: #313131ff;
            margin-bottom: 20px;
        }

     
        .hero-image {
            width: 45%;
            border-radius: 20px;  /* Bordes más redondeados */
        }

        .hero-image img {
            width: 100%;
            border-radius: 20px;  /* Bordes más redondeados */
        }

        .upload-section{
            font-family: 'Poppins', sans-serif;
            justify-content: space-between;
            align-items: center;
            display: flex;
            flex-direction: column;

            padding-top: 100px;
            padding: 100px 80px;
            background-color: #edf7f7;
            border-radius: 20px;  /* Bordes más redondeados */
            /* box-shadow: 0 4px 10px rgba(255, 255, 255, 0.1);*/
            
            margin: 30px 20px;
            flex: 0 1 auto;
            position: relative;

        }

        .upload-section h2 {
            font-weight: bold; /* Espacio entre el título y el siguiente contenido */
            font-size: 30px;      /* Ajustar tamaño del título */
            color: #00201fff;
        }

        .upload-section p.secondary-text {
            margin-bottom: 40px; /* Espacio entre el texto y la caja de carga */
            font-size: 14px;
            color: #555;         /* Color del texto */
        }


        /* recuadro para subir imagen */
        .upload-box {
            width: 60%; /* Asegurar que el contenido ocupe el 100% del recuadro */
            height: 400px; /* Establecer una altura fija */
            padding: 40px;
            border: 2px dashed #e7e7e7ff; /* Líneas segmentadas */
            background-color: #ffffff;
            border-radius: 20px;  /* Bordes redondeados */
            text-align: center;
            transition: background-color 0.3s ease;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            margin-left: auto;
            margin-right: auto;  /* Centrar horizontalmente */
            position: relative;
            overflow: hidden; /* Evita que algo sobresalga */
            
        }

        /* Imagen cargada */
        #preview-image {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: contain;
            background-color: white;
            border-radius: 20px;
            display: none;
        }

        #analyze-btn {
            margin-top: 25px;
            background-image: linear-gradient(to right, #02c2a5ff, #00c566ff);
            color: white;
            border: none;
            border-radius: 15px;
            padding: 14px 60px; /* más alargado */
            font-size: 0.95rem; /* letra más pequeña */
            font-weight: 600; /* negrita */
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(0, 197, 102, 0.3);
            background-size: 200% auto;
            font-family: 'Poppins', sans-serif;
        }

        /* Hover sin desenfoque, solo animación de luz */
        #analyze-btn:hover {
            background-position: right center;
            box-shadow: 0 6px 18px rgba(2, 194, 165, 0.4);
            transform: scale(1.03);
            filter: brightness(1.1); /* un poco más luminoso */
        }

        #analyze-btn i {
            margin-right: 8px;
            font-size: 1.2rem;
            vertical-align: middle;
            color: white;
            transition: transform 0.3s ease;
        }

        #analyze-btn:hover i {
            transform: scale(1.2) rotate(10deg);
        }
        
        /* Botón X (cuadro rojo más grande, equis delgada) */
        #close-btn {
            position: absolute;
            top: 10px;
            right: 12px;
            width: 34px;             /* Cuadro más grande */
            height: 34px;
            background-color: #e63946; /* Fondo rojo */
            color: white;              /* Equis blanca */
            font-size: 1.3rem;         /* Un poco más grande */
            font-weight: 400;          /* Equis delgada */
            line-height: 34px;         /* Centrada verticalmente */
            text-align: center;
            border-radius: 8px;        /* Bordes más suaves */
            cursor: pointer;
            display: none;             /* Solo aparece al subir imagen */
            z-index: 2;
            
            transition: all 0.2s ease;
        }

        #close-btn:hover {
            background-color: #c75863ff; /* Rojo más oscuro al pasar el cursor */
        }

        .upload-box button {
            background-color: #f8f9fa; /* Color blanco suave */
            color: #000000ff; /* Gris suave */
            font-weight: bold;
            border-radius: 15px;
            font-size: 0.8rem;
            padding: 10px 15px;
            border: 1px solid #ced4da; /* Borde gris claro */
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .upload-box button:hover {
            background-color: #1aba9c;
            color: #ffffffff;
        }

        /* Cambiar color del recuadro al pasar el ratón */
        .upload-box:hover {
            background-color: #8cddcd;
        }

        

        /* Círculo con icono de galería dentro del upload-box */
        .upload-icon-circle {
            width: 100px; /* más grande */
            height: 100px;

            background-color: #edf7f7; /* mismo tono verde-azulado pero muy suave */
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 18px; /* espacio entre el círculo y el texto */
            transition: transform 0.3s ease, box-shadow 0.3s ease;  
        }

        .upload-icon-circle i {
            color: #02c2a5ff; /* verde-azulado fuerte, sin degradado */
            font-size: 2.5rem; /* ícono más grande para llenar el círculo */
        }

        /* Footer */
        .footer {
            background-color: #f1f1f1;
            color: #6c757d;
            text-align: center;
            padding: 10px;
            position: relative;
            bottom: 0;
            width: 100%;
            font-size: 0.8rem; /* Fuente más pequeña */
        }

        /* Estilo para el input de imagen */
        .form-control {
            display: none; /* Ocultar el input */
        }

        .main-text {
            font-weight: bold;
            color: #2f2f2fff;
            font-size: 17px;
            margin-bottom: 2px;
            padding-top: 10px;
        }

        .secondary-text {
            font-weight: normal;
            color: #666;
            font-size: 13px;
            padding-top: 10px;
        }

        .small-text {
            font-size: 14px;  /* Disminuye el tamaño del texto */
        }

        .footer {
            background-color: #edf7f7;  /* Cambiar el fondo a azul */
            color: #5e6e7bff;             /* Cambiar el texto a blanco */
            padding: 20px;              /* Añadir un poco de espacio alrededor del texto */
            padding-top: 35px;
            text-align: center;         /* Centrar el texto */
            
            border-top: 0.5px solid #d0dfdfff;
            
            align-items: center;        /* Centrar verticalmente */
    
        }

        /* Panel de objetivos */
        .goal-panel {
            width: 60%;
            margin: 22px auto 0 auto;
            text-align: left;
        }

        .goal-title {
            margin: 0 0 6px 0;
            font-family: 'Poppins', sans-serif;
            font-weight: 700;
            font-size: 1.15rem;
            color: #2d2d2d;
            text-align: center;  
        }

        .goal-subtitle {
            margin: 0 0 14px 0;
            font-size: 0.95rem;
            color: #6c757d;
            text-align: center;  
        }

        /* Grid en una sola fila */
        .goal-grid {
            display: flex;
            justify-content: center;    /* centra los botones */
            align-items: stretch;
            gap: 20px;                  /* espacio entre botones */
            flex-wrap: nowrap;          /* 🔥 no permite que bajen de fila */
            width: 100%;
            margin-top: 20px;
        }

       /* Botón base (más pequeño y compacto) */
       .goal-btn {
            flex: 1 1 160px;              /* más pequeños */
            max-width: 220px;             /* límite para que NO se alarguen */
            height: 140px;                /*  altura fija tipo tarjeta */
            
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            gap: 8px;
            padding: 14px 12px;           /* compacto */

            background-color: #f4f7f6;
            border: 2px solid #cdd5d2;
            border-radius: 16px;

            cursor: pointer;
            transition: 
                background-color .25s ease,
                border-color .25s ease,
                transform .12s ease,
                box-shadow .25s ease;
        }

        /* Hover */
        .goal-btn:hover {
            background-color: #19b89c;       /* verde elegante */
            border-color: #159a82;           /* borde más oscuro */
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(25,184,156,0.25);
        }

        /* Hover: cambiar textos a blanco */
        .goal-btn:hover .goal-emoji,
        .goal-btn:hover .goal-text strong,
        .goal-btn:hover .goal-text span {
            color: #ffffff;
        }

        /* Estado presionado (perfecto) */
        .goal-btn.active {
            background-color: #9ee8d8;       /* verde agua claro */
            border-color: #19b89c;           /* mismo color, más fuerte */
            box-shadow: 0 0 0 transparent;
            transform: translateY(0);        /* no se eleva */
        }

        /* Active: textos con color verde intenso */
        .goal-btn.active .goal-emoji,
        .goal-btn.active .goal-text strong,
        .goal-btn.active .goal-text span {
            color: #0e7f6e;
        }

        /* Icono */
        .goal-emoji {
            font-size: 1.9rem;               /* más pequeño */
            line-height: 1;
            transition: color .25s ease;
        }

        /* Texto */
        .goal-text {
            text-align: center;
            display: flex;
            flex-direction: column;
            line-height: 1.2;
        }

        .goal-text strong {
            font-size: 0.95rem;
            color: #2d2d2d;
            transition: color .25s ease;
        }

        .goal-text span {
            font-size: 0.78rem;
            color: #6c757d;
            transition: color .25s ease;
        }
      
     
        /* Ajustes responsive */
        @media (max-width: 768px) {
           .goal-panel { width: 90%; }
        }

        @media (max-width: 900px) {
            .goal-grid {
                flex-wrap: wrap;              /* permite que bajen */
                justify-content: center;
            }

            .goal-btn {
                flex: 1 1 260px;              /* ocupa todo el ancho posible */
            }
        }
    </style>
</head>

<body>

    <section class="hero-section">
        <div class="hero-content">
            <!-- Cuadro destacado encima del título -->
            <div class="ai-badge">
                <i class="fas fa-robot"></i> Análisis con IA Avanzada
            </div>

            <h1>
                <span class="blur-text">Evalúa tu </span>
                <span class="green-blue-blur">Salud Corporal</span>
            </h1>

            <p class="hero-description">
                Obtén un análisis detallado de tu composición corporal y recibe recomendaciones personalizadas
                para mejorar tu salud y bienestar.
            </p>

            <!-- Línea con las tres frases -->
            <div class="hero-features">
                <span><span class="dot"></span> Análisis instantáneo</span>
                <span><span class="dot"></span> 100% privado</span>
                <span><span class="dot"></span> Recomendaciones personalizadas</span>
            </div>
        </div>

        <div class="hero-image">
            <img src="images/hero-health.jpg" alt="Imagen de salud corporal">
        </div>
    </section>

    <!-- Sección para Subir Imagen -->
    <section class="upload-section">
        <h2>Comienza tu Análisis</h2>
        <p class="secondary-text">
            Sube una imagen de cuerpo completo para obtener tu evaluación personalizada
        </p>

        <div class="upload-box" id="upload-box" onclick="triggerUpload()">
            <!-- Botón X para eliminar -->
            <span id="close-btn" title="Eliminar imagen">&times;</span>

            <!-- Ícono circular de galería -->
            <div class="upload-icon-circle">
                <i class="fas fa-image"></i>
            </div>

            <p class="main-text" id="upload-text-1">Sube una imagen de tu cuerpo</p>
            <p class="secondary-text" id="upload-text-2">Arrastra y suelta o haz clic para seleccionar</p>

            <input type="file" id="image" accept="image/*" class="form-control" onchange="previewImage(event)">
            <button id="upload-btn">Seleccionar imagen</button>

            <img id="preview-image" src="" alt="Vista previa" style="display: none;">
        </div>

        <!-- Panel de objetivos (aparece tras subir imagen) -->
        <div id="goal-panel" class="goal-panel" style="display:none;">
            <h3 class="goal-title">¿Cuál es tu objetivo?</h3>
            <p class="goal-subtitle">Selecciona tu meta para obtener recomendaciones personalizadas</p>

            <div class="goal-grid">
                <button class="goal-btn" data-goal="cut">
                    <div class="goal-emoji">📉</div>
                    <div class="goal-text">
                        <strong>Bajar de Peso</strong>
                        <span>Déficit calórico</span>
                    </div>
                </button>

                <button class="goal-btn" data-goal="bulk">
                    <div class="goal-emoji">📈</div>
                    <div class="goal-text">
                        <strong>Subir de Peso</strong>
                        <span>Superávit calórico</span>
                    </div>
                </button>
            </div>
        </div>

        <!-- Botón Analizar -->
        <button id="analyze-btn" style="display: none;">
            <i class="fas fa-magic"></i> Analizar imagen
        </button>
    </section>

    <!-- Font Awesome (si no lo tienes en tu header) -->
    <script src="https://kit.fontawesome.com/a2e0f1f1b2.js" crossorigin="anonymous"></script>

    </section>
        <!-- Contenedor de la imagen cargada -->
    <div id="imageContainer" style="display: none; position: relative;">
        <img id="uploadedImage" src="" alt="Imagen cargada" style="max-width: 100%;"/>
        <button id="sendButton" style="display: block;">Enviar Foto</button>
        <button id="deleteButton" style="position: absolute; top: 0; right: 0; background: red; color: white; border: none;">X</button>
    </div>


    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 PDI - Universidad Técnica Federico Santa María</p>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script>
        // 👇 Pega aquí TODO el código JavaScript del bloque anterior
        function triggerUpload() {
            const uploadBox = document.getElementById('upload-box');
            const input = document.getElementById('image');
            if (!uploadBox.classList.contains('disabled')) {
                input.click();
            }
        }

        function previewImage(event) {
            const file = event.target.files[0];
            const previewImage = document.getElementById('preview-image');
            const uploadBox = document.getElementById('upload-box');
            const analyzeBtn = document.getElementById('analyze-btn');
            const closeBtn = document.getElementById('close-btn');
            const text1 = document.getElementById('upload-text-1');
            const text2 = document.getElementById('upload-text-2');
            const button = document.getElementById('upload-btn');
            const goalPanel = document.getElementById('goal-panel');

            if (file) {
                const reader = new FileReader();
                reader.onload = function (e) {
                    previewImage.src = e.target.result;
                    previewImage.style.display = 'block';
                    text1.style.display = 'none';
                    text2.style.display = 'none';
                    button.style.display = 'none';

                    setTimeout(() => {
                        uploadBox.classList.add('disabled');
                        uploadBox.style.cursor = 'default';
                        uploadBox.removeAttribute('onclick');
                    }, 200);

                    closeBtn.style.display = 'block';
                    goalPanel.style.display = 'block';
                    analyzeBtn.style.display = 'inline-block';
                };
                reader.readAsDataURL(file);
            }
        }

        document.addEventListener('click', (e) => {
            const btn = e.target.closest('.goal-btn');
            if (!btn) return;
            document.querySelectorAll('.goal-btn').forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
        });

        document.getElementById('close-btn').addEventListener('click', function (e) {
            e.stopPropagation();
            const previewImage = document.getElementById('preview-image');
            const uploadBox = document.getElementById('upload-box');
            const analyzeBtn = document.getElementById('analyze-btn');
            const closeBtn = document.getElementById('close-btn');
            const text1 = document.getElementById('upload-text-1');
            const text2 = document.getElementById('upload-text-2');
            const button = document.getElementById('upload-btn');
            const input = document.getElementById('image');
            const goalPanel = document.getElementById('goal-panel');

            previewImage.style.display = 'none';
            previewImage.src = '';
            text1.style.display = 'block';
            text2.style.display = 'block';
            button.style.display = 'inline-block';
            analyzeBtn.style.display = 'none';
            closeBtn.style.display = 'none';
            goalPanel.style.display = 'none';
            input.value = '';

            uploadBox.classList.remove('disabled');
            uploadBox.style.cursor = 'pointer';
            uploadBox.setAttribute('onclick', 'triggerUpload()');

            document.querySelectorAll('.goal-btn').forEach(b => b.classList.remove('active'));
        });

        // "Analizar imagen" envíe la imagen directamente al backend.
        document.getElementById("analyze-btn").addEventListener("click", function () {  
        const imgElement = document.getElementById("preview-image");

        // Convertimos la imagen mostrada a Blob
        fetch(imgElement.src)
            .then(res => res.blob())
            .then(blob => {

                let formData = new FormData();
                formData.append("image", blob, "upload.jpg");

                fetch("http://localhost:8000/analizar/", {
                    method: "POST",
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    console.log("Respuesta del backend:", data);
                    alert("Resultado: " + data.prediccion);
                })
                .catch(err => console.error("Error:", err));
            });
    });
    </script>
    


</body>

</html>

