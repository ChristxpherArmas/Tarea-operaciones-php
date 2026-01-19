<html>
<body>
    <?php
    //Ejercicio 5: Horas trabajadas
    $pago_hora = 5.50;
    
    $total_horas = 0;
    for($dia = 1; $dia <= 6; $dia++){
        $horas = rand(6, 10);
        echo "Día $dia: $horas horas <br>";
        $total_horas = $total_horas + $horas;
    }
    
    $sueldo = $total_horas * $pago_hora;
    
    echo "<br>";
    echo "Total de horas: $total_horas <br>";
    echo "Sueldo: $$sueldo";
    ?>
</body>
</html>