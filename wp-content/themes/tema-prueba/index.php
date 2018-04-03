<?php get_header(); ?>

<style media="screen">

</style>
<div id="global-container" class="container-fluid">
	<!-- Esto no me interesa  --><br><br><br>
	<header id="main-header" >
		<!-- <h1 class="site-title text-white"><?php bloginfo('name') ?></h1> -->
		<!-- <h2 class="site-description"><?php bloginfo('description') ?></h2> -->
		<!-- <img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" /> -->

	</header><!-- /#main-header -->
</div>
	<!-- <section class="bg-white fullwidth">
		<?php if( have_posts() ) : while( have_posts() ): the_post(); ?>
			<article class="ml-5 post resume">
								<header class="post-title">
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<small class="meta"><?php the_time( get_option('date_format')); ?> &bull; <a href=""><?php the_category(', '); ?></a></small>
								</header>
								<div class="post-content">
									<?php the_excerpt();  ?>
									<a href="<?php the_permalink(); ?>" class="readmore"><?php _e('Seguir leyendo &rarr;','apk'); ?></a>
								</div>
							</article>
						<?php endwhile; endif;  ?>

<?php if( get_next_posts_link() || get_previous_posts_link() ) { ?>
							<div class="posts-nav cf">
								<a href="" ></a>
								<?php next_posts_link(__('&larr; Previos', 'apk') ); ?>
								<?php previous_posts_link(__('Recientes &rarr;', 'apk') ); ?>
							</div>
<?php  } ?>
	</section> -->

	<?php get_sidebar(); ?>
	<?php get_footer(); ?>
