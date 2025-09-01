<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meses y Estaciones del Año en Perú</title>
    <link rel="stylesheet" href="ejemplo10.css">
</head>
<body>

    <h1>Meses y Estaciones del Año en Perú</h1>

    <form method="POST">
        <label for="monthNumber">Ingresa un número del 1 al 12 (Mes):</label>
        <input type="number" id="monthNumber" name="monthNumber" min="1" max="12" required>
        <input type="submit" value="Ver Mes y Estación">
    </form>

    <div class="result">
        <?php
    
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monthNumber = $_POST['monthNumber'];
    $month = "";
    $season = "";

    switch ($monthNumber) {
        case 1:
            $month = "Enero";
            $season = "Verano";
            break;
        case 2:
            $month = "Febrero";
            $season = "Verano";
            break;
        case 3:
            $month = "Marzo";
            $season = "Verano";
            break;
        case 4:
            $month = "Abril";
            $season = "Otoño";
            break;
        case 5:
            $month = "Mayo";
            $season = "Otoño";
            break;
        case 6:
            $month = "Junio";
            $season = "Otoño";
            break;
        case 7:
            $month = "Julio";
            $season = "Invierno";
            break;
        case 8:
            $month = "Agosto";
            $season = "Invierno";
            break;
        case 9:
            $month = "Septiembre";
            $season = "Invierno";
            break;
        case 10:
            $month = "Octubre";
            $season = "Primavera";
            break;
        case 11:
            $month = "Noviembre";
            $season = "Primavera";
            break;
        case 12:
            $month = "Diciembre";
            $season = "Primavera";
            break;
        default:
            $month = "Número inválido";
            $season = "No disponible";
    }
    
    echo "<p>El mes correspondiente al número $monthNumber es: <strong>$month</strong> y la estación es: <strong>$season</strong></p>";
}
?>

    
    </div>

</body>
</html>