<?php
// Cargar el encabezado
include 'includes/header.php';
?>
<link rel="stylesheet" href="css/contacto.css">


<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">📞 Contáctanos</h2>

    <!-- Sección de Información de Contacto -->
    <div class="contacto-grid">
        <div class="contacto-card">
            <i class="fas fa-phone fa-2x text-primary"></i>
            <h4>Teléfono</h4>
            <p>📞 +51 932 318 684</p>
            <p>📞 +51 964 145 882</p>
        </div>

        <div class="contacto-card-correo">
            <i class="fas fa-envelope fa-2x text-danger"></i>
            <h4>Correo Electrónico</h4>
            <p>📧 corporationbermudezyasociados@gmail.com</p>
        </div>

        <div class="contacto-card">
            <i class="fab fa-whatsapp fa-2x text-success"></i>
            <h4>WhatsApp</h4>
            <p><a href="https://wa.me/51964145882?text=Hola, podrias pasarme informacion de tus productos" target="_blank"  class="btn btn-success">Escríbenos</a></p>
        </div>
    </div>

    <!-- Horario de Atención -->
    <div class="horario mt-4">
        <h3 class="text-center">🕒 Horario de Atención</h3>
        <p class="text-center">Lunes a Sábado: 9:00 a.m. - 1:00 p.m. y 3:00 p.m. - 7:00 p.m.</p>
    </div>

    <!-- Ubicación Restringida -->
    <div class="ubicacion-restringida mt-5 text-center">
        <h3>📍 Ubicación</h3>
        <p class="text-danger"><strong>⚠ La dirección solo se proporciona después del pago del pedido.</strong></p>
        <p>Para más información, contáctanos por WhatsApp.</p>
    </div>
</div>


<?php
// Cargar el pie de página
include 'includes/footer.php';
?>
