<html>
<body>
    <?php
    //Ejercicio 1: Precio de uva
    $precio_inicial = 10.00;
    $tipo = "A";
    $tamanio = 1;
    $kilos = 150;
    
    echo "Tipo: $tipo <br>";
    echo "Tamaño: $tamanio <br>";
    echo "Kilos: $kilos <br>";
    
    if($tipo == "A"){
        if($tamanio == 1){
            $precio_final = $precio_inicial + 0.20;
        } else {
            $precio_final = $precio_inicial + 0.30;
        }
    } else {
        if($tamanio == 1){
            $precio_final = $precio_inicial - 0.30;
        } else {
            $precio_final = $precio_inicial - 0.50;
        }
    }
    
    $total = $precio_final * $kilos;
    
    echo "Precio por kilo: $$precio_final <br>";
    echo "Total a recibir: $$total";
    ?>
</body>
</html>