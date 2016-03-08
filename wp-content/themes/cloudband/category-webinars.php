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
					<div class="row">
					<div class="post-content webinars">
						<div class="col-md-2 w-title">
							<p><?php the_field('mashup', $post_id, true); ?></p>
						</div>
						<div class="col-md-5">
							<p><?php the_field('title', $post_id, true); ?></p>
						</div>
						<div class="col-md-2">
							<p><?php the_field('webinar_date', $post_id, true); ?></p>
						</div>
						<div class="col-md-3">
							<p><a href="<?php the_field('link', $post_id, true);?>" class="btn btn-default btn-lg no-margin" target="_blank">Launch Presentation</a></p>
						</div>
					</div><!--post-content-->
					</div><!--row--><br />
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