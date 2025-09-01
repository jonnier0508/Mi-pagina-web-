<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dia de la semana</title>
    <link rel="stylesheet" href="ejemplo9.css">
</head>
<body>
    <div class="container">
    <h2>dias de la semana</h2>
    <form action="" method="post">
       

<form method="POST">
        <label for="dayNumber">Ingresa un número del 1 al 7:</label>
        <input type="number" id="dayNumber" name="dayNumber" min="1" max="7" required>
        <input type="submit" value="Ver Día">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dayNumber = $_POST['dayNumber'];

        switch ($dayNumber) {
            case 1:
                $day = "Lunes";
                break;
            case 2:
                $day = "Martes";
                break;
            case 3:
                $day = "Miércoles";
                break;
            case 4:
                $day = "Jueves";
                break;
            case 5:
                $day = "Viernes";
                break;
            case 6:
                $day = "Sábado";
                break;
            case 7:
                $day = "Domingo";
                break;
            default:
                $day = "Número inválido";
        }
        
        echo "<div class='result'>El día correspondiente al número $dayNumber es: $day</div>";
    }
    ?>

</body>
</html>