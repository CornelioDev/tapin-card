<?php get_header(); ?>

<div class="container mx-auto lg:w-10/12">
    <!-- Hero Section -->
     <section class="flex flex-col gap-16 lg:gap-0 lg:grid lg:grid-cols-2">
        <div class="hero-text space-y-12 text-center lg:space-y-4 mt-5 lg:text-left lg:w-5/6">
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