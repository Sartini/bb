 

	<div id="primary" class="site-content">
		<div id="content" role="main">
					<?php if ( have_posts() ) : ?>

						<?php /* Inicio do Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', get_post_format() ); ?>
						<?php endwhile; ?>

						 

					<?php else : ?>

						<article id="post-0" class="post no-results not-found">
						 
						<header class="entry-header">
							<h1 class="entry-title"><?php _e( 'Nothing Found', 'bb' ); ?></h1>
						</header>

						<div class="entry-content">
							<p><?php _e( 'Não há conteúdo para ser exibido', 'bb' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- .entry-content -->
					 

						</article><!-- #post-0 -->

					<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->


 