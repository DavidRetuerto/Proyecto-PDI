from django.shortcuts import render
from django.http import JsonResponse
from django.core.files.storage import FileSystemStorage

def upload_image(request):
    if request.method == 'POST' and request.FILES['image']:
        uploaded_image = request.FILES['image']
        fs = FileSystemStorage()
        filename = fs.save(uploaded_image.name, uploaded_image)
        file_url = fs.url(filename)
        return JsonResponse({'message': 'Imagen subida exitosamente', 'file_url': file_url})
    return JsonResponse({'error': 'No se recibió ninguna imagen'}, status=400)

def home(request):
    return render(request, 'index.html')