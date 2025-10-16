<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $uploaded_image = $_FILES['image'];
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($uploaded_image["name"]);
    
    // Verificar si el archivo es una imagen
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
        echo "Solo se permiten imágenes JPG, JPEG y PNG.";
        exit;
    }

    // Mover la imagen al directorio de carga
    if (move_uploaded_file($uploaded_image["tmp_name"], $target_file)) {
        echo "La imagen ha sido subida exitosamente.";
    } else {
        echo "Error al subir la imagen.";
    }
} else {
    echo "No se ha subido ninguna imagen.";
}
?>