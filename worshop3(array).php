<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Lista de los paises con sus capitales</h1>
    <?php 
        $ceu = array ("Italia" => "Roma", "Luxemburgo" => "Luxemburgo", "Bélgica" => "Bruselas", "Dinamarca" => "Copenhague", "Finlandia" => "Helsinki", "Francia" => "París", "Eslovaquia" => "Bratislava", "Eslovenia" => "Ljubljana", "Alemania" => "Berlín", "Grecia" => "Atenas", "Irlanda" => "Dublín", "Países Bajos" => "Ámsterdam", "Portugal" => "Lisboa", "España" => "Madrid", "Suecia" => "Estocolmo", "Reino Unido" => "Londres", "Chipre" => "Nicosia", "Lituania" => "Vilnius", "República Checa "=>" Praga "," Estonia "=>" Tallin "," Hungría "=>" Budapest "," Letonia "=>" Riga "," Malta "=>" Valetta "," Austria "=> "Viena", "Polonia" => "Varsovia");
        ksort($ceu);
        foreach($ceu as $pais=>$capital)
        {
        echo "La capital de " . $pais . " es " . $capital;
        echo "<br>";
        }
    ?>
    <br><br>

    <?php 
        
        echo "<h1>El promedio de la temperatura.</h1>"; 

        $temperaturas = array (78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65 , 64, 68, 73, 75, 79, 73);

        $promedio=array_sum($temperaturas)/count($temperaturas); 
        echo "El promedio de la temperatura es: " . $promedio;

        echo "<h1>Lista de las siete temperaturas más bajas.</h1>"; 
        sort ($temperaturas);
        $salida = array_slice($temperaturas, 0, 7);
        foreach($salida as $salida)
        {
        echo  $salida . ", ";
        }

        echo "<br><br>";

        echo "<h1>Lista de las siete temperaturas más altas.</h1>"; 
        krsort ($temperaturas);
        $salida = array_slice($temperaturas, 0, 7);
        foreach($salida as $salida)
        {
        echo  $salida . ", ";
        }
        //krsort es para ordenar la lista de forma inversa
    ?>
</body>
</html>