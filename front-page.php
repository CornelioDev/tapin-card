<?php get_header(); ?>


<!-- Hero Section -->
<section class="custom-container flex flex-col gap-16 lg:gap-0 lg:grid lg:grid-cols-2 mt-20">
    <div class="hero-text space-y-12 text-center lg:space-y-4 mt-5 lg:text-left lg:w-5/6 lg:place-self-center">
        <h1>intercambia información con solo un toque</h1>
        <p>Nuestra tecnología NFC ofrece soluciones innovadoras en el intercambio de información.Tapin permite a los usuarios conectar y compartir datos con un simple toque de manera rápida y eficiente.</p>
        <a href="#" class="btn btn-lg btn-primary">Conéctate</a>
    </div>
    <figure>
        <img src="<?= get_theme_file_uri('images\lading-hero-banner.png') ?>" alt="Tapin Card Hero Banner">
    </figure>
</section>

<!-- Features Section -->
<div class="bg-background-blue my-24 lg:py-10 py-28">
    <section class="custom-container lg:grid lg:grid-cols-2">
        <figure class="hidden lg:block">
            <img src="<?= get_theme_file_uri('images\features-landing.png') ?>" alt="Tapin Card Hero Banner">
        </figure>
        <div class="flex items-center">
            <ul class="custom-bullet text-5xl lg:text-xl space-y-8">
                <li>Comparte la información de contacto al instante con tecnología NFC y códigos QR.</li>
                <li>Mantén los datos siempre actualizados sin necesidad de imprimir nuevas tarjetas.</li>
                <li>Contribuye a la reducción del uso de papel y a un medio ambiente más saludable.</li>
                <li>Funcionalidad con cualquier smartphone con tecnología NFC o lector de códigos QR.</li>
                <li>Seguridad y protección de información personal, con sistema de autorización para acceder a la misma.</li>
            </ul>
        </div>
    </section>
</div>

<!-- Offer Section -->
<section class="custom-container text-center space-y-12 m-24">
    <div class="lg:w-4/6 mx-auto">
        <h2>¿Cómo funciona?</h2>
        <p>Al acercar <a href="#" class="hover:underline">#Tapin</a> a un smartphone o escanear el código QR, tendrás acceso a los datos automáticamente.</p>
    </div>
    <div>
        <h2>Lo que tenemos para ti</h2>
        <div class="flex flex-col lg:flex-row lg:gap-12 gap-10 mt-8">
            <div class="landing-tag">
                <figure><img src="<?= get_theme_file_uri('images\icon-card.png') ?>" alt=""></figure>
                <h3>Tarjeta de Presentación</h3>
            </div>
            <div class="landing-tag">
                <figure><img src="<?= get_theme_file_uri('images\icon-tag-id.png') ?>" alt=""></figure>
                <h3>Carnet Empresarial</h3>
            </div>
            <div class="landing-tag">
                <figure><img src="<?= get_theme_file_uri('images\nfc-tag-icon.png') ?>" alt=""></figure>
                <h3>NFC Tag</h3>
            </div>
        </div>
</section>

<?php get_footer(); ?>