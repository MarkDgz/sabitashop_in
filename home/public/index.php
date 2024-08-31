<?php
  /* Mk Taj Mahal */
?>
<?php
// Importar la clase
require_once 'classes/Secrets.php';

// Instanciar la clase y cargar los secretos
$secrets = new Secrets(__DIR__ . '/.secrets');

// Obtener las configuraciones necesarias
$dbHost = $secrets->get('DB_HOST');
$dbUser = $secrets->get('DB_USER');
$dbPass = $secrets->get('DB_PASS');
$dbName = $secrets->get('DB_NAME');
$gaTrackingId = $secrets->get('GA_TRACKING_ID');

// Ejemplo de uso en la configuración de la base de datos
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Ejemplo de uso en la inserción del código de Google Analytics
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¡Obtén el Mejor Hosting con Descuento!</title>
    <link rel="stylesheet" href="styles.css">

    <!-- Código de Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=<?= htmlspecialchars($gaTrackingId) ?>"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', '<?= htmlspecialchars($gaTrackingId) ?>');
    </script>
</head>
<body>
    <!-- Contenido de la landing page -->
</body>
</html>


