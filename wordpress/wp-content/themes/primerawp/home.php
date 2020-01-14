<!--Sera la plantilla que mostrara WordPress en caso de tener activa la opcion de mostrar pagina estatica como pagina de inicio.este archivo esta pensado en caso en los que la pagina de inicio es una pagina estatica como puede ser la pagina de unicio de site corporativo!-->

<?php get_header(); ?>

<?php if (have_posts()):?>	
	
	<section>
		<?php while(have_posts()):the_post(); ?>
		<article>
			<!--Archivo de cabezera global de WordPress!-->
			<header>
				<h1><?php the_title(); ?></h1>
    			<time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('j F, Y'); ?></time>
				
				
				<h2>Mi header de seccion</h2>

			</header>
			   <?php the_excerpt(); ?>
		<!--Archivo de footer global de Wordpress!-->
			<footer>
				<address>Por <?php the_author_posts_link() ?></address>
								
				
				<small>mi footer de seccion</small>
			
			</footer>
		
		</article>		
	 <?php endwhile; ?>
	 <div class="pagination">
	 	<span class="in-left"><?php next_post_link('« Entrada antiguas');?></span>
	 	<span class="in-right"><?php previus_posts_link('Entrada más recientes » ');?> </span>
	 </div>
	
	</section>
<?php else:?>
	<p><?php_e('UPS!,no hay entradas');?></p>
<?php endif; ?>
<!-- Archivo de barra lateral por defecto !-->

<?php get_sidebar();?>







