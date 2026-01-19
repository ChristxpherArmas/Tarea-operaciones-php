<html>
<body>
    <?php
    //Ejercicio 3: Fábrica
    $clave = 3;
    $materia_prima = 1000.00;
    
    echo "Clave: $clave <br>";
    echo "Materia prima: $$materia_prima <br>";
    
    //Calcular mano de obra
    if($clave == 3 || $clave == 4){
        $mano_obra = $materia_prima * 0.75;
    } else {
        if($clave == 1 || $clave == 5){
            $mano_obra = $materia_prima * 0.80;
        } else {
            $mano_obra = $materia_prima * 0.85;
        }
    }
    
    //Calcular gastos de fabricación
    if($clave == 2 || $clave == 5){
        $gastos = $materia_prima * 0.30;
    } else {
        if($clave == 3 || $clave == 6){
            $gastos = $materia_prima * 0.35;
        } else {
            $gastos = $materia_prima * 0.28;
        }
    }
    
    $costo_produccion = $materia_prima + $mano_obra + $gastos;
    $precio_venta = $costo_produccion + ($costo_produccion * 0.45);
    
    echo "Costo de producción: $$costo_produccion <br>";
    echo "Precio de venta: $$precio_venta";
    ?>
</body>
</html>