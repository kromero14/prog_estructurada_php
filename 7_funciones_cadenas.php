<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones manipulación de cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>

    <h2>Función substr()</h2>
    <?php
// substr(): Extrae una parte de una cadena
$texto = "Hola mundo";
echo substr($texto, 5); // Resultado: "mundo"
?>


    <h2>Función ord()</h2>
    <?php
// ord(): Devuelve el valor ASCII del primer carácter
$letra = "A";
echo ord($letra); // Resultado: 65
?>


    <h2>Función printf()</h2>
    <?php
// printf(): Imprime una cadena formateada
$nombre = "Keiner";
$edad = 16;
printf("Mi nombre es %s y tengo %d años.", $nombre, $edad);
// Resultado: "Mi nombre es Juan y tengo 25 años."
?>


    <h2>Función sprintf()</h2>
    <?php
// sprintf(): Devuelve una cadena formateada
$precio = 9.99;
$mensaje = sprintf("El precio es %.2f USD", $precio);
echo $mensaje; // Resultado: "El precio es 9.99 USD"
?>


    <h2>Función strtolower()</h2>
    <?php
// strtolower(): Convierte a minúsculas
$texto = "HOLA MUNDO";
echo strtolower($texto); // Resultado: "hola mundo"
?>


    <h2>Función strtoupper()</h2>
    <?php
// strtoupper(): Convierte a mayúsculas
$texto = "sistemas guanenta";
echo strtoupper($texto); // Resultado: "HOLA MUNDO"
?>


    <h2>Función ereg()</h2>
    <?php
// Usando preg_match() en lugar de ereg()
$texto = "Hola123";
if (preg_match('/[0-9]+/', $texto)) {
    echo "Contiene números"; // Resultado: "Contiene números"
}
?>


    <h2>Función eregi()</h2>
<?php
// Usando preg_match() con modificador 'i' (insensible a mayúsculas)
$texto = "Hola123";
if (preg_match('/hola/i', $texto)) {
    echo "Coincidencia encontrada"; // Resultado: "Coincidencia encontrada"
}
?>
</body>
</html>