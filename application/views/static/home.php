<style>


body {
    background-image: url('<?php echo base_url();?>themes/nada52/images/page-bg-dots-v3.svg');
    background-size: cover;      
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh;     

}
.home-hero {
    background: linear-gradient(135deg, #0e3f87 0%, #1b6dbd 100%);
    color: #fff;
    padding: 60px 0 40px;
    position: relative;
    top: -30px;
    background-image: url('<?php echo base_url();?>themes/nada52/images/banner-anda.png');
    background-size: cover;
}
.home-hero .hero-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}
.home-hero .hero-top {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    gap: 24px;
    margin-bottom: 32px;
}
.home-hero .hero-brand {
    min-width: 280px;
    flex: 1;
}
.home-hero .hero-brand h1 {
    font-size: 3rem;
    margin: 0 0 14px;
    line-height: 1.05;
    color: #fff;
}
.home-hero .hero-brand p {
    max-width: 660px;
    margin: 0;
    color: rgba(255,255,255,.88);
    font-size: 1rem;
    line-height: 1.6;
}
.home-hero .hero-stats {
    display: grid;
    grid-template-columns: repeat(3, minmax(140px, 1fr));
    gap: 16px;
    width: 100%;
    max-width: 520px;
}
.home-hero .stat-card {
    background: rgba(255,255,255,.12);
    border: 1px solid rgba(255,255,255,.18);
    border-radius: 18px;
    padding: 22px 18px;
    text-align: center;
}
.home-hero .stat-card strong {
    display: block;
    font-size: 2.2rem;
    line-height: 1;
    margin-bottom: 8px;
}
.home-hero .stat-card span {
    color: rgba(255,255,255,.76);
    font-size: 0.95rem;
}
.home-hero .hero-search {
    margin-top: 32px;
    max-width: 860px;
}
.home-hero .hero-search .input-group {
    display: flex;
    gap: 0;
    flex-wrap: wrap;
}
.home-hero .hero-search input {
    min-height: 56px;
    border-radius: 999px 0 0 999px;
    border: none;
    padding: 0 22px;
    box-shadow: inset 0 0 0 1px rgba(255,255,255,.18);
    background: rgba(255,255,255,.14);
    color: #000000;
    flex: 1;
    min-width: 0;
}
.home-hero .hero-search input::placeholder {
    color: rgba(109, 108, 108, 0.72);
}
.home-hero .hero-search button {
    min-height: 56px;
    border-radius: 0 999px 999px 0;
    border: none;
    padding: 0 30px;
    font-weight: 700;
}

.home-hero .hero-actions a {
    color: #fff;
    font-weight: 600;
    text-decoration: underline;
}
.home-categories {
    padding: 48px 0 24px;
}
.home-category-grid {
    display: grid;
    grid-template-columns: repeat(4, minmax(220px, 1fr));
    gap: 20px;
}
.home-category-card {
    border-radius: 22px;
    background: #fff;
    border: 1px solid #e6ebf3;
    padding: 26px 24px;
    color: #0f2d57;
    min-height: 180px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}
.home-category-card h3 {
    margin: 0 0 10px;
    font-size: 1.2rem;
}
.home-category-card p {
    margin: 0;
    color: #5d6f85;
    font-size: 0.95rem;
    line-height: 1.6;
}
.home-category-card a {
    margin-top: 18px;
    color: #0e3f87;
    font-weight: 700;
    text-decoration: none;
}
.home-grid-section {
    padding: 40px 0 56px;
}
.home-grid-section h2 {
    font-size: 1.65rem;
    margin-bottom: 24px;
}
.home-latest-changes {
    background: #fff;
    border-radius: 24px;
    padding: 28px;
    box-shadow: 0 8px 28px rgba(39, 77, 128, 0.06);
}
.home-latest-changes .change-item {
    padding: 18px 0;
    border-bottom: 1px solid #eef1f7;
}
.home-latest-changes .change-item:last-child {
    border-bottom: none;
}
.home-latest-changes .change-item a {
    color: #0e3f87;
    font-weight: 600;
    text-decoration: none;
}
.home-latest-changes .change-meta {
    font-size: 0.95rem;
    color: #6d7d92;
    margin-top: 6px;
}
.home-why {
    background: #f8fbff;
    border-radius: 24px;
    padding: 28px;
}
.home-why .why-item {
    display: flex;
    gap: 16px;
    margin-bottom: 18px;
}
.home-why .why-item:last-child {
    margin-bottom: 0;
}
.home-why .why-icon {
    width: 48px;
    height: 48px;
    border-radius: 16px;
    background: #0e3f87;
    color: #fff;
    display: grid;
    place-items: center;
    font-size: 1.2rem;
}
.home-why .why-content h3 {
    margin: 0 0 6px;
    font-size: 1rem;
}
.home-why .why-content p {
    margin: 0;
    color: #425164;
    font-size: 0.95rem;
    line-height: 1.6;
}
.logo-catalog {
    height: 60px;
    width: auto;
    margin-bottom: 15px;
}

.home-category-card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
}

.home-category-card-content img {
     clip-path: inset(1px);
}

.vertical-bar {
    width: 1px;
    height: 70px;
    background-color: #acabab;
}

.text-nowrap {
    white-space: nowrap;
}
@media (max-width: 992px) {
    .home-hero .hero-top {
        flex-direction: column;
    }
    .home-hero .hero-stats {
        grid-template-columns: repeat(2, minmax(140px, 1fr));
    }
    .home-category-grid {
        grid-template-columns: 1fr;
    }
    .home-hero .hero-search .input-group {
        flex-direction: column;
    }
    .home-hero .hero-search input,
    .home-hero .hero-search button {
        border-radius: 100px;
        width: 50%;
    }

}
    @media (max-width: 992px) {
    .wp-page-body {
        margin: 0 auto;
    }
    .home-hero {
        width: 80%;
        margin: 0 auto;
        border-radius: 24px;
        margin-top: 40px;
    }
    /* Centrar texto */
    .home-hero,
    .home-grid-section,
    .home-category-card
    .home-latest-changes {
        text-align: center;
    }

    .input-group .form-control {
        margin: 0 auto;
        display: block;
        width: 25%;
        border-radius: 24px !important ;
        max-width: 600px;
        margin-bottom: 10px;

        
    }

    /* Centrar filas de Bootstrap */
    .row {
        justify-content: center;
    }

    /* Centrar botones */
    .btn,
    .btn-primary {
        margin: 0 auto;
        display: block;
    }

    /* Centrar imágenes */
    img {
        display: block;
        margin: 0 auto;
    }

    /* Centrar contenido flex */
    .d-flex {
        justify-content: center;
    }
}

@media (max-width: 931px) {

    .hero {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .hero h1,
    .hero p {
        max-width: 700px;
    }
}


/* @media (min-width: 700px) and (max-width: 922px) {
    .wp-page-body,
    .home-hero,
    .home-grid-section,
    .home-categories {
        margin: 0 auto;
        max-width: 920px;
        padding-left: 16px;
        padding-right: 16px;
    }

    .home-hero {
        width: 100%;
        max-width: 900px;
        border-radius: 24px;
    }

    .home-hero,
    .home-grid-section,
    .home-category-card,
    .home-latest-changes {
        text-align: center;
    }

    .input-group .form-control {
        width: 80%;
        margin: 0 auto 10px;
    }
} */

@media (max-width: 375px) {
    .home-hero .hero-inner .hero-top .hero-brand p {
        font-size: 15px;
        margin-right: 13px !important;
    }
}

</style>
<?php
$this->template->add_variable("body_class","container-fluid-full");
$survey_count = $this->stats_model->get_survey_count();
$variable_count = $this->stats_model->get_variable_count();
$citation_count = $this->stats_model->get_citation_count();
$latest_surveys = $this->stats_model->get_latest_surveys(5);
?>

<div class="home-hero">
    <div class="hero-inner">
        <div class="hero-top">
            <div class="hero-brand">
                <h1>Catálogo ANDA</h1>
                <p>Archivo Nacional de Datos y Metadatos — Accede a datos estadísticos oficiales de la República Dominicana de manera fácil, segura y confiable para la investigación, planificación y toma de decisiones.</p>
            </div>
           <!--  <div class="hero-stats">
                <div class="stat-card">
                    <strong><?php echo number_format($survey_count); ?></strong>
                    <span>Operaciones estadísticas</span>
                </div>
                <div class="stat-card">
                    <strong><?php echo number_format($variable_count); ?></strong>
                    <span>Variables disponibles</span>
                </div>
                <div class="stat-card">
                    <strong><?php echo number_format($citation_count); ?></strong>
                    <span>Citas publicadas</span>
                </div>
            </div> -->
        </div>

        <div class="hero-search">
            <form class="input-group" method="get" action="<?php echo site_url('catalog'); ?>">
                <input class="form-control bg-white" type="search" placeholder="Buscar datasets, variables, temas..." name="sk" aria-label="Buscar">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </form>
            <div class="hero-actions mt-3">
                <a href="<?php echo site_url('catalog'); ?>">Navegar el Catálogo</a>
            </div>
        </div>
    </div>
</div>

<div class="container home-categories">
    <div class="home-category-grid">
        <article class="home-category-card">
            <div class="home-category-card-content">
                <img src="<?php echo base_url();?>themes/nada52/images/grupo-icono.png"
                class="logo-catalog"
                alt="ANDA Logo">
                <h3>Censo</h3>
                <p>Información recopilada en operativos censales nacionales.</p>
            </div>
            <a href="<?php echo site_url('catalog?sk=Censo'); ?>">Ver Censo →</a>
        </article>
        <article class="home-category-card">
            <div class="home-category-card-content">
                <img src="<?php echo base_url();?>themes/nada52/images/lista-icono.png"
                class="logo-catalog"
                alt="ANDA Logo">
                <h3>Encuestas</h3>
                <p>Datos obtenidos a través de encuestas por muestreo.</p>
            </div>
            <a href="<?php echo site_url('catalog?sk=Encuesta'); ?>">Ver Encuestas →</a>
        </article>
        <article class="home-category-card">
            <div class="home-category-card-content">
                <img src="<?php echo base_url();?>themes/nada52/images/carpeta-icono.png"
                class="logo-catalog"
                alt="ANDA Logo">
                <h3>Registros Estadísticos</h3>
                <p>Registros administrativos y operaciones continuas.</p>
            </div>
            <a href="<?php echo site_url('catalog?sk=Registro'); ?>">Ver Registros →</a>
        </article>
        <article class="home-category-card">
            <div class="home-category-card-content">
                <img src="<?php echo base_url();?>themes/nada52/images/fuentes-nt-icono.png"
                class="logo-catalog"
                alt="ANDA Logo">
                <h3>Fuentes no tradicionales</h3>
                <p>Fuentes no tradicionales</p>
            </div>
            <a href="<?php echo site_url('catalog?sk=Censo'); ?>">Ver Fuentes →</a>
        </article>
    </div>
</div>

<div class="container home-grid-section">
    <div class="row gy-4">
        <div class="col-lg-7">
            <div class="home-latest-changes">
                <h2>Últimos cambios en el catálogo</h2>
                <?php if (isset($latest_surveys) && count($latest_surveys)): ?>
                    <?php foreach ($latest_surveys as $survey): ?>
                        <div class="change-item">
                            <a href="<?php echo site_url('catalog/'.$survey['id']); ?>"><?php echo $survey['title']; ?></a>
                            <div class="change-meta"><?php echo date('d/m/Y', intval($survey['changed'])); ?> · <?php echo $survey['nation']; ?></div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No hay cambios recientes disponibles.</p>
                <?php endif; ?>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="home-why">
                <h2>¿Por qué usar el Catálogo ANDA?</h2>
                <div class="why-item">
                    <div class="why-icon"><i class="fa fa-search"></i></div>
                    <div class="why-content">
                        <h3>Encuentra</h3>
                        <p>fácilmente datos relevantes para tu investigación y análisis.</p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon"><i class="fa fa-info-circle"></i></div>
                    <div class="why-content">
                        <h3>Comprende</h3>
                        <p>la información con metadatos claros y documentación organizada.</p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon"><i class="fa fa-download"></i></div>
                    <div class="why-content">
                        <h3>Descarga datos</h3>
                        <p>para tus análisis e investigaciones, con acceso seguro y controlado.</p>
                    </div>
                </div>
                <div class="why-item">
                    <div class="why-icon"><i class="fa fa-chart-line"></i></div>
                    <div class="why-content">
                        <h3>Impulsa decisiones</h3>
                        <p>con información confiable para políticas públicas y desarrollo.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


