<?php

    if (isset($_GET['termino_busqueda'])) {
    $termino = htmlspecialchars($_GET['termino_busqueda']);

    if (empty($termino)) {
        $termino = "Ningún término introducido";
    }
} else {
    $termino = "Ningún término introducido";
}
echo "<h1>Has buscado: $termino</h1>";




?>