<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Recibe Filas dinamicas</title>
</head>
<body>
    <p>Se recibieron <?php echo $_GET['filas']; ?> filas</p>
    <?php
        $filas = (int) ($_GET['filas'] ?? 0);

        echo '<table border="1">';
        for ($i = 1; $i <= $filas; $i++) {
            echo '<tr><td>' . $i . '</td></tr>';
        }
        echo '</table>';
    ?>
</body>
</html>