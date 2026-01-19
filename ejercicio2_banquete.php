<html>
<body>
    <?php
    //Ejercicio 2: Banquete
    $personas = 250;
    
    echo "Número de personas: $personas <br>";
    
    if($personas <= 200){
        $costo = 95.00;
    } else {
        if($personas <= 300){
            $costo = 85.00;
        } else {
            $costo = 75.00;
        }
    }
    
    $presupuesto = $personas * $costo;
    
    echo "Costo por persona: $$costo <br>";
    echo "Presupuesto total: $$presupuesto";
    ?>
</body>
</html>