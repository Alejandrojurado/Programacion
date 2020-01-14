<!--Es la plantilla que WordPress carga por defecto como pagina de inicio.ESta especialmente pendado para que sea un listado de post, es decir, la portada de un blog!-->

<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<!-- Contenido de página de inicio -->
<?php if ( have_posts() ) : the_post(); ?>
  <section>
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?>
  </section>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>