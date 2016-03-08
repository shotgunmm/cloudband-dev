<?php
/**
 * The template for displaying Author archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
get_header(); ?>
<section id="pagetitle" class="sub">
    <div class="wrapper ">
    	<div class="row">
      <div class="col-md-6 col-sm-6">
        <h2>
			<?php
						/*
						 * Queue the first post, that way we know what author
						 * we're dealing with (if that is the case).
						 *
						 * We reset this later so we can run the loop properly
						 * with a call to rewind_posts().
						 */
						the_post();

						printf( __( 'All posts by %s', 'twentyfourteen' ), get_the_author() );
			  ?>
		</h2>
      </div><!--/col-md-6 -->
		<?php if(function_exists('wordpress_breadcrumbs')) wordpress_breadcrumbs(); ?>
	 <!--/col-md-6 -->
      </div>
    </div><!-- /wrapper -->
  </section>
    
  <section id="main-content">
    <div class="wrapper">
      <div class="row subpages">
         <div class="col-md-12 common">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="post-content">
						<h3><?php the_title(); ?></h3>
						<p>
							<?php 
								$content = get_the_content(); 
								echo substr(strip_tags($content), 0, 380) . '...'; 
							?>
							<a href="<?php the_permalink(); ?>">Read More</a>
						</p>
					</div>
					<?php endwhile;  ?>
						<?php twentyfourteen_paging_nav(); ?>
					<?php else: endif; ?>
         </div><!-- /col-md-12 -->
      </div> <!-- /row -->
    </div> <!--/ wrapper -->
  </section>
<?php
	get_footer();
?>
