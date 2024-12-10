<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <title>Problema Panel Fotovoltaico</title>
    <link rel="stylesheet" href="css/estilos.css"/>
    <link rel="stylesheet" href="css/menu.css"/>
    <link rel="stylesheet" href="css/problemas.css"/>
    <link href="https://fonts.googleapis.com/css?family=Rambla" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
</head>
<body>
   <section class="wrapper">
    <header>
      <h1 class="logo"><a href="index.html">IntroPHP7</a></h1>
      <nav>
      <ul>
        <li><a href="index.php" class="current">Inicio</a></li>
        <li><a href="basicoPhp7.php">Básico Php7</a></li>
      </ul>
      </nav>
    </header>

    <section id="contenedor">
        <section class="problema">
            <h2>Problema: Cálculo de Superficie de Panel Fotovoltaico</h2>
            <p>Descripción:</p>
            <p>Se tiene que instalar un panel fotovoltaico para conseguir una potencia útil de 75,000 W. Sabemos que la densidad de radiación es de 1000 W/m² y el rendimiento del panel es del 18 %. Con estos datos, necesitamos calcular la superficie necesaria del panel.</p>
        </section>

        <section class="formulas">
            <h2>Fórmulas</h2>
            <p><strong>Fórmula para calcular la potencia total:</strong> <br>
            Potencia total = Potencia útil / Rendimiento</p>
            <p><strong>Fórmula para calcular la superficie:</strong> <br>
            Superficie = Potencia total / Densidad de radiación</p>
        </section>

        <section class="datos">
            <h2>Datos:</h2>
            <p><strong>Potencia útil:</strong> 75,000 W</p>
            <p><strong>Densidad de radiación:</strong> 1000 W/m²</p>
            <p><strong>Rendimiento:</strong> 18 %</p>
        </section>

        <section class="calculos">
            <h2>Solución:</h2>
            <p>a) La potencia total se calcula usando la fórmula: <br>
                Potencia total = 75,000 W / 0.18 = 416,666.67 W</p>
            <p>b) Para la superficie, utilizamos: <br>
                Superficie = 416,666.67 W / 1000 W/m² = 416.67 m²</p>
        </section>

        <?php
            function calcula_densidad(){
                $potencia_util = 75000; // en W
                $rendimiento = 0.18; // porcentaje en decimal
                $densidad_radiacion = 1000; // en W/m²

                // Cálculo de la potencia total requerida
                $potencia_total = $potencia_util / $rendimiento;

                // Cálculo de la superficie del panel
                $superficie = $potencia_total / $densidad_radiacion;

                return $superficie;
            }
        ?>

        <section class="resultado">
            <h2>Resultado:</h2>
            <div id="resultadoA"></div>
            <p><strong>Superficie necesaria del panel:</strong></p>
            <p><?php echo "La superficie necesaria del panel fotovoltaico es: " . calcula_densidad() . " m²"; ?></p>
        </section>
    </section>

    <footer class="pie">
        Creative Commons versión 3.0 SciSoft 2024
    </footer>
   </section>
</body>
</html>
