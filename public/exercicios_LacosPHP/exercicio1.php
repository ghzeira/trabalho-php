
<html>
    <head>
        <title>Tabuada</title>
    </head>
    <body>

        <h1>Digite um número para ver a tabuada</h1>

        <form method="POST">
            <label for="numero">Número:</label>
            <input type="number" name="numero" id="numero">
            <input type="submit" value="Ver Tabuada">
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $numero = $_POST['numero'];

            if (!empty($numero)) {
                echo "<h2>Tabuada do $numero:</h2>";
                echo "<ul>";

                for ($i = 1; $i <= 10; $i++) {
                    $resultado = $numero * $i;
                    echo "<li>$numero x $i = $resultado</li>";
                }
                echo "</ul>";
            }
        }
        ?>

    </body>
</html>