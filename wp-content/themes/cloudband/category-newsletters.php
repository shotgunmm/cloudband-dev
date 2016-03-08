<?php
/**
 * The template for displaying Category pages
 */
get_header(); ?>
<section id="pagetitle" class="sub">
    <div class="wrapper ">
    	<div class="row">
      <div class="col-md-6 col-sm-6">
        <h2><?php single_cat_title(); ?></h2>
      </div><!--/col-md-6 -->
		<?php if(function_exists('wordpress_breadcrumbs')) wordpress_breadcrumbs(); ?>
	 <!--/col-md-6 -->
      </div>
    </div><!-- /wrapper -->
  </section>
    
  <section id="main-content">
    <div class="wrapper">
      <div class="row subpages">
         <div class="col-md-4 common">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="post-content newsletters">
						<h3><a target="_blank" href="<?php the_field('link', $post_id, true); ?>"><?php the_title(); ?></a></h3>
						
							<!--?php the_field('add_short_summary', $post_id, true); ?-->
							
						<!--a target="_blank" class="btn btn-default btn-lg" href="<?php the_field('add_link', $post_id, true); ?>">Download</a-->
          
					</div>
          <?php endwhile;  ?>
            <?php else: endif; ?>
					</div><!-- /col-md-4 -->
						<?php twentyfourteen_paging_nav(); ?>
					
          <div class="col-md-8">
<?php query_posts( 'category_name=newsletters&posts_per_page=1' ); ?>
<?php while ( have_posts() ) : the_post(); ?>
 <h3>Our Current Newsletter - <?php the_title(); ?></h3>
<?php the_content(); ?>
<?php endwhile; ?>
         </div><!-- /col-md-8 -->
      </div> <!-- /row -->
    </div> <!--/ wrapper -->
  </section>
<?php
	get_footer();
?>