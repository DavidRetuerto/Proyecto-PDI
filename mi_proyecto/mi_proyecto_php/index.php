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
            max-width: 500px;
        }
        
        /*Letra Titulo*/ 
        .hero-content h1 {
            font-size: 3.5rem;
            font-weight: bold;
            color: #313131ff;
            margin-bottom: 20px;
        }

        .hero-content p {
            font-size: 1.2rem;
            color: #6c757d;
            margin-bottom: 30px;
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
            
            margin: 80px 20px;
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
            
        }

        .custom-icon {
            display: inline-block;
            width: 0.1px;  /* Tamaño del ícono */
            height: 0.1px;
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

        /* Barra de progreso */
        .progress {
            width: 80%;
            height: 20px;
            margin-top: 20px;
            display: none;
        }

        .progress-bar {
            width: 0%;
            background-color: #28a745;
            text-align: center;
            line-height: 20px;
            color: white;
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
            color: #5d7a91ff;             /* Cambiar el texto a blanco */
            padding: 20px;              /* Añadir un poco de espacio alrededor del texto */
            padding-top: 35px;
            text-align: center;         /* Centrar el texto */
            margin-top: 150px;
            border-top: 0.5px solid #d0dfdfff;
            
            align-items: center;        /* Centrar verticalmente */
    
        }
    </style>
</head>

<body>

    <!-- Sección Hero -->
    <section class="hero-section">
        <div class="hero-content">
            <h1><span class="blur-text">Evalúa tu </span><span class="green-blue-blur">Salud Corporal</span></h1>
            <p style="font-size: 18px; ">Obtén un análisis detallado de tu composición corporal y recibe recomendaciones personalizadas para mejorar tu salud y bienestar.</p>
        </div>
        <div class="hero-image">
            <img src="images/hero-health.jpg" alt="Imagen de salud corporal">
        </div>
    </section>


    <!-- Sección para Subir Imagen -->
    <section class="upload-section">
        <h2>Comienza tu Análisis</h2>
        <p class="secondary-text">Sube una imagen de cuerpo completo para obtener tu evaluación personalizada</p> <!-- Segundo p -->

        <div class="upload-box" onclick="document.getElementById('image').click()">

            <p class="main-text">Sube una imagen de tu cuerpo</p> <!-- Primer p -->
            <p class="secondary-text">Arrastra y suelta o haz clic para seleccionar</p> <!-- Segundo p -->
            <input type="file" id="image" accept="image/*" class="form-control" onchange="previewImage(event)">
            <button>Seleccionar imagen</button>
        </div>
        

        <!-- Barra de progreso -->
        <div class="progress">
            <div class="progress-bar" id="progress-bar">0%</div>
        </div>
    </section>

    <!-- Footer -->
    <div class="footer">
        <p>&copy; 2025 PDI - Universidad Técnica Federico Santa María</p>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script>
        // Función para previsualizar la imagen seleccionada
        function previewImage(event) {
            const file = event.target.files[0];
            const reader = new FileReader();
            reader.onload = function () {
                const imagePreview = document.createElement('img');
                imagePreview.src = reader.result;
                imagePreview.style.width = '100%';
                imagePreview.style.height = 'auto';
                document.querySelector('.upload-box').appendChild(imagePreview);
            };
            reader.readAsDataURL(file);
        }

        // Enviar la imagen con barra de progreso
        document.querySelector('.upload-box button').addEventListener('click', function () {
            const fileInput = document.getElementById('image');
            const file = fileInput.files[0];
            if (file) {
                const formData = new FormData();
                formData.append('image', file);

                const progressContainer = document.querySelector('.progress');
                const progressBar = document.getElementById('progress-bar');
                progressContainer.style.display = 'block';

                const xhr = new XMLHttpRequest();
                xhr.open('POST', 'http://localhost:8000/upload/', true);

                xhr.upload.onprogress = function (e) {
                    if (e.lengthComputable) {
                        const percent = (e.loaded / e.total) * 100;
                        progressBar.style.width = percent + '%';
                        progressBar.textContent = Math.round(percent) + '%';
                    }
                };

                xhr.onload = function () {
                    if (xhr.status === 200) {
                        progressBar.style.width = '100%';
                        progressBar.textContent = '¡Carga completa!';
                    } else {
                        alert('Hubo un error al subir la imagen.');
                    }
                };

                xhr.send(formData);
            }
        });
    </script>

</body>

</html>

