<?php
    $A = 10;
    $B = 20;
    /*
    while($A < $B){
        echo "El valor de A es: $A" . "<br>";
        $A++; //$A = $A + 1;
    }

    for($i=5 ; $i<=10; $i++){
        echo "Hola $i";
    }*/
    
    //while // mientras
    //for // para hacer una cantidad definidad de veces
    //foreach // para cada, 


        // $A == $B // igualdad
    // $A < $B // menor que
    // $A > $B // mayor que
    // $A <= $B // menor igual que
    // $A != $B // distinto

    $nota = 9;
    if($nota > 8){
        echo "esta promocionado, ";
        if($nota == 10){
            echo "tambien sos un crack";
        }
        else{
            echo "casi un 10";
        }
    }
    elseif($nota > 6){
        echo "esta aprobado";
    }
    else{
        echo "desaprobado";
    }

    echo "<br> <br>";

    $A = 150;
    $B = 100;
    $C = 250;

    if($A < $B){
        if($A < $C){
            echo "A es el menor" . "<br>";
        }
    }

    if($A > $B && $A > $C){
        echo "A es el mayor" . "<br>";
    }
    else{
        if($B > $A && $B > $C){
            echo "B es el mayor" . "<br>";
        }
        else{
            echo "Por descarte, C es el mayor";
        }
        
    }

    // Ejercicio 3

    $N = 0;
    $Suma = 0;
    $Suma2 = 0;

    while($N < 10){
        $N++; // N = N + 1
        $Suma += $N; // $Suma = $Suma + $N
        //echo "El valor de la suma hasta el momento es $Suma" . "<br>" ;
    }

    echo "<br>" . "El valor de Suma es $Suma";

    for($M=0 ; $M<10 ; $M++){
        $Suma2 += $M;
    }
    echo "<br>" . "El valor de Suma es $Suma2";





?>