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

    <!-- Título de la página -->
    <title>¡Obtén el Mejor Hosting con Descuento Exclusivo!</title>
    <!-- Descripción meta -->
    <meta name="description" content="Descubre los mejores planes de hosting con precios imbatibles y soporte 24/7. Únete a Hostinger con un descuento exclusivo y acelera tu presencia en línea.">
    <!-- Palabras clave -->
    <meta name="keywords" content="hosting, Hostinger, descuento hosting, hosting barato, mejor hosting, hosting web, servidor web, soporte hosting, migración gratuita">
    <!-- Autor -->
    <meta name="author" content="Tu Nombre o Marca">
    <!-- Canonical URL (para evitar contenido duplicado) -->
    <link rel="canonical" href="https://sabitashop.in/">
    <!-- Vista adaptable a dispositivos móviles -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Robots meta tag -->
    <meta name="robots" content="index, follow">
    <!-- Charset -->
    <meta charset="UTF-8">

    <!-- OG: Título de la página -->
    <meta property="og:title" content="¡Obtén el Mejor Hosting con Descuento Exclusivo - Hostinger!">
    <!-- OG: Descripción -->
    <meta property="og:description" content="Aprovecha un descuento exclusivo en Hostinger y obtén el mejor hosting para tu sitio web. Rápido, seguro y con soporte 24/7.">
    <!-- OG: URL de la página -->
    <meta property="og:url" content="https://sabitashop.in/">
    <!-- OG: Tipo de contenido -->
    <meta property="og:type" content="website">
    <!-- OG: Imagen -->
    <meta property="og:image" content="https://sabitashop.in/images/hostinger-discount.png">
    <!-- OG: Nombre del sitio -->
    <meta property="og:site_name" content="Tu Marca o Sitio Web">
    <!-- Twitter: Card -->
    <meta name="twitter:card" content="summary_large_image">
    <!-- Twitter: Título -->
    <meta name="twitter:title" content="¡Obtén el Mejor Hosting con Descuento Exclusivo - Hostinger!">
    <!-- Twitter: Descripción -->
    <meta name="twitter:description" content="Únete a Hostinger con un descuento exclusivo y obtén el mejor hosting para tu sitio web. Rápido, seguro y con soporte 24/7.">
    <!-- Twitter: Imagen -->
    <meta name="twitter:image" content="https://sabitashop.in/images/hostinger-discount.png">
  
  
    <link rel="stylesheet" href="assets/css/styles.css">
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
    <?php
        // Conexión a la base de datos (si es necesario)
        // $conn = new mysqli('localhost', 'usuario', 'contraseña', 'base_de_datos');

        // Insertar registro de visita
        $ip = $_SERVER['REMOTE_ADDR'];
        $fecha = date('Y-m-d H:i:s');
        $referer = isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : 'Directo';
        $user_agent = $_SERVER['HTTP_USER_AGENT'];

        // Aquí podrías insertar los datos en una base de datos
        // $sql = "INSERT INTO visitas (ip, fecha, referer, user_agent) VALUES ('$ip', '$fecha', '$referer', '$user_agent')";
        // $conn->query($sql);
    ?>

    <header>
        <h1>¡Obtén el mejor hosting con un descuento exclusivo!</h1>
        <p>Únete a Hostinger a través de mi enlace y disfruta de precios imbatibles.</p>
        <a href="REFER_TAG" class="cta-button">Empieza Ahora</a>
    </header>

    <section class="benefits">
        <h2>¿Por qué elegir Hostinger?</h2>
        <ul>
            <li>Alta velocidad y rendimiento</li>
            <li>Soporte 24/7</li>
            <li>Migración gratuita</li>
            <li>Precios imbatibles</li>
        </ul>
    </section>

    <section class="testimonials">
        <h2>Lo que dicen nuestros clientes</h2>
        <p>"Hostinger ha sido una solución fantástica para nuestro sitio web. Rápido, confiable y a un precio excelente."</p>
        <p>"El soporte técnico de Hostinger es inigualable. Siempre están ahí cuando los necesitas."</p>
    </section>

    <section class="faqs">
        <h2>Preguntas Frecuentes</h2>
        <h3>¿Cómo obtengo el descuento?</h3>
        <p>Simplemente haz clic en el botón de "Empieza Ahora" y se aplicará automáticamente.</p>
        <h3>¿Qué planes ofrece Hostinger?</h3>
        <p>Hostinger ofrece una variedad de planes que se adaptan a tus necesidades, desde hosting compartido hasta VPS.</p>
    </section>

    <footer>
        <p>&copy; 2024 - Todos los derechos reservados.</p>
    </footer>

    <?php
        // Cerrar conexión a la base de datos
        // $conn->close();
    ?>
</body>
</html>
