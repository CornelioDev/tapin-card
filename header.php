<!DOCTYPE html>
<html lang="es">

<head>
    <title><?= bloginfo('title') ?> | <?= bloginfo('description') ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="custom-container mx-auto flex items-center justify-between mb-12 lg:w-10/12">
        <figure class="lg:w-32">
            <a href="<?= site_url() ?>"><img src="<?= get_theme_file_uri('/images/logo.png') ?>" alt="tapin-card logo"></a>
        </figure>
        <nav class="hidden lg:flex">
            <ul class="flex gap-4 items-center text-base font-medium">
                <li><a href="#">Home</a></li>
                <li><a href="#">Productos</a></li>
                <li><a href="#">Ayuda Tapin</a></li>
            </ul>
            <a href="#" class="btn btn-sm btn-primary ml-4">Iniciar Sesión</a>
        </nav>
    </header>