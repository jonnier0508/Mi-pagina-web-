<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menú de Opciones Matemáticas</title>
    <link rel="stylesheet" href="ejemplo8.css">
</head>
<body>

<div class="container">
    <h2>Menú de Opciones Matemáticas</h2>
    <form action="" method="post">
       

        <label for="num1">Número 1</label>
        <input type="number" name="num1" placeholder="Ingresa el primer número" required>

        <label for="num2">Número 2</label>
        <input type="number" name="num2" placeholder="Ingresa el segundo número" required>

        <label for="operacion">Elige una operación:</label>
        <select name="operacion" required>
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>

        <input type="submit" name="btncalcular" value="Calcular">
    </form>

<?php

if(isset($_POST['btncalcular'])){
   
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    $resultado = 0;

    // Realizar la operación según la opción seleccionada
    if($operacion == "sumar"){
        $resultado = $num1 + $num2;
    }
    elseif($operacion == "restar"){
        $resultado = $num1 - $num2;
    }
    elseif($operacion == "multiplicar"){
        $resultado = $num1 * $num2;
    }
    elseif($operacion == "dividir"){
        // Verificar que no se divida por 0
        if($num2 != 0){
            $resultado = $num1 / $num2;
        } else {
            $resultado = "No se puede dividir por cero";
        }
    }

    // Mostrar el resultado
    echo "<div class='resultado'>";
    echo "<div class='operacion'>Operación: $operacion</div>";
    echo "<div class='resultado'>Resultado: $resultado</div>";
    echo "</div>";
}

?>

</div>

</body>
</html>