<?php
// Cargar el encabezado
include 'includes/header.php';
?>
<link rel="stylesheet" href="css/producto.css">

<div class="container mt-5">
    <h2 class="text-center text-primary mb-4">Nuestros Productos</h2>

    <!-- 💧 Sección 1: Bidones de Agua Ozonizada 20L -->
    <h3 class="text-center text-dark mt-4">💧 Bidones de Agua 20L</h3>
    <div class="productos-grid">
        <?php
        $bidones = [
            ["img" => "img/bidonozonizado.png", "nombre" => "Bidón 20L con Caño", "descripcion" => "Ideal para oficinas y hogares."],
            ["img" => "img/ozonizadosincaño.png", "nombre" => "Bidón 20L sin Caño", "descripcion" => "Para dispensadores de agua."],
            ["img" => "img/bidoalcalino.png", "nombre" => "Bidón Alcalino 20L sin Caño", "descripcion" => "Agua alcalina para tu bienestar."],
            ["img" => "img/alcalinosincaño.png", "nombre" => "Bidón Alcalino 20L con Caño", "descripcion" => "Hidratación saludable."]
        ];
        foreach ($bidones as $p) {
            echo '
            <div class="producto-card">
                <img src="'.$p["img"].'" class="producto-img" alt="'.$p["nombre"].'">
                <div class="producto-info">
                    <h5>'.$p["nombre"].'</h5>
                    <p>'.$p["descripcion"].'</p>
                    <a href="https://wa.me/51964145882?text=Hola, podrias pasarme informacion de tus productos" target="_blank" class="btn btn-primary">Pedir por WhatsApp</a>
                </div>
            </div>';
        }
        ?>
    </div>

    <!-- 📦 Sección 2: Packs de Agua -->
    <h3 class="text-center text-dark mt-5">📦 Packs de Agua</h3>
    <div class="productos-grid">
        <?php
        $packs = [
            ["img" => "img/packde9.png", "nombre" => "Pack de 9 Unidades", "descripcion" => "Perfecto para negocios y familias."],
            ["img" => "img/packde15.png", "nombre" => "Pack de 15 Unidades", "descripcion" => "Gran opción para empresas."]
        ];
        foreach ($packs as $p) {
            echo '
            <div class="producto-card">
                <img src="'.$p["img"].'" class="producto-img" alt="'.$p["nombre"].'">
                <div class="producto-info">
                    <h5>'.$p["nombre"].'</h5>
                    <p>'.$p["descripcion"].'</p>
                    <a href="https://wa.me/51964145882?text=Hola, podrias pasarme informacion de tus productos" target="_blank" class="btn btn-success">Consultar</a>
                </div>
            </div>';
        }
        ?>
    </div>

    <!-- 🔹 Sección 3: Envases de Plástico -->
    <h3 class="text-center text-dark mt-5">🔹 Envases de Plástico 20L</h3>
    <div class="productos-grid">
        <?php
        $envases = [
            ["img" => "img/concaño.png", "nombre" => "Envase de Plástico 20L con Caño", "descripcion" => "Duradero y práctico."],
            ["img" => "img/sincaño.png", "nombre" => "Envase de Plástico 20L sin Caño", "descripcion" => "Ideal para recargas."]
        ];
        foreach ($envases as $p) {
            echo '
            <div class="producto-card">
                <img src="'.$p["img"].'" class="producto-img" alt="'.$p["nombre"].'">
                <div class="producto-info">
                    <h5>'.$p["nombre"].'</h5>
                    <p>'.$p["descripcion"].'</p>
                    <a href="https://wa.me/51964145882?text=Hola, podrias pasarme informacion de tus productos" target="_blank" class="btn btn-warning">Más Info</a>
                </div>
            </div>';
        }
        ?>
    </div>

</div>

<?php
// Cargar el pie de página
include 'includes/footer.php';
?>
