<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LA RESERVA - Hidratación al Máximo</title>
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
  <nav class="contenedor">
    <header class="logo">
        <img src="../img/logo.png" alt="Logo" width="200px">
    </header>
    <!-- Menú Principal -->
    <nav class="lista">
        <ul>
            <li><a class="a" href="../index.php">Inicio</a></li>
            <li><a class="a" href="../perfil.php">LA RESERVA</a></li>
            <li><a class="a" href="../producto.php">Productos</a></li>
            <!--<li><a class="a" href="../servicio.php">Servicios</a></li>-->
            <li><a class="a" href="../contacto.php">Contacto</a></li>
        </ul>
    </nav>
    <!-- Botón de contacto WhatsApp -->
    <nav class="contacto">
        <a class="a" href="https://wa.me/51964145882?text=Hola, podrias pasarme informacion de tus productos" target="_blank">¡Contáctanos por WhatsApp!</a>
    </nav>
    <!-- Menú Hamburguesa (oculto por defecto) -->
    <div class="hamburguesa" id="hamburguesa" onclick="toggleMenu()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
  </nav>

  <script>
    // Función para mostrar/ocultar el menú en móvil
    function toggleMenu() {
        const lista = document.querySelector('.lista ul');
        lista.classList.toggle('active');
    }
  </script>
</body>
</html>

