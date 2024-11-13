<?php get_header(); ?>

<div class="container mx-auto md:w-10/12">
    <!-- Hero Section -->
     <section class="flex flex-col gap-10 md:grid md:grid-cols-2">
        <div class="hero-text space-y-10 mt-5 md:text-left text-center">
            <h1>intercambia información con solo un toque</h1>
            <p>Nuestra tecnología NFC ofrece soluciones innovadoras en el intercambio de información.Tapin permite a los usuarios conectar y compartir datos con un simple toque de manera rápida y eficiente.</p>
            <a href="#" class="btn btn-lg btn-primary">Conéctate</a>
        </div>
        <figure>
            <img src="<?= get_theme_file_uri('images\lading-hero-banner.png') ?>" alt="Tapin Card Hero Banner">
        </figure>
     </section>
</div>

<?php get_footer(); ?>