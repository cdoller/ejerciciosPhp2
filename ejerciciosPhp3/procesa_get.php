<?php
    // Primera opcion

    echo "<h3>METODO GET</h3>";
    /*
    // Segunda opcion - if ternario
    echo (isset($_GET["numero1"]) && isset($_GET["numero2"])) ? 'Los numeros son validos 2da<br>' : 'Los numeros no son validos<br>';

    // Tercera opcion
    echo (isset($_GET["numero1"]) + isset($_GET["numero2"]) ?? 'Alguno de los numeros ingresados no existe<br>');
    
    */
    
    if(isset($_GET['numero1']) && isset($_GET['numero2'])){
        echo "Tienen valor distinto de nulo" . "<br>";
        $numero1 = $_GET['numero1'];
        $numero2 = $_GET['numero2'];
        $suma = $numero1 + $numero2;
        echo "El primer numero ingresado es $numero1, el segundo numero es $numero2";
        echo "<br>" . "La suma de los numeros es $suma";    
    }
    else{
        echo "No tienen valor";
    }
    /*
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];
    $suma = $numero1 + $numero2;
    echo "El primer numero ingresado es $numero1, el segundo numero es $numero2";
    echo "<br>" . "La suma de los numeros es $suma";   
    */


?>