<?php
    switch ($_GET['ID']){
        case 1:
            if($_GET['numero'] != null){
                $numero = abs($_GET['numero']) ;
                echo "Mostrando los valores impares menores a $numero" . "<br>";
        
                for($i = 1; $i<$numero ; $i++){
                    if($i%2 == 1){
                        echo "[$i] ";
                    }
                }

            }
            else{
                echo "tu vieja";
            }
            echo "<br><a href='index.php'>Volver</a>";
            break;
        case 2:
            if($_GET['numero1'] != null && $_GET['numero2'] != null){
                $suma = $_GET['numero1'] + $_GET['numero2'];

                echo "El resultado de la suma es: $suma" . "<br>";
                echo "<br><a href='index.php'>Volver</a>";
            }
            else{
                echo "tuvieja";
            }
            break;
        case 5:
            $totalCompra = $_GET['precioCarrito'];
            $montoEnvioGratis = 90;
            $montoMinimo = 30;
            $dif = $montoEnvioGratis - $totalCompra;

            if($totalCompra >= $montoEnvioGratis){
                echo "<strong>Gastos de envío incluidos ¡Vuelve pronto!</strong>";
            }
            elseif($totalCompra < $montoMinimo){
                echo "Compra más o te cobraremos el gasto de envío que es igual al
                valor de compra.";
            }
            else{
                echo "¡¡¡Con solo $$dif pesos más podrás tener gastos de
                envío gratis!!!";
            }

            echo "<br><a href='index.php'>Volver</a>";
            break;
        case 6:
            $palabra = strtolower($_GET['palabra']);
            $palabraInvertida = strrev($palabra);

            if($palabra == $palabraInvertida){
                echo "La palabra ingresada es un Palindromo!";
            }

            else{
                echo "No es un palindromo <br>";
                echo $palabra . "<br>";
                echo $palabraInvertida;
            }

            echo "<br><a href='index.php'>Volver</a>";
            break;
        default:
            echo "El codigo enviado es incorrecto";
            echo "<br><a href='index.php'>Volver</a>";
            break;
    }
?>