<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Filas dinamicas</title>
</head>
<body>
    
    <form action="recibe-filas.php" method="get" name="formulario" id="formulario">
        
        <label for='filas'>Cuantas Filas:</label>
        <br>
        <select name='filas' id='filas'>
           
            <option value='null'>Seleccionar filas</option>

        <?php
            for ($i = 1; $i <= 5000; $i++) {
                echo " <option value='" . $i . "'>" . $i . "</option>";
                echo "<br>";
            }   
        ?>
        </select>
        <button type="submit">Enviar</button>
    </form>


    <div id="msg">
        Filas dinamicas
    </div>
    <script>
        const selectElement = document.getElementById('filas');
        const msgElement = document.getElementById('msg');
        const formulario = document.getElementById('formulario');
        formulario.addEventListener('submit', function(e) {

            e.preventDefault();
            const selectedValue = selectElement.value;
            if(selectedValue == 'null')
            {
                msgElement.textContent = 'Selecciona un número de filas mayor a 0';
            }
            else if (selectedValue !== 'null')
            {
                msgElement.textContent = 'Número de filas seleccionadas: ' + selectedValue;
                setTimeout(function() {
                    formulario.submit();
                }, 1000);
            }
        });
    </script>
</body>
</html>