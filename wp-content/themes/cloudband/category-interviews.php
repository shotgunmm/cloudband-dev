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
					<div class="post-content interviews">
						<h3><?php the_title(); ?></h3>
						<!--p>Company Logo : </p-->
                                                 
                                                <!--p>Video : </p-->
                                               <?php the_field('add_video_embed', $post_id, true); ?>
                                                <p><img src="<?php the_field('add__company_logo', $post_id, true); ?>" class="wrap-text"><?php the_field('add_interview_text', $post_id, true); ?></p>
                                                 <p><strong><?php the_field('add_interviewee_name', $post_id, true); ?></strong></p>
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