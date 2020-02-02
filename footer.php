<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Proyecto
 */

?>

	</div><!-- #content -->

	<div class="resp-footer">
    <div class="resp-footer__ux">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/PRODUCT_PAGE/responsive/iconosugerencia.png" alt="Ayúdanos a mejorar tu experiencia">
      <span>Ayudanos a mejorar tu experiencia &rarr;</span>
    </div>
    <ul class="info-panel">
      <li class="info-panel wrapper">
        <h2 class="info-panel heading"><span class="info-panel icon"></span>Acerca de nosotros</h2>
        <div class="info-panel dropdown">
          <a href="" class="footer__usLink">Acerca de Graphic City</a>
          <a href="" class="footer__usLink">Términos y condiciones</a>
          <a href="" class="footer__usLink">Servicios</a>
        </div>
      </li>

      <li class="info-panel wrapper">
        <h2 class="info-panel heading"><span class="info-panel icon"></span>Contacto</h2>
        <div class="info-panel dropdown">
          <p>Carrera 27. No. 11-72</p>
          <p>Ricaurte - Bogotá - Colombia</p>
          <p>contacto@graphic-city.co</p>
          <p>ventas@graphic-city-com.co</p>
          <p>(+51)5604267 / +(51)2015563</p>
          <p>Lun a Vie, 9:00AM a 6:00PM</p>
          <p>Sáb, 9:00AM a 4:00PM</p>
        </div>
      </li>

      <li class="info-panel wrapper">
        <h2 class="info-panel heading"><span class="info-panel icon"></span>Métodos de pago</h2>
        <div class="info-panel dropdown">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/FOOTER/METODOS DE PAGO.png" alt="Métodos de pago">
        </div>
      </li>
  
    </ul>

    <div class="resp-footer__copy">
      <div class="resp-footer__social">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/PRODUCT_PAGE/responsive/Fb social footer.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/PRODUCT_PAGE/responsive/Boton ig footer.png" alt="">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/PRODUCT_PAGE/responsive/Boton tw footer.png" alt="">
      </div>
      <span>&copy; Graphic City 2020 - Todos los derechos reservados</span>
    </div>
</div>

	<footer class="footer" style="background-image: url('<?php bloginfo('template_directory'); ?>/assets/FOOTER/FOOTER-49.png');">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">
          <div class="footer__us">
            <span class="footer__usTitle">Nosotros</span>
            <a href="" class="footer__usLink">Acerca de Graphic City</a>
            <a href="" class="footer__usLink">Términos y condiciones</a>
            <a href="" class="footer__usLink">Servicios</a>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer__contact">
            <div class="footer__contactElements">
              <span class="footer__contactTitle">Contacto</span>
              <span class="footer__contactElement">Carrera 27. No. 11-72</span>
              <span class="footer__contactElement">Ricaurte - Bogotá - Colombia</span>
              <span class="footer__contactElement">contacto@graphic-city.co</span>
              <span class="footer__contactElement">ventas@graphic-city-com.co</span>
              <span class="footer__contactElement">(+51)5604267 / +(51)2015563</span>
              <span class="footer__contactElement">Lun a Vie, 9:00AM a 6:00PM</span>
              <span class="footer__contactElement">Sáb, 9:00AM a 4:00PM</span>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer__payment">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/FOOTER/METODOS DE PAGO.png" alt="Métodos de pago">
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer__social">
            <span class="footer__socialHeading">Síguenos en:</span>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/FOOTER/INACTIVE FACEBOOK.png" alt="Ícono de Facebook" class="footer__socialIcon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/FOOTER/INACTIVE IG.png" alt="Ícono de Instagram" class="footer__socialIcon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/FOOTER/INACTIVE TWITTER.png" alt="Ícono de Twitter" class="footer__socialIcon">
          </div>
        </div>
      </div>
    </div>
  </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
