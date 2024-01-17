<footer class="footer">
  <div class="footer__wrapper">
    <div class="footer__grid">
      <div class="footer__email">
        <p>Obtén un cupón</p>
        <p>de 10% dcto</p>
      </div>
      <div class="footer__info">
        <?php if ( is_active_sidebar( 'footer_sidebar' ) ) : ?>
          <?php dynamic_sidebar( 'footer_sidebar' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="footer__copyright">
    <div class="container">
      <p>Amamantas 2024 | Todos los derechos reservados</p>
    </div>
  </div>
</footer><!-- #colophon -->