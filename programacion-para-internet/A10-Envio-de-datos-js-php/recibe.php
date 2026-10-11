<?php
$nombre = $_POST['nombre'] ?? '';
$correo = $_POST['correo'] ?? '';
$sexo = $_POST['sexo'] ?? '';
$boletin = isset($_POST['boletin']) ? 'Si' : 'No';
$comentario = $_POST['comentario'] ?? '';
$carrera = $_POST['carrera'] ?? '0';
$pasw = $_POST['pasw'] ?? '';
$promedio = $_POST['promedio'] ?? '';
$fecha = $_POST['fecha'] ?? '';

$sexo_txt = ($sexo == 'F') ? 'Femenino' : 'Masculino';

if ($carrera == '1') {
    $carrera_txt = 'Ing. Informática';
} else {
    $carrera_txt = 'Ing. Computación';
}

echo "Nombre: " . $nombre . "<br>";
echo "Correo: " . $correo . "<br>";
echo "Género: " . $sexo_txt . "<br>";
echo "Recibir Boletin: " . $boletin . "<br>";
echo "Comentario: " . $comentario . "<br>";
echo "Carrera: " . $carrera_txt . "<br>";
echo "Contraseña: " . $pasw . "<br>";
echo "Promedio: " . $promedio . "<br>";
echo "Fecha nacimiento: " . $fecha . "<br>";