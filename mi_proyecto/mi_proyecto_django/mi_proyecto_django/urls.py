from django.contrib import admin
from django.urls import path
from mi_app import views
from mi_app.views import analizar_imagen


urlpatterns = [
    path('admin/', admin.site.urls),
    path('upload/', views.upload_image, name='upload_image'),
    path('', views.home, name='home'),
    path("analizar/", analizar_imagen), 
]