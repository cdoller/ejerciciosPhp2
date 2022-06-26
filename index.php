<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables por URL en PHP</title>
    <style>
        section{
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            flex-wrap: wrap;
            width: 100%;
            height: 80vh;
            background-color: rgb(105, 105, 105);
            box-sizing: border-box;
        }
        input{
            height: 50px;
            width: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        form{
            width: 30%;
        }
        ol{
            width: 500px;
        }
        li{
            width: 400px;
        }
    </style>
</head>
<body>
    <h1>Variables por URL</h1>
    <section>
        <ol>
            <li>
                <ol type="A">
                    <li>
                        <form action="ejercicios.php" method="get">
                            <label for="numero">Numero a enviar:</label>
                            <input type="number" placeholder="Ingrese un numero" name="numero">
                            <input name="ID" type="hidden" value="1">
                            <button>ENVIAR</button>
                        </form>
                    </li>
                    <li>
                        <?php numerosImparesHasta20(); ?>
                    </li>
                </ol>
            </li>
            <li>
                <form action="ejercicios.php" method="get">
                    <label for="numero1">Primer numero de la suma:</label>
                    <input type="number" placeholder="Numero1" name="numero1">

                    <label for="numero2">Segundo numero de la suma:</label>
                    <input type="number" placeholder="Numero2" name="numero2">

                    <input name="ID" type="hidden" value="2">
                    <button>ENVIAR</button>
                </form>
            </li>
            <li>
                <?php numerosParesHasta20(); ?>
            </li>
            <li>
                <h4>El dia de la semana es:</h4>
                <h5><?php diaSemana(); ?></h5>
            </li>
            <li>
                <h4>Simulacion de carrito de compras:</h4>
                <form action="ejercicios.php" method="get">
                            <label for="precioCarrito">Monto de la compra:</label>
                            <input type="number" placeholder="" name="precioCarrito">
                            <input name="ID" type="hidden" value="5">
                            <button>ENVIAR</button>
                </form>
            </li>
            <li>
                <h4>La palabra es un palindromo?</h4>
                <form action="ejercicios.php" method="get">
                            <label for="palabra">Palabra:</label>
                            <input type="text" placeholder="Ingrese la palabra" name="palabra">
                            <input name="ID" type="hidden" value="6">
                            <button>ENVIAR</button>
                </form>
            </li>
        </ol>
    
    </section>
</body>
</html>

<?php
    function numerosImparesHasta20(){
        for($i=1 ; $i<20 ; $i++){
            if($i%2 == 1){
                echo "[$i] ";
            }
        }
    }

    function numerosParesHasta20(){
        for($i=1 ; $i<=20 ; $i++){
            if($i%2 == 0){
                echo "[$i] ";
            }
        }
    }

    function diaSemana(){
        $diaIngles = date ('N');
        switch ($diaIngles){
            case 1:
                echo "LUNES";
                break;
            case 2:
                echo "MARTES";
                break;
            case 3:
                echo "MIERCOLES";
                break;
            case 4:
                echo "JUEVES";
                break;
            case 5:
                echo "VIERNES";
                break;
            case 6:
                echo "SABADO";
                break;
            case 7:
                echo "DOMINGO";
                break;
        }
    }
?>