<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Proyecto
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
    <!------------------------------------------------------------------------------------------>
    <!--Carousel-->
    <!------------------------------------------------------------------------------------------>
		<div id="carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators custom-indicators">
        <li data-target="#carousel" data-slide-to="0" class="active"></li>
        <li data-target="#carousel" data-slide-to="1"></li>
        <li data-target="#carousel" data-slide-to="2"></li>
        <li data-target="#carousel" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/SLIDER/plantilla1.png" alt="First slide">
        <div class="carousel-caption">
          <div class="carousel__items">
            <h2 class="carousel__items-title">Kit de Papelería Empresarial</h2>
            <p class="carousel__items-description">Todas las comunicaciones de tu empresa deben apoyarse en una papelería corporativa profesional que ayude a rear una marca fuerte.</p>
            <a href="" class="carousel__button">Ver más</a>
          </div>
          <div class="carousel__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/SLIDER/papeleria1.png" alt="">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/SLIDER/plantilla2.png" alt="Second slide">
        <div class="carousel-caption">
          <div class="carousel__items">
            <h2 class="carousel__items-title">Tarjetas traslúcidas</h2>
            <p class="carousel__items-description">Dale una presentación más sofisticada a tu empresa y diferenciate de las demás. Impresión sobre poliestireno translúcido con tintas uv.</p>
            <a href="" class="carousel__button">Ver más</a>
          </div>
          <div class="carousel__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/SLIDER/tarjetas2.png" alt="Tarjetas traslúcidas">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/SLIDER/plantilla3.png" alt="Third slide">
        <div class="carousel-caption">
          <div class="carousel__items">
            <h2 class="carousel__items-title">Diseño gráfico personalizado</h2>
            <p class="carousel__items-description">Contamos con profesionales del diseño para que tus impresos sean estéticos y con alta calidad visual.</p>
            <a href="" class="carousel__button">Ver más</a>
          </div>
          <div class="carousel__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/SLIDER/diseño3.png" alt="Diseño gráfico personalizado">
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?php echo get_template_directory_uri(); ?>/assets/SLIDER/plantilla4.png" alt="Fourth slide">
        <div class="carousel-caption">
          <div class="carousel__items">
            <h2 class="carousel__items-title">Productos promocionales</h2>
            <p class="carousel__items-description">Innovadores para el posicionamiento, fidelización y recordación de tu marca.</p>
            <a href="" class="carousel__button">Ver más</a>
          </div>
          <div class="carousel__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/SLIDER/productos4.png" alt="Productos promocionales">
          </div>
        </div>
      </div>
      </div>
      <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>

  <div class="main-form">
  <div class="main-form__background">
  <img src="<?php echo get_template_directory_uri(); ?>/assets/HOME/formbackground.png" alt="">
  </div>
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="main-form__text">
              <span>Déjanos tus datos si <b>requieres cotizar un trabajo personalizado</b>, contactar con un asesor o
                recibir
                información sobre descuentos.</span>
            </div>
          </div>
          <div class="col-md-6">
            <div class="main-form__contact">
              <?php echo do_shortcode( '[contact-form-7 id="34" title="Formulario de contacto index"]' ); ?>
            </div>
          </div>
        </div>
      </div>
    </div>


		</main><!-- #main -->
	</div><!-- #primary -->
	sadasd

<?php
get_footer();
