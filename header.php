<!DOCTYPE html>
<html lang="es">
<head>
    <title><?= bloginfo('title') ?> | <?= bloginfo('description') ?></title>
    <?php wp_head(); ?>
</head>
<body>
    <header class="container mx-auto flex items-center justify-between mb-8">
        <figure class="w-32">
            <img src="<?= get_theme_file_uri( '/images/logo.png' ) ?>" alt="tapin-card logo">
        </figure>
        <nav class="flex">
            <ul class="flex gap-4 items-center text-base font-medium">
                <li><a href="#">Home</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Ayuda Tapin</a></li>
            </ul>
            <a href="#" class="btn btn-primary">Iniciar Sesión</a>
        </nav>
    </header>