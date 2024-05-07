<?php
 if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['l'])) {
        $params = array(
            'l' => $_GET['l']
        );

        $url = 'http://localhost:3000/aprox?' . http_build_query($params);
        
        $response = file_get_contents($url);

        $data = json_decode($response, true);

        echo "Resultado: " . $data['resultado'] . "<br>";
        echo "Operación: " . $data['operacion'];
    }
?>
