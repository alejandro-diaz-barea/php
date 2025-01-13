<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        body {
            margin: 20px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="GET">
        <input type="text" id="q" name="q" placeholder="Ejemplo: Nicolah" required>
        <button type="submit">Buscar</button>
    </form>

    <?php
    $nombres = [
        "Yeray Almoguera González",  
        "Álvaro Caro Fernández", 
        "Carlos Cordero Moreno", 
        "Alejandro Díaz Barea", 
        "Santiago Domínguez Gómez", 
        "Lucía Espinosa Sánchez", 
        "Alejandro González Benítez", 
        "Víctor Jiménez Corada", 
        "Ángel Martínez Sánchez", 
        "Pablo Olvera Colino", 
        "Gonzalo Pulido Sánchez", 
        "Francisco Javier Rodríguez Acosta", 
        "Nicolás Ruiz Ruiz", 
        "Félix Sánchez González", 
        "Alejandro Seoane Martínez", 
        "Rafael Tocino Batista", 
        "Israel Valderrama García", 
        "Isaac Vallet Colchero"
    ];

    if (isset($_GET['q'])) {
        $q = strtolower($_GET['q']);
        $resultados = [];

        foreach ($nombres as $nombre) {
            if (strpos(strtolower($nombre), $q) !== false) {
                $resultados[] = $nombre;
            }
        }

    if (!empty($resultados)) {
        echo '<ul>';
        foreach ($resultados as $nombre) {
                echo "<li>$nombre</li>";
            }
            echo '</ul>';
        } else {
            echo '<p class="error">No</p>';
        }
    }
    ?>
</body>
</html>
