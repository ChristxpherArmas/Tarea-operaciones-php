<html>
<body>
    <?php
    //Ejercicio 4: Edad promedio
    $n = 5;
    
    $suma = 0;
    for($f = 1; $f <= $n; $f++){
        $edad = rand(18, 25);
        echo "Alumno $f: $edad años <br>";
        $suma = $suma + $edad;
    }
    
    $promedio = $suma / $n;
    
    echo "<br>";
    echo "Edad promedio: $promedio años";
    ?>
</body>
</html>