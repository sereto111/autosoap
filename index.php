<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <script src="assets/js/main.js"></script>
    <title>Ejemplo de uso de servicio web</title>
</head>
<body id="top">
<section id="banner" data-video="images/banner">
    <div class="inner">
        <header>
            <h1>Concesionario Multimarca</h1>
            <p>Somos un Concesionario Multimarca Líder en su sector.<br>
                Calidad y Precio garantizado</p>
        </header>
        <a href="#main" class="more">Learn More</a>
    </div>
</section>
<?php

$username = 'ies';
$password = 'daw';

try {
    $client = new SoapClient(null, array(
            'uri' => 'http://dwes.infinityfreeapp.com/soap-automoviles/',
            'location' => 'http://dwes.infinityfreeapp.com/soap-automoviles/service-automoviles-auth.php',
            'trace' => 1
        )
    );

    $client->__setCookie('__test', 'd189aaeffbe50f62313a59f006e2e2bf');

    $auth_params = new stdClass();
    $auth_params->username = $username;
    $auth_params->password = $password;

    $header_params = new SoapVar($auth_params, SOAP_ENC_OBJECT);
    $header = new SoapHeader('http://dwes.infinityfreeapp.com/soap-automoviles/service-automoviles-auth.php', 'authenticate', $header_params, false);
    $client->__setSoapHeaders(array($header));
    $cred = $client->__soapCall('authenticate', array($header_params));

    //$cred = $client->authenticate($_GET['username'], $_GET['password']);

    if ($cred) {
        $marcas = $client->ObtenerMarcas();
        $videos = $client->ObtenerMarcasUrl();
    } else {

        echo "<p><b>Credenciales no válidas.</b></p>";
    }

//    Prueba con get antes de usar autenticacion;
//    $username = isset($_GET['username']) ? $_GET['username'] : "";
//    $password = isset($_GET['password']) ? $_GET['password'] : "";
//
//    if ($username=="ies" && $password=="daw") {
//    $client->__setCookie('__test', 'd189aaeffbe50f62313a59f006e2e2bf');
//    $marcas = $client->ObtenerMarcas();
//    } else {
//        echo "<p><b>Credenciales no válidas.</b></p>";
//    }

} catch (Exception $e) {
    echo($client->__getLastResponse());
    echo PHP_EOL;
    echo($client->__getLastRequest());
}

?>
<div id="main">
    <?php
    foreach ($marcas as $key => $value) {
        $vid = $videos[$value];

        $parsedUrl = parse_url($vid);
        $videoId = '';
        if (isset($parsedUrl['path'])) {
            $pathParts = explode('/', trim($parsedUrl['path'], '/'));
            $videoId = end($pathParts);
        } elseif (isset($parsedUrl['query'])) {
            parse_str($parsedUrl['query'], $query);
            if (isset($query['v'])) {
                $videoId = $query['v'];
            }
        }

        $imagePath = "images/" . $value . ".png";
        ?>
        <div class="thumbnails">
            <div class="box">

                <a id="nodeco" href="<?= htmlspecialchars("https://www.youtube.com/embed/".$videoId) ?>" data-fancybox data-type="iframe" class="fancybox.iframe">
                    <img src="<?= $imagePath ?>" alt="<?= $value ?>" />
                </a>

                <div class="inner">
                    <a href="modelos.php?marca=<?= urlencode($value) ?>" data-fancybox data-type="ajax" data-src="modelos.php?marca=<?= urlencode($value) ?>">
                        <?= "Modelos " . $value ?>
                    </a>
                    <br>
                    <a href="<?= htmlspecialchars($vid) ?>" data-fancybox data-type="iframe" class="fancybox.iframe">
                        <?= "Vídeo " . $value ?>
                    </a>
                </div>
            </div>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>
