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
         <div class="col-md-12 common">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<div class="post-content">
						<h3 class="blog-title"><a href="<?php the_field('add_link', $post_id, true); ?>"><?php the_title(); ?></a></h3>
						<p>
							<?php the_field('add_summary', $post_id, true); ?>
							<!--a class="btn btn-default no-margin" href="<?php the_field('add_link', $post_id, true); ?>">Read More</a-->
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