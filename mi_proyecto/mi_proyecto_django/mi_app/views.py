import io
import base64
from django.http import JsonResponse
from ultralytics import YOLO
from PIL import Image

# Cargar modelo una sola vez (MEGA IMPORTANTE)
modelo = YOLO("runs/modelo_fisico/weights/best.pt")

def analizar_imagen(request):
    if request.method != "POST":
        return JsonResponse({"error": "Método no permitido"}, status=405)

    if "image" not in request.FILES:
        return JsonResponse({"error": "No se envió imagen"}, status=400)

    imagen_file = request.FILES["image"]

    # Leer imagen en memoria
    imagen_bytes = imagen_file.read()
    imagen = Image.open(io.BytesIO(imagen_bytes)).convert("RGB")

    # Ejecutar YOLO sobre la imagen en memoria
    resultados = modelo.predict(source=imagen, save=False, conf=0.5)

    # Obtener predicción principal
    cajas = resultados[0].boxes
    if len(cajas) == 0:
        return JsonResponse({"prediccion": "No se detectó un cuerpo"}, status=200)

    clase_id = int(cajas[0].cls[0])
    clase_nombre = modelo.names[clase_id]

    return JsonResponse({"prediccion": clase_nombre})