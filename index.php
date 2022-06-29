<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasar variables por URL en PHP</title>
    <link rel="icon" href="favicon.ico" sizes="16x16" type="image/png">
    <style>
        body{
            margin: 0;
            padding: 0;
        }
        #titulo{
            height: 40px;
            box-sizing: border-box;
        }
        section{
            width: 100%;
            height: 85vh;
            background-color: #455A64;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #FFFFFF;
        }
        .ejercicios{
            width: 90%;
            height: 90%;
            display: flex;
            flex-direction: column;
            flex-wrap: wrap;
        }
        .ejercicios li{
            margin: 0 10px 20px 10px;
        }
        form{
            display: flex;
            flex-direction: column;
        }
        input{
            width: 150px;
            height: 25px;
            margin: 5px 0 5px 0;
        }
        button{
            width: 70px;
            height: 35px;
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
    <h1 id="titulo">Variables por URL</h1>
    <section>
        <ol class="ejercicios">
            <li>
                <ol type="A">
                    <li class="submenu">
                        <form action="ejercicios.php" method="get">
                            <label for="numero">Numero a enviar:</label>
                            <input type="number" placeholder="Ingrese un numero" name="numero">
                            <input name="ID" type="hidden" value="1">
                            <button>ENVIAR</button>
                        </form>
                    </li>
                    <li class="submenu">
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
            <li>
                <h4>Problema Blog</h4>
                <form action="ejercicios.php" method="get">
                            <label for="comentario">Ingrese su comentario:</label>
                            <textarea cols="30" rows="5" name="comentario"></textarea>
                            <input name="ID" type="hidden" value="7">
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
        date_default_timezone_set("America/Argentina/Cordoba");
        $diaCodigo = getdate();
        echo $diaCodigo["wday"] . "<br>";
        echo date_default_timezone_get() . "<br>";
        switch ($diaCodigo["wday"]){
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
            case 0:
                echo "DOMINGO";
                break;
        }
    }
?>