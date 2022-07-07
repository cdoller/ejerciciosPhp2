<?php
    echo "<h3>METODO POST</h3>";

    if($_POST['numeroA'] != null){
        echo "Tienen valor distinto de nulo" . "<br>";
        $numeroA = $_POST['numeroA'];
        $numeroB = $_POST['numeroB'];
        $suma = $numeroA + $numeroB;
        echo "El primer numero ingresado es $numeroA, el segundo numero es $numeroB";
        echo "<br>" . "La suma de los numeros es $suma";    
    }
    else{
        echo "No tienen valor";
    }
?>