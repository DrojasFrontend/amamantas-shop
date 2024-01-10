<header class="header">
  <div class="container">
    <div class="header__wrapper">
      <div class="logo">
        <?php 
          $logo = '1';
          $args = array(
            'logo' => $logo
          );
          get_template_part('templates/parts/layout/logo/logo', null , $args); 
        ?>
      </div>
      <div class="search">
        <?php get_template_part('templates/parts/search/product-search'); ?>
      </div>
      <div class="translate">
        Traducción
      </div>
    </div>
  </div>
</header>