<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>






			<div class="row-fluid">
			        <div class="span3">
				          <div class="well sidebar-nav">
					            <ul class="nav nav-list">
						              <li class="nav-header">Sidebar</li>
						              <li class="active"><a href="#">Link</a></li>
						              <li><a href="#">Link</a></li>
						              <li class="nav-header">Sidebar</li>
						              <li><a href="#">Link</a></li>
						              <li class="nav-header">Sidebar</li>
						              <li><a href="#">Link</a></li>
					            </ul>
				          </div><!--/.well -->
			        </div><!--/span-->
			        
			        <div class="span9">
			          <div class="hero-unit">


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


			            <h1>Hello, world!</h1>
			            <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
			            <p><a href="#" class="btn btn-primary btn-large">Learn more &raquo;</a></p>
			          </div>
			          <div class="row-fluid">
			            <div class="span4">
			              <h2>Heading</h2>
			              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			              <p><a class="btn" href="#">View details &raquo;</a></p>
			            </div><!--/span-->
			            <div class="span4">
			              <h2>Heading</h2>
			              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			              <p><a class="btn" href="#">View details &raquo;</a></p>
			            </div><!--/span-->
			            <div class="span4">
			              <h2>Heading</h2>
			              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			              <p><a class="btn" href="#">View details &raquo;</a></p>
			            </div><!--/span-->
			          </div><!--/row-->


			          <div class="row-fluid">
			            <div class="span4">
			              <h2>Heading</h2>
			              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			              <p><a class="btn" href="#">View details &raquo;</a></p>
			            </div><!--/span-->
			            <div class="span4">
			              <h2>Heading</h2>
			              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			              <p><a class="btn" href="#">View details &raquo;</a></p>
			            </div><!--/span-->
			            <div class="span4">
			              <h2>Heading</h2>
			              <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
			              <p><a class="btn" href="#">View details &raquo;</a></p>
			            </div><!--/span-->
			          </div><!--/row-->
	        	</div><!--/span-->
	        </div><!-- row fluid -->


	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>